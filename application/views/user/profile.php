<?php use application\components\GlobalData; ?>

<!-- page title -->
<section class="section section--first section--bg" data-bg="<?= ASSETS ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <h2 class="section__title">My CinemaTV</h2>
                    <!-- end section title -->

                    <!-- breadcrumb -->
                    <ul class="breadcrumbs">
                        <li class="breadcrumb__item"><a href="/">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Profile</li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- content -->
<div class="content">
    <!-- profile -->
    <div class="profile">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="profile__content">
                        <div class="profile__user">
                            <div class="profile__avatar">
                                <img src="<?= ASSETS ?>img/user.jpg" alt="">
                            </div>
                            <div class="profile__meta">
                                <h3><?= GlobalData::getUser()[0]['username']; ?></h3>
                                <span>CinemaTV ID: <?= GlobalData::getUser()[0]['id']; ?></span>
                            </div>
                        </div>

                        <button class="profile__logout" type="button" data-toggle="modal" data-target="#modal-logout">
                            <i class="icon ion-ios-log-out"></i>
                            <span>Logout</span>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end profile -->

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content">
            <div class="tab-pane fade show active" role="tabpanel">
                <div class="row">
                    <!-- details form -->
                    <div class="col-12 col-lg-6">
                        <form action="/user/profile" class="profile__form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="profile__title">Profile details</h4>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="username">Username</label>
                                        <input id="username" type="text" name="username" class="profile__input"
                                                value="<?php if (!empty($data) && isset($data[1][0])){ echo $data[1][0]['username']; } ?>">
                                        <small class="form-text text-muted"><?= $data[0]['username']; ?></small>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="email">Email</label>
                                        <input id="email" type="text" name="email" class="profile__input"
                                                value="<?php if (!empty($data) && isset($data[1][0])){ echo $data[1][0]['email']; } ?>">
                                        <small class="form-text text-muted"><?= $data[0]['email']; ?></small>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="firstname">First Name</label>
                                        <input id="firstname" type="text" name="name" class="profile__input"
                                               value="<?php if (!empty($data) && isset($data[1][0])){ echo $data[1][0]['first_name']; } ?>">
                                        <small class="form-text text-muted"><?= $data[0]['first_name']; ?></small>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="lastname">Last Name</label>
                                        <input id="lastname" type="text" name="surname" class="profile__input"
                                               value="<?php if (!empty($data) && isset($data[1][0])){ echo $data[1][0]['last_name']; } ?>">
                                        <small class="form-text text-muted"><?= $data[0]['last_name']; ?></small>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="profile__btn" type="submit" name="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end details form -->

                    <!-- password form -->
                    <div class="col-12 col-lg-6">
                        <form action="#" class="profile__form" id="profile_form" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="profile__title">Change password</h4>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="oldpass">Old Password</label>
                                        <input id="oldpass" type="password" name="password" class="profile__input">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="newpass">New Password</label>
                                        <input id="newpass" type="password" name="new_password" class="profile__input">
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                    <div class="profile__group">
                                        <label class="profile__label" for="confirmpass">Confirm New Password</label>
                                        <input id="confirmpass" type="password" name="confirm_new_password" class="profile__input">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="profile__btn change_password" type="button" name="change">Change</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-right">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-profile">
                                Delete profile
                            </button>
                        </div>

                    </div>
                    <!-- end password form -->

                </div>
            </div>

        </div>
        <!-- end content tabs -->
    </div>
</div>
<!-- end content -->




<!-- Modal -->
<div class="modal fade mt-5" id="modal-logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Warning!</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                do you really want to go out
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="/logout">
                    <button type="button" class="btn btn-primary">Ok</button>
                </a>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="modal-delete-profile" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete your profile</h4>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <form action="/user/delete" method="post">
                <div class="modal-body">
                    <input type="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger delete_account"
                            data-dismiss="modal">Delete
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>