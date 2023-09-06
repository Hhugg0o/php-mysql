<?php

    // Déclaration du tableau des recettes
    $users = [
        [
            'full_name' => 'Mickaël Andrieu',
            'email' => 'mickael.andrieu@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Mathieu Nebra',
            'email' => 'mathieu.nebra@exemple.com',
            'age' => 34,
        ],
        [
            'full_name' => 'Laurène Castor',
            'email' => 'laurene.castor@exemple.com',
            'age' => 28,
        ],
    ];
    
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flagoelets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => 'Etape 1 : des flagoelets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanaise',
            'recipe' => 'Etape 1 : 2 belles escalopes !',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Salade Romaine',
            'recipe' => 'Etape 1 : des flagoelets !',
            'author' => 'laurene.castor@exemple.com',
            'is_enabled' => false,
        ],
    ];

function isValidRecipe(array $recipe) : bool 
{
    if (array_key_exists('is_enabled', $recipe)) {
        $isEnabled = $recipe['is_enabled'];
    } 
    else {
        $isEnabled = false;
    }
    return $isEnabled;
}

function getRecipes(array $recipes) : array
{
    $validRecipes = [];
    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }
    return $validRecipes;
}    

function displayAuthor(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['full_name'] . '(' . $author['age'] . ' ans)';
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
    <link rel="stylesheet" type="text/css" href="AfficherRecettes.css">
</head>
<body>
    <h1>Liste des recettes de cuisine</h1>
    <ul>
        <?php foreach($recipes as $recipe){ ?>
            <?php if(isValidRecipe($recipe)){ ?>
                <h2>
                    <?php echo $recipe['title'] . "<br>";?>
                </h2>

                <?php $emailRecipe = $recipe['author']?>

                <?php echo $recipe['recipe'] . "<br>";?>

                <p class="author">
                    <?php 
                    foreach($users as $user)
                    {
                        if($emailRecipe == $user['email'])
                        {
                            echo displayAuthor($user['email'], $users) . '</br>';
                        }
                    }
                    ?>
                </p>
                <?php echo "<br>";?>
            <?php } ?>
        <?php } ?>
    </ul>
</body>
</html>