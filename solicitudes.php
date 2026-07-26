<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedTogether</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    <!--css-->
    <link rel="stylesheet" href="css/css-comun-nav.css">
    <link rel="stylesheet" href="css/solicitud.css">
</head>
<body>
    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!--java-->
    <script src="javascript/script.js"></script>

        <header class="navbar">
            <div>
                <img class="logo" src="componentes/imag barra/logo.png" alt="logo">
            </div>
            <nav>
                <a href="solicitudes.php">Solicitudes</a>
                <a href="voluntariados.php">Voluntariados</a>
                <button>Iniciar sesión</button>
            </nav>
        </header>
        <main class="contenedor-sol">
            <h1 class="titulo">Solicitudes Activas</h1>
            <!--search box-->
            <div class="search-box">
                <img src="componentes/imag barra/lupa.png" alt="buscar">
                <input type="text" placeholder="Buscar solicitudes...">
            </div>
            <section class="contenedor-card">
                <article class="card">
                    <img src="">
                    <div class="info">
                        <h2></h2>
                        <p></p>
                        <div class="comida">
                            <span>arroz</span>
                            <span>frijoles</span>
                            <span>leche</span>
                        </div>
                        <div class="botones">
                            <button class="detalle">Ver detalles</button>
                            <button class="ayudar">Quiero ayudar</button>
                        </div>
                    </div>
                </article>
            </section>
        </main>
</body>
</html>