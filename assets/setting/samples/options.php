<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'moowprogrid';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Moo Grids',
  'menu_slug'  => 'moo-grids',
  'framework_title'=> 'Moo Porducts Grid Options__<small>Md Zubayer Hasan</small>',
) );

//
// Create a section
//

//
// ****************************Grid 1 Fields Start*********************
//
CSF::createSection( $prefix, array(
  'id'    => 'grid_one',
  'title' => 'Moo Grid One',
  'icon'  => 'fa fa-th',

) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'grid_one',
  'title'       => esc_html__( 'Grid One Settings', 'moowprogrid' ),
  
  'icon'        => 'fa fa-cogs',
  'fields'      => array(
    array(
      'type'    => 'heading',
      'content' => esc_html__('Grid One Shortcode ~ [Moo_Grid_One]','moowprogrid'),
    ),
    array(
      'id'          => 'moo-grid-one-setting-columns',
      'type'        => 'button_set',
      'title'    => esc_html__('Grid Items Per Row', 'moowprogrid'),
      'options' => array(
        '4' => 'Grid 4 Columns', 
        '3' => 'Grid 3 Columns', 
        ), 
        'default' => '4',
        ),
        array(
          'id'		=>'moo-grid-one-show-per-page',
          'type'		=>'text',			
          'title'		=>esc_html__( 'Show Per Page', 'moowprogrid' ),               
          'default'	=>'8',
      ),
      array(
        'id'		=>'moo-grid-one-title-langth',
        'type'		=>'text',			
        'title'		=>esc_html__( 'Product Title Langth', 'moowprogrid' ),
        'subtitle'		=>esc_html__( 'Add Product Title length', 'moowprogrid' ),
        'default'	=>'5',
    ),
    array(
      'id'       => 'moo-grid-one-product-type',
      'type'     => 'select',
      'title'		=>esc_html__( 'Product Type', 'moowprogrid' ),
      'options'  => array(
          '1' => 'Recent Products',
          '2' => 'Futures Products',
          '3' => 'Best Selling Products',
          '4' => 'Most Comments Products',
      ),
      'default'  => '1',
  ),
  array(
    'id'			  =>'moo-grid-one-setting-price',
    'type'		=>'switcher',	
    'title'			=>esc_html__( 'Price Show/Hide', 'moowprogrid' ),
    'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
       'default'  => true,
),
array(
  'id'			=>'moo-grid-one-setting-ratting',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Ratting Show/Hide', 'moowprogrid' ),
  'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
     'default'  => true,
),	
array(
  'type'    => 'subheading',
  'content' => 'Paginations Options',
),
array(
  'id'			=>'moo-grid-one-setting-paginations',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Paginations Enable/Disable', 'moowprogrid' ),
  'label' => esc_html__('Look, it\'s Disable!', 'moowprogrid'),
),
array(
  'id'       => 'moo-grid-one-setting-alignment',
  'type'     => 'button_set',
  'title'    => esc_html__('paginations Alignment', 'moowprogrid'),
  'options' => array(
      'left' => 'Left', 
      'center' => 'Center', 
      'right' => 'Right'
    ), 
  'default' => 'center',
  'dependency'  => array( 'moo-grid-one-setting-paginations', '==', 'true', '', 'visible' ),
  ),
  array(
    'id'			  =>'moo-grid-one-setting-pagination-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers'),
    'dependency'  => array( 'moo-grid-one-setting-paginations', '==', 'true', '', 'visible' ),
),
  array(
    'id'			  =>'moo-grid-one-setting-pagination-hover-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Hover Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers:hover'),
    'dependency'  => array( 'moo-grid-one-setting-paginations', '==', 'true', '', 'visible' ),
  ),
 ),
));

