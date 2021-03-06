<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP/Symfony Project</title>
</head>

<body>
    <!-- NAV-BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">ACCUEIL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">ACCUEIL</a>
                    </li> -->
                    <div class="mr-3">
                        <form class="form-inline my-2 my-lg-0" action="search">
                            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Rechercher sur le blog" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                        </form>
                    </div>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li> -->
                    <!-- 
                    <button class="btn btn-success" type="button">Sign In</button>
                    <button class="btn btn-sm btn-secondary" type="button">Sing Up</button>-->

                    <div class="btn-group">
                        <form action="/">
                            <input type="hidden" name="action" value="login">
                            <button type="submit" class="btn btn-success" aria-haspopup="true" aria-expanded="false">
                                LOGIN
                            </button>
                        </form>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Sign In</a>
                            <a class="dropdown-item" href="#">Sing Up</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- CARROUSEL
    <header class="container-fluid px-0">
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://placeimg.com/1200/300/nature/1" class="d-block w-100" alt="carrousel_img_1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://placeimg.com/1200/300/nature/2" class="d-block w-100" alt="carrousel_img_2">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </header> -->
    <main class="container">
        <div class="row">
            <section class="col col-lg-8 order-md-2">
                <!-- TITLE AND BREADCRUMB  -->
                <div class="row mt-3">
                    <div class="col">
                        <h1 class="font-weight-bolder">ARTICLES - CATEGORIE</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                                <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Catégorie</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- ARTICLES -->
                <div class="row">
                    <!-- ARTICLE 1 -->

                    <?php
                    // $items = array($announcement1, $announcement2, $announcement3);
                    foreach ($items as $oneItem) {
                    ?>

                        <div class="col-lg-4 my-1">
                            <div class="card mb-2 h-100">
                                <img src="https://placeimg.com/300/200/arch" class="card-img-top" alt="article1">
                                <div class="card-body">
                                    <div style="height: 3.5rem;">
                                        <h5 class="card-title font-weight-bolder"><?php echo $oneItem->title ?>
                                        </h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-7"> <a href="#" class="badge badge-secondary"><?= $oneItem->category->name ?></a>
                                        </div>
                                        <div class="col-5">
                                            <h6 class="text-right font-weight-bold" style="color:darkorange"><?= $oneItem->price ?></h6>
                                        </div>
                                    </div>
                                    <p style="overflow:hidden; text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 3; /* number of lines to show */   -webkit-box-orient: vertical;" class="card-text">
                                        <?php echo $oneItem->description ?>
                                    </p>

                                    <!-- SHOW NICKNAME -->
                                    <p class="card-text text-muted"><?php echo $oneItem->user->nickname ?></p>
                                </div>
                                <div class="card-body pt-0">
                                    <a href="#" class="card-link">Lire la suite</a>

                                    <!-- SEARCH -->
                                    <a href="?search=@<?= $oneItem->user->nickname ?>">@<?= $oneItem->user->nickname ?></a>

                                    <!-- DATE -->
                                    <p class="card-text"><small class="text-muted">
                                            <?php
                                            $oneItem->creationDate = strtotime($oneItem->creationDate);
                                            echo date('d F', $oneItem->creationDate);
                                            ?>
                                        </small>
                                    </p>

                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
            <!-- AUTHEUR -->
            <aside class="col col-lg-4  order-md-1 mt-3">
                <div class="card border-0">
                    <!-- <img src="https://i.pravatar.cc/100/100" class="card-img-top rounded-circle w-50 mx-auto" alt="image autheur"> -->
                    <!-- <div class="card-body text-center">
                        <h5 class="card-title font-weight-bolder">John Doe</h5>
                        <p class="card-text">Diplômé de l'école d'architecture de Caen</p>
                        <button type="button" class="btn btn-info">Voir tous les articles</button>
                    </div> -->
                    <div class="card">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">Sous-catégorie
                                1<a href="#" class="badge badge-secondary badge-pill">23</a></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Sous-catégorie
                                2<a href="#" class="badge badge-secondary badge-pill">11</a></li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">Sous-catégorie
                                3<a href="#" class="badge badge-secondary badge-pill">4</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <!-- FAQ -->
    <div class="container">
        <div class="row">
            <div class="offset-lg-4 col-lg-8">
                <h2 class="font-weight-bolder">FAQ</h2>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Lorem ipsum dolor sit amet, consectetur?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis minima illo aspernatur
                                magnam aliquid blanditiis non adipisci esse error sed!
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium officia explicabo
                                rerum recusandae libero repudiandae atque qui minima ducimus dolorum.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Lorem ipsum dolor sit amet?
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, inventore, veniam
                                natus adipisci labore rem consequatur cum ipsa dolor optio.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 text-center text-md-left">
                    ©2020 - Le blog de l'architecte
                </div>
                <div class="col-sm-12 col-md-6 text-center text-md-right">
                    Mention légales - Confidentalité
                </div>
            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://Announcement.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>