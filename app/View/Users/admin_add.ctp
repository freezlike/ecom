<?php $this->set('title_for_layout', __("Ajout Utilisateur")); ?>
<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __("Ajout d'utilisateur"); ?></h3>
        </div>
        <?php
        echo $this->Form->create('User', array(
            'inputDefaults' => array('label' => false, 'div' => false)
        ));
        ?>
        <div class="form-group">
            <label class="control-label"><?php echo __("Nom d'utilisateur"); ?></label>
            <?php echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => __("Nom d'utilisateur"))); ?>
        </div>
        <div class="form-group">
            <label class="control-label"><?php echo __("Mot de passe"); ?></label>
            <?php echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => __("Mot de passe"))); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->input('role_id', array('class' => 'form-control')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Envoyer'), array('class' => 'btn btn-success', 'div' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="col-md-4">
        <div class="page-header">
            <h3><?php echo __("Actions"); ?></h3>
        </div>
    </div>
</div>