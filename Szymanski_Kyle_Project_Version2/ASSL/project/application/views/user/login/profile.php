

<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>


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

        .ham{
            padding-left: 30%;
        }
    </style>


    <div class="ban container">
        <div class="row">
            <div class="col-lg-8">
                <h2> Your User Profile</h2>
                <p>Below you will find your current base user information to participate in the base aspects of our site.
                The base profile will allow you to view and delete your posts while if you want full membership please check out our premier membership. You can find more information about this membership on the more info links.</p>
                <h3> UserName: &nbsp <?php echo $_SESSION['username']; ?></h3>
                <h3> Email:&nbsp <?php echo $_SESSION['email'] ?></h3>
                <h3> First Name: &nbsp<?php echo $_SESSION['fname'] ?></h3>
                <h3> Last Name: &nbsp<?php echo $_SESSION['lname'] ?></h3>

                <button><a href="<?= base_url('index.php/logout') ?>">Logout</a></button>

                <?php endif; ?>
            </div>
            <div class="col-lg-3">

            <div>
                <?php echo img( array('src'=>'assets/images/vape.jpeg','class' => 'ban1','alt'=>'Quit Smoking','width'=> '400px', 'height'=>'200px')); ?><br>
                <h4 class="ham">Vape School</h4>
                <p class="ham">This is one school you will enjoy! Here you can learn many new things that you may have never thought about. Ever wanted to build a duel clapton setup but didn't know how? Well here we have a community willing to share their knowledge with you! Welcome to the family friend! <button class="btn btn-primary">Learn More</button></p>
            </div>
            </div>
        </div>
    </div>

