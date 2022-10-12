<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
    <div class="section section-header" style="min-height: 120px;"></div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="variantes-nav">
                                <?php if($producto['img']==NULL): ?>
                                    <img class="img-thumbnail" src="<?= base_url() ?>/images/productos/no_photo.png" alt="Packmac - <?= $producto['nombre'] ?>">
                                <?php else: ?>
                                    <img class="img-thumbnail" src="<?= base_url() ?>/images/productos/<?= $producto['img'] ?>" alt="Packmac - <?= $producto['nombre'] ?>">
                                <?php endif ?>
                                <?php foreach($variantes as $var): ?>
                                    <img class="img-thumbnail" src="<?= base_url() ?>/images/productos/<?= $var['img'] ?>" alt="Packmac - <?= $producto['nombre'] ?>">
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="variantes imagen-producto">
                                <div>
                                    <?php if($producto['img']==NULL): ?>
                                        <img class="img-thumbnail" src="<?= base_url() ?>/images/productos/no_photo.png" alt="Packmac - <?= $producto['nombre'] ?>">
                                    <?php else: ?>
                                        <img class="img-thumbnail zoom" id="zoom" src="<?= base_url() ?>/images/productos/<?= $producto['img'] ?>" alt="Packmac - <?= $producto['nombre'] ?>"  id="zoom_01" data-zoom-image="<?= base_url() ?>/images/productos/<?= $producto['img'] ?>">
                                    <?php endif ?>
                                </div>
                                <?php foreach($variantes as $var): ?>
                                    <div>
                                        <img class="img-thumbnail zoom" src="<?= base_url() ?>/images/productos/<?= $var['img'] ?>" alt="Packmac - <?= $producto['nombre'] ?>" data-zoom-image="<?= base_url() ?>/images/productos/<?= $var['img'] ?>">
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <h2><?= ucfirst(strtolower(htmlentities($producto['nombre']))) ?>
                        <?php if($producto['modelo']) :?>
                            <?= ' - Modelo '.ucfirst(strtoupper(htmlentities($producto['modelo']))) ?>
                        <?php endif ?>
                        </h2>
                    </div>
                    <?php if(isset($marca['nombre'])): ?>
                        <a href="#"><?= $marca['nombre'] ?>, </a>
                    <?php endif ?>
                    <a href="<?= base_url() ?>/<?= $categoria['nombre'] ?>"><?= $categoria['nombre'] ?> </a>
                    <h4></h4>
                    <p class="text-justify"><?= $producto['descripcion'] ?></p>
                    <?php if (isset($producto['aplicaciones'])): ?>
                        <h4>Aplicaciones</h4>
                        <p class="text-justify"><?= $producto['aplicaciones'] ?></p>
                    <?php endif ?>
                    <a href="https://api.whatsapp.com/send?phone=52+5568758195&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20<?= $producto['nombre'] ?>." class="btn btn-primary cotizar">Cotizar</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 table-responsive">
                    <?php if (isset($producto['medidas'])): ?>
                        <h4>Medidas disponibles</h4>
                        <table class="table table-bordered medidas" style="text-align:center;width:100%">
                            <?= $producto['medidas']  ?>
                        </table>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>
<?= $this->section('header') ?>
    <link rel="stylesheet" href="<?= base_url() ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url() ?>/css/slick-theme.css">
<?= $this->endSection() ?>
<?= $this->section('footer') ?>
    <script src="<?= base_url() ?>/js/slick.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery.elevatezoom.js"></script>
    <script>
        const zoomInit=()=> {
            let primary = $('#zoom');
            primary.elevateZoom({
                responsive: true,
                zoomType: "inner",
                zoomWindowWidth: 430,
                zoomWindowHeight: 370
            });
        }
        const zoomAction=()=>{
            $('.zoom').each(function() {
                if ($(this).parent().hasClass('slick-active')) {
                    $(this).elevateZoom({
                        responsive: true,
                        zoomType: "inner",
                        zoomWindowWidth: 430,
                        zoomWindowHeight: 370
                    });
                }
            });
        }
        zoomInit();
    </script>
    <script>
        $('.variantes').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.variantes-nav'
        });
        $('.variantes-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.variantes',
            dots: true,
            centerMode: true,
            focusOnSelect: true,
            vertical: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        arrows: false,
                        slidesToShow: 3,
                        vertical: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        vertical: false
                    }
                },
            ]
        });
        $('.variantes').on('afterChange', function(event, slick, currentSlide) {
            zoomAction();
        });
        $('.variantes').on('beforeChange', function(event, slick, currentSlide) {
            $('.zoomContainer').remove();
        });
    </script>
    <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();
    });

    </script>
<?= $this->endSection() ?>
