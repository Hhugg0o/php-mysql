<?php

    // Déclaration du tableau des recettes
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets !',
            'author' => 'mickael.andrieu@exemple.com',
            'enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => '[...]',
            'author' => 'mickael.andrieu@exemple.com',
            'enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'enabled' => true,
        ],
    ];
?>


<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link rel="stylesheet" type="text/css" href="AfficherRecettes.css">
</head>
<body>
    <h1>Affichage des recettes</h1>
    <ul>
        <?php foreach($recipes as $recipe){ ?>
            <?php if($recipe['enabled'] == true){ ?>
                <h2>
                    <?php echo $recipe['title'] . "<br>";?>
                </h2>

                <?php echo $recipe['recipe'] . "<br>";?>

                <p class="author">
                    <?php echo $recipe['author'] . "<br>";?>
                </p>
                <?php echo "<br>";?>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>