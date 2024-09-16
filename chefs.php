<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Cumbre</title>
    <link rel="stylesheet" href="chefs.css"> 
</head>
<body>
    <header>
        <h1>Restaurante Cumbre</h1>

        <div class="contenido" >
            <ul class="slider">
                <li id="slide1"><img src="img/chefs.png" ></li>
                <li id="slide2"><img src="img/chefs1.png" ></li>
                <li id="slide3"><img src="img/chefs3.png" ></li>
                <li id="slide4"><img src="img/chefs2.png" ></li>

            </ul>
        </div>
        
    </header>

    <nav>
        <a href="pagina-principal.php">INICIO</a>
        <a href="chefs.php">CHEFS</a>
        <a href="Servicios.php">SERVICIOS</a>
        <a href="contactos.php">CONTACTOS</a>
        <a href="Intranet.php">INTRANET</a>
    </nav>

    <div class="chefs-container">
        <div class="chef">
            <img src="img/chef1.png" alt="Chef 1" class="scroll-slide">
            <h3>Chef Remi</h3>
            <p>Chef parisino con un talento increíble para la cocina. A pesar de su tamaño, crea platos exquisitos que sorprenden a todos. Su pasión y dedicación lo han convertido en una leyenda culinaria.</p>
            <p><em>"Cualquiera puede cocinar."</em></p>
        </div>
        <div class="chef">
            <img src="img/chef2.png" alt="Chef 2" class="scroll-slide">
            <h3>Chef Luigi Risotto</h3>
            <p>Chef originario de Springfield, con gran talento culinario y dueño de su propio restaurante "Luigi's" en su ciudad de origen, conocido por su acento italiano y su actitud seria.</p>
            <p><em>"La cocina es el arte de transformar ingredientes simples en experiencias inolvidables."</em></p>
        </div>
        <div class="chef">
            <img src="img/chef3.png" alt="Chef 3" class="scroll-slide">
            <h3>Chef Andre Rush</h3>
            <p>Chef célebre y veterano militar estadounidense. Nacido en Columbus, Mississippi, trabajó como chef en la Casa Blanca durante cuatro administraciones presidenciales.</p>
            <p><em>"El éxito en la cocina se mide por la pasión y el amor que pones en cada plato."</em></p>
        </div>
    </div>

    <footer>
        <h6><p>&copy; 2024 CUMBRE. POLÍTICA DE PRIVACIDAD - TODOS LOS DERECHOS RESERVADOS.</p></h6>
    </footer>

    <script src="scriptchef.js">
         
    </script> <!-- Enlace al archivo JavaScript -->
</body>
</html>
