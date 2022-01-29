<?php require_once 'inc/functions.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Shop</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

    <section class="products mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card">
                        <div class="card-body">
                            <h5 class="card-title">Товар 1</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <p class="price text-danger">100 RUB</p>
                                <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="100" data-product="Товар 1">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card">
                        <div class="card-body">
                            <h5 class="card-title">Товар 2</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <p class="price text-danger">110 RUB</p>
                                <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="110" data-product="Товар 2">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card">
                        <div class="card-body">
                            <h5 class="card-title">Товар 3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <p class="price text-danger">150 RUB</p>
                                <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="150" data-product="Товар 3">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card">
                        <div class="card-body">
                            <h5 class="card-title">Товар 4</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <p class="price text-danger">120 RUB</p>
                                <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="120" data-product="Товар 4">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card">
                        <div class="card-body">
                            <h5 class="card-title">Товар 5</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <p class="price text-danger">170 RUB</p>
                                <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="170" data-product="Товар 5">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="card mb-3">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Card">
                        <div class="card-body">
                            <h5 class="card-title">Товар 6</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="d-flex justify-content-between">
                                <p class="price text-danger">140 RUB</p>
                                <button type="button" class="btn btn-primary buy" data-bs-toggle="modal" data-bs-target="#cart" data-price="140" data-product="Товар 6">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="modal fade"  id="cart">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Оформление заказа</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="buy" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ваше имя</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Имя..." required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Ваша почта</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Почта..." required>
                    </div>
                    <div class="mb-3">
                        <label for="product" class="form-label">Выбраный товар</label>
                        <input type="text" name="product" class="form-control" id="product" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Цена</label>
                        <input type="text" name="price" class="form-control" id="price" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Купить</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>