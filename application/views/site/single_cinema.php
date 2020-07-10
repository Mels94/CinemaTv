
<!-- cinema -->
<section class="section section_cinema">

    <!-- details content -->
    <div class="container">
        <div class="row">
            <!-- title -->
            <div class="col-12">
                <h1 class="cinema_title"><?= $data[0][0]['name']; ?> cinema</h1>
            </div>
            <!-- end title -->

            <!-- content -->
            <div class="col-12">
                <div class="cinema_img">
                    <img src="<?= ASSETS ?>images/cinemas/<?= $data[0][0]['img_path']; ?>" alt="cinema">
                </div>
                <div class="cinema_info">
                    <p><span>City: </span><?= $data[0][0]['city']; ?></p>
                    <p><span>Address: </span><?= $data[0][0]['address']; ?></p>
                    <p><span>Phone: </span><?= $data[0][0]['phone']; ?></p>
                </div>

            </div>
            <!-- end content -->


        </div>
    </div>
    <!-- end details content -->
</section>
<!-- end cinema -->

<!-- details -->
<section class="section details section_details">
    <!-- details background -->
    <div class="details__bg" data-bg="<?= ASSETS ?>img/home/home__bg.jpg"></div>
    <!-- end details background -->

    <!-- details content -->
    <div class="container">
        <div class="row">
            <!-- title -->
            <div class="col-12">
                <h1 class="details__title">Films</h1>
            </div>

            <!-- end title -->

            <!-- filter -->
            <div class="col-12">
                <div class="filter">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="filter__content">
                                    <div class="filter__items">
                                        <!-- filter item -->
                                        <div class="filter__item" id="filter__genre">
                                            <span class="filter__item-label">DATE:</span>
                                            <div class="filter__item-btn">
                                                <input type="text" data-range="true" data-multiple-dates-separator=" - " class="datepicker-here datepick"/>
                                            </div>
                                        </div>
                                        <!-- end filter item -->

                                    </div>
                                    <!-- filter btn -->
                                    <button class="filter__btn filter__singleCinema" type="button" data-id="<?= $data[0][0]['id']; ?>">apply filter</button>
                                    <!-- end filter btn -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end filter -->
            <?php
            $url = explode('/', $_SERVER['REQUEST_URI']);
            $param = array_pop($url);
            ?>
            <!-- catalog -->
            <div class="col-12">
                <div class="catalog">
                    <div class="container">
                        <div class="content_row">
                            <!-- card -->
                            <?php if (!empty($data) && isset($data[1])): ?>
                                <?php foreach ($data[1] as $item): ?>
                                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2 result">
                                        <div class="cards">
                                            <div class="card__cover">
                                                <img class="img_film"
                                                     src="<?= ASSETS ?>images/films/<?= $item['img_path']; ?>" alt="film">
                                                <a class="card__play popup__toggle">
                                                    <i class="icon ion-ios-play"></i>
                                                </a>
                                            </div>
                                            <div class="popup__overlay">
                                                <div class="popup">
                                                    <iframe src="https://www.youtube.com/embed/<?= $item['video_path']; ?>"
                                                            frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                            <div class="card__content">
                                                <h3 class="card__title"><a
                                                            href="/site/details_film_cinema/<?= $param; ?>/<?= $item['id']; ?>"><?= $item['name']; ?></a>
                                                </h3>
                                                <span class="card__category">
                                                <a><?= $item['genre']; ?></a>
                                            </span>
                                                <span class="card__rate"><i
                                                            class="icon ion-ios-star"></i><?= $item['rating']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card -->
                                <?php endforeach; ?>
                            <?php endif; ?>


                        </div>
                        <div class="pagingControls paginator--list"></div>
                    </div>
                </div>
            </div>

            <!-- end catalog -->
        </div>
    </div>
    <!-- end details content -->
</section>
<!-- end details -->