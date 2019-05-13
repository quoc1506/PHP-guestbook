<?php
$USERNAME = 'admin';
$PASSWORD = '123456';
$AUTH_KEY = 'AUTH_KEY';
require_once "model/Message.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'postMessage') {
        $name = $_POST['name'];
        if (empty($name) || strlen($name) > 50 || empty($_POST['message'])) {
            echo 'Please input valid data';
        } else
            try {
                $objM = new Message();
                $result = $objM->createMessage($_POST);
                if ($result === true)
                    header('Location: /');
                else
                    var_dump($result);
            } catch (\Exception $e) {
                echo $e->getMessage();
            }
    }
    if ($_POST['action'] === 'adminLogin') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === $USERNAME && $password === $PASSWORD) {
            $token = md5($username . $password);
            setcookie($AUTH_KEY, $token, time() + 60 * 60);
            header('Location: /');
        }
        echo 'Invalid username or password';
    }
    if ($_POST['action'] === 'adminLogout') {
        setcookie($AUTH_KEY, null, time());
        header('Location: /');
    }
    if ($_POST['action'] === 'deleteMessage') {
        $objM = new Message();
        $result = $objM->deleteMessage($_POST);
        var_dump($result);
        if ($result === true)
            header('Location: /');
        else
            var_dump($result);
    }
    if ($_POST['action'] === 'updateMessage') {
        $objM = new Message();
        $result = $objM->updateMessage($_POST);
        if ($result === true)
            header("Refresh:0");
        else
            var_dump($result);
    }
    exit;
}
function checkAdmin()
{
    global $AUTH_KEY, $USERNAME, $PASSWORD;
    if (isset($_COOKIE[$AUTH_KEY]) && $_COOKIE[$AUTH_KEY] === md5($USERNAME . $PASSWORD)) {
        setcookie($AUTH_KEY, $_COOKIE[$AUTH_KEY], time() + 60 * 60);
        return true;
    }
    return false;
}

if (strpos($_SERVER['REQUEST_URI'], 'action_page.php') !== false)
    header('Location: /');
