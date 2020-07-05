<?php use application\components\GlobalData; ?>
<!-- page title -->
<section class="section section--first section--bg" data-bg="<?= ASSETS ?>img/section/section.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section__wrap">
                    <!-- section title -->
                    <h2 class="section__title">Films grid</h2>
                    <!-- end section title -->

                    <!-- breadcrumb -->
                    <ul class="breadcrumbs">
                        <li class="breadcrumb__item"><a href="/">Home</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Films grid</li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- filter -->
<div class="filter">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filter__content">
                    <div class="filter__items">
                        <!-- filter item -->
                        <div class="filter__item" id="filter__genre">
                            <span class="filter__item-label">GENRE:</span>

                            <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="All genres" class="filter__genre">
                                <span></span>
                            </div>

                            <ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                                <?php if (!empty(GlobalData::getGenre())): ?>
                                    <li>All genres</li>
                                <?php foreach (GlobalData::getGenre() as $item): ?>
                                    <li class="genre"><?= $item['genre']; ?></li>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <!-- end filter item -->

                        <!-- filter item -->
                        <div class="filter__item" id="filter__rate">
                            <span class="filter__item-label">IMBd:</span>

                            <div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="filter__range">
                                    <div id="filter__imbd-start"></div>
                                    <div id="filter__imbd-end"></div>
                                </div>
                                <span></span>
                            </div>

                            <div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-rate">
                                <div id="filter__imbd"></div>
                            </div>
                        </div>
                        <!-- end filter item -->

                        <!-- filter item -->
                        <div class="filter__item" id="filter__year">
                            <span class="filter__item-label">RELEASE YEAR:</span>

                            <div class="filter__item-btn dropdown-toggle" role="button" id="filter-year" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="filter__range">
                                    <div id="filter__years-start"></div>
                                    <div id="filter__years-end"></div>
                                </div>
                                <span></span>
                            </div>

                            <div class="filter__item-menu filter__item-menu--range dropdown-menu" aria-labelledby="filter-year">
                                <div id="filter__years"></div>
                            </div>
                        </div>
                        <!-- end filter item -->
                    </div>

                    <!-- filter btn -->
                    <button class="filter__btn filter__grid" type="button">apply filter</button>
                    <!-- end filter btn -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end filter -->

<!-- catalog -->
<div class="catalog">
    <div class="container">
        <div class="content_row">
            <!-- card -->
            <?php if (!empty($data) && isset($data)): ?>
            <?php foreach ($data as $item): ?>
            <div class="col-6 col-sm-4 col-lg-3 col-xl-2 result">
                <div class="cards">
                    <div class="card__cover">
                        <img class="img_film" src="<?= ASSETS ?>images/films/<?= $item['img_path']; ?>" alt="films">
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
                        <h3 class="card__title"><a href="/site/details_film/<?= $item['id']; ?>"><?= $item['name']; ?></a></h3>
                        <span class="card__category">
								<a><?= $item['genre']; ?></a>
							</span>
                        <span class="card__rate"><i class="icon ion-ios-star"></i><?= $item['rating']; ?></span>
                    </div>
                </div>
            </div>
                <?php endforeach; ?>
            <?php endif; ?>
            <!-- end card -->
        </div>
        <div class="pagingControls paginator--list"></div>

    </div>
</div>
<!-- end catalog -->