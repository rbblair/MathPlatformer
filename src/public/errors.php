<?php if (count($errors) > 0) : ?>
<div class="container">
    <div class="alert alert-warning">
        <?php foreach ($errors as $error) : ?>
        <p><?php echo $error ?></p>
        <?php endforeach ?>
    </div>
</div>
<?php endif ?> 