<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Encuestas | Encuesta 2</title>
    <meta name="viewport" content="width=device-width,
    user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/contacto.css">
    <link rel="stylesheet" href="css/estiloEncuesta1.css">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
    <div class="modal" id="modal">
        <div class="modal__content">
            <img src="" alt="" class="modal__img" id="modal__img">
        </div>
        <div class="modal__boton" id="modal__boton">X</div>
    </div>
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 clas="logo">Encuestas Online</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__phone">
                    <span class="icon-phone">55-14-60-74-74</span>
                </p>
                <p class="main-header__contactInfo__address">
                    <span class="icon-location">Emiliano Zapata s/n, Col. El Tráfico 54435 Villa Nicolás Romero</span>
                </p>
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item">
                    <a href="/Encuestas" class="menu__link ">Inicio</a>
                </li>
                <li class="menu__item">
                    <a href="encuesta1.php" class="menu__link">Encuesta 1</a>
                </li>
                <li class="menu__item">
                    <a href="encuesta2.php" class="menu__link menu__link--select">Encuesta 2</a>
                </li>
                <li class="menu__item">
                    <a href="contacto.html" class="menu__link">Contacto</a>
                </li>
            </ul>
            <div class="social-icon">
                <a href="https://www.facebook.com/gobmexico" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="https://mail.google.com/" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>

    <section class="banner">
        <img src="img/Pensando.jpg" alt="" class="banner__img">
        <div class="banner__content">UNIVERSIDAD POLITÉCNICA DE SAN LUIS POTOSÍ</div>
    </section>
    
    <main class="main">
        <div class="group gallery">
            <h2 class="group__title">Galería</h2>
            <div class="container container--flex">
                <div class="column column--50-25">
                    <img src="img/galeria/universidad1.jpg" alt="" class="gallery__img gallery__img--big">
                    <img src="img/galeria/universidad2.jpg" alt="" class="gallery__img gallery__img--small">
                </div>
                <div class="column column--50-25">
                    <img src="img/galeria/universidad3.jpg" alt="" class="gallery__img gallery__img--small">
                    <img src="img/galeria/universidad4.jpg" alt="" class="gallery__img gallery__img--big">
                </div>
                <div class="column column--50-25">
                    <img src="img/galeria/universidad5.jpg" alt="" class="gallery__img gallery__img--big">
                    <img src="img/galeria/universidad6.jpg" alt="" class="gallery__img gallery__img--small">
                </div>
                <div class="column column--50-25">
                    <img src="img/galeria/universidad7.jpg" alt="" class="gallery__img gallery__img--small">
                    <img src="img/galeria/universidad8.jpg" alt="" class="gallery__img gallery__img--big">
                </div>
            </div>
        </div>
    </main>

    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main_title">DESCRIPCIÓN</h2>
                <p class="main__txt">Se localiza en la ciudad de San Luis Potosí y tiene una capacidad de 5,000 estudiantes, que pueden aprovechar las instalaciones modernas que se proporcionan y que incluyen cuatro edificios académicos con una superficie de 3.920 m2 cada uno, cafetería, biblioteca, centro de salud, laboratorios, salas de cómputo y audiovisuales, así como áreas deportivas.
                    <BR>

                    <BR>El proyecto incluye el diseño, construcción, suministro de equipos, financiamiento, mantenimiento y operación por un período de 20 años. Se construyó en dos etapas diferentes, para hacer frente a la demanda esperada y se encuentra actualmente en pleno funcionamiento.
                    
                        <BR>ACCIONA fue patrocinador y proveedor de capital principal. La participación en el proyecto fue vendida recientemente, aunque ACCIONA ha conservado las operaciones del activo.</p>
            </div>
        </section>
    </main>

    <?php
include ("abrir_conexion.php");
        if(isset($_POST['submit'])){
            $nombreE2=$_POST['nombre'];
            $correoE2=$_POST['correo'];
            $pregunta1E2=$_POST['pr1'];
            $pregunta2E2=$_POST['pr2'];
            $pregunta3E2=$_POST['pr3'];
            $pregunta4E2=$_POST['pr4'];
            $pregunta5E2=$_POST['pr5'];
            $existe=0;
            $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db2 WHERE correoE2 = '$correoE2'");
            WHILE($consulta = mysqli_fetch_array($resultados)){
                $existe++;
            }if($existe==0){
                mysqli_query($conexion, "INSERT INTO $tabla_db2 (nombreE2,correoE2,pregunta1E2,pregunta2E2,pregunta3E2,pregunta4E2,pregunta5E2) values('$nombreE2','$correoE2','$pregunta1E2','$pregunta2E2','$pregunta3E2','$pregunta4E2','$pregunta5E2')");
                echo"<script>
                alert('Encuesta Registrada');
                window.location= 'encuesta2.php'
                </script>";
            }else{
                echo"<script>
                alert('Correo registrado intente de nuevo');
                window.location= 'encuesta2.php'
                </script>";
            }
            }
