<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galería de Productos</title>
    <style type="text/css">
body {
            background-color: #f3f3f3;
            font-family: Arial, sans-serif;
            margin: 0;
            color: #333;
        }

        header {
            width: 100%;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
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
            margin-top: 120px;
            text-align: center;
            font-size: 1.8em;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product:hover {
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }

        .product img {
            width: 100%;
            height: auto;
            max-height: 180px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .product img:hover {
            transform: scale(1.05);
        }

        .product p {
            font-size: 1.1em;
            color: #333;
            margin: 15px 0 0;
            text-align: center;
            font-weight: bold;
        }

        .back-button {
            display: inline-block;
            background-color: #333;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 1em;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            margin-top: 20px;
            text-align: center;
        }

        .back-button:hover {
            background-color: #555;
            transform: translateY(-3px);
        }

        .motivacion {
        background-color: #eaf0f4;
        padding: 20px;
        text-align: center;
        margin-top: 40px;
        font-size: 1.2em;
        color: #333;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .motivacion p {
        margin: 10px 0;
    }

    .motivacion p:first-child {
        font-weight: bold;
        color: #CE7D35;
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
    <div class="motivacion">
    <p>¡Mantente enfocado en tus objetivos! La alimentación adecuada es esencial para maximizar tu rendimiento en el gimnasio. Conoce más sobre cómo mejorar tu dieta y potenciar tus entrenamientos.</p>
    <p>¡Visítanos y empieza a transformar tu cuerpo con los mejores consejos y productos alimenticios para tus necesidades fitness!</p>
</div>
</body>
</html>
