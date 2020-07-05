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
                <h1 class="details__title"><?= $data[1][0]['name']; ?></h1>
            </div>
            <!-- end title -->

            <!-- content -->
            <div class="col-12 col-xl-6">
                <div class="cards card--details">
                    <div class="row">
                        <!-- card cover -->
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                            <div class="card__cover">
                                <img class="single_img" src="<?= ASSETS ?>images/films/<?= $data[1][0]['img_path']; ?>"
                                     alt="film">
                            </div>
                            <div class="order_btn">
                                <button type="button" class="open-film-modal" data-id="<?= $data[1][0]['id']; ?>"
                                        accesskey="<?= $data[0][0]['id']; ?>" data-name="<?= $data[1][0]['name']; ?>">
                                    Ordered
                                </button>
                            </div>
                        </div>
                        <!-- end card cover -->

                        <!-- card content -->
                        <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                            <div class="card__content">
                                <div class="card__wrap">
                                    <span class="card__rate"><i
                                                class="icon ion-ios-star"></i><?= $data[1][0]['rating']; ?></span>
                                    <ul class="card__list">
                                        <li><?= $data[1][0]['allowed']; ?>+</li>
                                    </ul>
                                </div>

                                <ul class="card__meta">
                                    <li><span>Genre:</span> <a><?= $data[1][0]['genre']; ?></a>
                                    <li><span>Release year:</span> <?= $data[1][0]['film_date']; ?></li>
                                    <li><span>Running time:</span> <?= $data[1][0]['film_time']; ?> min</li>
                                </ul>

                                <div class="card__description card__description--details">
                                    <?= $data[1][0]['desc']; ?>
                                </div>
                            </div>
                        </div>
                        <!-- end card content -->
                    </div>
                </div>
            </div>
            <!-- end content -->

            <!-- player -->
            <div class="col-12 col-xl-6 iframe">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $data[1][0]['video_path']; ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <!-- end player -->

            <div class="col-12">
                <div class="details__wrap">
                    <!-- availables -->
                    <div class="details__devices">
                        <span class="details__devices-title">Available on devices:</span>
                        <ul class="details__devices-list">
                            <li><i class="icon ion-logo-apple"></i><span>IOS</span></li>
                            <li><i class="icon ion-logo-android"></i><span>Android</span></li>
                            <li><i class="icon ion-logo-windows"></i><span>Windows</span></li>
                            <li><i class="icon ion-md-tv"></i><span>Smart TV</span></li>
                        </ul>
                    </div>
                    <!-- end availables -->

                    <!-- share -->
                    <div class="details__share">
                        <span class="details__share-title">Share with friends:</span>

                        <ul class="details__share-list">
                            <li class="facebook"><a href="https://www.facebook.com/" target="_blank"><i class="icon ion-logo-facebook"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/" target="_blank"><i class="icon ion-logo-instagram"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/" target="_blank"></i></a></li>
                            <li class="vk"><a href="https://vk.com/" target="_blank"><i class="icon ion-logo-vk"></i></a></li>
                        </ul>
                    </div>
                    <!-- end share -->
                </div>
            </div>
        </div>
    </div>
    <!-- end details content -->
</section>
<!-- end details -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title title-name" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>