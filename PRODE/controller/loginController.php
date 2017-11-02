<?php
include_once('model/loginModel.php');
include_once('view/loginView.php');
class LoginController extends Controller
{
  function __construct()
  {
    $this->view = new LoginView();
    $this->model = new LoginModel();
  }
  public function index()
  {
    //$password = 'root';
    //echo crypt('root');
    //echo password_hash('root', PASSWORD_DEFAULT);
   // echo ($hash);
    //die($hash);
    $this->view->mostrarLogin();
  }
  public function verify()
  {
      $userName = $_POST['usuario'];
      $password = $_POST['password'];

      if(!empty($userName) && !empty($password)){
        $user = $this->model->getUser($userName);
            $hashed_password = crypt('mypassword'); 
            print_r($hashed_password);
            if (hash_equals($hashed_password, crypt($password, $hashed_password))) {
               echo "Password verified!";
            }
            //password_verify($password, $user[0]['password'])
        if((!empty($user))  ) {
            session_start();
            $_SESSION['USER'] = $userName;
            $_SESSION['LAST_ACTIVITY'] = time();
            header('Location: '.HOME);
        }
        else{
            $this->view->mostrarLogin('Usuario o Password incorrectos');
        }
      }
  }
  public function destroy()
  {
    session_start();
    session_destroy();
    header('Location: '.LOGIN);
  }
}
?>