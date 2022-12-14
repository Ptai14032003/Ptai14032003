<!DOCTYPE html>
<html lang="en">

<head>
    <!--Required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/07a69f92d2.js" crossorigin="anonymous"></script>
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/css/grid.css">
    <link rel="stylesheet" href="./public/css/client/style.css">
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="grid wide">
            <div class="row">
                <div class="col l-6">
                    <nav class="navbar navbar-expand-lg  ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php?ctr=home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?ctr=about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Specials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?ctr=menu">Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?ctr=contact">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?ctr=review">Review</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col l-4">
                    <form action="index.php?ctr=menu" method="POST" class="search row">
                        <input type="text" name="word" placeholder="T??m ki???m">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="col l-2 user">
                    <ul class="row">
                        <li><a href="index.php?ctr=viewcart"><i class="fas fa-shopping-cart"></i></a></li>
                        <li class="dropdown">
                            <a href="#"><i class="fas fa-user"></i></a>
                            <ul>
                                <?php if(isset($_SESSION['email']) && isset($_SESSION['id']) && ($_SESSION['roles']==0)) : ?>
                                    <li><a href="index.php?ctr=doi_mat_khau">?????i M???t Kh???u</a></li>
                                    <li><a href="index.php?ctr=cap_nhat_thong_tin">C???p Nh???t Th??ng Tin</a></li>
                                    <li><a href="index.php?ctr=logout">????ng xu???t</a></li>
                                <?php elseif(isset($_SESSION['email']) && isset($_SESSION['id']) && ($_SESSION['roles']==1)) : ?>
                                    <li><a href="index.php?ctr=admin">Trang Qu???n Tr???</a></li>
                                    <li><a href="index.php?ctr=doi_mat_khau">?????i M???t Kh???u</a></li>
                                    <li><a href="index.php?ctr=cap_nhat_thong_tin">C???p Nh???t Th??ng Tin</a></li>
                                    <li><a href="index.php?ctr=logout">????ng xu???t</a></li>
                                <?php else : ?>
                                    <li><a href="index.php?ctr=login">????ng nh???p</a></li>
                                    <li><a href="index.php?ctr=register">????ng k??</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </header>