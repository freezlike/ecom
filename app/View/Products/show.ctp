<?php $this->set('title_for_layout', $product['Product']['name']); ?>
<div class=" single_top">
    <div class="single_grid">
        <div class="grid images_3_of_2">
            <div class="flexslider">
                <ul class="slides">
                    <li data-thumb="/img/s4.jpg">
                        <div class="thumb-image"> 
                            <?php echo $this->Html->image($product['Media'][0]['urlm'], array('class' => 'img-responsive')); ?>
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>	
        </div> 
        <div class="desc1 span_3_of_2">
            <h4><?php echo $product['Product']['name']; ?></h4>
            <div class="cart-b">
                <div class="left-n "><?php echo $product['Product']['price'] ?> €</div>
                <a class="now-get get-cart-in" href="#" id="addCart" data-id="<?php echo $product['Product']['id']; ?>"><?php echo __("Ajouter au panier"); ?></a> 
                <div class="clearfix"></div>
            </div>
            <p>
                <?php echo nl2br($product['Product']['description']) ?>
            </p>
        </div>
        <div class="clearfix"> </div>
    </div>	
</div>
<?php echo $this->Html->script('cart',array('inline'=>false)); ?>