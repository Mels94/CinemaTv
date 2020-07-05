

<div class="sign section--bg" data-bg="<?= ASSETS ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form action="" class="sign__form" method="post">
                        <a href="/" class="sign__logo">
                            <img src="<?= ASSETS ?>img/logo.png" alt="">
                        </a>
                        <div class="sign__group">
                            <input type="text" class="sign__input" name="name" placeholder="First Name"><br>
                            <small><?= $data['first_name']; ?></small>
                        </div>

                        <div class="sign__group">
                            <input type="text" class="sign__input" name="surname" placeholder="Last Name"><br>
                            <small><?= $data['last_name']; ?></small>
                        </div>

                        <div class="sign__group">
                            <input type="text" class="sign__input" name="username" placeholder="Username"><br>
                            <small><?= $data['username']; ?></small>
                        </div>

                        <div class="sign__group">
                            <input type="text" class="sign__input" name="email" placeholder="Email"><br>
                            <small><?= $data['email']; ?></small>
                        </div>

                        <div class="sign__group">
                            <input type="password" class="sign__input" name="password" placeholder="Password"><br>
                            <small><?= $data['password']; ?></small>
                        </div>

                        <button class="sign__btn" type="submit" name="submit">Sign up</button>

                        <span class="sign__text">Already have an account? <a href="/user/signIn">Sign in!</a></span>
                    </form>
                    <!-- registration form -->
                </div>
            </div>
        </div>
    </div>
</div>
