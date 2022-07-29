<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./Css/style.css">
    <title>Créer un pokémon</title>
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
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
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

    <main class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <label for="number"class="form-label">Numéro</label>
            <input type="number" name="number" placeholder="le numero du pokémon" id="number" class="form-control">

            <label for="name"class="form-label">Nom du pokémon</label>
            <input type="text" name="name" placeholder="le nom du pokémon" id="name" class="form-control" minlength="3" maxlength="40">

            <label for="name"class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="6" placeholder="La description du pokémon" minlength="10" maxlength="1000"></textarea>

            <label for="type1"class="form-label">Type</label>
            <!--
                <select name="type1" id="type1"class="form-select">
                <option value=""></option>
            -->
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" id="image" class="form-control">
</br>
        <input type="submit" class="btn btn-success mt-3" value="Créer">
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>