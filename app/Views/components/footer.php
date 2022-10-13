        <footer class="footer footer-big footer-color-black" data-color="black">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 logo-footer"></div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="info">
                            <h3 class="title">Ubicanos</h3>
                            <p>09310 Leyes de Reforma Tercera Sección, Distrito Federal, Mexico</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="info">
                            <h5 class="title">Contactanos</h5>
                            <p><i class="fas fa-phone"></i> (55) 8913-5272</p>
                            <p><i class="fab fa-whatsapp"></i> (55) 8913-5273</p>
                            <p>g.castillo@reciclapak.com.mx</p>
                            <p>contabilidad@reciclapak.com.mx</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="info">
                            <h5 class="title">Siguenos</h5>
                            <nav>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/reciclapak.mx" target="_blank" class="btn btn-social btn-facebook btn-simple"><i class="fab fa-facebook-f"></i> Facebook</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-social btn-twitter btn-simple">
                                            <i class="fab fa-twitter"></i> Twitter
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="copyright">
                    ©<script>
                        document.write(new Date().getFullYear())
                    </script>
                    
                    
                    Reciclapak, Desarrollado por <a href="https://mycleth.com.mx/" target="_blanck">Mycleth</a>
                </div>
            </div>
        </footer>
        </body>
        
        <script src="<?= base_url() ?>/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url() ?>/js/bootstrap.js" type="text/javascript"></script>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>/js/owl.carrusel/carrusel-home.js"></script>
        

        
        <script type="text/javascript" src="<?= base_url() ?>/js/modernizr.js"></script>
        <?= $this->renderSection('footer') ?>
        <script type="text/javascript" src="<?= base_url() ?>/js/gaia.js"></script>
        
        <script>
            function myFunction(link) {
                location.href = "<?= base_url() ?>/"+link;
            } 
        </script>
        
        </html>
        