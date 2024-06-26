<?php
    include ("path.php");
    include "app/controllers/topics.php";

global $topics;
?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/3a6f1bcfc0.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>My blog</title>
</head>
<body>

<?php include ("app/include/header.php"); ?>

<!--блок карусели START-->
<div class="container"> <!-- -fluid -->
   <!-- <div class="row">
        <h2 class="slider-title">Почувствуй скорость</h2>
    </div> -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!--<div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>-->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/mercedes123.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="">Увеличьте скорость своего автомобиля</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/mercedes1234.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="">Подбери свой дисплей</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/mercedes_benz.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="">Выбирайте комфортный салон</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--блок каруселиEND-->
<!--main-->


<div class="container">

    <!--<section class="container">
        <section class="card__container">
            <div class="card__bx" style="--clr: #ffffff">
                <div class="card__data">
                    <div class="card__icon">
                    </div>
                    <div class="card__content">
                        <h3>Designing</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: #ffffff">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <div class="card__content">
                        <h3>Develoment</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="card__bx" style="--clr: #ffffff">
                <div class="card__data">
                    <div class="card__icon">
                        <i class="fa-brands fa-searchengin"></i>
                    </div>
                    <div class="card__content">
                        <h3>SEO</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>

        </section>

    </section> -->
    <div class="content row">
        <!--main content-->
        <div class="main-content col-md-9 col-12">
            <h3>Наши возможности</h3>
            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/chip3.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Чип тюнинг</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Stage 1
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/chip3.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Прошивка дисплея</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Тема панели
                    </p>
                </div>
            </div>

            <div class="post row">
                <div class="img col-12 col-md-4">
                    <img src="assets/images/chip3.png" alt="" class="img-thumbnail">
                </div>
                <div class="post_text col-12 col-md-8">
                    <h3>
                        <a href="#">Обшивка салона</a>
                    </h3>
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Обшивка салона
                    </p>
                </div>
            </div>

        </div>
        <!--sidebar Content-->
        <div class="sidebar col-md-3 col-12">
            <div class="section search">
                <h3>Поиск</h3>
                <form action="/" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Введите искомое слово...">
                </form>
            </div>

            <div class="section topics">
                <h3>Категории</h3>
                <ul>
                    <?php foreach ($topics as $key => $topic): ?>
                    <li>
                        <a href="#"><?=$topic['name'];?></a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- блок main END -->

<!-- footer -->

<?php include ("app/include/footer.php"); ?>


<!-- footer END -->


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>