<?php
class Register extends Controller
{
    public $data = [];
    public $model_user;

    public function __construct()
    {
        $this->model_user = $this->model('UserModel');
    }

    public function authenticate()
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirm_password'];

        $this->data['err_name'] = "";
        $this->data['err_phone'] = "";
        $this->data['err_email'] = "";
        $this->data['err_address'] = "";
        $this->data['err_password'] = "";
        $this->data['err_confirm_password'] = "";

        $err_validate = [];

        if ($name == '') {
            $err_validate['err_name'] = "Name is required";
        }
        if ($phone == '') {
            $err_validate['err_phone'] = "Phone is required";
        }
        if ($email == '') {
            $err_validate['err_email'] = "Email is required";
        }
        if ($address == '') {
            $err_validate['err_address'] = "Address is required";
        }
        if ($password == '') {
            $err_validate['err_password'] = "Password is required";
        }
        if ($confirmPassword == '') {
            $err_validate['err_confirm_password'] = "Confirm password is required";
        } else if ($confirmPassword != $password) {
            $err_validate['err_confirm_password'] = "Password and Confirm Password do not match";
        }

        if (sizeof($err_validate) == 0) {
            $currentDateTime = new DateTime();
            $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');
            $options = [
                'cost' => 11
            ];
            $data_request = [
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_BCRYPT, $options),
                'address' => $address,
                'role' => 'ROLE_USER',
                'create_date' => $formattedDateTime,
            ];
            $this->model_user->createModel($data_request);
        } else {
            $this->data['err_name'] = $err_validate['err_name'];
            $this->data['err_phone'] = $err_validate['err_phone'];
            $this->data['err_email'] = $err_validate['err_email'];
            $this->data['err_address'] = $err_validate['err_address'];
            $this->data['err_password'] = $err_validate['err_password'];
            $this->data['err_confirm_password'] = $err_validate['err_confirm_password'];
            $this->render('register/register', $this->data);
        }
        // $user = $this->model_user->findByEmail($email);
    }

    public function index()
    {
        $this->data['err_name'] = "";
        $this->data['err_phone'] = "";
        $this->data['err_email'] = "";
        $this->data['err_address'] = "";
        $this->data['err_password'] = "";
        $this->data['err_confirm_password'] = "";
        $this->render('register/register', $this->data);
    }
}
