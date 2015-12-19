<style>


    label{
        color: white;
    }

    h2{
        color: white;
    }
    .waffle{
        background-color: #262626;
        width: 100%;
        padding: 3%;
        opacity: .9;
        color: white;
        border-right: 1px solid white;
    }



    textarea{
        width: 50%;
        padding: 2%;
        color: black;
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
        color: white;
        font-size: 18px;
    }

    text{
        color: black;
    }

    input{
        color: black;
    }

    .comments-wrapper .comment-body p, .comments-wrapper .squarespace-comments .new-comment-area .input form.comment-form textarea {
        color: #000;
    }



    input[type="text"], textarea {

        background-color : #d1d1d1;
        color: #000;
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
                        <textarea class="blk" name="text"></textarea><br /><br>

                        <input type="submit" name="submit" class="btn btn-primary" value="Create news item"  />
                    </div>

                    <div class="col-lg-6">
                        <h2>I Can make my own Post?</h2>
                            <p>Welcome to Create a topic! Here you can post anything Vape related and the check it out on our board! Thank you for sharing!</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
        </div>
    </div>