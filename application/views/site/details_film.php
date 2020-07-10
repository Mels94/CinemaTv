<!-- details -->
<section class="section details">
    <!-- details background -->
    <div class="details__bg" data-bg="<?= ASSETS ?>img/home/home__bg.jpg"></div>
    <!-- end details background -->

    <!-- details content -->
    <div class="container">
        <div class="row">
            <!-- title -->
            <div class="col-12">
                <h1 class="details__title"><?= $data[0][0]['name']; ?></h1>
            </div>
            <!-- end title -->

            <!-- content -->
            <div class="col-10">
                <div class="cards card--details card--series">
                    <div class="row">
                        <!-- card cover -->
                        <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-3">
                            <div class="card__cover">
                                <img class="single_img" src="<?= ASSETS ?>images/films/<?= $data[0][0]['img_path']; ?>"
                                     alt="film">
                            </div>
                        </div>
                        <!-- end card cover -->

                        <!-- card content -->
                        <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-9">
                            <div class="card__content">
                                <div class="card__wrap">
                                    <span class="card__rate"><i
                                                class="icon ion-ios-star"></i><?= $data[0][0]['rating']; ?></span>

                                    <ul class="card__list">
                                        <li><?= $data[0][0]['allowed']; ?>+</li>
                                    </ul>
                                </div>

                                <ul class="card__meta">
                                    <li><span>Genre:</span> <a><?= $data[0][0]['genre']; ?></a>
                                    <li><span>Release year:</span> <?= $data[0][0]['film_date']; ?></li>
                                    <li><span>Running time:</span> <?= $data[0][0]['film_time']; ?> min</li>
                                </ul>

                                <div class="card__description card__description--details">
                                    <?= $data[0][0]['desc']; ?>
                                </div>
                            </div>
                        </div>
                        <!-- end card content -->
                    </div>
                </div>
            </div>
            <!-- end content -->

            <!-- player -->
            <div class="col-12 col-xl-6 iframe mb-3">
                <iframe width="560" height="301" src="https://www.youtube.com/embed/<?= $data[0][0]['video_path']; ?>"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
            <!-- end player -->

            <!-- accordion -->
            <div class="col-12 col-xl-6">
                <div class="accordion" id="accordion">
                    <?php if (!empty($data) && isset($data[1])): ?>
                        <?php foreach ($data[1] as $item): ?>
                            <div class="accordion__card">
                                <div class="card-header" id="headingOne<?= $item['id']; ?>">
                                    <button type="button" class="accordion_btn" data-toggle="collapse" data-target="#collapseOne<?= $item['id']; ?>"
                                            aria-expanded="false" aria-controls="collapseOne"
                                            data-id="<?= $item['id']; ?>" accesskey="<?= $data[0][0]['id']; ?>" data-name="<?= $data[0][0]['name']; ?>">
                                        <span><?= $item['name']; ?> cinema</span>
                                        <span><?= $item['city']; ?>, <?= $item['address']; ?></span>
                                    </button>
                                </div>

                                <div id="collapseOne<?= $item['id']; ?>" class="collapse" aria-labelledby="headingOne<?= $item['id']; ?>"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <table class="accordion__list">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Start</th>
                                                <th>End</th>
                                            </tr>
                                            </thead>

                                            <tbody class="tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <!-- end accordion -->

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
                            <li class="twitter"><a href="https://twitter.com/" target="_blank"><i class="icon ion-logo-twitter"></i></a></li>
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


<div class="modal fade modal-details" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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