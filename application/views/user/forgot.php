

<div class="sign section--bg" data-bg="<?= ASSETS ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content forgot-content">
                    <!-- authorization form -->
                    <form action="#" class="sign__form">
                        <a href="/" class="sign__logo">
                            <img src="<?= ASSETS ?>img/logo.png" alt="">
                        </a>

                        <div class="sign__group">
                            <input type="text" class="sign__input" name="email" placeholder="Email"><br>
                            <small></small>
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" checked="checked">
                            <label for="remember">I agree to the <a href="">Privacy Policy</a></label><br>
                            <small></small>
                        </div>

                        <button class="sign__btn forgot_btn" type="button">Send</button>

                        <span class="sign__text">We will send a password to your Email</span>
                    </form>
                    <p class="success-message"></p>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>