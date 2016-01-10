<div class="account_grid">
    <div class=" login-right">
        <h3><?php echo __("CLIENTS ENREGISTRÉS"); ?></h3>
        <p><?php echo __("Si vous avez un compte avec nous, s'il vous plaît connectez-vous"); ?></p>
        <?php
        echo $this->Form->create('User', array(
            'inputDefaults' => array('label' => false, 'div' => false)
        ));
        ?>
        <div>
            <span><?php echo __("Nom d'utilisateur"); ?><label>&nbsp;*</label></span>
            <?php echo $this->Form->input('username', array('placeholder' => __("Nom d'utilisateur"))); ?>
        </div>
        <div>
            <span><?php echo __("Mot de passe"); ?><label>&nbsp;*</label></span>
            <?php echo $this->Form->input('password', array('placeholder' => __("Mot de passe"))); ?>
        </div>
        <?php echo $this->Form->submit(__("Connexion")); ?>
        <?php echo $this->Form->end(); ?>
    </div>	
    <div class=" login-left">
        <h3><?php echo __("NOUVEAUX CLIENTS"); ?></h3>
        <p><?php echo __("En créant un compte sur notre boutique, vous serez en mesure de se déplacer à travers le processus de paiement plus rapide, stocker des adresses d'expédition multiples, consulter et suivre vos commandes dans votre compte et plus encore."); ?></p>
        <a class="acount-btn" href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'register')); ?>">
            <?php echo __("Créer un compte"); ?>
        </a>
    </div>
    <div class="clearfix"> </div>
</div>
