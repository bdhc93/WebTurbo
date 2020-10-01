


<!doctype html>
<html>
<head>
</head>
<body>
<?php
include_once 'models/ranking.php';
foreach ($this->ranking as $row) {
    $ranking = new MRanking();
    $ranking = $row;

    ?>

    <div class="card rounded-0 card-transparent border-bottom mb-7 pb-7">

        <div class="row align-items-xl-center">
            <div id="letracollapse" class="bloque_letra_collapse margin-bottom  clearfix">
                <iframe id="video_ranking" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="400" height="280" src="<?php echo $ranking->url; ?>?autoplay=0&amp;loop=1&amp;controls=1&amp;showinfo=0&amp;autohide=1&amp;modestbranding=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fradionuevaq.pe&amp;widgetid=1"></iframe>
                <div class="letra">
                    <div id="letra-scroll" class="scroll letra_scroll mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" data-mcs-theme="dark" style="position: relative; overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_outside" tabindex="0" style="max-height: none;"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; left: 0px; top: 0px;" dir="ltr">
                            </div>
                        </div>
                        <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-header text-center">
                    <h3>
                        <a class="text-capitalize text-dark hover-text-primary"><?php echo $ranking->titulo; ?></a>
                    </h3>
                </div>
                <br>
                <div class="card-body px-md-0 py-6 pt-md-0">


                    <div class="meta-post-sm mb-4">
                        <ul class="list-unstyled d-flex flex-wrap mb-0">
                            <li class="meta-tag mr-4 mb-1">
                                <i class="fa fa-user text-gray-color" aria-hidden="true"></i>
                                <a class="text-gray-color hover-text-primary">
                                    <span class="ml-1 text-capitalize">Autor(es): <?php echo $ranking->artista; ?></span>
                                </a>
                            </li><br>

                            <li class="meta-tag text-gray-color mr-4 mb-1">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span class="ml-1 text-capitalize">Publicación: <?php echo $ranking->fecha; ?></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer">
                    <h4 class="mb-4">
                        <a class="text-capitalize text-dark hover-text-primary">Ubicación: <?php echo $ranking->ubicacion; ?></a>
                    </h4>
                </div>
            </div>
        </div>
    </div>
<?php } ?>



</body>
</html>




