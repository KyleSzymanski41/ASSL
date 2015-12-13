<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<style>
    label{
        color: #fff;
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

    .ham{
        padding-left: 30%;
    }

    .container{
    width: 95%;
    }
</style>


<div class="container">
    <div class="row">
        <?php if (validation_errors()) : ?>

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
            <h1 class="log">Register</h1>
            <form>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
                                <p class="help-block">At least 4 characters, letters or numbers only</p>

                            <label for="fname">First name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your First name">
                            <p class="help-block">At least 3 characters, letters or numbers only</p>

                            <label for="lname">Last name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last name">
                            <p class="help-block">At least 4 characters, letters or numbers only</p>


                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                <p class="help-block">A valid email address</p>

                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
                                <p class="help-block">At least 6 characters</p>

                            <label for="password_confirm">Confirm password</label>
<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
<p class="help-block">Must match your password</p>

<input type="submit" class="btn btn-primary" value="Register">
</div>
<div class="col-lg-6">
    <h2>What does being a profile member offer?</h2>
    <p>Having your own profile at Vape School offers many great advantages. Not only will you ba able to access certain content, but you will be able to do more with our site. Are you owner of a business looking for employees? or are you anverage joe looking for a job in the industry? Well Here at Vape School, being a member would allow you to not only post jobs, but access them as well. We are offering an email system that will let you talk directly to employers/Prospects. There are many more ways we are looking to help. So if you do not have a membership, fill out this form and click register and you are good to go!</p>
</div>
</div>
</div>
</form>

</div>

</div><!-- .row -->
</div><!-- .container -->