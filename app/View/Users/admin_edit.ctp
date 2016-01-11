<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __('Modifier l\'utilisateur') . '&nbsp;<d class="bg-amber">' . ucfirst($this->request->data['User']['username'] . '</d>'); ?></h3> 
        </div>
        <?php
        echo $this->Form->create('User', array(
            'class' => 'form-horizontal',
            'inputDefaults' => array('div' => array('class' => 'col-md-10'))
        ));
        ?>
        <?php echo $this->Form->input('id'); ?>
        <div class="form-group">
            <label class="col-md-2 control-label"><?php echo __('Nom d\'utilisateur'); ?></label>
            <?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => false, 'placeholder' => __('Nom d\'utilisateur'))); ?>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"><?php echo __('Mot de passe'); ?></label>
            <?php echo $this->Form->input('password', array('class' => 'form-control', 'label' => false, 'placeholder' => __('Mot de passe'))); ?>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"><?php echo __('Rôle'); ?></label>
            <?php echo $this->Form->input('role_id', array('class' => 'form-control', 'label' => false)); ?>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label"><?php echo __('Etat'); ?></label>
            <?php echo $this->Form->input('active', array('label' => false, 'type' => 'checkbox')); ?>
        </div>
        <div class="form-group">
            <?php echo $this->Form->submit(__('Modifier'), array('class' => 'btn btn-success')); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
    <div class="col-md-4">
        <div class="page-header">
            <h3><?php echo __('Actions'); ?></h3> 
        </div>
    </div>

</div>