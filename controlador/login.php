<?php 
	@include"modelo/Conectar.php";
	$clase=" ";
	$icono="";
	$mensaje="";
	session_start();
	if(@$_GET["cerrar"]){
		session_unset('vet_dni');
		session_destroy();
	}
	
	if(@$_POST["ingresar"]){
		@$cuenta=$_POST['user'];
	@$password=$_POST['pass'];
		if(!empty($cuenta)){
			if(!empty($password)){
				$consulta=$mysqli->query("select * from administrador where dni='$cuenta' and password='$password'");
				if(mysqli_num_rows($consulta)){
					$arreglo=mysqli_fetch_array($consulta);
                    $_SESSION["vet_dni"]=$arreglo["dni"];
                    
                    $tipo=$arreglo["tipo_admin"];
        
	                   if($tipo=="superadmin"){
                           header('location:superadmin.php');
                           session_start();
	                   }else{
	                   	header('location:admin.php');
                           session_start();
	                   }
                    
					
				}else{
					$error[3]='<div class="row display-one" id="message">
           <ul class="collection">
             <li class="collection-item avatar">
              <i class="material-icons circle red">warning</i>
              <span class="title">OH NO!!</span>
              <p>Usuario o contraseña <br> Incorrecta
              </p>
              <a href="javascript:display(message);" class="secondary-content "><i class="material-icons red-text accent-4">loop</i></a>
            </li>
          </ul>
        </div>';
				}
			}else{
				$error[3]='<div class="row display-one" id="message">
           <ul class="collection">
             <li class="collection-item avatar">
              <i class="material-icons circle red">warning</i>
              <span class="title">POR FAVOR!</span>
              <p>Llene el campo de CONTRASEÑA<br> Incorrecta
              </p>
              <a href="javascript:display(message);" class="secondary-content "><i class="material-icons red-text accent-4">loop</i></a>
            </li>
          </ul>
        </div>';
			}
		}else{
			$error[3]='<div class="row display-one" id="message">
           <ul class="collection">
             <li class="collection-item avatar">
              <i class="material-icons circle red">warning</i>
              <span class="title">POR FAVOR!!</span>
              <p>Llene el campo de DNI <br> Incorrecta
              </p>
              <a href="javascript:display(message);" class="secondary-content "><i class="material-icons red-text accent-4">loop</i></a>
            </li>
          </ul>
        </div>';
		}
	}
	
	
?> 