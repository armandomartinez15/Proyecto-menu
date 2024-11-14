<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería de Productos Electrónicos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f8f8;
            margin: 0;
            padding-top: 70px;
        }

        header {
            width: 100%;
            padding: 10px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            z-index: 1000;
            background-color: #fff;
        }

        .navegacion {
            width: 80%;
            margin: 0 auto;
        }

        .navegacion ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
            background-color: #ffffff;
            border-radius: 8px;
        }

        .menu > li {
            position: relative;
        }

        .menu > li > a {
            display: block;
            padding: 15px 20px;
            color: #353535;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s, background-color 0.3s;
        }

        .menu li a:hover {
            color: #CE7D35;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .submenu {
            position: absolute;
            background: #333;
            width: 160px;
            border-radius: 8px;
            visibility: hidden;
            opacity: 0;
            transition: opacity 0.5s, visibility 0.5s;
            top: 100%;
            left: 0;
        }

        .submenu li a {
            display: block;
            padding: 10px 15px;
            color: black;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .submenu li a:hover {
            background-color: #444;
            border-radius: 5px;
        }

        .menu li:hover .submenu {
            visibility: visible;
            opacity: 1;
        }

        h2 {
            color: #333;
            font-size: 2em;
            margin-top: 20px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin: 20px auto;
            width: 90%;
            max-width: 1200px;
        }

        .product {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            width: 220px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: box-shadow 0.3s, transform 0.3s;
        }

        .product:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        .product img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: contain;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product p {
            font-size: 1.1em;
            color: #555;
            margin: 0;
            font-weight: bold;
        }

        .importance-section {
            margin-top: 40px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .importance-section h3 {
            color: #333;
            font-size: 1.8em;
        }

        .importance-section p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
            margin-top: 10px;
        }

        .back-button {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
        }

        .back-button:hover {
            background-color: #555;
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

   <header>
        <nav class="navegacion">
            <ul class="menu">
                <li><a href="/LuisMartinez/LuisMartinez/Inicio.php">Inicio</a></li>
                <li><a href="/LuisMartinez/Nosotros.php">Nosotros</a></li>
                <li><a href="/LuisMartinez/Productos.php">Alimentos</a>
                    <ul class="submenu">
                        <li><a href="carbohidratos.php">Ricos en carbohidratos</a></li>
                        <li><a href="proteinas.php">Ricos en proteinas</a></li>
                        <li><a href="grasas_saludables.php">Ricos en grasas saludables</a></li>
                        <li><a href="entrenamiento.php">Antes de tu entrenamiento</a></li>
                    </ul>
                </li>
                <li><a href="/LuisMartinez/Formularios_Contactos.php">Contactos</a></li>
                <a href="/LuisMartinez/Menu_MartinezLuis.php" class="back-button">Menú Principal</a>
            </ul>
        </nav>
    </header>

    <h2>Galería de Productos Alimenticios</h2>
    <div class="gallery">
        <div class="product">
            <img src="/LuisMartinez/imagenes vi/carbohidratos.jpg" alt="Computadora">
            <p>Carbohidratos</p>
        </div>
        <div class="product">
            <img src="/LuisMartinez/imagenes vi/proteinas.jpg" alt="Celular">
            <p>Proteinas</p>
        </div>
        <div class="product">
            <img src="/LuisMartinez/imagenes vi/grasas.jpg" alt="Audifonos">
            <p>Grasas</p>
        </div>
        <div class="product">
            <img src="/LuisMartinez/imagenes vi/entrenamiento.png" alt="Alexa">
            <p>Antes de entrenar</p>
        </div>
    </div>

    <div class="importance-section">
        <h3>La Importancia de una Buena Alimentación en el Gimnasio</h3>
        <p>
            Una adecuada alimentación es esencial para alcanzar tus objetivos en el gimnasio, ya sea que busques aumentar masa muscular, mejorar tu resistencia o perder peso. 
            Los alimentos ricos en carbohidratos te proporcionan energía para enfrentar entrenamientos intensos, mientras que las proteínas ayudan en la recuperación y crecimiento muscular. 
            Además, las grasas saludables son fundamentales para mantener el equilibrio hormonal y favorecer la absorción de nutrientes. 
            Al conocer tus necesidades nutricionales, puedes optimizar tus resultados y llevar una vida más saludable y activa.
        </p>
    </div>
</body>
</html>
