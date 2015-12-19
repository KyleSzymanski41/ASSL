<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <div class="ban container">

            <div class="col-md-12">
                <div class="page-header">
                    <h1>Edit your user profile</h1>
                </div>
            </div>
            <?php if (validation_errors()) : ?>
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <p><?= validation_errors() ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($success)) : ?>
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        <p><?= $success ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['flash'])) : ?>
                <div class="col-md-12">
                    <div class="alert alert-success" role="alert">
                        <p><?= $_SESSION['flash'] ?></p>
                        <?php unset($_SESSION['flash']); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-md-12">
                <div class="row">
                    <?= form_open_multipart() ?>
                    <div class="col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Manage your account</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">

                                    <div class="col-sm-7 col-sm-offset-2">
                                        <div class="form-group">

                                            <input type="hidden" class="form-control" id="username" name="username" placeholder="<?= $user->username ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Your email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="<?= $user->email ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type="fname" class="form-control" id="fname" name="fname" placeholder="<?= $user->fname ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lname">Last Name</label>
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="<?= $user->lname ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="current_password">Current password</label>
                                            <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Enter your password if you want to change it">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">New password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter a new password">
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirm">Confirm new password</label>
                                            <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your new password">
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Update your profile">
                                    </div>
                                </div><!-- .row -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Delete your account</h3>
                            </div>
                            <div class="panel-body">
                                <p class="moo">If you want to delete your account, click the button below.</p>
                                <p class="moo"><strong>BE CAREFUL! If you click the link below, your account will be immediately and permanently deleted. No way back!</strong></p>
                                <a href="<?= base_url('index.php/user/' . $user->username . '/delete') ?>" class="btn btn-danger btn-block btn-sm" onclick="return confirm('Are you sure you want to delete your account? If you click OK, your account will be immediatly and permanently deleted. If deleted Logout afterwards')">Delete your account</a>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

