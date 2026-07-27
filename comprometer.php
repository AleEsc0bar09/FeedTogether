<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FeedTogether</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css-comun-nav.css">
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
        <main class="contenedor-com">





            <form class="compromiso" action="/submit" method="post">
                <h2 class="form-ayuda">Ayudémonos entre todos.</h2>
                <br>
                <label for="representante">¿A quién representa?</label>
                <br>
                <input type="radio" name="represent_type" id="repre" value="Comunidad">
                <br>
                <input type="radio" name="represent_type" id="repre" value="Organización">
                <br>
                <input type="radio" name="represent_type" id="repre" value="Empresa">
                <br>
                <input type="radio" name="represent_type" id="repre" value="Otro">
                <br>
                <label for="name-org">Nombre de quien representa:</label>
                <br>
                <input type="text" name="represent_name" id="name" required>
                <br>
                <label for="
            </form>

        </main>


</body>
</html>