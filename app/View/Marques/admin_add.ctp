<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __("Ajout Marque"); ?></h3>
        </div>
        <?php
        echo $this->Form->create('Marque', array(
            'inputDefaults' => array('label' => false, 'div' => false),
            'class' => 'form-horizontal'
        ));
        ?>
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
$('#MarqueName').keyup(function(){
var slug = $('input#MarqueName').val();
//slug = slug.replace(/ /g, "-");
slug = slugMe(slug);
$('#MarqueSlug').val(slug);
});
<?php echo $this->Html->scriptEnd(); ?>
