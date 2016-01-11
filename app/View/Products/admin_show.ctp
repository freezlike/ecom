<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __("Fiche Produit Produit"); ?></h3>
        </div>
        <div>
            <ul class="nav">
                <li><?php echo __("Nom"); ?> : <?php echo $product['Product']['name']; ?></li>
                <li><?php echo __("Description"); ?> : <br><?php echo nl2br($product['Product']['description']); ?></li>
                <li><?php echo __("Prix"); ?> : <?php echo $product['Product']['price']; ?></li>
                <li><?php echo __("Catégorie"); ?> : <?php echo $product['Category']['name']; ?></li>
                <li><?php echo __("Marque"); ?> : <?php echo $product['Marque']['name']; ?></li>
            </ul>
            <p>
                <?php echo __("Images Produit"); ?>
            </p>
            <p>
                <?php echo $this->Html->image($product['Media'][0]['urls'], array('class'=>'thumbnail pull-left')); ?>
                
                <?php echo $this->Html->image($product['Media'][0]['urlm'], array('class'=>'thumbnail pull-left')); ?>
            </p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="page-header">
            <h3><?php echo __("Actions"); ?></h3>
        </div>
        <ul class="nav">
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'products', 'action' => 'index')); ?>">
                    <?php echo __("Liste Produits"); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'categories', 'action' => 'index')); ?>">
                    <?php echo __("Liste Catégories"); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'marques', 'action' => 'index')); ?>">
                    <?php echo __("Liste Marques"); ?>
                </a>
            </li>
        </ul>
    </div>
</div>

