<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Encuestas | Encuesta 1</title>
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
                    <a href="encuesta1.php" class="menu__link menu__link--select">Encuesta 1</a>
                </li>
                <li class="menu__item">
                    <a href="encuesta2.php" class="menu__link">Encuesta 2</a>
                </li>
                <li class="menu__item">
                    <a href="contacto.html" class="menu__link">Contacto</a>
                </li>
            </ul>
            <div class="social-icon">
                <a href="https://www.facebook.com/gobmexico" class="social-icon__link"><span class="icon-facebook"></span></a>
                <a href="https://mail.google.com" class="social-icon__link"><span class="icon-mail"></span></a>
            </div>
        </div>
    </nav>

    <section class="banner">
        <img src="img/Pensando.jpg" alt="" class="banner__img">
        <div class="banner__content">Centro Cultural Mexiquense Bicentenario</div>
    </section>
    
    <main class="main">
        <div class="group gallery">
            <h2 class="group__title">Galería</h2>
            <div class="container container--flex">
                <div class="column column--50-25">
                    <img src="img/galeria/cultura1.jpg" alt="" class="gallery__img gallery__img--big">
                    <img src="img/galeria/cultura8.jpg" alt="" class="gallery__img gallery__img--small">
                </div>
                <div class="column column--50-25">
                    <img src="img/galeria/cultura2.jpg" alt="" class="gallery__img gallery__img--small">
                    <img src="img/galeria/cultura7.jpg" alt="" class="gallery__img gallery__img--big">
                </div>
                <div class="column column--50-25">
                    <img src="img/galeria/cultura3.jpg" alt="" class="gallery__img gallery__img--big">
                    <img src="img/galeria/cultura6.jpg" alt="" class="gallery__img gallery__img--small">
                </div>
                <div class="column column--50-25">
                    <img src="img/galeria/cultura4.jpg" alt="" class="gallery__img gallery__img--small">
                    <img src="img/galeria/cultura5.jpg" alt="" class="gallery__img gallery__img--big">
                </div>
            </div>
        </div>
    </main>
    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main_title">DESCRIPCIÓN</h2>
                <p class="main__txt">El proyecto consiste en una construcción de cerca de 40,000 m2 en varios edificios:

                    <br>- Un auditorio con 260 lugares
                    <br>- Un teatro cerrado y uno al aire libre, con 1,200 y 800 lugares respectivamente
                    <br>- Una biblioteca con capacidad para 80,000 usuarios
                    <br>- Diversas áreas para museo
                    <br>- Una plaza central</p>
            </div>
        </section>
    </main>

    <?php
include ("abrir_conexion.php");
        if(isset($_POST['submit'])){
            $nombreE1=$_POST['nombre'];
            $correoE1=$_POST['correo'];
            $pregunta1E1=$_POST['pr1'];
            $pregunta2E1=$_POST['pr2'];
            $pregunta3E1=$_POST['pr3'];
            $pregunta4E1=$_POST['pr4'];
            $pregunta5E1=$_POST['pr5'];
            $existe=0;
            $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE correoE1 = '$correoE1'");
            WHILE($consulta = mysqli_fetch_array($resultados)){
                $existe++;
            }if($existe==0){
                mysqli_query($conexion, "INSERT INTO $tabla_db1 (nombreE1,correoE1,pregunta1E1,pregunta2E1,pregunta3E1,pregunta4E1,pregunta5E1) values('$nombreE1','$correoE1','$pregunta1E1','$pregunta2E1','$pregunta3E1','$pregunta4E1','$pregunta5E1')");
                echo"<script>
                alert('Encuesta Registrada');
                window.location= 'encuesta1.php'
                </script>";
            }else{
                echo"<script>
                alert('Correo registrado intente de nuevo');
                window.location= 'encuesta1.php'
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
              <legend>¿Consideras que fue bueno construir el centro cultural mexiquense?</legend>
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
              <legend>¿Asistirias con tu familia al centro cultural mexiquense?</legend>
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
            <legend>¿Recomendarias el centro cultural mexiquense?</legend>
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
            <legend>¿Asistirias a algun taller del centro cultural mexiquense?</legend>
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
            <legend>¿Que espacio del centro cultural mexiquense te llama mas la atención?</legend>
            <label>
                <input type="radio" name="pr5" value="Conciertos" required> Teatro sala de conciertos
            </label>
            <label>
                <input type="radio" name="pr5" value="Libre" required> Teatro al aire libre
            </label>
            <label>
                <input type="radio" name="pr5" value="Auditorio" required> Auditorio de usos multiples
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