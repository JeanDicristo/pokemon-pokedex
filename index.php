<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/style.css">
    <title>Pokédex</title>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="./Images/logo.png" alt="logo du site le pokédex de pokémon" width="50px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Quel pokémon veut tu voir ?" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Chercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <?php
    require_once("./PokemonsManager.php");
    $manager = new PokemonsManager();
    $pokemons = $manager->getAll();
    ?>
    <main class="container">
        <section>
            <?php foreach ($pokemons as $pokemon) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $pokemon->getImage() ?>" class="card-img-top" alt="<?= $pokemon->getName() ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $pokemon->getNumber() ?> # <?= $pokemon->getName() ?></h5>
                        <p class="card-text"><?= $pokemon->getDescription() ?></p>
                        <a href="#" class="btn btn-warning"><img src="./Images/Icons/icon_modifier.png" alt="img bouton modifier" width="20px"></a>
                    </div>
                </div>
            <?php endforeach ?>
        </section>
            </br>
                <a href="./create.php" class="btn btn-warning">Créer un pokémon</a>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>