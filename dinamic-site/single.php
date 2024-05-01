<?php include ("path.php"); ?>


<!doctype html>
<html lang="en">
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

<!-- HEADER -->

<?php include ("app/include/header.php"); ?>

<!-- END HEADER -->

<!--main-->
<div class="container">
    <div class="content row">
        <!--main content-->
        <div class="main-content col-md-9 col-12">
            <h3>Какая то конкретная хар. услуги</h3>
            <div class="single_post">
                <div class="img col-12">
                    <img src="image/chip3.png" alt="" class="img-thumbnail">
                    <i class="far fa-user">Имя Автора</i>
                    <i class="far fa-calendar">Mar 11, 2019</i>
                </div>
                <div class="single_post_text col-12">
                    <h3>Заголовок</h3>
                    <p>Диагностика и чиптюнинг <a href="#">Chery Tiggo</a> 7 pro max</p>
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
                    <li><a href="#">Услуга 1 </a> </li>
                    <li><a href="#">Услуга 2</a> </li>
                    <li><a href="#">Услуга 3</a> </li>
                    <li><a href="#">Услуга 4</a> </li>
                    <li><a href="#">Услуга 5</a> </li>
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