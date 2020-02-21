<?php 
	require_once 'models/usuario.php';
	//usuario es el nombre del controlador
	class usuarioController{

		public function index(){
			echo "Controlador Usuario, Accion index";
		}

		public function registro(){
			require_once 'views/usuario/registro.php';
		}

		public function save(){
			if(isset($_POST)){
				$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
				$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
				$email = isset($_POST['email']) ? $_POST['email'] : false;
				$password = isset($_POST['password']) ? $_POST['password'] : false;



				$usuario=new Usuario();
				$usuario->setNombre($nombre);
				$usuario->setApellidos($apellidos);
				$usuario->setEmail($email);
				$usuario->setPassword($password);
				$save=$usuario->save();


				if($save){
					$_SESSION['register']="Completado";
				}else{
					$_SESSION['register']="Falled";
				}
				
			}else{
				$_SESSION['register']="falled";
				
			}
			header('location: '.base_url.'usuario/registro');
		}

		public function login(){
			if(isset($_POST)){
				//identificar al usuario
				//Consulta en la base de datos
				$usuario=new Usuario();
				$usuario->setEmail($_POST['email']);
				$usuario->setPassword($_POST['password']);

				$identity = $usuario->login();

				if($identity && is_object($identity)){
					$_SESSION['identity'] = $identity;

					if($identity->rol == 'admin'){
						$_SESSION['admin'] = true;
					}
				}else{
					$_SESSION['error_login'] = "Identificacion fallida";
				}
				//Crear una sesion
			}

			header('location: '.base_url);
			
		}

		public function logout(){
			if(isset($_SESSION['identity'])){
				unset($_SESSION['identity']);
			}
			if(isset($_SESSION['admin'])){
				unset($_SESSION['admin']);
			}

			header("location: ".base_url);
		}



	}

 ?>