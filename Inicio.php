<!DOCTYPE html>
<html>
<head>
	<title>Momiiiis</title>
	<style type="text/css">

		body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
            flex-direction: column;
            font-family: Arial, sans-serif;
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

        .section {
            width: 90%;
            max-width: 700px;
            background-color: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
            text-align: center;
            transition: transform 0.3s;
        }

        .section:hover {
            transform: translateY(-5px);
        }

        .section h2 {
            font-size: 2em;
            color: #333;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .section p {
            font-size: 1.1em;
            color: #555;
            line-height: 1.6;
            margin: 0;
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


	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section --></head>

<body style="background-color:#d7d7d7;margin:auto">

    

	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container0">
	<div class="ws_images"><ul>
		<li><img src="data0/images/carbohidratos.jpg" alt="carbohidratos" title="carbohidratos" id="wows0_0"/></li>
		<li><img src="data0/images/entrenamiento.png" alt="entrenamiento" title="entrenamiento" id="wows0_1"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/grasas.jpg" alt="jquery carousel" title="grasas" id="wows0_2"/></a></li>
		<li><img src="data0/images/proteinas.jpg" alt="proteinas" title="proteinas" id="wows0_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="carbohidratos"><span><img src="data0/tooltips/carbohidratos.jpg" alt="carbohidratos"/>1</span></a>
		<a href="#" title="entrenamiento"><span><img src="data0/tooltips/entrenamiento.png" alt="entrenamiento"/>2</span></a>
		<a href="#" title="grasas"><span><img src="data0/tooltips/grasas.jpg" alt="grasas"/>3</span></a>
		<a href="#" title="proteinas"><span><img src="data0/tooltips/proteinas.jpg" alt="proteinas"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider</a> by WOWSlider.com v9.0</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine0/wowslider.js"></script>
	<script type="text/javascript" src="engine0/script.js"></script>
	<!-- End WOWSlider.com BODY section --><header>

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

	<div class="section">
        <h2>Que ofrecemos</h2>
        <p>Contamos con una gran variedad de productos de muy alta calidad para la salud de tu cuerpo, escoge tus mejores productos alimenticios en nuestra seccion de productos.<br>Contactanos para conocer tus metas y establecer un plan adecuado para ti y tu disponibilidad!!</p>

         
    </div>

</body>
</html>