<!doctype html>
<html lang="en">
<?php
if (isset($_POST['submit'])) {
    $to = "contacto@plazaalessia.com.mx"; // correo propio
    $from = $_POST['email']; // correo del usuario
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Solicitud de Información - Plaza Alessia";
    $message = '<html>' .
        '<head><title>Plaza Alessia</title></head>' .
        '<body><h1>Solicitud de Información</h1>' .
        '<hr>' .
        '<p>Nombre:' . $first_name . $last_name . "</p>" .
        '<p>Correo:' . $from . "</p>" .
        '<p>Teléfono:' . $_POST['message'] . "</p>" .
        '</body>' .
        '</html>';
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: ' . $from . "\r\n";

    if ($from !== "" && $first_name !== "" && $last_name !== "") {
        $enviado = mail($to, $subject, $message, $headers);
        if ($enviado) {
            echo '<div class="alert alert-success alert-correo" role="alert">¡Correo enviado! Nos pondremos en contacto contigo lo mas pronto posible.</div>';
        } else {
            echo '<div class="alert alert-danger alert-correo" role="alert">¡Error! Hubo un error al intentar enviar el correo.</div>';
        }
    } else {
        echo '<div class="alert alert-danger alert-correo" role="alert">¡Error! Todos los campos deben estar llenos.</div>';
    }
}
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=.75, shrink-to-fit=no">
    <title>Plaza Alessia</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body class="bg">
    <nav class="navbar navbar-light bg-light d-md-none bg-nav-mobile color-nav">
        <a class="navbar-brand" href="#"><img class="logo-mob-nav" src="./img/ALESSIA-ESCRITORIO-07.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line" style="margin-bottom: 0;"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link nav-color" data-scroll href="#nosotros-sectionmob">Nosotros <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" data-scroll href="#ubicacion-sectionmob">Excelente Ubicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" data-scroll href="#polifuncional-sectionmob">Polifuncional</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" data-scroll href="#atencion-sectionmob">Atención Personalizada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" data-scroll href="#accesibilidadlocales-sectionmob">Accesibilidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-color" data-scroll href="#locales-sectionmob">Locales Espaciosos</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-light color-nav d-md-block d-none">
        <a class="navbar-brand" href="#"><img class="img-nav" src="./img/alessia logo home_1.png"></a>
    </nav>
    <div id="carouselExampleIndicators2" class="carousel slide d-md-none carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption ">
                    <h5 class="plaza-alessia-mob">PLAZA ALESSIA</h5>
                    <p class="plaza-alessia-desc-mob">La gran oportunidad
                        en la Zona Metropolitana de Zacatecas</p C>
                </div>
                <div class="text-center">
                    <div class="carousel-caption ">
                        <h5 class="plaza-alessia-mob">PLAZA ALESSIA</h5>
                        <p class="plaza-alessia-desc-mob">La gran oportunidad
                            en la Zona Metropolitana de Zacatecas</p C>
                    </div>
                    <img src="./img/ALESSIA-MOVIL-04.jpg" class="mob-car" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption ">
                    <h5 class="plaza-alessia-mob">PLAZA ALESSIA</h5>
                    <p class="plaza-alessia-desc-mob">La gran oportunidad
                        en la Zona Metropolitana de Zacatecas</p C>
                </div>
                <div class="text-center">
                    <div class="carousel-caption ">
                        <h5 class="plaza-alessia-mob">PLAZA ALESSIA</h5>
                        <p class="plaza-alessia-desc-mob">La gran oportunidad
                            en la Zona Metropolitana de Zacatecas</p C>
                    </div>
                    <img src="./img/ALESSIA-MOVIL-03.jpg" class="mob-car" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption ">
                    <h5 class="plaza-alessia-mob">PLAZA ALESSIA</h5>
                    <p class="plaza-alessia-desc-mob">La gran oportunidad
                        en la Zona Metropolitana de Zacatecas</p C>
                </div>
                <div class="text-center">
                    <img src="./img/ALESSIA-MOVIL-02.jpg" class="mob-car" alt="...">
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-caption ">
                    <h5 class="plaza-alessia-mob">PLAZA ALESSIA</h5>
                    <p class="plaza-alessia-desc-mob">La gran oportunidad
                        en la Zona Metropolitana de Zacatecas</p C>
                </div>
                <div class="text-center">
                    <img src="./img/ALESSIA-MOVIL-01.jpg" class="mob-car" alt="...">
                </div>
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>-->
    </div>
    <div id="carouselExampleFade" class="carousel slide carousel-fade d-md-block d-none" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-caption-2 d-none d-md-block">
                    <h5 class="title-plaza">PLAZA ALESSIA</h5>
                    <p class="sub-plaza">La gran oportunidad en la Zona Metropolitana de Zacatecas</p>
                </div>
                <img class="d-block w-100" src="./img/ALESSIA-ESCRITORIO-04.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption-2 d-none d-md-block">
                    <h5 class="title-plaza">PLAZA ALESSIA</h5>
                    <p class="sub-plaza">La gran oportunidad en la Zona Metropolitana de Zacatecas</p>
                </div>
                <img class="d-block w-100" src="./img/ALESSIA-ESCRITORIO-03.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption-2 d-none d-md-block">
                    <h5 class="title-plaza">PLAZA ALESSIA</h5>
                    <p class="sub-plaza">La gran oportunidad en la Zona Metropolitana de Zacatecas</p>
                </div>
                <img class="d-block w-100" src="./img/ALESSIA-ESCRITORIO-02.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <div class="carousel-caption-2 d-none d-md-block">
                    <h5 class="title-plaza">PLAZA ALESSIA</h5>
                    <p class="sub-plaza">La gran oportunidad en la Zona Metropolitana de Zacatecas</p>
                </div>
                <img class="d-block w-100" src="./img/ALESSIA-ESCRITORIO-01.png" alt="Third slide">
            </div>
        </div>
        <!--<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>-->
    </div>
    <div class="container-fluid cont-bg-line d-md-none">
        <div class="row " style="padding-top: 10px;">
            <div class="col-sm-6 ">
                <a style="cursor: pointer;">
                    <div id="border-1" class="text-center">
                        <img class="icons-menu" src="./img/icon6.png">
                        <p class="text-menu">NOSOTROS</p>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a style="cursor: pointer;">
                    <div id="border-2" class="text-center ">
                        <img class="icons-menu" src="./img/icon5.png">
                        <p class="text-menu">EXCELENTE UBICACIÓN</p>
                    </div>

                </a>

            </div>
            <div class="col-sm-6">
                <a style="cursor: pointer;">
                    <div id="border-3" class="text-center">
                        <img class="icons-menu" src="./img/icon4.png">
                        <p class="text-menu">POLIFUNCIONAL</p>
                    </div>

                </a>
            </div>
            <div class="col-sm-6">
                <a style="cursor: pointer;">
                    <div id="border-4" class="text-center">
                        <img class="icons-menu" src="./img/icon3.png">
                        <p class="text-menu">ATENCIÓN PERSONALIZADA</p>
                    </div>

                </a>
            </div>
            <div class="col-sm-6">
                <a style="cursor: pointer;">
                    <div id="border-5" class="text-center">
                        <img class="icons-menu" src="./img/icon2.png">
                        <p class="text-menu">ACCESIBILIDAD</p>
                    </div>

                </a>
            </div>
            <div class="col-sm-6">
                <a style="cursor: pointer;">
                    <div id="border-6" class="text-center">
                        <img class="icons-menu" src="./img/icon1.png">
                        <p class="text-menu">LOCALES ESPACIOSOS</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid cont-bg-line d-md-block d-none">
        <div class="row">
            <div class="col-md-2">
                <a style="cursor: pointer;" data-scroll href="#nosotros-section">
                    <img class="icons-menu" src="./img/icon6.png">
                    <p class="text-menu">NOSOTROS</p>
                </a>

            </div>
            <div class="col-md-2">
                <a style="cursor: pointer;" data-scroll href="#ubicacion-section">
                    <img class="icons-menu" src="./img/icon5.png">
                    <p class="text-menu">EXCELENTE UBICACIÓN</p>
                </a>

            </div>
            <div class="col-md-2">
                <a style="cursor: pointer;" data-scroll href="#polifuncional-section">
                    <img class="icons-menu" src="./img/icon4.png">
                    <p class="text-menu">POLIFUNCIONAL</p>
                </a>
            </div>
            <div class="col-md-2">
                <a style="cursor: pointer;" data-scroll href="#atencion-section">
                    <img class="icons-menu" src="./img/icon3.png">
                    <p class="text-menu">ATENCIÓN PERSONALIZADA</p>
                </a>
            </div>
            <div class="col-md-2">
                <a style="cursor: pointer;" data-scroll href="#accesibilidad-section">
                    <img class="icons-menu" src="./img/icon2.png">
                    <p class="text-menu">ACCESIBILIDAD</p>
                </a>
            </div>
            <div class="col-md-2">
                <a style="cursor: pointer;" data-scroll href="#locales-section">
                    <img class="icons-menu" src="./img/icon1.png">
                    <p class="text-menu">LOCALES ESPACIOSOS</p>
                </a>
            </div>
        </div>
    </div>
    <div class="resp-container">
        <iframe class="resp-iframe"   src="https://www.youtube.com/embed/xXXa0zX8e4E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <h1 class="title-nosotros" style="padding-left: 10px;">GALERÍA</h1>
    <div id="carouselExampleSlidesOnly4" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./img/20200109_090621.jpg" alt="First slide4">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/20200108_1809C38.jpg" alt="Second slide5">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/Plaza Alessia 3.jpeg" alt="Second slide5">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/Plaza Alessia 4.jpeg" alt="Second slide5">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./img/Plaza-Alessia-2(9).jpg" alt="Second slide5">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly4" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleSlidesOnly4" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div id="nosotros-sectionmob"></div>
    <div class="container-fluid bg">
        <div class="row row-bg-nos">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7" style="padding-left: 0px; padding-right: 0px;" id="nosotros-section">
                            <h1 class="title-nosotros">NOSOTROS</h1>
                            <p class="par-nosotros-1">Alessia es un proyecto inspirado en el esfuerzo
                                de las personas, que como nosotros, buscamos siempre
                                lo mejor. Es un proyecto multipropósito en el que procuramos el bienestar de todos,
                                queremos cuidar a nuestros clientes
                                y también cuidar a los clientes de nuestros clientes.</p>
                            <p class="par-nosotros-2">
                                Plaza Alessia nace para ofrecer la mejor opción de la zona porque sabemos que las
                                personas merecen un espacio comercial cuya ubicación y comodidad la conviertan
                                en un punto de referencia importante.
                            </p>
                        </div>
                        <div class="col md-5">
                            <img src="./img/ALESSIA-ESCRITORIO-07.png" class="logo-nosotros d-md-block d-none">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MAPA-->
    <div id="ubicacion-sectionmob"></div>
    <div class="container-fluid" style="margin-bottom: 4vw; margin-top: 20px; background-color: black;">
        <div class="row">
            <div class="col-md-6 d-md-block d-none" style="padding-left:0px; padding-right: 0px;">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1187.7884785753865!2d-102.58459122036405!3d22.771434576509698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824fb0f85dc70b%3A0x1b700921ee653303!2sPlaza%20Alessia!5e0!3m2!1ses!2smx!4v1577138726899!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-6" id="ubicacion-section">
                <h1 class="title-map">EXCELENTE UBICACIÓN</h1>
                <p class="sub-map">¿Dónde estamos?</p>
                <div class="google-maps d-md-none">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1187.7884785753865!2d-102.58459122036405!3d22.771434576509698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86824fb0f85dc70b%3A0x1b700921ee653303!2sPlaza%20Alessia!5e0!3m2!1ses!2smx!4v1577138726899!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <p class="text-map">Nuestra ubicación es inmejorable, Plaza Alessia es accesible tanto en transporte
                    público como en
                    vehículos privados, al estar cerca a de arterias principales como La Calzada Héroes
                    de Chapultepec.</p>
            </div>
        </div>
    </div>
    <img id="polifuncional-section" class="polifuncional d-md-block d-none" src="./img/ALESSIA-ESCRITORIO-22.png">
    <div id="polifuncional-sectionmob"></div>
    <div class="d-md-none">
        <h1 class="nuestro-espacio">NUESTRO ESPACIO</h1>
        <p class="text-nuestro-espacio">Una de las grandes ventajas que Plaza Alessia ofrece a sus clientes es
            la variedad de espacios disponibles, siendo locales multipropósito altamente
            versátiles distribuídos en 2 pisos estratégicamente organizados con comodidades como
            estacionamiento, elevadores y zonas cuyo acomodo favorece el flujo
            libre y orgánico de los visitantes.</p>
    </div>
    <div class="container-fluid nuestro-espacio-bg">
        <div class="row d-md-block d-none">
            <div class="col-md-10">
                <h1 class="nuestro-espacio">NUESTRO ESPACIO</h1>
                <p class="text-nuestro-espacio">Una de las grandes ventajas que Plaza Alessia ofrece a sus clientes es
                    la variedad de espacios disponibles, siendo locales multipropósito altamente
                    versátiles distribuídos en 2 pisos estratégicamente organizados con comodidades como
                    estacionamiento, elevadores y zonas cuyo acomodo favorece el flujo
                    libre y orgánico de los visitantes.</p>
            </div>
        </div>

        <p class="texto-planos">PLANTA BAJA*</p>
        <img class="planos" src="./img/ALESSIA-ESCRITORIO-21.png">
        <p class="texto-planos">PLANTA ALTA*</p>
        <img class="planos" src="./img/ALESSIA-ESCRITORIO-20.png">
        <p class="disponibilidad">*Pregunte por disponibilidad</p>
        <a href="./planos/Planos_Plaza_Alessia.zip" download>
            <img class="descargar" src="./img/ALESSIA-ESCRITORIO-32.png">
        </a>
    </div>
    <img id="atencion-section" src="./img/ALESSIA-ESCRITORIO-28.png" class="atencion d-md-block d-none">

    <div id="atencion-sectionmob"></div>
    <div class="container-fluid container-bg-number">

        <div class="text-center">
            <img class="img-number" src="./img/ALESSIA-ESCRITORIO-30.png"><span class="number">492 - 870 -
                9124</span></img>
            <p class="oportunidad-1">¡Aprovecha la oportunidad en esta</p>
            <p class="oportunidad-2">excelente ubicación!</p>
            <img src="./img/unnamed-2.png" style="padding-bottom: 40px; width: 40%;">
        </div>
    </div>
    <div id="accesibilidadlocales-sectionmob"></div>
    <img id="accesibilidad-section" class="acessibilidad d-md-block d-none" src="./img/ALESSIA-ESCRITORIO-29.png">
    <h1 class="nuestro-espacio d-md-none">ACCESIBILIDAD</h1>
    <div class="text-center text-acces-bg">
        <p class="text-acces">Sabemos que por la proyección y potencial de la zona contamos con diversos tipos de
            usuarios y por eso tenemos soluciones adecuadas para todos al contar con espacios de estacionamiento
            techado, entradas de acceso peatonal, así como comodidades que mejoran la experiencia del usuario tales
            como espacios amplios y ascensores.</p>
    </div>
    <div id="locales-sectionmob"></div>
    <h1 class="nuestro-espacio d-md-none">LOCALES ESPACIOSOS</h1>
    <img id="locales-section" class="locales d-md-block d-none " src="./img/ALESSIA-ESCRITORIO-27.png">
    <div class="text-center text-acces-bg ">
        <p class="text-acces">En Plaza Alessia contamos a su vez con una variedad amplia de locales entre los que puedes
            elegir la mejor opción para el giro de tu negocio, siendo adaptables
            para tus necesidades de proyección. ¿Formarás parte de las empresas
            que ya están confiando en nuestro potencial?</p>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide car-bg-mob" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <p class="car-title">EMPRESAS</p>
            <div class="carousel-item active item-car">
                <div class="text-center">
                    <img src="./img/car-1.png" class="" alt="...">
                </div>
            </div>
            <div class="carousel-item item-car">
                <div class="text-center">
                    <img src="./img/Logo Irma Valerio Galerías.jpg" class="" alt="..." style="width: 200px;">
                </div>
            </div>
            <div class="carousel-item item-car">
                <div class="text-center">
                    <img src="./img/Logo Quadro.jpg" class="" alt="..." style="width: 200px;">
                </div>
            </div>
            <div class="carousel-item item-car">
                <div class="text-center">
                    <img src="./img/Logo Stronger Gym.jpg" class="" alt="..." style="width: 200px;">
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- FORMULARIO DE CONTACTO -->
    <div class="container">
        <p class="title-form">CONTACTO</p>
        <form name="contactform" method="post" action="">
            <div class="form-group">
                <label class="label-form" for="first_name">Nombre</label>
                <input class="form-control input-style" type="text" name="first_name">
                <label class="label-form" for="last_name">Apellido</label>
                <input class="form-control input-style" type="text" name="last_name">
                <label class="label-form" for="email">E-mail</label>
                <input class="form-control input-style" type="text" name="email">
                <label class="label-form" for="telephone">Telefono</label>
                <input class="form-control input-style" type="text" name="message">
                <input type="submit" name="submit" value="ENVIAR" class="button-form">
            </div>
        </form>

    </div>

    <!--FIN FORM DE CONTACTO -->
    <footer class="color-nav-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 d-md-block d-none">
                    <div class="text-center">
                        <img src="./img/ALESSIA-ESCRITORIO-26.png" style="width: 140px; height: auto; padding-top: 20px;">
                    </div>

                </div>
                <div class="col-md-8" style="margin-bottom: 20px; margin-top: 30px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <img class="d-md-none" style="width: 150px; padding-bottom: 20px;" src="./img/alessia logo home_1.png">
                            </div>
                            <h2 class="footer-title">¡Aprovecha la oportunidad en esta <span class="span-footer">
                                    excelente ubicación!</span></h2>
                        </div>
                        <div class="col-md-6">
                            <h1 class="footer-contacto">Contacto</h1>
                            <p class="number-footer">492-870-9124</p>
                        </div>
                        <div class="col-md-6">
                            <div class="text-center">
                                <a href="mailto:contacto@plazaalessia.com.mx?Subject=Información%20-%20Plaza%20Alessia" target="_top">
                                    <img src="./img/ALESSIA-ESCRITORIO-24.png" class="img-footer">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="footer-copy">Copyrights &copy; Derechos Reservador Tizara 2019</p>
                            <p class="footer-copy">Terminos y Condiciones /</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js">
    </script>
    <script>
        var scroll = new SmoothScroll('a[href*="#"]', {
            speed: 500,
            speedAsDuration: true,
        });
    </script>
    <script>
        $('#carouselExampleFade').carousel({
            pause: "false",
        });
    </script>

</body>


</html>