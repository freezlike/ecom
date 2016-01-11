<?php echo $this->Html->css('dataTables.bootstrap.min', array('inline' => false)); ?>
<div class="row">
    <div class="col-md-9">
        <div class="page-header">
            <h2><?php echo __('Liste des Users'); ?></h2>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th><?php echo __('Nom d\'utilisateur'); ?></th>
                    <th><?php echo __('Date de Création'); ?></th>
                    <th><?php echo __('Dern. Modification'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <!--le Login -->
                        <td style="text-align: left">
                            <?php echo $user['User']['username']; ?>
                        </td>
                        <!-- Créer le -->
                        <td style="text-align: left"><?php echo $user['User']['created']; ?></td>
                        <!-- modifé le -->
                        <td style="text-align: left"><?php echo $user['User']['modified']; ?></td>
                        <!--le Login -->
                        <td class="actions">
                            <?php echo $this->Html->link(null, array('controller' => 'users', 'action' => 'edit', 'admin' => true, 'id' => $user['User']['id']), array('class' => 'glyphicon glyphicon-pencil')); ?>
                            <?php echo $this->Html->link(null, array('controller' => 'users', 'action' => 'delete', 'admin' => true, 'id' => $user['User']['id']), array('class' => 'glyphicon glyphicon-remove'), 'Etes-vous sûr ?') ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-md-3">
        <div class="page-header">
            <h2><?php echo __('Actions'); ?></h2>
        </div>
        <ul class="nav">
            <li>
                <a href="<?php echo $this->Html->url(array('controller' => 'users', 'action' => 'add')); ?>">
                    <?php echo __('Ajout Utilisateur'); ?>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php echo $this->Html->script('dataTables', array('inline' => false)); ?>