CSF::createSection($prefix, array(
  'parent'      => 'grid_one',
  'title'		=>esc_html__( 'Grid One Style', 'moowprogrid' ),  
  'icon'        => 'fa fa-asterisk',
  'fields'	=>array(array(
      'id'			  =>'moo-grid-one-style-background',
      'type'		=>'background',	
      'title'			=>esc_html__( 'Grid Items Background', 'moowprogrid' ),
      'subtitle' => esc_html__('Grid Items Background with image, color, etc.', 'moowprogrid'),
      'output'    => array('.moo-card-1'),	
      'default'  => array(
          'background-color' => '#FAFAFA',
      ),		
      ),
      array(
        'id'			  =>'moo-grid-one-style-background-hover',
        'type'		=>'background',	
        'title'			=>esc_html__( 'Grid Items Background Hover', 'moowprogrid' ),	
        'output'    => array('.moo-card-1:hover'),	
        'default'  => array(
            'background-color' => '#FAFAFA',
        )	
        ),
        array(
          'id'			  =>'moo-grid-one-style-height',
          'type'		=>'text',	
          'title'			=>esc_html__( 'Thumbnail Image Height', 'moowprogrid' ),
          'default'  => '300px',
      ),
      array(
        'id'			  =>'moo-grid-one-style-title-typography',
        'type'        => 'typography', 
        'title'       => esc_html__('Title Typography', 'moowprogrid'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('.moo-title-1 a'),
        'units'       =>'px',
          'default'     => array(
            'color'       => '#333', 
            'font-style'  => '700', 
            'font-family' => 'Abel', 
            'google'      => true,
            'font-size'   => '15px', 
            'line-height' => ''
        ),
    ),
    array(
      'id'			  =>'moo-grid-one-style-title-hover-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Title Hover Color', 'moowprogrid' ),
      'default'  => '#83B735',
      'output'      => array('.moo-title-1 a:hover'),
  ),
  array(
    'id'			  =>'moo-grid-one-style-price-typography',
    'type'        => 'typography', 
    'title'       => esc_html__('Price Typography', 'moowprogrid'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.moo-price-1'),
    'units'       =>'px',
      'default'     => array(
        'color'       => '#333', 
        'font-style'  => '700', 
        'font-family' => 'Abel', 
        'google'      => true,
        'font-size'   => '15px', 
        'line-height' => ''
    ),
),
array(
  'id'			  =>'moo-grid-one-style-price-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Price Hover Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.moo-price-1:hover'),
),
array(
  'id'			  =>'moo-grid-one-style-ratting-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Ratting Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.star-rating span'),
),
array(
  'id'             				=> 'moo-grid-one-style-price-margin',
  'type'           			=> 'spacing',
  'output'         => array('.moo-rating-1'),
  'mode'           => 'margin',
  'units'          => array('em', 'px'),
  'units_extended' => 'false',
  'title'			=>esc_html__( 'Price Margin', 'moowprogrid' ),
  'default'            => array(
      'margin-top'     => '1px', 
      'margin-right'   => '1px', 
      'margin-bottom'  => '1px', 
      'margin-left'    => '1px',
      'units'          => 'px', 
  )
  ),
  array(
    'id'             => 'moo-grid-one-style-price-padding',
    'type'           => 'spacing',
    'output'         => array('.moo-rating-1'),
    'mode'           => 'padding',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'			=>esc_html__( 'Price Padding', 'moowprogrid' ),
        'default'            => array(
            'margin-top'     => '1px', 
            'margin-right'   => '1px', 
            'margin-bottom'  => '1px', 
            'margin-left'    => '1px',
            'units'          => 'px', 
        )
    ),
    array(
      'id'			  =>'moo-grid-one-style-add-to-cart-Typography',
      'type'        => 'typography', 
      'title'       => esc_html__('Add To Cart Typography', 'moowprogrid'),
      'google'      => true, 
      'font-backup' => true,
      'output'         => array('.moo-add-to-cart-1'),
      'units'       =>'px',
        'default'     => array(
          'color'       => '#333', 
          'font-style'  => '700', 
          'font-family' => 'Abel', 
          'google'      => true,
          'font-size'   => '15px', 
          'line-height' => '40'
      ),
  ),
  array(
    'id'			  =>'moo-grid-one-style-add-to-cart-text-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Add To Cart Text Hover Color', 'moowprogrid' ),
    'default'  =>'#1e73be', 
    'output'         => array('.moo-add-to-cart-1:hover'),
),
array(
  'id'			  =>'moo-grid-one-style-add-to-cart-background',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background', 'moowprogrid' ),
  'default'  =>'#1e73be', 
  'output'         => array('.moo-add-to-cart-1'),
),
array(
  'id'			  =>'moo-grid-one-style-add-to-cart-background-hover',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background Hover', 'moowprogrid' ),
  'default'  =>'#1e73be', 
  'output'         => array('.moo-add-to-cart-1:hover'),
),
array( 
  'id'       => 'moo-grid-one-style-add-to-cart-border',
  'type'     => 'border',
  'title'			=>esc_html__( 'Add To Cart Button Border ', 'moowprogrid' ),       
  'output'   => array('.moo-add-to-cart-1'),
  'default'  => array(
      'border-color'  => '#1e73be', 
      'border-style'  => 'solid', 
      'border-top'    => '1px', 
      'border-right'  => '1px', 
      'border-bottom' => '1px', 
      'border-left'   => '1px'
  )
  ),
  array( 
    'id'       => 'moo-grid-one-style-add-to-cart-border-hover',
    'type'     => 'border',
    'title'			=>esc_html__( 'Add To Cart Button Border Hover ', 'moowprogrid' ),       
    'output'   => array('.moo-add-to-cart-1:hover'),
    'default'  => array(
        'border-color'  => '#1e73be', 
        'border-style'  => 'solid', 
        'border-top'    => '1px', 
        'border-right'  => '1px', 
        'border-bottom' => '1px', 
        'border-left'   => '1px'
    )
    ),
    array(
      'id'			  =>'moo-grid-one-style-favoite-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Favorite/Compare Color', 'moowprogrid' ),
      'default'  =>'#1e73be', 
      'output'   => array('.moo-icon-1 i'),
  ),
  array(
    'id'			  =>'moo-grid-one-style-favoite-color-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Favorite/Compare Color Hover', 'moowprogrid' ),
    'default'  =>'#1e73be', 
    'output'   => array('.moo-icon-1 i:hover'),
),
),	
));
// ****************************Grid 1 Fields end*********************



// ****************************Grid 2 Fields Start*********************
//
// Grid 2 Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'grid_two',
  'title' => 'Moo Grid Two',
  'icon'  => 'fa fa-th',

) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'grid_two',
  'title'       => esc_html__( 'Grid two Settings', 'moowprogrid' ),
  'icon'        => 'fa fa-cogs',
  'fields'      => array(
    array(
      'type'    => 'heading',
      'content' => esc_html__('Grid One Shortcode ~ [Moo_Grid_Two]','moowprogrid'),
    ),
    array(
      'id'          => 'moo-grid-two-setting-columns',
      'type'        => 'button_set',
      'title'    => esc_html__('Grid Items Per Row', 'moowprogrid'),
      'options' => array(
        '4' => 'Grid 4 Columns', 
        '3' => 'Grid 3 Columns', 
        ), 
        'default' => '4',
        ),
        array(
          'id'		=>'moo-grid-two-show-per-page',
          'type'		=>'text',			
          'title'		=>esc_html__( 'Show Per Page', 'moowprogrid' ),               
          'default'	=>'8',
      ),
      array(
        'id'		=>'moo-grid-two-title-langth',
        'type'		=>'text',			
        'title'		=>esc_html__( 'Product Title Langth', 'moowprogrid' ),
        'subtitle'		=>esc_html__( 'Add Product Title length', 'moowprogrid' ),
        'default'	=>'5',
    ),
    array(
      'id'       => 'moo-grid-two-product-type',
      'type'     => 'select',
      'title'		=>esc_html__( 'Product Type', 'moowprogrid' ),
      'options'  => array(
          '1' => 'Recent Products',
          '2' => 'Futures Products',
          '3' => 'Best Selling Products',
          '4' => 'Most Comments Products',
      ),
      'default'  => '2',
  ),
  array(
    'id'			  =>'moo-grid-two-setting-price',
    'type'		=>'switcher',	
    'title'			=>esc_html__( 'Price Show/Hide', 'moowprogrid' ),
    'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
       'default'  => true,
),
array(
  'id'			=>'moo-grid-two-setting-ratting',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Ratting Show/Hide', 'moowprogrid' ),
  'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
     'default'  => true,
),	


array(
  'type'    => 'subheading',
  'content' => 'Paginations Options',
),
array(
  'id'			=>'moo-grid-two-setting-paginations',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Paginations Enable/Disable', 'moowprogrid' ),
  'label' => esc_html__('Look, it\'s Disable!', 'moowprogrid'),
),
array(
  'id'       => 'moo-grid-two-setting-alignment',
  'type'     => 'button_set',
  'title'    => esc_html__('paginations Alignment', 'moowprogrid'),
  'options' => array(
      'left' => 'Left', 
      'center' => 'Center', 
      'right' => 'Right'
    ), 
  'default' => 'center',
  'dependency'  => array( 'moo-grid-two-setting-paginations', '==', 'true', '', 'visible' ),
  ),
  array(
    'id'			  =>'moo-grid-two-setting-pagination-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers'),
    'dependency'  => array( 'moo-grid-two-setting-paginations', '==', 'true', '', 'visible' ),
),
  array(
    'id'			  =>'moo-grid-two-setting-pagination-hover-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Hover Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers:hover'),
    'dependency'  => array( 'moo-grid-two-setting-paginations', '==', 'true', '', 'visible' ),
  ),
 ),
));

