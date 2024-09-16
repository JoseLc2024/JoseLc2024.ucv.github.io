<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Cumbre</title>
    <style>
        /* Estilos básicos */
            body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: black;
        color: white;
        max-width: 800px;
        margin: auto;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    header {
        text-align: center;
        padding: 20px;
    }

    header img {
        width: 450px;
    }

    nav {
        background-color: gray;
        padding: 15px;
        text-align: center;
    }

    nav a {
        margin: 0 15px;
        text-decoration: none;
        color: white;
        font-weight: bold;
    }

    nav a:hover {
        color: salmon;
    }

    .contacto {
        color: white;
        padding: 15px;
        background-color: black;
        border: 1px solid #ddd;
        margin: 10px 0;
        text-align: center;
    }

    .contacto h2 {
        margin-top: 0;
    }

    .contacto p {
        margin: 15px 0;
        color: white;
    }

    .contacto a {
        color: white;
        text-decoration: none;
    }

    .contacto a:hover {
        text-decoration: underline;
    }

    footer {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 1px;
        margin-top: auto;
    }

    </style>

</head>
<body>
    <header>
    <h1>Restaurante Cumbre</h1>
        <img src="img/logo.png" alt="logo de cumbre" class="logo">
    </header>

    <nav>
        <a href="pagina-principal.php">INICIO</a>
        <a href="chefs.php">CHEFS</a>
        <a href="Servicios.php">SERVICIOS</a>
        <a href="contactos.php">CONTACTOS</a>
        <a href="Intranet.php">INTRANET</a>
    </nav>

    <section class="contacto">
        <h2>CONTACTOS</h2>
        <p>Av. Brasil, La Marina Cuadra, Pueblo Libre</p>
        <p>Teléfono: +51 987654321</p>
        <p>Email: <a href="@cumbrerestaurante@.gmail.com">cumbrerestaurante@gmail.com</a></p>
        <h3>Horario de atencion:</h3>
        <p>Lunes a Sábado: 10:00 am - 22:00 pm / horas</p>

        <div class="mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.269107055509!2d-77.03524108597862!3d-12.042177991342254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c0a2cb53c953%3A0x5f7e29f72d5c9f88!2sAv.%20Brasil%2C%20La%20Marina%20Cuadra%2C%20Pueblo%20Libre!5e0!3m2!1ses!2spe!4v1638857152080!5m2!1ses!2spe"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>



    <footer>
    <h6><p>&copy; 2024 CUMBRE. POLÍTICA DE PRIVACIDAD - TODOS LOS DERECHOS RESERVADOS.</p></h6>
    </footer>
</body>
</html>