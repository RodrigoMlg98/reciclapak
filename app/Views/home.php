<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
 <div class="section" style="min-height: 16.5vh;background-color:rgb(255,255,255)"></div>


<div class="section" style="padding-top:0px">
    <div class="owl-carousel">
        <div class="item">
            <div class="parallax filter filter-color-red">
                <div class="image" style="background-image: url('/images/carrusel/reciclapak1.jpg')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            
                            
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="parallax filter filter-color-red">
            <div class="image" style="background-image: url('/images/carrusel/reciclapak2.jpg')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                           
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="parallax filter filter-color-red">
            <div class="image" style="background-image: url('/images/carrusel/reciclapak3.jpg')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="parallax filter filter-color-red">
            <div class="image" style="background-image: url('/images/carrusel/reciclapak4.jpg')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h2 class="home-titles">Nuestro catalogo</h2>
            <?php foreach ($categorias as $cat): ?>
                <div onclick="myFunction('<?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?>')" class="col-md-4" >
                        <div class="panel panel-default producto ">
                            <div class="panel-heading" style="padding:0">
                                <?php if ($cat['img']==null): ?>
                                    <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/no_photo.png" alt="" srcset="">
                                <?php else: ?>
                                    <img class="img-thumbnail producto_imagen" src="<?= base_url() ?>/images/productos/<?= $cat['img'] ?>" alt="Packmac - <?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?>" srcset="">
                                <?php endif ?>
                            </div>
                            <div class="panel-body">
                                <h3><?= ucfirst(strtolower(htmlentities($cat['nombre']))) ?></h3>
                            </div>
                        </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <h2 class="home-titles">¿Por qué somos tu mejor opción?</h2>
            <div class="col-md-3">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 style="color: #f89b26;">Soluciones integrales</h3>
                    <p class="description">
                        Contamos con ejecutivos de venta que te brindarán atención personalizada  al instante y 
                        te guiarán en todo momento para la correcta selección de los productos para tus empaques y embalajes.
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3 style="color: #f89b26;">Entregas</h3>
                    <p class="description">Las entregas son totalmente gratuitas dentro de la Ciudad de México y área metropolitana</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <h3 style="color: #f89b26;">Horario de atención</h3>
                    <p class="description">Lunes – Viernes (8 am – 6 pm) / Sábados (8 am – 2 pm)</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <i class="fas fa-money-bill-wave-alt"></i>
                    </div>
                    <h3 style="color: #f89b26;">Formas de pago</h3>
                    <ul class="description" style="list-style:none;padding-left: 0px;">
                        <li>Transferencia</li>
                        <li>Depósito Bancario</li>
                        <li>Tarjetas de Débito y Crédito (cobro con terminal)</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="info-icon">
                    <div class="icon text-danger">
                        <img src="<?= base_url() ?>/images/recicle.png" alt="">
                    </div>
                    <p class="description">Al consumir nuestros productos 100% reciclados, biodegradables o compostables ayudas al medio ambiente</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<div class="section" style="min-height: 120px;"></div>
<div class="section section-header">
    <div class="owl-carousel">
        <div class="item">
            <div class="parallax filter filter-color-red">
                <div class="image" style="background-image: url('/images/carrusel/packmac1.jpeg')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <h1 class="title-modern">Bienvenido a Pack Mac</h1>
                            
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="parallax filter filter-color-red">
            <div class="image" style="background-image: url('/images/carrusel/packmac2.jpeg')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <h1 class="title-modern">Bienvenido a Pack Mac</h1>
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="parallax filter filter-color-red">
            <div class="image" style="background-image: url('/images/carrusel/packmac3.png')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <h1 class="title-modern">Bienvenido a Pack Mac</h1>
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="parallax filter filter-color-red">
            <div class="image" style="background-image: url('/images/carrusel/packmac4.png')"></div>
                <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <h1 class="title-modern">Bienvenido a Pack Mac</h1>
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    
        <div class="row">
            <div class="col-12">
                <div class="image" style="background-image: url('/images/carrusel/packmac1.jpeg')"></div>
                <!-- <div class="container">
                    <div class="content">
                        <div class="title-area">
                            <h1 class="title-modern">Bienvenido a Pack Mac</h1>
                            
                            <div class="separator line-separator">♦</div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    
</div>




<?= $this->section('footer') ?>
<script src="<?= base_url() ?>/js/home.js" type="text/javascript"></script>
<script src="<?= base_url() ?>/js/axios.js"></script>
<script>
    const contacto = $('#contacto');
    contacto.on('submit', (e) => {
        e.preventDefault();
        let data = $('#contacto').serialize();
        axios.post('/send', data).then(resp => {
            let status = resp.data.result;
            if (status == "succesfull") {
                alert('Mensaje enviado correctamente');
                location.reload();
            } else {
                alert('Ocurrio un error al mandar el mensaje');
            }
        });
    })
</script>
<?= $this->endSection() ?>