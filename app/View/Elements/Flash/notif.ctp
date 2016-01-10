<div id="notif" class="alert alert-<?php echo (!empty($params['class']) && $params['class'] === 'error') ? 'danger' : 'info'; ?> alert-dismissable"  role="alert" onclick="$(this).slideUp();">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <span>
        <?php echo $message; ?>
    </span>
</div>