CSF::createSection($prefix, array(
  'parent'      => 'grid_two',
  'title'		=>esc_html__( 'Grid two Style', 'moowprogrid' ),  
  'icon'        => 'fa fa-asterisk',
  'fields'	=>array(array(
      'id'			  =>'moo-grid-two-style-background',
      'type'		=>'background',	
      'title'			=>esc_html__( 'Grid Items Background', 'moowprogrid' ),
      'subtitle' => esc_html__('Grid Items Background with image, color, etc.', 'moowprogrid'),
      'output'    => array('.moo-card-2'),	
      'default'  => array(
          'background-color' => '#FAFAFA',
      ),		
      ),
      array(
        'id'			  =>'moo-grid-two-style-background-hover',
        'type'		=>'background',	
        'title'			=>esc_html__( 'Grid Items Background Hover', 'moowprogrid' ),	
        'output'    => array('.moo-card-2:hover'),	
        'default'  => array(
            'background-color' => '#FAFAFA',
        )	
        ),
        array(
          'id'			  =>'moo-grid-two-style-height',
          'type'		=>'text',	
          'title'			=>esc_html__( 'Thumbnail Image Height', 'moowprogrid' ),
          'default'  => '300px',
      ),
      array( 
        'id'       => 'moo-grid-two-style-image-border',
        'type'     => 'border',
        'title'    => __('Thumbnail Image Border', 'moowprogrid'),    
        'output'   => array('a.card-img-top img'),
        'default'  => array(
            'border-color'  => '#1e73be', 
            'border-style'  => 'solid', 
            'border-top'    => '1px', 
            'border-right'  => '1px', 
            'border-bottom' => '1px', 
            'border-left'   => '1px'
        )
        ),
        array( 
          'id'       => 'moo-grid-two-style-image-border-hover',
          'type'     => 'border',
          'title'    => __('Thumbnail Image Border Hover', 'moowprogrid'),    
          'output'   => array('a.card-img-top:hover'),
          'default'  => array(
              'border-color'  => '#1e73be', 
              'border-style'  => 'solid', 
              'border-top'    => '1px', 
              'border-right'  => '1px', 
              'border-bottom' => '1px', 
              'border-left'   => '1px'
          )
          ),
      array(
        'id'			  =>'moo-grid-two-style-title-typography',
        'type'        => 'typography', 
        'title'       => esc_html__('Title Typography', 'moowprogrid'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('.moo-title-2 a'),
        'units'       =>'px',
          'default'     => array(
            'color'       => '#333', 
            'font-style'  => '700', 
            'font-family' => 'Abel', 
            'google'      => true,
            'font-size'   => '25px', 
            'line-height' => ''
        ),
    ),
    array(
      'id'			  =>'moo-grid-two-style-title-hover-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Title Hover Color', 'moowprogrid' ),
      'default'  => '#83B735',
      'output'      => array('.moo-title-2 a:hover'),
  ),
  array(
    'id'			  =>'moo-grid-two-style-price-typography',
    'type'        => 'typography', 
    'title'       => esc_html__('Price Typography', 'moowprogrid'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.moo-price-2'),
    'units'       =>'px',
      'default'     => array(
        'color'       => '#333', 
        'font-style'  => '700', 
        'font-family' => 'Abel', 
        'google'      => true,
        'font-size'   => '25px', 
        'line-height' => ''
    ),
),
array(
  'id'			  =>'moo-grid-two-style-price-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Price Hover Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.moo-price-2:hover'),
),
array(
  'id'			  =>'moo-grid-two-style-ratting-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Ratting Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.star-rating span'),
),
array(
  'id'             				=> 'moo-grid-two-style-price-margin',
  'type'           			=> 'spacing',
  'output'         => array('.moo-rating-2'),
  'mode'           => 'margin',
  'units'          => array('em', 'px'),
  'units_extended' => 'false',
  'title'			=>esc_html__( 'Price Margin', 'moowprogrid' ),
  'default'            => array(
      'margin-top'     => '1px', 
      'margin-right'   => '1px', 
      'margin-bottom'  => '1px', 
      'margin-left'    => '1px',
      'units'          => 'px', 
  )
  ),
  array(
    'id'             => 'moo-grid-two-style-price-padding',
    'type'           => 'spacing',
    'output'         => array('.moo-rating-2'),
    'mode'           => 'padding',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'			=>esc_html__( 'Price Padding', 'moowprogrid' ),
        'default'            => array(
            'margin-top'     => '1px', 
            'margin-right'   => '1px', 
            'margin-bottom'  => '1px', 
            'margin-left'    => '1px',
            'units'          => 'px', 
        )
    ),
    array(
      'id'			  =>'moo-grid-two-style-add-to-cart-Typography',
      'type'        => 'typography', 
      'title'       => esc_html__('Add To Cart Typography', 'moowprogrid'),
      'google'      => true, 
      'font-backup' => true,
      'output'         => array('.moo-add-to-cart-2'),
      'units'       =>'px',
        'default'     => array(
          'color'       => '#333', 
          'font-style'  => '700', 
          'font-family' => 'Abel', 
          'google'      => true,
          'font-size'   => '15px', 
          'line-height' => ''
      ),
  ),
  array(
    'id'			  =>'moo-grid-two-style-add-to-cart-text-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Add To Cart Text Hover Color', 'moowprogrid' ),
    'default'  =>'#2e73be', 
    'output'         => array('.moo-add-to-cart-2:hover'),
),
array(
  'id'			  =>'moo-grid-two-style-add-to-cart-background',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background', 'moowprogrid' ),
  'default'  =>'#2e73be', 
  'output'         => array('.moo-add-to-cart-2'),
),
array(
  'id'			  =>'moo-grid-two-style-add-to-cart-background-hover',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background Hover', 'moowprogrid' ),
  'default'  =>'#2e73be', 
  'output'         => array('.moo-add-to-cart-2:hover'),
),
array( 
  'id'       => 'moo-grid-two-style-add-to-cart-border',
  'type'     => 'border',
  'title'			=>esc_html__( 'Add To Cart Button Border ', 'moowprogrid' ),       
  'output'   => array('.moo-add-to-cart-2'),
  'default'  => array(
      'border-color'  => '#2e73be', 
      'border-style'  => 'solid', 
      'border-top'    => '1px', 
      'border-right'  => '1px', 
      'border-bottom' => '1px', 
      'border-left'   => '1px'
  )
  ),
  array( 
    'id'       => 'moo-grid-two-style-add-to-cart-border-hover',
    'type'     => 'border',
    'title'			=>esc_html__( 'Add To Cart Button Border Hover ', 'moowprogrid' ),       
    'output'   => array('.moo-add-to-cart-2:hover'),
    'default'  => array(
        'border-color'  => '#2e73be', 
        'border-style'  => 'solid', 
        'border-top'    => '1px', 
        'border-right'  => '1px', 
        'border-bottom' => '1px', 
        'border-left'   => '1px'
    )
    ),
    array(
      'id'			  =>'moo-grid-two-style-favoite-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Favorite/Compare Color', 'moowprogrid' ),
      'default'  =>'#2e73be', 
      'output'   => array('.moo-icon-2 i'),
  ),
  array(
    'id'			  =>'moo-grid-two-style-favoite-color-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Favorite/Compare Color Hover', 'moowprogrid' ),
    'default'  =>'#2e73be', 
    'output'   => array('.moo-icon-2 i:hover'),
),
),	
));

