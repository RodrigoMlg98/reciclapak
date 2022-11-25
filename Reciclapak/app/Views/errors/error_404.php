<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?= base_url() ?>/js/jquery.min.js" type="text/javascript"></script>
    <title>Packmac - 404</title>
    <style>
        html {
            height: 100%;
        }
        body {  
            align-items: center;
            background: url("images/404.jpg") no-repeat left top;
            background-size: cover;  
            display: flex;
            flex-flow: column wrap;
            height: 100%;
            justify-content: center;
            overflow: hidden;
        }

        .text h1{
            color: #011718;
            font-size: 15em;
            text-align: center;
            text-shadow: -5px 5px 0px rgba(0,0,0,0.7), -10px 10px 0px rgba(0,0,0,0.4), -15px 15px 0px rgba(0,0,0,0.2);
            font-family: monospace;
            font-weight: bold;
            margin-top: -200px;
        }

        .text h2{
            color: white;
            font-family: monospace;
            font-size: 5em;
            font-weight: bold;
            margin-top: -150px;
            text-align: center;
            text-shadow: -5px 5px 0px rgba(0,0,0,0.7);
        }
        .text h3{
            color: white;
            font-family: monospace;
            font-size: 2em;
            font-weight: bold;
            margin-left: 30px;
            margin-top: -40px;
            text-shadow: -5px 5px 0px rgba(0,0,0,0.7);
        }
    </style>
</head>
<body>
    <div class="text">
        <h1>404</h1>
        <h2>Nos perdimos en la red</h2>
        <h3>No encontramos la pagina porque esta muy oscuro aqui</h3>
    </div>
    
    <h3><a href="<?= base_url() ?>" style="color:black">Regresar</a></h3>
    
</body>
</html>