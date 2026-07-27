<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedTogether</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Iconos de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'componentes/navbar.php'; ?>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-6">
                    <h1 class="fw-bold">Conectamos<br>alimentos con<br><span class="text-custom-green">quienes más</span> lo necesitan</h1>
                    <p class="text-muted fs-5 my-4">
                        Plataforma que une comunidades, empresas y voluntarios para combatir el hambre en El Salvador.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="solicitudes.php" class="btn btn-custom-green btn-lg rounded-pill px-4">
                            Quiero ayudar
                        </a>
                        <a href="registro.php" class="btn btn-custom-orange btn-lg rounded-pill px-4">
                            Necesito ayuda
                        </a>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <img src="img/imagen principal.jpg" class="img-fluid rounded-4 shadow-sm" alt="Manos compartiendo comida">
                </div>
            </div>
        </div>
    </section>

    <!-- ESTADÍSTICAS -->
    <section class="py-4">
        <div class="container">
            <div class="stats-banner shadow-sm">
                <div class="row g-4 text-center">
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <i class="bi bi-heart-fill fs-2"></i>
                            <div class="text-start">
                                <h3>50+</h3>
                                <p>familias apoyadas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <i class="bi bi-people-fill fs-2"></i>
                            <div class="text-start">
                                <h3>15+</h3>
                                <p>Organizaciones colaboradoras</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <i class="bi bi-hand-thumbs-up-fill fs-2"></i>
                            <div class="text-start">
                                <h3>35+</h3>
                                <p>voluntarios activos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-item">
                            <i class="bi bi-house-heart-fill fs-2"></i>
                            <div class="text-start">
                                <h3>25+</h3>
                                <p>Comunidades beneficiadas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOLICITUDES RECIENTES -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h3 fw-bold m-0">Solicitudes recientes</h2>
                <a href="solicitudes.php" class="text-custom-green fw-bold text-decoration-none">Ver todas</a>
            </div>

            <div class="row g-4">
                <!-- Tarjeta 1 -->
                <div class="col-md-6">
                    <div class="card-custom p-3">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="img/imageniglesia.jpg" class="img-fluid rounded-3" alt="Iglesia El Rosario">
                            </div>
                            <div class="col-8">
                                <h4 class="h5 fw-bold mb-1">Iglesia El Rosario</h4>
                                <p class="text-muted small mb-2">San Miguel</p>
                                <div class="d-flex gap-1 mb-3 flex-wrap">
                                    <span class="badge-tag">Arroz</span>
                                    <span class="badge-tag">Frijoles</span>
                                    <span class="badge-tag">Leche</span>
                                </div>
                                <a href="detalleSolicitud.php" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-md-6">
                    <div class="card-custom p-3">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <img src="img/imagencomunidad.jpg" class="img-fluid rounded-3" alt="Comunidad Nuevo Israel">
                            </div>
                            <div class="col-8">
                                <h4 class="h5 fw-bold mb-1">Comunidad Nuevo Israel</h4>
                                <p class="text-muted small mb-2">San Salvador</p>
                                <div class="d-flex gap-1 mb-3 flex-wrap">
                                    <span class="badge-tag">Azúcar</span>
                                    <span class="badge-tag">Aceite</span>
                                    <span class="badge-tag">Harina</span>
                                </div>
                                <a href="detalleSolicitud.php" class="btn btn-sm btn-outline-secondary rounded-pill px-3">Ver detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN ¡ÚNETE A FEEDTOGETHER! -->
    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="fw-bold mb-2">¡Únete a FeedTogether!</h2>
            <p class="text-muted mb-5">Elige cómo deseas formar parte del cambio</p>

            <div class="row g-4 justify-content-center">
                <!-- Tarjeta 1 -->
                <div class="col-md-4">
                    <div class="card-custom p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-people-fill text-custom-orange display-4"></i>
                            <h3 class="h5 fw-bold mt-3">Necesito ayuda</h3>
                            <p class="text-muted small">Soy parte de una comunidad o organización que necesita apoyo de alimentos</p>
                        </div>
                        <a href="registro.php" class="btn btn-custom-orange rounded-pill w-100 mt-3">Soy solicitante</a>
                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-md-4">
                    <div class="card-custom p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-heart-fill text-custom-green display-4"></i>
                            <h3 class="h5 fw-bold mt-3">Quiero ayudar</h3>
                            <p class="text-muted small">Soy una empresa, organización o persona que desea brindar apoyo o hacer la diferencia</p>
                        </div>
                        <a href="registro.php" class="btn btn-custom-green rounded-pill w-100 mt-3">Soy donante</a>
                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-md-4">
                    <div class="card-custom p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <i class="bi bi-hand-thumbs-up-fill text-primary display-4"></i>
                            <h3 class="h5 fw-bold mt-3">Oportunidades de voluntariados</h3>
                            <p class="text-muted small">Únete a oportunidades de voluntariado y actividades en tu comunidad</p>
                        </div>
                        <a href="voluntariados.php" class="btn btn-primary rounded-pill w-100 mt-3">Ver voluntariados</a>
                    </div>
                </div>
            </div>

            <p class="mt-4 text-muted">¿Ya tienes cuenta? <a href="login.php" class="text-custom-orange fw-bold text-decoration-none">Iniciar sesión</a></p>
        </div>
    </section>

    <?php include 'componentes/footer.php'; ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/script.js"></script>

</body>
</html>