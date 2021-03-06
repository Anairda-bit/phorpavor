<!DOCTYPE html>
<html>
<title>Turismo W5-login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Link de para los css del template de W3 y style -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">

<!-- Barra de  navegacion -->
<div class="w3-bar w3-white w3-large">
    <a href="index.php" class="w3-bar-item w3-button w3-blue w3-mobile"><i class="fa fa-bed w3-margin-right"></i>TURISMO W5 *****</a>
    <a href="destinos.php" class="w3-bar-item w3-button w3-mobile">Destinos</a>
    <a href="contacto.php" class="w3-bar-item w3-button w3-mobile">Contactos</a>
    <a href="login.php" class="w3-bar-item w3-button w3-mobile">Logearse</a>
    <a href="registro.php" class="w3-bar-item w3-button w3-mobile">Registrarse</a>

    <a href="" class="w3-bar-item w3-button w3-right w3-light-green w3-mobile">Buscar</a>

  </div>
<!-- fin Barra de  navegacion -->

<!-- Contenedor del formulario de login -->
  <div class="w3-container w3-black w3-padding-32" id="login">
    <h2>Iniciar Sesion</h2>
    <p>Es Necesario iniciar sesión para reservar!</p>
    <form action="" method="POST">
        <div class="form-group">
           <label>Usuario</label>
           <input type="text" class="w3-input w3-border" name="usuario" placeholder="nombre de usuario">
        </div>
        <div class="form-group">
           <label>Clave</label>
           <input type="password" class="w3-input w3-border" name="clave" placeholder="ingrese su clave de acceso">
        </div>
        

        <button type="submit" class="w3-button w3-blue w3-margin-top" name="submit">Logearse</button>

        
     </form>
     </div>
     <!-- fin Contenedor del formulario de login -->
     

<!-- Datos de Contacto -->

  <div class="w3-panel w3-blue w3-center w3-padding-32" style="margin:32px 0">
  
      <h3>Sobre Nosotros</h3>
      <h6>Queremos hacer que todos tus viajes sean extraordinarios. Somos tu guía personal: con nosotros encontrarás cosas que hacer sea cual sea tu destino, desde visitas imprescindibles hasta experiencias exclusivas. Vivir momentos inolvidables nunca ha sido tan fácil como con GetYourGuide. Millones de viajeros ya han confiado en GetYourGuide para cumplir sus sueños de viaje, y este es solo el principio. Estamos cambiando la forma en la que las personas conectan con sus destinos para que puedan vivir unas vacaciones de ensueño. Crea viajes a tu medida.</h6>
    <p>Aceptamos: <i class="fa fa-credit-card w3-large"></i> <i class="fa fa-cc-mastercard w3-large"></i> <i class="fa fa-cc-amex w3-large"></i> <i class="fa fa-cc-cc-visa w3-large"></i><i class="fa fa-cc-paypal w3-large"></i></p>
    </div>
   <!--fin  Datos de Contacto -->
<!-- Contenedor de galeria de imagenes de otros destinos -->
  <div class="w3-container">
    <h3>Destinos</h3>
    <h6></h6>
  </div>
  
  <div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="https://www.w3schools.com/w3images/cinqueterre.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/newyork2.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">New York</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="https://www.w3schools.com/w3images/sanfran.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">San Francisco</span>
          </div>
        </div>
      </div>
</div>
</div>
<!-- Footer -->
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
    <div class="w3-xlarge w3-padding-16">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>© 2021 Copyright:Adriana´s<a href="" target="_blank" class="w3-hover-text-green"></a></p>
  </footer>
<!-- fin Footer -->

</body>
</html>