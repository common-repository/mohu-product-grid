<?php 
$moowprogrid = get_option('moowprogrid');
 $show = esc_html($moowprogrid['moo-grid-two-show-per-page']);
?>
<div class="container">
    <div class="row">
        <?php             
           global $product, $post, $woocommerce;       
           $current = get_query_var( 'paged' ) ? get_query_var( 'paged' ): 1;                    
             if( esc_html($moowprogrid['moo-grid-two-product-type']) == 1 ){
           $product_show_two = new WP_Query(array(
               'post_type' => 'product',
               'posts_per_page' => $show,
               'paged'           =>$current, 
            ));         
               }elseif( esc_html($moowprogrid['moo-grid-two-product-type']) == 2 ){
                $product_show_two = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => $show,
                    'paged'           =>$current, 
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_visibility',
                            'field'    => 'name',
                            'terms'    => 'featured',
                        ),
                    ),
                ));         
               }elseif( esc_html($moowprogrid['moo-grid-two-product-type']) == 3 ){
                $product_show_two = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => $show,
                    'paged'           =>$current, 
                    'ignore_sticky_posts' => 1,
                    'meta_key' => 'total_sales',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC',
                ));    
               }elseif( esc_html($moowprogrid['moo-grid-two-product-type']) == 4 ){
                $product_show_two = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => $show,
                    'paged'           =>$current, 
                    'orderby' => 'comment_count',
                    'order'=> 'DESC',
                )); 
               }
            
                                                 
        if($product_show_two->have_posts( )): 
        while($product_show_two->have_posts()):
                            $product_show_two->the_post( );
                            $permalink = get_the_permalink();   
                            $product = wc_get_product(get_the_ID());         
                                $img = $product->get_image('woocommerce_thumbnail');
                            $average = $product->get_average_rating();
                            $ster_average = ( $average / 5 ) * 100;
                            $price = $product->get_price_html();
                            $add_to_cart_url = $product->add_to_cart_url();
                            $add_to_cart_text =$product->add_to_cart_text();
                            $sku = $product->get_sku();
                            ?>

        <div class="<?php if(esc_html($moowprogrid['moo-grid-two-setting-columns']) == 4){
                        echo 'col-12 col-sm-6 col-md-4 col-lg-3';
                }elseif( esc_html($moowprogrid['moo-grid-two-setting-columns']) == 3){
                    echo 'col-12 col-sm-6 col-md-4';
                }
                ?>">
            <div class="card moo-card-2 woocommerce">
                <a class="card-img-top" style="height: <?php echo esc_attr($moowprogrid['moo-grid-two-style-height']) ;?>" href="<?php echo esc_url($permalink); ?>"><?php echo $img; ?></a>
                <div class="card-body">
                    <h2 class="moo-title-2"><a href="<?php echo esc_url($permalink); ?>"><?php echo wp_trim_words( esc_html(get_the_title()) , esc_html($moowprogrid['moo-grid-two-title-langth']), ''); ?></a>
                    </h2>
                    <div class="card-price">
                        <span class="moo-price-2"><?php if(esc_html($moowprogrid['moo-grid-two-setting-price']) == true){echo $price;} ?></span>
                    </div>

                    <div class="card-button-icon-2">
                        <?php if( esc_html($moowprogrid['moo-grid-two-setting-ratting']) == true ){?>
                        <span class="moo-rating-2">
                            <div class="star-rating">
                                <span style="width:<?php echo esc_attr($ster_average); ?>%"><strong itemprop="ratingValue"
                                        class="rating"><?php echo $average; ?></strong></span>
                            </div>
                        </span>
                        <?php } ?>                        
                        <a rel="nofollow" href="<?php echo $add_to_cart_url; ?>" id="moo-add-cart" data-quantity="1" data-product_id="<?php echo $product->id; ?>" data-product_sku="<?php echo esc_attr($sku); ?>" class="btn btn-primary moo-add-to-cart-2 product_type_simple add_to_cart_button ajax_add_to_cart"><?php echo $add_to_cart_text; ?></a>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php if( esc_html($moowprogrid['moo-grid-two-setting-paginations']) == true ){ ?>
<div class="grid-pagination">
    <div class="container">
        <div class="row">
            <div class="moo-pagination">
                <div class="pagination-menu">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination"
                            style="justify-content: <?php echo esc_html($moowprogrid['moo-grid-two-setting-alignment']); ?>">
                            <?php                    
                                        $totlepage = $product_show_two->max_num_pages;
                                        echo paginate_links(
                                            array(
                                            'total'=>$totlepage, 
                                            'current'=>$current, 
                                            'format' => '/page/%#%',
                                            'aria_current'=>'page', 
                                            'prev_next'          => true,                               
                                            'prev_text'          => __('« Previous'),
                                            'next_text'          => __('Next »'),
                                            'end_size'           => 2,      
                                            'mid_size'           => 2,                                        
                                            )
                                        );
                                    ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>