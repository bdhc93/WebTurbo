

<div class="mb-md-6 mb-lg-0">
    <div class="row">
        <div class="col-md-4 col-lg-12">
            <div class="d-none d-md-block">
                <div class="mb-4">
                    <ul class="nav nav-tabs nav-justified blog-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab"
                               aria-controls="recent" aria-selected="true">Recientes</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="popular-tab" data-toggle="tab" href="#popular" role="tab" aria-controls="popular"
                               aria-selected="false">Populares</a>
                        </li>
                    </ul>

                    <div class="tab-content bg-smoke border border-light-gray border-top-0 rounded-bottom px-3 py-5"
                         id="myTabContent">
                        <div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">

                            <?php
                            include_once 'models/rankingext.php';
                            foreach ($this->ranking as $row) {
                                $ranking = new MRankingext();
                                $ranking = $row;

                                ?>

                                <div class="media meta-post-sm border-bottom border-off-white pb-3 mb-3">
                                    <div class="img-overlay rounded mr-2">
                                        <img src="<?php /*echo constant('URL'); */?>public/img/blog/tab-01.jpg" alt="Generic placeholder image">
                                        <a href="<?php echo $ranking-> url?>" target="_blank" class="hover-img-overlay-dark">
                                            <i class="fa fa-youtube-play text-white" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    <div class="media-body">
                                        <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="text-dark hover-text-primary text-capitalize mb-1">
                                            <?php echo $ranking-> nombre?> - <?php echo $ranking-> artista?>
                                        </a>

                                        <ul class="list-unstyled d-flex flex-wrap mb-0">
                                            <li class="meta-tag text-gray-color mr-4 mb-1">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <span class="ml-1 text-capitalize"><?php echo $ranking-> fecha?></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>


<!--                            <div class="media meta-post-sm">-->
<!--                                <div class="img-overlay rounded mr-2">-->
<!--                                    <img src="--><?php ///*echo constant('URL'); */?><!--public/img/blog/tab-01.jpg" alt="Generic placeholder image">-->
<!--                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="hover-img-overlay-dark">-->
<!--                                        <i class="fa fa-youtube-play text-white" aria-hidden="true"></i>-->
<!--                                    </a>-->
<!--                                </div>-->
<!---->
<!--                                <div class="media-body">-->
<!--                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="text-dark hover-text-primary text-capitalize mb-1">-->
<!--                                        HAWAI - MALUMA-->
<!--                                    </a>-->
<!---->
<!--                                    <ul class="list-unstyled d-flex flex-wrap mb-0">-->
<!--                                        <li class="meta-tag text-gray-color mr-4 mb-1">-->
<!--                                            <i class="fa fa-calendar" aria-hidden="true"></i>-->
<!--                                            <span class="ml-1 text-capitalize">5 March, 2019</span>-->
<!--                                        </li>-->
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>

                        <div class="tab-pane fade" id="popular" role="tabpanel" aria-labelledby="popular-tab">

                            <div class="media meta-post-sm border-bottom border-off-white pb-3 mb-3">
                                <div class="img-overlay rounded mr-2">
                                    <img src="<?php /*echo constant('URL'); */?>public/img/blog/tab-01.jpg" alt="Generic placeholder image">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="hover-img-overlay-dark">
                                        <i class="fa fa-youtube-play text-white" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="text-dark hover-text-primary text-capitalize mb-1">
                                        HAWAI - MALUMA
                                    </a>

                                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                                        <li class="meta-tag text-gray-color mr-4 mb-1">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <span class="ml-1 text-capitalize">5 March, 2019</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="media meta-post-sm border-bottom border-off-white pb-3 mb-3">
                                <div class="img-overlay rounded mr-2">
                                    <img src="<?php /*echo constant('URL'); */?>public/img/blog/tab-01.jpg" alt="Generic placeholder image">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="hover-img-overlay-dark">
                                        <i class="fa fa-youtube-play text-white" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="text-dark hover-text-primary text-capitalize mb-1">
                                        HAWAI - MALUMA
                                    </a>

                                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                                        <li class="meta-tag text-gray-color mr-4 mb-1">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <span class="ml-1 text-capitalize">5 March, 2019</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="media meta-post-sm border-bottom border-off-white pb-3 mb-3">
                                <div class="img-overlay rounded mr-2">
                                    <img src="<?php /*echo constant('URL'); */?>public/img/blog/tab-01.jpg" alt="Generic placeholder image">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="hover-img-overlay-dark">
                                        <i class="fa fa-youtube-play text-white" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="text-dark hover-text-primary text-capitalize mb-1">
                                        HAWAI - MALUMA
                                    </a>

                                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                                        <li class="meta-tag text-gray-color mr-4 mb-1">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <span class="ml-1 text-capitalize">5 March, 2019</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="media meta-post-sm">
                                <div class="img-overlay rounded mr-2">
                                    <img src="<?php /*echo constant('URL'); */?>public/img/blog/tab-01.jpg" alt="Generic placeholder image">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="hover-img-overlay-dark">
                                        <i class="fa fa-youtube-play text-white" aria-hidden="true"></i>
                                    </a>
                                </div>

                                <div class="media-body">
                                    <a href="https://www.youtube.com/watch?v=pK060iUFWXg" target="_blank" class="text-dark hover-text-primary text-capitalize mb-1">
                                        HAWAI - MALUMA
                                    </a>

                                    <ul class="list-unstyled d-flex flex-wrap mb-0">
                                        <li class="meta-tag text-gray-color mr-4 mb-1">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <span class="ml-1 text-capitalize">5 March, 2019</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>