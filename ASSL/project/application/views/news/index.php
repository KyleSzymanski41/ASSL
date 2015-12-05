
<style>
    label{
        color: #1f1d1d;
    }

    h2{
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
        padding-bottom: 1%;
    }

    .log2{
        font-size: 34px;
        text-align: center;
        padding-bottom: 2%;
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
</style>




<div class="container">
    <div class="row">
        <div class="waffle">
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

