<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome</h1>
    <p> successfully logged in</p>
    <form method="POST" action="logout.php">
        <input type="submit" value="Logout">
    </form>
</body>
</html>

<?php

class Welcome
{
    private $loggedIn = false;

    public function __construct()
    {
        session_start();

        if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
            $this->loggedIn = true;
        }
    }

    public function login($username, $password)
    {
        if ($username === 'user' && $password === 'password') {
            $_SESSION['loggedIn'] = true;
            $this->loggedIn = true;
        }
    }

    public function logout()
    {
        $_SESSION['loggedIn'] = false;
        $this->loggedIn = false;
        session_destroy();
    }

    public function isLoggedIn()
    {
        return $this->loggedIn;
    }
}

$Welcome = new Welcome();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (!$Welcome->isLoggedIn()) {
        header('Location: login.php');
        exit;
    }
}

?>

