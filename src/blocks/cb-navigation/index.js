import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	SelectControl,
	RangeControl,
	RadioControl,
	Spinner,
	Placeholder,
} from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { store as coreStore } from '@wordpress/core-data';
import { __ } from '@wordpress/i18n';
import ServerSideRender from '@wordpress/server-side-render';
import metadata from './block.json';
import './style.scss';
import './editor.scss';

registerBlockType( metadata.name, {
	edit: ( { attributes, setAttributes } ) => {
		const { menuId, itemSpacing, orientation } = attributes;

		const blockProps = useBlockProps();

		// Fetch all navigation menus (classic menus).
		const menus = useSelect( ( select ) => {
			return select( coreStore ).getMenus( { per_page: -1 } );
		}, [] );

		// Also fetch wp_navigation posts (block-based menus).
		const navMenus = useSelect( ( select ) => {
			return select( coreStore ).getEntityRecords(
				'postType',
				'wp_navigation',
				{ per_page: -1, status: 'publish' }
			);
		}, [] );

		const isLoading = menus === null || navMenus === null;

		// Build menu options for the dropdown.
		const menuOptions = [
			{ label: __( '— Select a Menu —', 'cb-listing-starter' ), value: 0 },
		];

		if ( menus ) {
			menus.forEach( ( menu ) => {
				menuOptions.push( {
					label: menu.name + __( ' (Classic)', 'cb-listing-starter' ),
					value: menu.id,
				} );
			} );
		}

		if ( navMenus ) {
			navMenus.forEach( ( nav ) => {
				menuOptions.push( {
					label:
						( nav.title?.rendered || nav.title?.raw || __( 'Untitled', 'cb-listing-starter' ) ) +
						__( ' (Block)', 'cb-listing-starter' ),
					value: -nav.id, // Negative ID to distinguish from classic menus.
				} );
			} );
		}

		return (
			<div { ...blockProps }>
				<InspectorControls>
					<PanelBody
						title={ __( 'Menu Settings', 'cb-listing-starter' ) }
						initialOpen={ true }
					>
						{ isLoading ? (
							<Spinner />
						) : (
							<SelectControl
								label={ __(
									'Select Menu',
									'cb-listing-starter'
								) }
								value={ menuId }
								options={ menuOptions }
								onChange={ ( value ) =>
									setAttributes( {
										menuId: parseInt( value, 10 ),
									} )
								}
							/>
						) }
						<RadioControl
							label={ __(
								'Orientation',
								'cb-listing-starter'
							) }
							selected={ orientation }
							options={ [
								{
									label: __( 'Horizontal', 'cb-listing-starter' ),
									value: 'horizontal',
								},
								{
									label: __( 'Vertical', 'cb-listing-starter' ),
									value: 'vertical',
								},
							] }
							onChange={ ( value ) =>
								setAttributes( { orientation: value } )
							}
						/>
					</PanelBody>
					<PanelBody
						title={ __( 'Spacing', 'cb-listing-starter' ) }
						initialOpen={ false }
					>
						<RangeControl
							label={ __(
								'Space Between Items (px)',
								'cb-listing-starter'
							) }
							value={ parseInt( itemSpacing, 10 ) || 20 }
							onChange={ ( value ) =>
								setAttributes( {
									itemSpacing: value + 'px',
								} )
							}
							min={ 0 }
							max={ 80 }
							step={ 2 }
						/>
					</PanelBody>
				</InspectorControls>

				{ ! menuId ? (
					<Placeholder
						icon="menu"
						label={ __( 'CB Navigation', 'cb-listing-starter' ) }
						instructions={ __(
							'Select a menu from the block settings to display navigation links.',
							'cb-listing-starter'
						) }
					>
						{ isLoading ? (
							<Spinner />
						) : (
							<SelectControl
								value={ menuId }
								options={ menuOptions }
								onChange={ ( value ) =>
									setAttributes( {
										menuId: parseInt( value, 10 ),
									} )
								}
							/>
						) }
					</Placeholder>
				) : (
					<ServerSideRender
						block={ metadata.name }
						attributes={ attributes }
					/>
				) }
			</div>
		);
	},

	save: () => null, // Dynamic block — rendered by PHP.
} );
