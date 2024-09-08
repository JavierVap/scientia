        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-primary px-5 d-none d-lg-block" style="background-image: url('img/Cintillo-Superior.png'); background-size: cover; background-position: center;">
            <div class="row gx-0">
                <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://wa.me/+584128367051" target="_blank"><i class="fab fa-whatsapp fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/capacitacionedu_scientia/" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/@Centrodecapacitaci%C3%B3nEducativaS" target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center text-white" style="height: 45px;" id="fechaHora"></div>
                    <script>
                        function mostrarFechaHora() {
                            const fecha = new Date();
                            const opciones = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
                            const fechaFormateada = fecha.toLocaleDateString('es-ES', opciones);
                            document.getElementById('fechaHora').textContent = fechaFormateada;
                        }
                        // Mostrar la fecha y hora al cargar la página
                        mostrarFechaHora();

                        // Actualizar la fecha y hora cada segundo (opcional)
                        setInterval(mostrarFechaHora, 1000);
                    </script>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h2 class="d-flex align-items-center text-warning m-0 fw-bold">
                        <img src="img/Logo.png" class="img-fluid w-100" alt="logo">
                        <img src="img/Logo-Letters.png" class="img-fluid w-100" alt="logo-letters">
                    </h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link <?php print $_SERVER['PHP_SELF'] == '/scientia/index.php' ? 'active' : '';  ?>">Inicio</a>
                        <a href="about.php" class="nav-item nav-link <?php print $_SERVER['PHP_SELF'] == '/scientia/about.php' ? 'active' : '';  ?>">Acerca de Nosotros</a>
                        <div class="nav-item dropdown dropdown-hover">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Estudios</a>
                            <div class="dropdown-menu m-0">
                                    <div class="nav-item dropend">
                                        <a class="dropdown-item dropdown-toggle-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Talleres
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="confined.php">Espacio Confinado</a>
                                        </div>
                                    </div> 
                                    <div class="nav-item dropend">
                                        <a class="dropdown-item dropdown-toggle-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Cursos
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="oratory.php">Oratoria</a>
                                            <!-- <a class="dropdown-item" href="roadIntelligence.php">Inteligencia Vial</a> -->
                                            <!-- <a class="dropdown-item" href="jobSecurity.php">Seguridad Laboral</a> -->
                                            <a class="dropdown-item" href="riskManagement.php">Gestión de Riesgos</a>
                                            <a class="dropdown-item" href="staff.php">Administración de Personal</a>
                                            <a class="dropdown-item" href="project.php">Formulación y Evaluación de Proyectos</a>
                                            <!-- <a class="dropdown-item" href="client.php">Atención al Cliente</a> -->
                                            <a class="dropdown-item" href="leadership.php">Liderazgo y Ética Profesional</a>
                                            <a class="dropdown-item" href="finances.php">Finanzas Internacionales</a>
                                            <a class="dropdown-item" href="nutrition.php">Nutrición</a>
                                            <a class="dropdown-item" href="audit.php">Auditoria Bancaria</a>
                                            <a class="dropdown-item" href="community.php">Proyecto de Servicio Comunitario</a>
                                        </div>
                                    </div> 
                                    <div class="nav-item dropend">
                                        <a class="dropdown-item dropdown-toggle-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Diplomados
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="hospitality.php">Hotelería y Hospedaje</a>
                                            <a class="dropdown-item" href="military.php">Administración Pública para Militares</a>
                                            <a class="dropdown-item" href="economy.php">Economía Financiera</a>
                                            <a class="dropdown-item" href="client.php">Atención al Cliente</a>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        <a href="contact.php" class="nav-item nav-link <?php print $_SERVER['PHP_SELF'] == '/scientia/contact.php' ? 'active' : '';  ?>">Contactanos</a>
                    </div>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-2">Control de Estudios</a>
                    <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-2">Aula Virtual</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->