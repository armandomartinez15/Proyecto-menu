<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding-top: 100px;
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
        
        form {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 50px;
        }

        label {
            font-size: 15px;
            color: #555;
            margin-top: 10px;
            display: block;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s, box-shadow 0.3s;
            font-size: 14px;
            color: #333;
        }

        input:focus, textarea:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
            outline: none;
        }

        textarea {
            height: 120px;
            resize: none;
        }

        input::placeholder, textarea::placeholder {
            color: #aaa;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 14px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 15px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
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

        /* Estilos para el mensaje de confirmación */
        #confirmationMessage {
            display: none;
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            font-size: 15px;
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

<form id="contactForm"onsubmit="showConfirmation(event)">
    <label>Nombre</label>
    <input type="text" name="txtnombre" placeholder="Nombre Completo" required>

    <label>Correo Electrónico</label>
    <input type="email" name="txtcorreo" placeholder="Correo Electrónico" required>

    <label>Teléfono</label>
    <input type="tel" name="txttelefono" placeholder="(XX) XXXX-XXXX" required>

    <label>Mensaje</label>
    <textarea id="mensaje" placeholder="Escribe tu mensaje..." required></textarea>

    <input type="submit" value="Enviar">
</form>

<div id="confirmationMessage">¡Gracias! Su mensaje ha sido enviado con éxito.</div>

<script>
    function showConfirmation(event) {
        event.preventDefault(); // Evita el envío del formulario
        document.getElementById('confirmationMessage').style.display = 'block'; // Muestra el mensaje de confirmación
        setTimeout(function() {
            document.getElementById('confirmationMessage').style.display = 'none'; // Oculta el mensaje después de 3 segundos
        }, 3000);
        document.getElementById("contactForm").reset();
    }
</script>

</body>
</html>
