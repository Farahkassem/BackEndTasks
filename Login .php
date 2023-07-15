<!DOCTYPE html>
<html>
<head>
    <title> Sign in</title>
</head>
<body>
    <h1> sign in</h1>
    <form action="login.php" method="post">
        <label for="email"> Email</label>
        <input type="text" id="email" name="email" required><br><br>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="login">
    </form>
</body>
</html>

<?php
$users = [
    ["email" => "email1@ex.com", "password" => "password1"],
    ["email" => "email2@ex.com", "password" => "password2"],
    ["email" => "email3@ex.com", "password" => "password3"]
];
?>
<?php
require_once 'Array.php';

class Loginpage {
    private $email;
    private $password;

    public function __construct() {
        $this->email = "";
        $this->password = "";
    }

    private function validateEmail() {
        
    }

    public function login() {
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
        $this->validateEmail();

        foreach ($users as $user) {
            if ($user["email"] == $this->email && $user["password"] == $this->password) {
                echo "Login sucess";
                return;
            }
        }

        echo "Failed to login, please check your email & password";
    }
}

$loginPage = new LoginPage();
$loginPage->login();
?>