// ****************************Grid 2 Fields end***********************



// ****************************Grid 3 Fields start*********************

//
// Grid 3 Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'grid_three',
  'title' => 'Moo Grid three',
  'icon'  => 'fa fa-th',

) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'grid_three',
  'title'       => esc_html__( 'Grid three Settings', 'moowprogrid' ),
  'icon'        => 'fa fa-cogs',
  'fields'      => array(
    array(
      'type'    => 'heading',
      'content' => esc_html__('Grid three Shortcode ~ [Moo_Grid_Three]','moowprogrid'),
    ),
    array(
      'id'          => 'moo-grid-three-setting-columns',
      'type'        => 'button_set',
      'title'    => esc_html__('Grid Items Per Row', 'moowprogrid'),
      'options' => array(
        '4' => 'Grid 4 Columns', 
        '3' => 'Grid 3 Columns', 
        ), 
        'default' => '4',
        ),
        array(
          'id'		=>'moo-grid-three-show-per-page',
          'type'		=>'text',			
          'title'		=>esc_html__( 'Show Per Page', 'moowprogrid' ),               
          'default'	=>'8',
      ),
      array(
        'id'		=>'moo-grid-three-title-langth',
        'type'		=>'text',			
        'title'		=>esc_html__( 'Product Title Langth', 'moowprogrid' ),
        'subtitle'		=>esc_html__( 'Add Product Title length', 'moowprogrid' ),
        'default'	=>'5',
    ),
    array(
      'id'       => 'moo-grid-three-product-type',
      'type'     => 'select',
      'title'		=>esc_html__( 'Product Type', 'moowprogrid' ),
      'options'  => array(
          '1' => 'Recent Products',
          '2' => 'Futures Products',
          '3' => 'Best Selling Products',
          '4' => 'Most Comments Products',
      ),
      'default'  => '3',
  ),
  array(
    'id'			  =>'moo-grid-three-setting-price',
    'type'		=>'switcher',	
    'title'			=>esc_html__( 'Price Show/Hide', 'moowprogrid' ),
    'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
       'default'  => true,
),
array(
  'id'			=>'moo-grid-three-setting-ratting',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Ratting Show/Hide', 'moowprogrid' ),
  'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
     'default'  => true,
),	


array(
  'type'    => 'subheading',
  'content' => 'Paginations Options',
),
array(
  'id'			=>'moo-grid-three-setting-paginations',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Paginations Enable/Disable', 'moowprogrid' ),
  'label' => esc_html__('Look, it\'s Disable!', 'moowprogrid'),
),
array(
  'id'       => 'moo-grid-three-setting-alignment',
  'type'     => 'button_set',
  'title'    => esc_html__('paginations Alignment', 'moowprogrid'),
  'options' => array(
      'left' => 'Left', 
      'center' => 'Center', 
      'right' => 'Right'
    ), 
  'default' => 'center',
  'dependency'  => array( 'moo-grid-three-setting-paginations', '==', 'true', '', 'visible' ),
  ),
  array(
    'id'			  =>'moo-grid-three-setting-pagination-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers'),
    'dependency'  => array( 'moo-grid-three-setting-paginations', '==', 'true', '', 'visible' ),
),
  array(
    'id'			  =>'moo-grid-three-setting-pagination-hover-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Hover Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers:hover'),
    'dependency'  => array( 'moo-grid-three-setting-paginations', '==', 'true', '', 'visible' ),
  ),
 ),
));

