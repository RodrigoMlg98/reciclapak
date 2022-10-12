<?= $this->extend('template/plantilla') ?>
<?= $this->section('content') ?>
    <div class="section section-header" style="min-height: 120px;"></div>
    <div class="section">
        <div class="container">
            <div class="row" style="text-align:center">
                <h2 class="pb-3" style="color:#23a3dd;font-size:35px">Quiénes somos</h2>
                <div class="col-sm-6 col-md-6">
                    <img width="85%" src="<?= base_url() ?>/images/packmac_2.jpeg" alt="">
                </div>
                <div class="col-sm-6 col-md-6 pb-4">
                    <p class="quienes">
                        Somos una empresa dedicada a la fabricación y distribución de material de empaque y embalaje
                        que busca ser proveedor completo en este ámbito de todas aquellas empresas que necesiten
                        paletizar sus productos o protegerlos para ser enviados de forma segura. Con nuestros productos
                        ayudamos a estabilizar la carga y asegurar que todos los materiales de la tarima se mantengan
                        acomodados y no se deslicen.
                    </p>
                    <p class="quienes">
                        Para lograrlo, destinamos nuestro talento y tecnología en crear soluciones de embalaje para cada
                        necesidad individual, logrando así un servicio de soluciones integrales personalizado para nuestros
                        clientes.
                    </p>
                </div>
                <div class="col-sm-6 col-md-6 vision">
                    <h2 style="color:#23a3dd;font-size:35px">MISIÓN</h2>
                    <p class="quienes mision pb-4">
                    Satisfacer las necesidades de nuestros clientes de manera inmediata y garantizando excelente
                    calidad en el desarrollo de nuestros productos.
                    </p>
                    <h2 style="color:#23a3dd;font-size:35px;">VISIÓN</h2>
                    <p class="quienes pb-4">
                        Consolidar a PackMac como la empresa líder a nivel nacional en la fabricación de materiales de empaque y embalaje.
                    </p>
                </div>
                <div class="col-sm-6 col-md-6 pb-4">
                    <img width="80%" src="<?= base_url() ?>/images/packmac_1.jpeg" alt="">
                </div>
                <div class="col-sm-12 col-md-12 vision">
                    <h2 style="color:#23a3dd;font-size:35px">VALORES</h2>
                    <p class="quienes">
                        Nuestros principales valores son; la honestidad, respeto y compromiso. Lo cual nos ha llevado a
                        ser proveedores completos en este ámbito para múltiples empresas ya que gracias al trabajo en
                        conjunto podemos prever sus necesidades y obtener excelentes resultados en la entrega de los
                        materiales.
                    </p>
                </div>
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
            </div>
        </div>
    </div>
<?= $this->endSection() ?>