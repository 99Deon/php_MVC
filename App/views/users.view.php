<?php require('partials/head.php'); ?>

<h3>All Users  </h3>

    <?php foreach ($users as $user): ?>

        <li><?= $user->Name; ?></li>    

        <?php endforeach; ?>





<h1>My Tasks</h1>

<form method="POST" action='/users'>
<input type="name" name="name" id="">
<input type="submit" value="send">
</form>

<?php require('partials/footer.php'); ?>
