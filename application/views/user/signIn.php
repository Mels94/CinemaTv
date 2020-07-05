

<div class="sign section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form action="" class="sign__form" method="post">
                        <a href="/" class="sign__logo">
                            <img src="<?= ASSETS ?>img/logo.png" alt="">
                        </a>
                        <div class="sign__group">
                            <input type="text" class="sign__input" name="email" placeholder="Email"><br>
                            <small><?= $data['email']; ?></small>
                        </div>

                        <div class="sign__group">
                            <input type="password" class="sign__input" name="password" placeholder="Password"><br>
                            <small><?= $data['password']; ?></small>
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox">
                            <label for="remember">Remember Me</label>
                        </div>

                        <button class="sign__btn" type="submit" name="submit">Sign in</button>

                        <span class="sign__text">Don't have an account? <a href="/user/signUp">Sign up!</a></span>

                        <span class="sign__text"><a href="/user/forgot">Forgot password?</a></span>
                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>