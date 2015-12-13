
<style>
    label{
        color: #1f1d1d;
    }

    h2{
        color: #1f1d1d;
    }
    .waffle{
        background-color: #262626;
        width: 100%;
        padding: 3%;
        opacity: .9;
        color: white;
        border-right: 1px solid white;
    }

    .log{
        border-bottom: 1px solid white ;
        padding-bottom: 1%;
    }

    .log2{
        font-size: 34px;
        text-align: center;
        padding-bottom: 2%;
        color: #fff;
    }

    .log3{
        font-size: 30px;
        padding-bottom: 1%;
    }

    textarea{
        width: 50%;
        padding: 2%;
    }

    .container{
        padding-bottom: 1%;
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
</style>




<div class="container ban">
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
    <div class="row">
        <div class="waffle col-lg-12">
            <h2 class="log2"><?php echo $title; ?></h2>
                <?php foreach ($news as $news_item): ?>
                    <h3 class="log3"><?php echo $news_item['title']; ?></h3>
                        <?php echo $news_item['text']; ?>
                            <p class="log"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View Forum</a></p>
                        <?php endforeach; ?>
                        <a href="<? echo base_url('index.php/news/create')?>">Create Post</a>
        </div>


        </div>
    </div>
</div>

