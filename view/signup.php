<?php
include '../isset/meta.php';

$userDatabase = "root";
$mdpDatabase = "";

$dsn = new PDO('mysql:host=localhost;dbname=betaweb', $userDatabase, $mdpDatabase);

if (isset($_POST['signin'])){
    if (!empty($_POST['firstname']) AND !empty($_POST['secondname']) AND !empty($_POST['mail']) AND !empty($_POST['passw1']) AND !empty($_POST['passw2'])){

        $firstname = htmlspecialchars($_POST['firstname']);
        $secondname = htmlspecialchars($_POST['secondname']);
        $mail = htmlspecialchars($_POST['mail']);
        $passw1 = sha1($_POST['passw1']);
        $passw2 = sha1($_POST['passw2']);

    }
    else{
        $error =  "Tout les champs doivent être complété";
    }
}

?>

<html>
<head>
    <title>Beta Web</title>
</head>
<body>
<div id="main-container">

    <!-----------------------Header----------------------->
    <?php include 'header.php'?>

    <div id="container-sign">
        <div id="square-signup">
            <h1 class="title-signin mt-4">Sign up</h1>
            <form class="mt-5 mb-4" action="" method="post">
                <div class="row mb-4">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" name="firstname">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" name="secondname">
                    </div>
                </div>
                <div class="form-group mb-4">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail">
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Password" name="passw1">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Confirm password" name="passw2">
                    </div>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Accept condition of the BetaWeb Products and Pivacy</label>

                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Subscribe to the BetaWeb Newsletter</label>
                </div>
                <button type="submit" name="signin" class="btn btn-primary btn-signin mt-4">Sign in</button>
            </form>
            <div>
                <p style="text-align: center; color: red">
                    <?php
                    if (isset($error))
                    {
                        echo $error;
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>



</div>
</body>
</html>
