<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | VETERINARIA</title>
  
  <link rel="stylesheet" href="css/login.css">
  
  <!-- CORE CSS-->
   <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


  
</head>

<body class="light-blue">
 <?php include 'controlador/login.php';?>


  <div id="login-page" class="row ">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" action="?" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="im/logo2.jpg" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Inicio de sesión</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="prefix material-icons">perm_identity</i>
            <input class="validate" id="email" name="user" type="text">
            <label for="email" data-error="Escribe un correo válido" data-success="right" >Email</label>
          </div>
        </div>
		
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock</i>
            <input id="password" name="pass" type="password">
            <label for="password">Contraseña</label>
          </div>
        </div>
        <!--
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>-->
        <div class="row">
          <div class="input-field col s12">
             <input class="btn waves-effect  light-blue darken-2 col s12" type="submit" name="ingresar" value="Entrar">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="register.html">Registrar</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="forgot-password.html">Recuperar mi contraseña</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>

  <!-- jQuery Library -->
 <script type="text/javascript" src="js/jquery.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  
  
   <footer class="page-footer transparent">
          <div class="footer-copyright  h light-blue darken-3">
            <div class="container center">
            © 2017 designed by
            <a class="white-text " href="">codeAB</a>
            </div>
          </div>
  </footer>
</body>

</html>

