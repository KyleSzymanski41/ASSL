<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<style>
    body{
        background-image: url("<?php echo base_url();?>assets/images/vapeon.jpg");
    }
</style>
    <div class="ban container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1 class="must2">USER PROFILE <?= $edit_button ?></h1>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-6 must3">
                    <h2>Vape School</h2>
                        <p>Welcome to your Profile! Here you can review your information and make edits if need be. Just note your username will not be editable! Vape on VapeHead!</p> <?php echo img( array('src'=>'assets/images/images.jpeg')); ?>
                 </div>

            <div class="col-lg-6 must3 ">
                <?php echo img( array('src'=>'assets/images/vapehead.jpeg')); ?>
                <h2> Username: <?= $user->username ?></h2>
                        <p class="must">Email: <?= $user->email ?></p>
                        <p class="must">First Name: <?= $user->fname?></p>
                        <p class="must">Last Name <?= $user->lname?></p>
                        <p class="must">Joined: <?= $user->created_at ?></p>
            </div>
        </div>
    </div>
<div class="container ban2">
        <div class="row">
            <div class="col-lg-12">
                <div class="video">
                    <h2 class="must1">Check out some sweet vape tricks!</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/G0zLjmSN7Xg" frameborder="0" allowfullscreen></iframe>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/DRUxA8U51xc" frameborder="0" allowfullscreen></iframe>
                </div>

            </div>
        </div>
    </div>


