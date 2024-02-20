/* Block styles */

wp.domReady( () => {

	wp.blocks.registerBlockStyle( 'core/column', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'card',
			label: 'Column- Card Style',
		}
	] );

	wp.blocks.registerBlockStyle( 'core/columns', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'content-sidebar',
			label: 'Posts- Content, Sidebar',
		},
		{
			name: 'sidebar-content',
			label: 'Posts- Sidebar, Content',
		}
	] );

	wp.blocks.registerBlockStyle( 'core/cover', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'rounded',
			label: 'Rounded',
		},
		{
			name: 'rounded-full',
			label: 'Rounded- Full Height',
		}
	] );

	wp.blocks.registerBlockStyle( 'core/group', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'card',
			label: 'Card Style',
		},
		{
			name: 'mxs-header',
			label: 'Mixin Styles Header',
		},
		{
			name: 'flex-horizontal',
			label: 'Flex Container- Horizontal',
		},
		{
			name: 'entry-meta',
			label: 'Entry Meta- Horizontal',
		}
	] );

	wp.blocks.registerBlockStyle( 'core/navigation', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'tabs',
			label: 'Tabs',
		},
		{
			name: 'wide-tab',
			label: 'Wide Tab',
		}
	] );

	wp.blocks.registerBlockStyle( 'core/search', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'search-header',
			label: 'Search- Header',
		}
	] );
	
	wp.blocks.registerBlockStyle( 'core/social-links', [
		{
			name: 'semitransparent-light',
			label: 'Semitransparent Light',
		},
		{
			name: 'semitransparent-dark',
			label: 'Semitransparent Dark',
		}
	] );
	
} );
