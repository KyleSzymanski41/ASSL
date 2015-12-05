
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

    }
</style>

<div class="container">
    <div class="row">
        <div class="waffle">
            <?php echo '<h2 class="log3">'.$news_item['title'].'</h2>';
            echo '<p>'.$news_item['text']. '</p>';?>
            <a href="<? echo base_url('index.php/news')?>">Back to Archive</a>

            </div>
        </div>
    </div>
