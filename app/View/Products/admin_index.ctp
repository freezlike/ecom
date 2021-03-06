<div class="row">
    <div class="col-md-9">
        <div class="page-header">
            <h3><?php echo __("Liste des Produits"); ?></h3>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th><?php echo __("Nom Produit"); ?></th>
                    <th><?php echo __("Marque"); ?></th>
                    <th><?php echo __("Catégorie"); ?></th>
                    <th><?php echo __("Prix"); ?></th>
                    <th><?php echo __("Date de création"); ?></th>
                    <th><?php echo __("Date de modification"); ?></th>
                    <th><?php echo __("Actions"); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['Product']['name']; ?></td>
                        <td><?php echo $product['Marque']['name']; ?></td>
                        <td><?php echo $product['Category']['name']; ?></td>
                        <td><?php echo $product['Product']['price']; ?></td>
                        <td><?php echo $product['Product']['created']; ?></td>
                        <td><?php echo $product['Product']['modified']; ?></td>
                        <td>
                            <a href="<?php echo $this->Html->url(array('action' => 'edit', 'id' => $product['Product']['id'])); ?>">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            &nbsp;
                            <a href="<?php echo $this->Html->url(array('action' => 'show', 'id' => $product['Product']['id'])); ?>">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </a>
                            &nbsp;
                            <?php echo $this->Form->postLink(null, array('action' => 'delete', 'id' => $product['Product']['id']), array('class' => 'glyphicon glyphicon-remove'), __('Etes-vous sûr que vous voulez supprimer # %s?', $product['Product']['id'])); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-3">
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