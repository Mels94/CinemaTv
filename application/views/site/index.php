

<!-- home -->
<section class="home">
    <!-- home bg -->
    <div class="owl-carousel home__bg">
        <div class="item home__cover" data-bg="<?= ASSETS ?>img/home/home__bg.jpg"></div>
        <div class="item home__cover" data-bg="<?= ASSETS ?>img/home/home__bg2.jpg"></div>
        <div class="item home__cover" data-bg="<?= ASSETS ?>img/home/home__bg3.jpg"></div>
        <div class="item home__cover" data-bg="<?= ASSETS ?>img/home/home__bg4.jpg"></div>
    </div>
    <!-- end home bg -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="home__title">CINEMAS</h1>

                <button class="home__nav home__nav--prev" type="button">
                    <i class="icon ion-ios-arrow-round-back"></i>
                </button>
                <button class="home__nav home__nav--next" type="button">
                    <i class="icon ion-ios-arrow-round-forward"></i>
                </button>
            </div>

            <div class="col-12">
                <div class="owl-carousel home__carousel">
                    <?php if (!empty($data) && isset($data[0])): ?>
                    <?php foreach ($data[0] as $item): ?>
                    <div class="item">
                        <!-- card -->
                        <div class="cards card--big">
                            <a href="/site/single_cinema/<?= $item['id']; ?>">
                                <div class="card__cover">
                                    <img class="img_cinema" src="<?= ASSETS ?>images/cinemas/<?= $item['img_path']; ?>" alt="cinemas">
                                </div>
                            </a>
                            <div class="card__content">
                                <h3 class="card__title"><a href="/site/single_cinema/<?= $item['id']; ?>"><?= $item['name']; ?></a></h3>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- end home -->

<!-- content -->
<section class="content">
    <div class="content__head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- content title -->
                    <h2 class="content__title">Films</h2>
                    <!-- end content title -->

                    <!-- content tabs nav -->
                    <ul class="nav content__tabs" id="content__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW MOVIES</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">TODAY'S MOVIES</a>
                        </li>
                    </ul>
                    <!-- end content tabs nav -->

                    <!-- content mobile tabs nav -->
                    <div class="content__mobile-tabs" id="content__mobile-tabs">
                        <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="button" value="New items">
                            <span></span>
                        </div>

                        <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">NEW RELEASES</a></li>

                                <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end content mobile tabs nav -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- content tabs -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                <div class="row">
                    <!-- card -->
                    <?php if (!empty($data) && isset($data[1])): ?>
                    <?php foreach ($data[1] as $item): ?>
                    <div class="col-6 col-sm-12 col-lg-6">
                        <div class="cards card--list">
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <div class="card__cover">
                                        <img class="new_img" src="<?= ASSETS ?>images/films/<?= $item['img_path']; ?>" alt="newFilm">
                                        <a class="card__play popup__toggle">
                                            <i class="icon ion-ios-play"></i>
                                        </a>
                                    </div>
                                    <div class="popup__overlay">
                                        <div class="popup">
                                            <iframe src="https://www.youtube.com/embed/<?= $item['video_path']; ?>" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-8">
                                    <div class="card__content">
                                        <h3 class="card__title"><a href="/site/details_film/<?= $item['id']; ?>"><?= $item['name']; ?></a></h3>
                                        <span class="card__category">
											<a><?= $item['genre']; ?></a>
										</span>

                                        <div class="card__wrap">
                                            <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item['rating']; ?></span>
                                            <ul class="card__list">
                                                <li><?= $item['allowed']; ?>+</li>
                                            </ul>
                                        </div>

                                        <div class="card__description">
                                            <p><?= $item['desc']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- end card -->

                </div>
            </div>

            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                <div class="row">
                    <?php if (!empty($data) && isset($data[2])): ?>
                    <?php foreach ($data[2] as $item): ?>
                    <!-- card -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="cards">
                            <div class="card__cover">
                                <img class="img_film" src="<?= ASSETS ?>images/films/<?= $item['img_path']; ?>" alt="todayFilm">
                                <a class="card__play popup__toggle">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="popup__overlay">
                                <div class="popup">
                                    <iframe src="https://www.youtube.com/embed/<?= $item['video_path']; ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a href="/site/details_film/<?= $item['id']; ?>"><?= $item['name']; ?></a></h3>
                                <span class="card__category">
										<a><?= $item['genre']; ?></a>
									</span>
                                <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item['rating']; ?></span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <!-- end content tabs -->
    </div>
</section>
<!-- end content -->

<!-- partners -->
<section class="section section--bg" data-bg="img/section/section.jpg">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-12">
                <h2 class="section__title section__title--no-margin">Our Partners</h2>
            </div>
            <!-- end section title -->

            <!-- section text -->
            <div class="col-12">
                <p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
            </div>
            <!-- end section text -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="<?= ASSETS ?>img/partners/themeforest-light-background.png" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="<?= ASSETS ?>img/partners/audiojungle-light-background.png" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="<?= ASSETS ?>img/partners/codecanyon-light-background.png" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="<?= ASSETS ?>img/partners/photodune-light-background.png" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="<?= ASSETS ?>img/partners/activeden-light-background.png" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->

            <!-- partner -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#" class="partner">
                    <img src="<?= ASSETS ?>img/partners/3docean-light-background.png" alt="" class="partner__img">
                </a>
            </div>
            <!-- end partner -->
        </div>
    </div>
</section>
<!-- end partners -->