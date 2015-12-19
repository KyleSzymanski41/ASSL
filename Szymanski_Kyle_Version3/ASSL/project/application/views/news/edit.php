
<style>

body{
    background-image: url("<?php echo base_url();?>assets/images/vapeon.jpg");
}
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
<div class="ban container">
<div class="col-lg-12">
    <div class="waffle">
<h2>Edit This Post</h2>



<?php echo validation_errors(); ?>

<?php echo form_open('news/edit/'.$news_item['slug']) ?>
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group waffle">
                    <p>
                        <label for="title">Title</label>
                        <?php echo form_input('title',$news_item['title']); ?>
                    </p>

                    <p>
                        <label for="text">Post</label>
                         <?php echo form_textarea('text',$news_item['text']); ?>
                    </p>

                        <?php echo form_hidden('slug',$news_item['slug']); ?>
                        <?php echo form_hidden('id',$news_item['id']); ?>

                    <p>
                        <?php echo form_submit('submit', 'Save Changes'); ?>
                    </p>
                    </div>

                </div>
            </div>


                    <?php echo form_close(); ?>
        </div>

        <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>">Delete this article</a>
        </br>
        </br>
<a href='<?php echo site_url('news');?>'>Back</a>
        </div>
    </div>
</div>
