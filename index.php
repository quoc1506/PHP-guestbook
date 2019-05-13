<?php
$message = [
  'id' => 1,
  'name'=>'Janie Jones',
  'message' => 'Nemo emin ipsoam oamsd asdasmdas dasodmasd asdomasd omsda',
  'created_at' => '21st Mar, 2017 at 09:43am'
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guest book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
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
                    <h3>Guest book</h3>
                    <span class="space"></span>
                    <div class="text-left">
                        Feel free to leave use a short message to tell us what you think to our services
                    </div>
                    <input type="button" id="btnMessage" class="btn btn-common btn-padding marginVertical"
                           value="Post a message"/>
                    <form id="formMessage" action="/action_page.php" class="marginVertical">
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
            </div>
            <div class="text-left adminPanel">
                <a href="/admin">Admin login</a>
            </div>
        </div>
        <div class="col bg-dark" id="main">
            <div class="container">
                <div class="row">
                  <? include "part/message.php" ?>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/js/script.js"></script>
</body>
</html>

