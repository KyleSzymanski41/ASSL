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
        <div class="col-md-12">
            <div class="waffle">
                <h1 class="log">Login success!</h1>

            <p>You are now logged in. We here at Vape School Sugest you check out our forum page! You can follow this link!</p>
            <a href="<? echo site_url("/news"); ?>">Latest News</a>
            </div>
        </div>
    </div><!-- .row -->
</div><!-- .container -->