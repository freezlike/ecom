<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $this->fetch('title'); ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('bootstrap');
        echo $this->Html->css('style');
        echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <?php echo $this->element('header'); ?>
        <div class="container">
            <?php echo $this->element('sidebar'); ?>
            <?php echo $this->Flash->render(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
        <?php echo $this->element('footer'); ?>
        <?php echo $this->Html->script('jquery.min'); ?>
        <?php echo $this->Html->script('responsiveslides.min'); ?>
        <?php echo $this->Html->script('app'); ?>
        <?php echo $this->fetch('script'); ?>
        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>
