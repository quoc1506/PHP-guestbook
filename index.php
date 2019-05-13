<?php
require_once "action_page.php";
$isAdmin = checkAdmin();
require_once "model/Message.php";
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$objM = new Message();
$messages = [];
$objM->pagination($page);
$messages = $objM->get();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guest book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<div class="container-fluid container-style">
    <div class="row">
        <div class="sidebar text-center">
            <div class="py-2 sticky-top flex-grow-1">
                <div class="nav flex-sm-column">
                    <a href="/" class="brand"><img src="/assets/images/logo.svg" width="200" height="100" alt="php"></a>
                    <span class="divider"></span>
                    <span class="clear"></span>
                    <h3>Guest book</h3>
                    <span class="space"></span>
                    <div class="text-left">
                        Feel free to leave use a short message to tell us what you think to our services
                    </div>
                    <input type="button" id="btnMessage" class="btn btn-common btn-padding marginVertical"
                           value="Post a message"/>
                    <form id="formMessage" action="/action_page.php" class="marginVertical" method="post">
                        <input hidden name="action" value="postMessage">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name"
                                   required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="message" placeholder="Enter your message"
                                   name="message" required>
                        </div>
                        <div class="form-group text-right">
                            <input type="button" class="btn btn-normal close-form" value="Close"/>
                            <button type="submit" class="btn btn-common">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="text-left adminPanel">
                    <?php
                    if ($isAdmin) {
                        ?>
                        <form action="/action_page.php" method="post">
                            <input hidden name="action" value="adminLogout">
                            <input type="button" class="btn" onclick="adminLogout(this)" value="Admin logout"/>
                        </form>
                        <?php
                    } else {
                        ?>
                        <button type="button" class="btn " data-toggle="modal" data-target="#myModal">Admin login
                        </button>
                        <?php include "template_part/loginModal.php";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col bg-dark" id="main">
            <div class="container">
                <div class="row">
                    <?php foreach ($messages as $message) {
                        include "template_part/message.php";
                    } ?>
                </div>
                <div class="row justify-content-center" style="margin-top: 1rem">
                    <?php include "template_part/pagination.php" ?>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/script.js"></script>
</body>
</html>

