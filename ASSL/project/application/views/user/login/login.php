<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<style>
    label{
        color: #1f1d1d;
    }

    h1{
        color: #1f1d1d;
    }
    .waffle{
        background-color: #eee;
        width: 100%;
        padding: 3%;

        color: #1f1d1d;
    }

    .log{
        border-bottom: 1px solid #1f1d1d ;
    }

    .container{
        width: 95%;
    }
</style>



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
                                    <div class="col-lg-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password"><br>
                                        <input type="submit" class="btn btn-primary" value="Login"><br><br>

                                        <p>*Use the login form to login, if you are already logged in then you will notice a log out link in the nav bar above!*</p>
                                    </div>


                                    <div class="col-lg-6">
                                        <h2>What does being a profile member offer?</h2>
                                            <p>Having your own profile at Vape School offers many great advantages. Not only will you ba able to access certain content, but you will be able to do more with our site. Are you owner of a business looking for employees? or are you anverage joe looking for a job in the industry? Well Here at Vape School, being a member would allow you to not only post jobs, but access them as well. We are offering an email system that will let you talk directly to employers/Prospects. There are many more ways we are looking to help. So if you do not have a membership, Click on the link in the header of this page to register!</p>
                                    </div>
                                </div>
                            </div>
                         </form>
                </div>
            </div>
        </div><!-- .row -->
</div><!-- .container -->