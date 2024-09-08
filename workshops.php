<!DOCTYPE html>
<html lang="en">

    <!-- Header -->
    <?php include ('includes/head.php');?>

    <body>

        <!-- Header -->
        <?php include ('includes/header2.php');?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb-workshops">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Talleres</h1>  
            </div>
        </div>
        <!-- Header End -->

        <!-- Curses Start -->
        <div class="container-fluid training overflow-hidden bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Talleres</h5>
                    <h1 class="mb-0">Nuestros Talleres</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="training-item">
                            <div class="training-inner">
                                <img src="img/Taller-Espacio-Confinado.Png" class="img-fluid w-100 rounded" alt="Image" style="min-height: 365px;">
                                <div class="training-title-name">
                                    <h5 class="h4 text-white mb-0">Espacio Confinado</h5>
                                </div>
                            </div>
                            <div class="training-content bg-primary rounded-bottom p-4">
                                <a><h4 class="text-white">Espacio Confinado</h4></a>
                                <p class="text-white-50">Te ayudara a identificar riesgos, utilizar equipos de protección y seguir protocolos de seguridad para prevenir accidentes y proteger tu vida.</p>
                                <div class="col-12 d-flex justify-content-center">
                                    <a href="confined.php" class="btn btn-primary border-1 rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="#">Explorar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Curses End -->

        <?php include ('includes/footer.php');?>

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

</html>