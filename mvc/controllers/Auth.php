<?php
class Auth extends Controller {
    public $AuthModel;
    
    public function __construct() {
        $this->AuthModel = $this->model("AuthModels");
    }

    public function index() {
        echo "ERROR";
    }

    public function login() {
        if(isset($_POST['btn_log']) && $_POST['btn_log']) {
            unset($_POST['btn_log']);
            $request = new Request;
            $data = $request->postFields();           
            $result = $this->AuthModel->login($data);
            if($result) {
                if($_SESSION['user']['role_id'] == '1') {
                    header("Location: http://localhost:8088/web/admin/category");
                }
                if($_SESSION['user']['role_id'] == '2') {
                    header("Location: http://localhost:8088/web/home");
                }
        
            } else {
                $_SESSION['log'] = 'false';
            }
        }
            $this->view("auth/login");
    }

    public function register() {
        $arr = array();
        if(isset($_POST['btn_reg']) && $_POST['btn_reg']) {
            unset($_POST['btn_reg']);
            $request = new Request;
            $data = $request->postFields();
            $result = $this->AuthModel->register($data);
            $result = json_decode($result, true);
            if($result['type'] == 'success')
                $_SESSION['reg'] = 'true';
            else if($result['type'] == 'fail') {
                $_SESSION['reg'] = 'false';
            }
        }
        $this->view("auth/register");
    }

    public function logout() {
        session_unset();
        header('location: http://localhost:8088/web/auth/login');
    }
}

?>