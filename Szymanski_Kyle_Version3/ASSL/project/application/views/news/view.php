
<style>
    body{
        background-image: url("<?php echo base_url();?>assets/images/vapeon.jpg");
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
            <a href="<?php echo base_url('index.php/news/edit/'. $news_item['slug']); ?>">Edit</a>
        </div>


    </div>
</div>

