
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

    <div class="row align-items-xl-center border border-success mb-1">
        <div class="col-2">
            <div class="badge badge-primary badge-rounded-circle">
                <span class="d-block">
                    <FONT FACE="impact" SIZE=8 COLOR="white"> <?php echo $ranking->ubicacion; ?> </FONT><br><FONT FACE="impact" SIZE=3.5 COLOR="white"> puesto </FONT>
                </span>
            </div>
        </div>
        <div class="col-7">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <FONT FACE="OstrichSans-Bold" SIZE=3 COLOR="black"> <?php echo $ranking->titulo; ?></FONT>
                </div>
                <div class="col-md-4 text-center">
                    <FONT FACE="weezerfont" SIZE=2 COLOR="black"><?php echo $ranking->artista; ?></FONT>
                </div>
                <div class="col-md-2 text-center">
                    <?php echo $ranking->contador; ?>
                </div>
            </div>
        </div>
        <div class="col-3 text-align-center text-center">
            <iframe id="video_ranking" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width="100" height="70" src="<?php echo $ranking->url; ?>?autoplay=0&amp;loop=1&amp;controls=1&amp;showinfo=0&amp;autohide=1&amp;modestbranding=1&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fradionuevaq.pe&amp;widgetid=1"></iframe>
        </div>
    </div>
<?php } ?>
</body>
</html>