CSF::createSection($prefix, array(
  'parent'      => 'grid_three',
  'title'		=>esc_html__( 'Grid three Style', 'moowprogrid' ),  
  'icon'        => 'fa fa-asterisk',
  'fields'	=>array(array(
      'id'			  =>'moo-grid-three-style-background',
      'type'		=>'background',	
      'title'			=>esc_html__( 'Grid Items Background', 'moowprogrid' ),
      'subtitle' => esc_html__('Grid Items Background with image, color, etc.', 'moowprogrid'),
      'output'    => array('.moo-card-3'),	
      'default'  => array(
          'background-color' => '#FAFAFA',
      ),		
      ),
      array(
        'id'			  =>'moo-grid-three-style-background-hover',
        'type'		=>'background',	
        'title'			=>esc_html__( 'Grid Items Background Hover', 'moowprogrid' ),	
        'output'    => array('.moo-card-3:hover'),	
        'default'  => array(
            'background-color' => '#FAFAFA',
        )	
        ),
        array(
          'id'			  =>'moo-grid-three-style-height',
          'type'		=>'text',	
          'title'			=>esc_html__( 'Thumbnail Image Height', 'moowprogrid' ),
          'default'  => '300px',
      ),
      array( 
        'id'       => 'moo-grid-three-style-image-border',
        'type'     => 'border',
        'title'    => __('Thumbnail Image Border', 'moowprogrid'),    
        'output'   => array('a.card-img-top'),
        'default'  => array(
            'border-color'  => '#1e73be', 
            'border-style'  => 'solid', 
            'border-top'    => '1px', 
            'border-right'  => '1px', 
            'border-bottom' => '1px', 
            'border-left'   => '1px'
        )
        ),
        array( 
          'id'       => 'moo-grid-three-style-image-border-hover',
          'type'     => 'border',
          'title'    => __('Thumbnail Image Border Hover', 'moowprogrid'),    
          'output'   => array('a.card-img-top:hover'),
          'default'  => array(
              'border-color'  => '#1e73be', 
              'border-style'  => 'solid', 
              'border-top'    => '1px', 
              'border-right'  => '1px', 
              'border-bottom' => '1px', 
              'border-left'   => '1px'
          )
          ),
      array(
        'id'			  =>'moo-grid-three-style-title-typography',
        'type'        => 'typography', 
        'title'       => esc_html__('Title Typography', 'moowprogrid'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('.moo-title-3 a'),
        'units'       =>'px',
          'default'     => array(
            'color'       => '#333', 
            'font-style'  => '700', 
            'font-family' => 'Abel', 
            'google'      => true,
            'font-size'   => '35px', 
            'line-height' => ''
        ),
    ),
    array(
      'id'			  =>'moo-grid-three-style-title-hover-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Title Hover Color', 'moowprogrid' ),
      'default'  => '#83B735',
      'output'      => array('.moo-title-3 a:hover'),
  ),
  array(
    'id'			  =>'moo-grid-three-style-price-typography',
    'type'        => 'typography', 
    'title'       => esc_html__('Price Typography', 'moowprogrid'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.moo-price-3'),
    'units'       =>'px',
      'default'     => array(
        'color'       => '#333', 
        'font-style'  => '700', 
        'font-family' => 'Abel', 
        'google'      => true,
        'font-size'   => '35px', 
        'line-height' => ''
    ),
),
array(
  'id'			  =>'moo-grid-three-style-price-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Price Hover Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.moo-price-3:hover'),
),
array(
  'id'			  =>'moo-grid-three-style-ratting-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Ratting Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.star-rating span'),
),
array(
  'id'             				=> 'moo-grid-three-style-price-margin',
  'type'           			=> 'spacing',
  'output'         => array('.moo-rating-3'),
  'mode'           => 'margin',
  'units'          => array('em', 'px'),
  'units_extended' => 'false',
  'title'			=>esc_html__( 'Price Margin', 'moowprogrid' ),
  'default'            => array(
      'margin-top'     => '1px', 
      'margin-right'   => '1px', 
      'margin-bottom'  => '1px', 
      'margin-left'    => '1px',
      'units'          => 'px', 
  )
  ),
  array(
    'id'             => 'moo-grid-three-style-price-padding',
    'type'           => 'spacing',
    'output'         => array('.moo-rating-3'),
    'mode'           => 'padding',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'			=>esc_html__( 'Price Padding', 'moowprogrid' ),
        'default'            => array(
            'margin-top'     => '1px', 
            'margin-right'   => '1px', 
            'margin-bottom'  => '1px', 
            'margin-left'    => '1px',
            'units'          => 'px', 
        )
    ),
    array(
      'id'			  =>'moo-grid-three-style-add-to-cart-Typography',
      'type'        => 'typography', 
      'title'       => esc_html__('Add To Cart Typography', 'moowprogrid'),
      'google'      => true, 
      'font-backup' => true,
      'output'         => array('.moo-add-to-cart-3'),
      'units'       =>'px',
        'default'     => array(
          'color'       => '#333', 
          'font-style'  => '700', 
          'font-family' => 'Abel', 
          'google'      => true,
          'font-size'   => '15px', 
          'line-height' => ''
      ),
  ),
  array(
    'id'			  =>'moo-grid-three-style-add-to-cart-text-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Add To Cart Text Hover Color', 'moowprogrid' ),
    'default'  =>'#3e73be', 
    'output'         => array('.moo-add-to-cart-3:hover'),
),
array(
  'id'			  =>'moo-grid-three-style-add-to-cart-background',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background', 'moowprogrid' ),
  'default'  =>'#3e73be', 
  'output'         => array('.moo-add-to-cart-3'),
),
array(
  'id'			  =>'moo-grid-three-style-add-to-cart-background-hover',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background Hover', 'moowprogrid' ),
  'default'  =>'#3e73be', 
  'output'         => array('.moo-add-to-cart-3:hover'),
),
array( 
  'id'       => 'moo-grid-three-style-add-to-cart-border',
  'type'     => 'border',
  'title'			=>esc_html__( 'Add To Cart Button Border ', 'moowprogrid' ),       
  'output'   => array('.moo-add-to-cart-3'),
  'default'  => array(
      'border-color'  => '#3e73be', 
      'border-style'  => 'solid', 
      'border-top'    => '1px', 
      'border-right'  => '1px', 
      'border-bottom' => '1px', 
      'border-left'   => '1px'
  )
  ),
  array( 
    'id'       => 'moo-grid-three-style-add-to-cart-border-hover',
    'type'     => 'border',
    'title'			=>esc_html__( 'Add To Cart Button Border Hover ', 'moowprogrid' ),       
    'output'   => array('.moo-add-to-cart-3:hover'),
    'default'  => array(
        'border-color'  => '#3e73be', 
        'border-style'  => 'solid', 
        'border-top'    => '1px', 
        'border-right'  => '1px', 
        'border-bottom' => '1px', 
        'border-left'   => '1px'
    )
    ),
    array(
      'id'			  =>'moo-grid-three-style-favoite-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Favorite/Compare Color', 'moowprogrid' ),
      'default'  =>'#3e73be', 
      'output'   => array('.moo-icon-3 i'),
  ),
  array(
    'id'			  =>'moo-grid-three-style-favoite-color-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Favorite/Compare Color Hover', 'moowprogrid' ),
    'default'  =>'#3e73be', 
    'output'   => array('.moo-icon-3 i:hover'),
),
),	
));

// ****************************Grid 3 Fields end*********************
// ****************************Grid 4 Fields start*********************

