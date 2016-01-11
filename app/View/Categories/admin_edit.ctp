<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __("Edition Produit"); ?></h3>
        </div>
        <?php
        echo $this->Form->create('Product', array(
            'inputDefaults' => array('label' => false, 'div' => false),
            'class' => 'form-horizontal'
        ));
        ?>
        <?php echo $this->Form->input('id', array()); ?>
        <div class="form-group">
            <label class="control-label col-sm-2 pull-left"><?php echo __("Nom"); ?></label>
            <div class="col-sm-10">
                <?php echo $this->Form->input('name', array('class' => 'form-control', 'placeholder' => __("Nom"))); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 pull-left"><?php echo __("Slug"); ?></label>
            <div class="col-sm-10">
                <?php echo $this->Form->input('slug', array('class' => 'form-control', 'placeholder' => __("Slug"))); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 pull-left"><?php echo __("Description"); ?></label>
            <div class="col-sm-10">
                <?php echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => __("Description"))); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 pull-left"><?php echo __("Catégorie"); ?></label>
            <div class="col-sm-10">
                <?php echo $this->Form->input('category_id', array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2 pull-left"><?php echo __("Marque"); ?></label>
            <div class="col-sm-10">
                <?php echo $this->Form->input('marque_id', array('class' => 'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Envoyer'), array('div' => false, 'class' => 'btn btn-success')); ?>
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
<?php echo $this->Html->script('functions', array('inline' => false)); ?>
<?php echo $this->Html->scriptStart(array('inline' => false)); ?>


$('#ProductName').keyup(function(){
var slug = $('input#ProductName').val();
//slug = slug.replace(/ /g, "-");
slug = slugMe(slug);
$('#ProductSlug').val(slug);
});

<?php echo $this->Html->scriptEnd(); ?>
