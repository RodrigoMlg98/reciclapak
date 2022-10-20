<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">
    <div class="container">
        <div class="row">
            <div class=".col-sm-6 .col-md-6 .col-lg-6">
                <div class="navbar-header">
                    <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a href="<?= base_url('/') ?>" class="navbar-brand">
                    <img src="/images/logo.png"  alt="" width="250" height="70" alt="logo">
                </a>
                </div>
            </div>
            <div class=".col-sm-6 .col-md-6 .col-lg-6">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navbar-uppercase" >
                        <li ><a href="<?= base_url() ?>/">Inicio</a></li>
                        <li><a href="<?= base_url() ?>/nosotros">Sobre nosotros</a></li>
                        <li><a href="<?= base_url() ?>/Productos">productos</a></li>
                        <style>
                            ul.dropdown-menu::before { content: '\A'; white-space: pre;}
                        </style>
                        <li><a href="<?= base_url() ?>/contacto">Contactanos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>