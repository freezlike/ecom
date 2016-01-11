<div class="row">
    <div class="col-md-8">
        <div class="page-header">
            <h3><?php echo __("Liste des Produits"); ?></h3>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th><?php echo __("Nom"); ?></th>
                    <th><?php echo __("Date de création"); ?></th>
                    <th><?php echo __("Date de modification"); ?></th>
                    <th><?php echo __("Actions"); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?php echo $category['Category']['name']; ?></td>
                        <td><?php echo $category['Category']['created']; ?></td>
                        <td><?php echo $category['Category']['modified']; ?></td>
                        <td>
                            <a href="<?php echo $this->Html->url(array('action' => 'edit', 'id' => $category['Category']['id'])); ?>">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            &nbsp;
                            <a href="<?php echo $this->Html->url(array('action' => 'show', 'id' => $category['Category']['id'])); ?>">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                            &nbsp;
                            <?php echo $this->Form->postLink(null, array('action' => 'delete', 'id' => $category['Category']['id']), array('class' => 'glyphicon glyphicon-remove'), __('Etes-vous sûr que vous voulez supprimer # %s?', $category['Category']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <div class="page-header">
            <h3><?php echo __("Actions"); ?></h3>
        </div>
        <ul class="nav">
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
<?php echo $this->Html->script('jquery.dataTables.min', array('inline' => false)); ?>
<?php echo $this->Html->script('tables', array('inline' => false)); ?>