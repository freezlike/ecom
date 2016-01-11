<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="top-header-left">
                <ul class="support">
                    <li><a href="#"><label> </label></a></li>
                    <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                </ul>
                <ul class="support">
                    <li class="van"><a href="#"><label> </label></a></li>
                    <li><a href="#">Livraison gratuite <span class="live">sur commande de plus de 500</span></a></li>
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>		
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="header-bottom-left">
                <div class="logo">
                    <a href="index.html">
                        <?php echo $this->Html->image('logo.png', array()); ?>
                    </a>
                </div>
                <div class="search">
                    <form>
                        <input type="text" value="" placeholder="<?php echo __("Recherche"); ?>">
                        <input type="submit"  value="<?php echo __("Recherche"); ?>">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="header-bottom-right">					
                <?php if (!empty($this->Session->read('Auth'))): ?>
                    <div class="account">
                        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'my_account'), true); ?>"><span> </span>
                            <?php echo $this->Session->read('Auth.User.full_name'); ?>
                        </a>
                    </div>
                    <ul class="login">
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'logout'), true); ?>"><span></span><?php echo __("Déconnexion"); ?></a></li>
                    </ul>
                    <div class="cart"><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'panier')); ?>">
                            <span> </span><?php echo __("Panier"); ?>&nbsp;
                            <?php if (empty($this->Session->read('panier'))): ?>
                                (0)
                            <?php else: ?>

                            <?php endif; ?>
                        </a>
                    </div>
                <?php else: ?>
                    <div class="account">
                        <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login'), true); ?>"><span> </span>
                            <?php echo __("Votre Compte"); ?>
                        </a>
                    </div>
                    <ul class="login">
                        <li><a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'login'), true); ?>"><span></span><?php echo __("Connexion"); ?></a></li> |
                        <li ><a href="register.html"><?php echo __("Inscription"); ?></a></li>
                    </ul>
                    <div class="cart"><a href="#"><span> </span><?php echo __("Panier"); ?></a></div>
                <?php endif; ?>
                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>	
        </div>
    </div>
</div>
<!---->

