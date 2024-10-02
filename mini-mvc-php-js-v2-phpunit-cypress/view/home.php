
<h1>Liste des utilisateurs</h1>
<?php foreach($users as $user):?>
    <p class="list-pseudo"><?= $user->getPseudo() ?></p>
<?php endforeach ?>



