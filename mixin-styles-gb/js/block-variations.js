// Register new block variations

wp.blocks.registerBlockVariation (
  'core/template-part',
  {
    name: 'site-header',
    title: 'Site Header',
    attributes: {
      align: 'full',
      tagName: 'header',
      className: 'header header--main'
    }
  }
);

wp.blocks.registerBlockVariation (
  'core/template-part',
  {
    name: 'site-footer',
    title: 'Site Footer',
    attributes: {
      align: 'full',
      tagName: 'footer',
      className: 'footer'
    }
  }
);
