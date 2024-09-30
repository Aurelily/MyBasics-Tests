<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo ASSETS;?>css/styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!-- Inclusion conditionnelle en fonction des views -->
        <?php if (isset($currentView) && $currentView === 'createForm') : ?>
            <script defer src="<?php echo ASSETS;?>js/script.js"></script>
            <title>Crée un compte</title>
        <?php endif; ?>
        <?php if (isset($currentView) && $currentView === 'home') : ?>
            <title>Accueil : Mini test Project</title>
        <?php endif; ?>
        <?php if (isset($currentView) && $currentView === 'profile') : ?>
            <title>Profil : Mini test Project</title>
        <?php endif; ?>
        
        
        
    </head>
    <body>
        <header>
            <nav>
                <ul class="main-menu">
                    <li><a href="home">Accueil</a></li>
                    <li><a href="profile">Profil</a></li>
                    <li><a href="createForm">Créer un utilisateur</a></li>
                </ul>
            </nav>
        </header>
        <main>
        <!-- Ici ma page qui arrive  -->
        <?= $contenu ?>
        </main>
        <footer>
            <p>Ceci est le footer du site</p>
        </footer>
    </body>
</html>
