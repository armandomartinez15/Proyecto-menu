<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Catálogo de Alimentos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
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

   
        h1 {
            color: #4CAF50;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .section {
            width: 80%;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            text-align: center;
        }
        .section h2 {
            font-size: 1.8em;
            color: #333;
        }
        .section p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
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

    <h1>Sobre Nosotros</h1>

    <div class="section">
        <h2>Nuestra Misión</h2>
        <p> Crear una línea de productos alimenticios pensados especialmente para personas que están comenzando a hacer ejercicio y desean optimizar su rendimiento, recuperación y salud en general. </p>
    </div>

    <div class="section">
        <h2>Nuestra Visión</h2>
        <p>"Empoderar a las personas que inician su camino hacia una vida activa y saludable, proporcionando productos alimenticios naturales y efectivos que optimicen su rendimiento, recuperación y bienestar. Nos comprometemos a ofrecer soluciones prácticas y accesibles para que cada principiante en el gimnasio se sienta motivado, informado y respaldado en su jornada de transformación física y mental."</p>

       
    </div>

</body>
</html>
