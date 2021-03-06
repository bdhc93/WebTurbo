<?php
require 'views/adm_header.php';
?>
<body id="page-top">
<div id="wrapper">
    <?php
    require 'views/adm_navigation.php';
    ?>
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <?php
            require 'views/adm_navigation2.php';
            ?>
            <div class="container-fluid">

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Ranking - FM </h1>
                </div>

            </div>
            <hr class="sidebar-divider">

            <div class="center"><?php echo $this->mensaje; ?></div>

            <form action="<?php echo constant('URL');?>ranking/registrarRankingFM" method="post">

                <p>
                    <label for="empresa">Empresa</label><br>
                    <input type="text" name="empresa" id="">
                </p>

                <p>
                    <label for="titulo">Titulo</label><br>
                    <input type="text" name="titulo" id="">
                </p>

                <p>
                    <input type="submit" value="Registrar Nuevo">
                </p>

            </form>

            <?php var_dump($this->ranking); ?>

        </div>
        <?php
        require 'views/adm_footer.php';
        ?>
    </div>
</div>
<?php
require 'views/adm_scripts.php';
?>
</body>
</html>
