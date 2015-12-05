<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">




    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href='<?=base_url()?> assets/css/style.css' type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <title>Vapor School</title>
</head>



<style>
    body{
        background-color: lightslategrey;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }


    .container{
        width: 95%;
    }

    header{
        background-color: #8d0b00;
        margin: 3%;
    }

    header  h1{
        font-family: Lucida Grande, Verdana, Geneva, sans-serif;

        font-size: 36px;
        color: white;
        text-align: center;

    }
    a:hover{
        background-color: lightgray;
     }

    h1{
        font-size: 36px;
    }

    h2{
        font-size: 30px;
    }

    h3{
        font-size: 24px;
    }

    p{
        font-size: 18px;
    }


</style>

<header>
    <h1>Vape School: Vaping <?php echo img('assets/images/logo.png'); ?>  has become an art!</h1>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url('index.php/login') ?>">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url() ?>"> Profile <span class="sr-only"></span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vape News <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<? echo site_url("/news"); ?>">Vape Archive</a></li>
                            <li><a href="<? echo site_url("/news/create"); ?>">Share your Vape</a></li>
                            <li><a href="#">Upload videos</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FAQS <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Who are we?</a></li>
                            <li><a href="#">What is our goal?</a></li>
                            <li><a href="#">What do we teach?</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
                            <li><a href="<?= base_url('index.php/logout') ?>">Logout</a></li>
                        <?php else : ?>
                            <li><a href="<?= base_url('index.php/register') ?>">Register</a></li>
                            <li><a href="<?= base_url('index.php/login') ?>">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div><!-- .navbar-collapse -->
            </div><!-- .container-fluid -->
    </nav><!-- .navbar -->
</header><!-- #site-header -->

<main id="site-content" role="main">

    <?php if (isset($_SESSION)) : ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="jumbotron">
                    <h1>Welcome To Vape School!</h1>
                    <p>What is Vape School? Well in short we are a devoted group of people who have dedicated our time and knowledge to the world of vaping! We have used our expert knowledge to bring together a community that will be able to come together as one. Want to learn more, click the learn more button below!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>

                </div>
            </div>
        </div>

<?php endif; ?>