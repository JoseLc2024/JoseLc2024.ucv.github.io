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
    background-color: #fff;
    color: #333;
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
    background-color: #c5c5c5;
    padding: 15px;
    text-align: center;
}

nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

nav a:hover {
    color: salmon;
}

.servicios {
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    margin: 20px 0;
}

.servicios h2 {
    margin-top: 0;
}

.servicios ul {
    list-style-type: none;
    padding: 0;
}

.servicios li {
    margin: 20px 0;
}

.servicios strong {
    color:brown;
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
        <img src="img/servicio.png" alt="Imagen de chefs" class="logo">
    </header>

    <nav>
        <a href="pagina-principal.php">INICIO</a>
        <a href="chefs.php">CHEFS</a>
        <a href="Servicios.php">SERVICIOS</a>
        <a href="contactos.php">CONTACTOS</a>
        <a href="Intranet.php">INTRANET</a>
    </nav>

    <section class="servicios">
        <h2>Nuestros Servicios</h2>
        <ul>
            <li><strong>Menú Degustación:</strong> Disfruta de una experiencia culinaria única con nuestro menú degustación, cuidadosamente elaborado por nuestros chefs.</li>
            <li><strong>Maridaje de Vinos:</strong> Ofrecemos una selección exclusiva de vinos para acompañar cada plato de nuestro menú.</li>
            <li><strong>Eventos Privados:</strong> Organizamos eventos privados y cenas exclusivas en un ambiente elegante y sofisticado.</li>
            <li><strong>Clases de Cocina:</strong> Aprende de los mejores con nuestras clases de cocina impartidas por chefs de renombre.</li>
            <li><strong>Servicio de Catering:</strong> Llevamos la experiencia de Restaurante Cumbre a tu evento con nuestro servicio de catering de lujo.</li>
        </ul>
    </section>

    <footer>
        <h6><p>&copy; 2024 CUMBRE. POLÍTICA DE PRIVACIDAD - TODOS LOS DERECHOS RESERVADOS.</p></h6>
    </footer>
</body>
</html>