?>

    <div class="container_encuesta">
        <form method="post" action="" class="formulario">
            <h1 class="formulario__titulo">Encuesta</h1>
            <fieldset>
                <legend>Nombre</legend>
                <label>
                    <input type="text" class="form__txt" name="nombre" pattern="[A-Za-z0-9_-@]" required>
                </label>
            </fieldset>
            <fieldset>
                <legend>Correo</legend>
                <label>
                    <input type="text" class="form__txt" name="correo" pattern="[A-Za-z0-9_-@]" required>
                </label>
            </fieldset>
          <fieldset>
              <legend>¿Consideras que fue bueno construir la Universidad?</legend>
              <label>
                <input type="radio" name="pr1" value="Si" required> Si
              </label>
              <label>
                  <input type="radio" name="pr1" value="No" required> No
              </label>
              <label>
                  <input type="radio" name="pr1" value="Talvez" required> Tal vez
              </label>
          </fieldset>
          <fieldset>
              <legend>¿Asistirias a la Universidad en caso de poder?</legend>
              <label>
                  <input type="radio" name="pr2" value="Si" required> Si
              </label>
              <label>
                  <input type="radio" name="pr2" value="No" required> No
              </label>
              <label>
                  <input type="radio" name="pr2" value="Talvez" required> Talvez
              </label>
          </fieldset>
          <fieldset>
            <legend>¿Recomendarias la Universidad a algun familiar?</legend>
            <label>
                <input type="radio" name="pr3" value="Si" required> Si
            </label>
            <label>
                <input type="radio" name="pr3" value="No" required> No
            </label>
            <label>
                <input type="radio" name="pr3" value="Talvez" required> Talvez
            </label>
        </fieldset>
        <fieldset>
            <legend>¿Crees que las becas serian importantes?</legend>
            <label>
                <input type="radio" name="pr4" value="Si" required> Si
            </label>
            <label>
                <input type="radio" name="pr4" value="No" required> No
            </label>
            <label>
                <input type="radio" name="pr4" value="Talvez" required> Talvez
            </label>
        </fieldset>
        <fieldset>
            <legend>¿La universidad cumple con tus expectativas?</legend>
            <label>
                <input type="radio" name="pr5" value="Si" required> Si
            </label>
            <label>
                <input type="radio" name="pr5" value="No" required> No
            </label>
            <label>
                <input type="radio" name="pr5" value="Talvez" required> Talvez
            </label>
        </fieldset>
        <input type="submit" name="submit" class="btn formulario__btn" onclick="return message();">
        </form>
      </div>
    <footer class="main-footer">
        <div class="container container--flex">
            <div class="column column--33">
                <h2 class="column--tittle">¿Por que utilizar Encuestas online?</h2>
                <p class="column__txt">Esta pagina esta hecha para contestar eficazmente las encuestas para que a usted como usuario no le tome demasiado tiempo, lo que le ayudara a seguir con sus actividades lo mas pronto posible</p>
            </div>
            <div class="column column--33">
                <h2 class="column--tittle">Contáctanos</h2>
                <p class="column__txt">Emiliano Zapata s/n, Col. El Tráfico 54435 Villa Nicolás Romero</p>
                <p class="column__txt">Teléfono: 55-14-60-74-74</p>
                <p class="column__txt">diegochavez05081998@gmail.com</p>
            </div>
            <div class="column column--33">
                <h2 class="column--tittle">Redes sociales</h2>
                <p class="column__txt">
                    <a href="https://www.facebook.com/gobmexico" class="icon-facebook">Facebook</a>
                </p>
            </div>
            <p class="copy">© 2020 Encuestas online | Todos los derechos reservados</p>
        </div>
    </footer>
    <script src="js/menu.js"></script>
    <script src="js/modal.js"></script>
</body>

</html>