//
// Grid 4 Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'grid_four',
  'title' => 'Moo Grid Four',
  'icon'  => 'fa fa-th',
) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'grid_four',
  'title'       => esc_html__( 'Grid Four Settings', 'moowprogrid' ),
  'icon'        => 'fa fa-cogs',
  'fields'      => array(
    array(
      'type'    => 'heading',
      'content' => esc_html__('Grid three Shortcode ~ [Moo_Grid_Four]','moowprogrid'),
    ),
    array(
      'id'          => 'moo-grid-four-setting-columns',
      'type'        => 'button_set',
      'title'    => esc_html__('Grid Items Per Row', 'moowprogrid'),
      'options' => array(
        '4' => 'Grid 4 Columns', 
        '3' => 'Grid 3 Columns', 
        ), 
        'default' => '4',
        ),
        array(
          'id'		=>'moo-grid-four-show-per-page',
          'type'		=>'text',			
          'title'		=>esc_html__( 'Show Per Page', 'moowprogrid' ),               
          'default'	=>'8',
      ),
      array(
        'id'		=>'moo-grid-four-title-langth',
        'type'		=>'text',			
        'title'		=>esc_html__( 'Product Title Langth', 'moowprogrid' ),
        'subtitle'		=>esc_html__( 'Add Product Title length', 'moowprogrid' ),
        'default'	=>'5',
    ),
    array(
      'id'       => 'moo-grid-four-product-type',
      'type'     => 'select',
      'title'		=>esc_html__( 'Product Type', 'moowprogrid' ),
      'options'  => array(
          '1' => 'Recent Products',
          '2' => 'Futures Products',
          '3' => 'Best Selling Products',
          '4' => 'Most Comments Products',
      ),
      'default'  => '4',
  ),
  array(
    'id'			  =>'moo-grid-four-setting-price',
    'type'		=>'switcher',	
    'title'			=>esc_html__( 'Price Show/Hide', 'moowprogrid' ),
    'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
       'default'  => true,
),
array(
  'id'			=>'moo-grid-four-setting-ratting',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Ratting Show/Hide', 'moowprogrid' ),
  'subtitle' => __('Look, it\'s on!', 'moowprogrid'),
     'default'  => true,
),	


array(
  'type'    => 'subheading',
  'content' => 'Paginations Options',
),
array(
  'id'			=>'moo-grid-four-setting-paginations',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Paginations Enable/Disable', 'moowprogrid' ),
  'label' => esc_html__('Look, it\'s Disable!', 'moowprogrid'),
),
array(
  'id'       => 'moo-grid-four-setting-alignment',
  'type'     => 'button_set',
  'title'    => esc_html__('paginations Alignment', 'moowprogrid'),
  'options' => array(
      'left' => 'Left', 
      'center' => 'Center', 
      'right' => 'Right'
    ), 
  'default' => 'center',
  'dependency'  => array( 'moo-grid-four-setting-paginations', '==', 'true', '', 'visible' ),
  ),
  array(
    'id'			  =>'moo-grid-four-setting-pagination-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers'),
    'dependency'  => array( 'moo-grid-four-setting-paginations', '==', 'true', '', 'visible' ),
),
  array(
    'id'			  =>'moo-grid-four-setting-pagination-hover-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Hover Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers:hover'),
    'dependency'  => array( 'moo-grid-four-setting-paginations', '==', 'true', '', 'visible' ),
  ),
 ),
));

CSF::createSection($prefix, array(
  'parent'      => 'grid_four',
  'title'		=>esc_html__( 'Grid four Style', 'moowprogrid' ),  
  'icon'        => 'fa fa-asterisk',
  'fields'	=>array(array(
      'id'			  =>'moo-grid-four-style-background',
      'type'		=>'background',	
      'title'			=>esc_html__( 'Grid Items Background', 'moowprogrid' ),
      'subtitle' => esc_html__('Grid Items Background with image, color, etc.', 'moowprogrid'),
      'output'    => array('.moo-card-4'),	
      'default'  => array(
          'background-color' => '#FAFAFA',
      ),		
      ),
      array(
        'id'			  =>'moo-grid-four-style-background-hover',
        'type'		=>'background',	
        'title'			=>esc_html__( 'Grid Items Background Hover', 'moowprogrid' ),	
        'output'    => array('.moo-card-4:hover'),	
        'default'  => array(
            'background-color' => '#FAFAFA',
        )	
        ),
        array(
          'id'			  =>'moo-grid-four-style-height',
          'type'		=>'text',	
          'title'			=>esc_html__( 'Thumbnail Image Height', 'moowprogrid' ),
          'default'  => '300px',
      ),
      array( 
        'id'       => 'moo-grid-four-style-image-border',
        'type'     => 'border',
        'title'    => __('Thumbnail Image Border', 'moowprogrid'),    
        'output'   => array('a.card-img-top'),
        'default'  => array(
            'border-color'  => '#1e73be', 
            'border-style'  => 'solid', 
            'border-top'    => '1px', 
            'border-right'  => '1px', 
            'border-bottom' => '1px', 
            'border-left'   => '1px'
        )
        ),
        array( 
          'id'       => 'moo-grid-four-style-image-border-hover',
          'type'     => 'border',
          'title'    => __('Thumbnail Image Border Hover', 'moowprogrid'),    
          'output'   => array('a.card-img-top:hover'),
          'default'  => array(
              'border-color'  => '#1e73be', 
              'border-style'  => 'solid', 
              'border-top'    => '1px', 
              'border-right'  => '1px', 
              'border-bottom' => '1px', 
              'border-left'   => '1px'
          )
          ),
      array(
        'id'			  =>'moo-grid-four-style-title-typography',
        'type'        => 'typography', 
        'title'       => esc_html__('Title Typography', 'moowprogrid'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('.moo-title-4 a'),
        'units'       =>'px',
          'default'     => array(
            'color'       => '#333', 
            'font-style'  => '700', 
            'font-family' => 'Abel', 
            'google'      => true,
            'font-size'   => '45px', 
            'line-height' => ''
        ),
    ),
    array(
      'id'			  =>'moo-grid-four-style-title-hover-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Title Hover Color', 'moowprogrid' ),
      'default'  => '#83B735',
      'output'      => array('.moo-title-4 a:hover'),
  ),
  array(
    'id'			  =>'moo-grid-four-style-price-typography',
    'type'        => 'typography', 
    'title'       => esc_html__('Price Typography', 'moowprogrid'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.moo-price-4'),
    'units'       =>'px',
      'default'     => array(
        'color'       => '#333', 
        'font-style'  => '700', 
        'font-family' => 'Abel', 
        'google'      => true,
        'font-size'   => '45px', 
        'line-height' => ''
    ),
),
array(
  'id'			  =>'moo-grid-four-style-price-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Price Hover Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.moo-price-4:hover'),
),
array(
  'id'			  =>'moo-grid-four-style-add-to-cart-Icon',
  'type'        => 'text', 
  'title'       => esc_html__('Add To Cart & favorite Icon Size', 'moowprogrid'),
  'default'  => '20px',
),
array(
  'id'			  =>'moo-grid-four-style-ratting-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Ratting Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.star-rating span'),
),
array(
  'id'             => 'moo-grid-four-style-price-margin',
  'type'           => 'spacing',
  'output'         => array('.card-price-4'),
  'mode'           => 'margin',
  'units'          => array('em', 'px'),
  'units_extended' => 'false',
  'title'			=>esc_html__( 'Price Margin', 'moowprogrid' ),
  'default'            => array(
      'margin-top'     => '1px', 
      'margin-right'   => '1px', 
      'margin-bottom'  => '1px', 
      'margin-left'    => '1px',
      'units'          => 'px', 
  )
  ),  
  array(
    'id'			  =>'moo-grid-four-style-add-to-cart-text-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Add To Cart & favorite Icon Text Color', 'moowprogrid' ),
    'default'  =>'#4e73be', 
    'output'    => array('.moo-icon-4 i'),
),
array(
  'id'			  =>'moo-grid-four-style-add-to-cart-hover-color',
  'type'		  =>'color',	
  'title'			=>esc_html__( 'Add To Cart & favorite Icon Size Hover Color', 'moowprogrid' ),
  'default'  =>'#1e74be', 
  'output'   => array('.moo-icon-4 i:hover'),
),
),	
));

