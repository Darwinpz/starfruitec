<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo NOMBRE_SITIO; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        
    <link rel="icon" type="image/x-icon" href="<?php echo RUTA_URL;?>/img/logo-starfruit-256x169.png">
        
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <span><a href="mailto:informacion@starfruitec.com" style="text-decoration:none;color:black"><i class="fas fa-envelope"></i> informacion@starfruitec.com</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="https://www.instagram.com/starfruitcorp/" target="_blank"><b>@starfruitcorp <i class="fa-brands fa-instagram"></i></b></a>
                </div>
            </div>
        </div>
    </nav>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo RUTA_URL;?>">
                <img src="<?php echo RUTA_URL;?>/img/logo-starfruit-256x169.png" alt="" width="120" height="80" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link <?php echo $cabecera!=null ? ($cabecera['item'] == 'inicio' ? 'active': '') : '' ?>" aria-current="page" href="<?php echo RUTA_URL;?>"><i class="fas fa-home"></i> <b>Inicio</b></a>
                    <a class="nav-link <?php echo $cabecera!=null ? ($cabecera['item'] == 'producto' ? 'active': '') : '' ?>" href="<?php echo RUTA_URL;?>/producto"><i class="fas fa-box"></i> <b>Nuestro Producto</b></a>
                    <a class="nav-link <?php echo $cabecera!=null ? ($cabecera['item'] == 'clientes' ? 'active': '') : '' ?>" href="<?php echo RUTA_URL;?>/clientes"><i class="fas fa-user"></i> <b>Nuestros Clientes</b></a>
                    <a class="nav-link <?php echo $cabecera!=null ? ($cabecera['item'] == 'galeria' ? 'active': '') : '' ?>" href="<?php echo RUTA_URL;?>/galeria"><i class="fas fa-image"></i> <b>Galería</b></a>
                    <a class="nav-link <?php echo $cabecera!=null ? ($cabecera['item'] == 'contactanos' ? 'active': '') : '' ?>" href="<?php echo RUTA_URL;?>/contactanos"><i class="fas fa-location-dot"></i> <b>Contáctanos</b></a>
                </div>
            </div>
        </div>
    </nav>