

<div class="sign section--bg" data-bg="<?= ASSETS ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form action="/user/recovery" class="sign__form" method="post">
                        <a href="index.html" class="sign__logo">
                            <img src="<?= ASSETS ?>img/logo.png" alt="">
                        </a>

                        <div class="sign__group">
                            <input type="password" class="sign__input" name="new_password" placeholder="New password"><br>
                            <small><?= $data['new_password']; ?></small>
                        </div>

                        <div class="sign__group">
                            <input type="password" class="sign__input" name="confirm_new_password" placeholder="Confirm new password"><br>
                            <small><?= $data['confirm_new_password']; ?></small>
                        </div>

                        <button class="sign__btn" type="submit" name="submit">Sign in</button>

                        <span class="sign__text">Password recovery</span>
                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>
