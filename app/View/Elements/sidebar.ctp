<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate"><?php echo __("Catégories"); ?></h3>
        <ul class="menu">
            <li>
                <ul class="kid-menu" style="display: none;">
                    <?php foreach ($categories as $category): ?>
                        <li>
                            <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'sort_by_cat', 'cat' => $category['Category']['slug'])); ?>">
                                <?php echo $category['Category']['name']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    </div>
    <div class=" chain-grid menu-chain">
        <a href="single.html">
            <?php echo $this->Html->image('wat.jpg', array('class' => 'img-responsive chain')); ?>
        </a>	   		     		
        <div class="grid-chain-bottom chain-watch">
            <span class="actual dolor-left-grid">300$</span>
            <span class="reducedfrom">500$</span>  
            <h6>Lorem ipsum dolor</h6>  		     			   		     										
        </div>
    </div>
    <a class="view-all all-product" href="product.html"><?php echo __("Tous les Produits"); ?><span> </span></a> 	
</div>