// ****************************Grid 4 Fields end*********************
// ****************************Grid 5 Fields start*********************
//
// Grid 5 Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'grid_five',
  'title' => 'Moo Grid Five',
  'icon'  => 'fa fa-th',

) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'grid_five',
  'title'       => esc_html__( 'Grid Five Settings', 'moowprogrid' ),
  'icon'        => 'fa fa-cogs',
  'fields'      => array(
    array(
      'type'    => 'heading',
      'content' => esc_html__('Grid three Shortcode ~ [Moo_Grid_Five]','moowprogrid'),
    ),
    array(
      'id'          => 'moo-grid-five-setting-columns',
      'type'        => 'button_set',
      'title'    => esc_html__('Grid Items Per Row', 'moowprogrid'),
      'options' => array(
        '4' => 'Grid 4 Columns', 
        '3' => 'Grid 3 Columns', 
        ), 
        'default' => '4',
        ),
        array(
          'id'		=>'moo-grid-five-show-per-page',
          'type'		=>'text',			
          'title'		=>esc_html__( 'Show Per Page', 'moowprogrid' ),               
          'default'	=>'8',
      ),
      array(
        'id'		=>'moo-grid-five-title-langth',
        'type'		=>'text',			
        'title'		=>esc_html__( 'Product Title Langth', 'moowprogrid' ),
        'subtitle'		=>esc_html__( 'Add Product Title length', 'moowprogrid' ),
        'default'	=>'5',
    ),
    array(
      'id'       => 'moo-grid-five-product-type',
      'type'     => 'select',
      'title'		=>esc_html__( 'Product Type', 'moowprogrid' ),
      'options'  => array(
          '1' => 'Recent Products',
          '2' => 'Futures Products',
          '3' => 'Best Selling Products',
          '4' => 'Most Comments Products',
      ),
      'default'  => '1',
  ),
  array(
    'id'			  =>'moo-grid-five-setting-price',
    'type'		=>'switcher',	
    'title'			=>esc_html__( 'Price Show/Hide', 'moowprogrid' ),
    'label' => __('Look, it\'s on!', 'moowprogrid'),
       'default'  => true,
),
array(
  'id'			=>'moo-grid-five-setting-ratting',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Ratting Show/Hide', 'moowprogrid' ),
  'label' => __('Look, it\'s on!', 'moowprogrid'),
     'default'  => true,
),	
array(
  'type'    => 'subheading',
  'content' => 'Paginations Options',
),
array(
  'id'			=>'moo-grid-five-setting-paginations',
  'type'		=>'switcher',	
  'title'			=>esc_html__( 'Paginations Enable/Disable', 'moowprogrid' ),
  'label' => esc_html__('Look, it\'s Disable!', 'moowprogrid'),
),
array(
  'id'       => 'moo-grid-five-setting-alignment',
  'type'     => 'button_set',
  'title'    => esc_html__('paginations Alignment', 'moowprogrid'),
  'options' => array(
      'left' => 'Left', 
      'center' => 'Center', 
      'right' => 'Right'
    ), 
  'default' => 'center',
  'dependency'  => array( 'moo-grid-five-setting-paginations', '==', 'true', '', 'visible' ),
  ),
  array(
    'id'			  =>'moo-grid-five-setting-pagination-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers'),
    'dependency'  => array( 'moo-grid-five-setting-paginations', '==', 'true', '', 'visible' ),
),
  array(
    'id'			  =>'moo-grid-five-setting-pagination-hover-color',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Paginations Hover Color', 'moowprogrid' ),
    'default'  => '#83B735',
    'output'    => array('.moo-pagination .page-numbers:hover'),
    'dependency'  => array( 'moo-grid-five-setting-paginations', '==', 'true', '', 'visible' ),
  ),
 ),
));

