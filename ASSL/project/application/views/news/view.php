
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

    .bord{
        border-bottom: 1px solid white;
        padding: 5%;

    }

    .bord1{
        border-top:1px solid white;
        padding: 5%;
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
        <div class="col-lg-12 waffle">
            <h2 class="bord1">Thank you for Viewing this Post!</h2>
            <?php echo '<h2 class="log3">'.$news_item['title'].'</h2>';
            echo '<p class="bord">'.$news_item['text']. '</p>';?>
            <p>Share this post about juices to your friends via FB using the button below!</p>
            <div class="fb-share-button" data-href="https://www.aliceinvapeland.com/" data-layout="button"></div><br><br>
            <a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="KyleSzymanski">Tweet</a><br>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <a href="<? echo base_url('index.php/news')?>">Back to Archive</a><br>

            <a href="<?php echo base_url('index.php/news/delete/'. $news_item['id']); ?>">Delete</a>
        </div>


    </div>
</div>

