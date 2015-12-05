<style>
    label{
        color: #1f1d1d;
    }

    h2{
        color: #1f1d1d;
        font-size: 30px;
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

    textarea{
        width: 50%;
        padding: 2%;
    }

    .container{
        padding-bottom: 1%;
    }

    h1{
        font-size: 36px;
    }

    h3{
        font-size: 24px;
    }

    p{
        font-size: 18px;
    }
</style>


<div class="container">
    <div class="row">
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div class="col-lg-12">
    <div class="waffle">
        <h2 class="log"><?php echo $title; ?></h2>
        <form>
            <div class="form-group waffle">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="title">Vape Topic</label>
                        <input type="input" name="title" /><br /><br>

                        <label for="text">About Vape</label>
                        <textarea name="text"></textarea><br /><br>

                        <input type="submit" name="submit" class="btn btn-primary" value="Create news item"  />
                    </div>

                    <div class="col-lg-6">
                        <h2>I Can make my own Post?</h2>
                            <p>Well Come to Create a topic! Here you can post anything Vape related and the check it out on our board! Thank you for sharing!</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
        </div>
    </div>