CSF::createSection($prefix, array(
  'parent'      => 'grid_five',
  'title'		=>esc_html__( 'Grid five Style', 'moowprogrid' ),  
  'icon'        => 'fa fa-asterisk',
  'fields'	=>array(array(
      'id'			  =>'moo-grid-five-style-background',
      'type'		=>'background',	
      'title'			=>esc_html__( 'Grid Items Background', 'moowprogrid' ),
      'subtitle' => esc_html__('Grid Items Background with image, color, etc.', 'moowprogrid'),
      'output'    => array('.moo-card-5'),	
      'default'  => array(
          'background-color' => '#FAFAFA',
      ),		
      ),
      array(
        'id'			  =>'moo-grid-five-style-background-hover',
        'type'		=>'background',	
        'title'			=>esc_html__( 'Grid Items Background Hover', 'moowprogrid' ),	
        'output'    => array('.moo-card-5:hover'),	
        'default'  => array(
            'background-color' => '#FAFAFA',
        )	
        ),
        array(
          'id'			  =>'moo-grid-five-style-height',
          'type'		=>'text',	
          'title'			=>esc_html__( 'Thumbnail Image Height', 'moowprogrid' ),
          'default'  => '300px',
      ),
      array( 
        'id'       => 'moo-grid-five-style-image-border',
        'type'     => 'border',
        'title'    => __('Thumbnail Image Border', 'moowprogrid'),    
        'output'   => array('a.card-img-top'),
        'default'  => array(
            'border-color'  => '#1e73be', 
            'border-style'  => 'solid', 
            'border-top'    => '1px', 
            'border-right'  => '1px', 
            'border-bottom' => '1px', 
            'border-left'   => '1px'
        )
        ),
        array( 
          'id'       => 'moo-grid-five-style-image-border-hover',
          'type'     => 'border',
          'title'    => __('Thumbnail Image Border Hover', 'moowprogrid'),    
          'output'   => array('a.card-img-top:hover'),
          'default'  => array(
              'border-color'  => '#1e73be', 
              'border-style'  => 'solid', 
              'border-top'    => '1px', 
              'border-right'  => '1px', 
              'border-bottom' => '1px', 
              'border-left'   => '1px'
          )
          ),
      array(
        'id'			  =>'moo-grid-five-style-title-typography',
        'type'        => 'typography', 
        'title'       => esc_html__('Title Typography', 'moowprogrid'),
        'google'      => true, 
        'font-backup' => true,
        'output'      => array('.moo-title-5 a'),
        'units'       =>'px',
          'default'     => array(
            'color'       => '#333', 
            'font-style'  => '700', 
            'font-family' => 'Abel', 
            'google'      => true,
            'font-size'   => '55px', 
            'line-height' => ''
        ),
    ),
    array(
      'id'			  =>'moo-grid-five-style-title-hover-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Title Hover Color', 'moowprogrid' ),
      'default'  => '#83B735',
      'output'      => array('.moo-title-5 a:hover'),
  ),
  array(
    'id'			  =>'moo-grid-five-style-price-typography',
    'type'        => 'typography', 
    'title'       => esc_html__('Price Typography', 'moowprogrid'),
    'google'      => true, 
    'font-backup' => true,
    'output'      => array('.moo-price-5'),
    'units'       =>'px',
      'default'     => array(
        'color'       => '#333', 
        'font-style'  => '700', 
        'font-family' => 'Abel', 
        'google'      => true,
        'font-size'   => '55px', 
        'line-height' => ''
    ),
),
array(
  'id'			  =>'moo-grid-five-style-price-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Price Hover Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.moo-price-5:hover'),
),
array(
  'id'			  =>'moo-grid-five-style-ratting-hover-color',
  'type'		=>'color',	
  'title'			=>esc_html__( 'Ratting Color', 'moowprogrid' ),
  'default'  => '#83B735',
  'output'      => array('.star-rating span'),
),
array(
  'id'             				=> 'moo-grid-five-style-price-margin',
  'type'           			=> 'spacing',
  'output'         => array('.moo-rating-5'),
  'mode'           => 'margin',
  'units'          => array('em', 'px'),
  'units_extended' => 'false',
  'title'			=>esc_html__( 'Price Margin', 'moowprogrid' ),
  'default'            => array(
      'margin-top'     => '1px', 
      'margin-right'   => '1px', 
      'margin-bottom'  => '1px', 
      'margin-left'    => '1px',
      'units'          => 'px', 
  )
  ),
  array(
    'id'             => 'moo-grid-five-style-price-padding',
    'type'           => 'spacing',
    'output'         => array('.moo-rating-5'),
    'mode'           => 'padding',
    'units'          => array('em', 'px'),
    'units_extended' => 'false',
    'title'			=>esc_html__( 'Price Padding', 'moowprogrid' ),
        'default'            => array(
            'margin-top'     => '1px', 
            'margin-right'   => '1px', 
            'margin-bottom'  => '1px', 
            'margin-left'    => '1px',
            'units'          => 'px', 
        )
    ),
    array(
      'id'			  =>'moo-grid-five-style-add-to-cart-Typography',
      'type'        => 'typography', 
      'title'       => esc_html__('Add To Cart Typography', 'moowprogrid'),
      'google'      => true, 
      'font-backup' => true,
      'output'         => array('.moo-add-to-cart-5'),
      'units'       =>'px',
        'default'     => array(
          'color'       => '#333', 
          'font-style'  => '700', 
          'font-family' => 'Abel', 
          'google'      => true,
          'font-size'   => '15px', 
          'line-height' => ''
      ),
  ),
  array(
    'id'			  =>'moo-grid-five-style-add-to-cart-text-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Add To Cart Text Hover Color', 'moowprogrid' ),
    'default'  =>'#5e73be', 
    'output'         => array('.moo-add-to-cart-5:hover'),
),
array(
  'id'			  =>'moo-grid-five-style-add-to-cart-background',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background', 'moowprogrid' ),
  'default'  =>'#5e73be', 
  'output'         => array('.moo-add-to-cart-5'),
),
array(
  'id'			  =>'moo-grid-five-style-add-to-cart-background-hover',
  'type'		=>'background',	
  'title'			=>esc_html__( 'Add To Cart Button Background Hover', 'moowprogrid' ),
  'default'  =>'#5e73be', 
  'output'         => array('.moo-add-to-cart-5:hover'),
),
array( 
  'id'       => 'moo-grid-five-style-add-to-cart-border',
  'type'     => 'border',
  'title'			=>esc_html__( 'Add To Cart Button Border ', 'moowprogrid' ),       
  'output'   => array('.moo-add-to-cart-5'),
  'default'  => array(
      'border-color'  => '#5e73be', 
      'border-style'  => 'solid', 
      'border-top'    => '1px', 
      'border-right'  => '1px', 
      'border-bottom' => '1px', 
      'border-left'   => '1px'
  )
  ),
  array( 
    'id'       => 'moo-grid-five-style-add-to-cart-border-hover',
    'type'     => 'border',
    'title'			=>esc_html__( 'Add To Cart Button Border Hover ', 'moowprogrid' ),       
    'output'   => array('.moo-add-to-cart-5:hover'),
    'default'  => array(
        'border-color'  => '#5e73be', 
        'border-style'  => 'solid', 
        'border-top'    => '1px', 
        'border-right'  => '1px', 
        'border-bottom' => '1px', 
        'border-left'   => '1px'
    )
    ),
    array(
      'id'			  =>'moo-grid-five-style-before-background',
      'type'		=>'background',	
      'title'			=>esc_html__( 'Background Overlay Color', 'moowprogrid' ),
      'output'    => array('.card-img-icon-5:before'),	
      'default'  => array(
          'background-color' => '#1C315E',
      )		
  ),	
  array(
    'id'			  =>'moo-grid-five-style-before-opacity',
    'type'		=>'text',	
    'title'			=>esc_html__( 'Background Overlay Opacity', 'moowprogrid' ),
    'default'  => '0.6',
),
    array(
      'id'			  =>'moo-grid-five-style-favoite-color',
      'type'		=>'color',	
      'title'			=>esc_html__( 'Favorite/Compare Color', 'moowprogrid' ),
      'default'  =>'#5e73be', 
      'output'   => array('.moo-icon-5 i'),
  ),
  array(
    'id'			  =>'moo-grid-five-style-favoite-color-hover',
    'type'		=>'color',	
    'title'			=>esc_html__( 'Favorite/Compare Color Hover', 'moowprogrid' ),
    'default'  =>'#5e73be', 
    'output'   => array('.moo-icon-5 i:hover'),
),
),	
));
// ****************************Grid 5 Fields end*********************
