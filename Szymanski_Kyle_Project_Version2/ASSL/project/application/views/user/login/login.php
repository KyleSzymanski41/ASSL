<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
    label{
        color: #1f1d1d;
    }
    h1{
        color: white;
    }

    h2{
        color: white;
        font-size: 30px;
    }

    h3{
        color: white;
        font-size: 26px;
    }
    .waffle{
        background-color: #262626;
        width: 100%;
        padding: 3%;
        opacity: .9;
        color: white;
        border-right: 1px solid white;
    }


    p{
        color: white;
    }

    .log{
        border-bottom: 1px solid #1f1d1d ;
    }

    .container{
        width: 95%;
    }

    .ban1{
        text-align: center;
        padding: 2%;
        border-right: 1px solid white ;
        border-left: 1px solid white ;
    }
    .ban{
        text-align: center;
        padding: 2%;
        background-color: #262626;
        opacity: .9;
        color: white;
    }
    .space{
        padding: 1%;

    }

    .muffin{
        border-right: 1px solid white;
    }
</style>

<div class="container ban">
    <h2>Welcome To Vape School!</h2>
    <p class="space">Here at Vape school we are loooking forward to providing you with not only a friendly website, but a home for everything Vape Related! </p>
    <div class="row">
        <div class="col-lg-4">
            <?php echo img( array('src'=>'assets/images/images.jpeg','class' => 'ban1','alt'=>'Quit Smoking','width'=> '400px', 'height'=>'200px')); ?><br>
            <h4>Learn the Facts!</h4>
            <p>Ever wonder why Vaping has become so popular? Do you enjoy learning more about the products and the community? Then this is the right place for you.We are all about teaching the vaping way and what the industry is going through.</p>
        </div>
        <div class="col-lg-4">
            <?php echo img( array('src'=>'assets/images/vape.jpeg','class' => 'ban1','alt'=>'Quit Smoking','width'=> '400px', 'height'=>'200px')); ?><br>
            <h4>Vape School</h4>
            <p>This is one school you will enjoy! Here you can learn many new things that you may have never thought about. Ever wanted to build a duel clapton setup but didn't know how? Well here we have a community willing to share their knowledge with you! Welcome to the family friend!</p>
        </div>
        <div class="col-lg-4">
            <?php echo img( array('src'=>'assets/images/quit.jpg','class' => 'ban1','alt'=>'Quit Smoking','width'=> '400px', 'height'=>'200px')); ?><br>
            <h4>Quit Smoking!</h4>
            <p>Smoking....Well it is addictive and can also be very harmful to you. We know how hard it can be to quit, but vaping is one of the answers. Take the time out of your day to read a little bit as to why vaping can help you quit! It has worked for us, so why not you!</p>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <?php if (validation_errors()) : ?>
            <div class="col-lg-12">
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="col-lg-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>

            <?= form_open() ?>
            <div class="col-lg-12">
                <div class="page-header waffle">
                    <h1 class="log">Login</h1>

                        <form>
                            <div class="form-group waffle">
                                <div class="row">
                                    <div class="col-lg-8 muffin">
                                        <h2>What does being a profile member offer?</h2>
                                        <p>Having your own profile at Vape School offers many great advantages. Not only will you ba able to access certain content, but you will be able to do more with our site. Are you owner of a business looking for employees? or are you anverage joe looking for a job in the industry? Well Here at Vape School, being a member would allow you to not only post jobs, but access them as well. We are offering an email system that will let you talk directly to employers/Prospects. There are many more ways we are looking to help. So if you do not have a membership, Click on the link in the header of this page to register!</p> <br><br>
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password"><br>
                                        <input type="submit" class="btn btn-primary" value="Login"><br><br>

                                        <p>*Use the login form to login, if you are already logged in then you will notice a log out link in the nav bar above!*</p>
                                    </div>


                                    <div class="col-lg-4">
                                        <h2>Check out some of our latest Vape News!</h2>
                                        <p>Here at Vape School we offer a wonderful service to everyone who is looking to get into the world of vaping. People post to our boards everyday asking questions and giving answers. As a non-member we allow you to use and post to our boards just so you have a glimpse of what is possible for being a memeber. Click the Link below to take a test ride!</p>
                                       <a href="<? echo base_url('index.php/news')?>">View News!</a>

                                    </div>
                                </div>
                            </div>
                         </form>
                </div>
            </div>
        </div><!-- .row -->
</div><!-- .container -->