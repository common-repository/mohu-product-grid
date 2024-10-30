jQuery(document).ready(function(){
   jQuery("#moo-add-cart").click(function(){
    jQuery('#moo-add-cart').addclass('.added');
    jQuery("[class=added_to_cart]").css("display", "block");
   });
});
