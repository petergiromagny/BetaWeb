<?php
include '../isset/meta.php';
include '../controller/login.php';

$userDatabase = "root";
$mdpDatabase = "";

$dsn = new PDO('mysql:host=localhost;dbname=betaweb', $userDatabase, $mdpDatabase);

if (isset($_POST['signin']))
{
    $firstname = htmlspecialchars($_POST['firstname']);
    $secondname = htmlspecialchars($_POST['secondname']);
    $mail = htmlspecialchars($_POST['mail']);
    $passw1 = sha1($_POST['passw1']);
    $passw2 = sha1($_POST['passw2']);

    if (!empty($_POST['firstname']) AND !empty($_POST['secondname']) AND !empty($_POST['mail']) AND !empty($_POST['passw1']) AND !empty($_POST['passw2']))
    {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
            $requeteMail = $dsn->prepare("SELECT * FROM client WHERE email = ? ");
            $requeteMail->execute(array($mail));
            $mailexist = $requeteMail->rowCount();

            if ($mailexist == 0)
            {
                if ($passw1 == $passw2)
                {
                    $requete = $dsn->prepare("INSERT INTO client(first_name, second_name, email, password) VALUE (? ,? ,? ,? )");
                    $requete->execute(array($firstname, $secondname, $mail, $passw1));
                    $message = "Vous êtes bien enregistré, merci pour votre confiance";
                    header('Location: index.php');
                }
                else
                {
                    $message = "Vos mots de passe ne correspondent pas";
                }
            }
            else
            {
                $message = "Adrese mail déjà utilisée";
            }
        }
        else
        {
            $message = "Votre adresse mail n'est pas valide";
        }


    }
    else
    {
        $message =  "Tout les champs doivent être complété";
    }
}

?>

<html lang="EN">
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
                        <label>
                            <input type="text" class="form-control" placeholder="First name" name="firstname" value="<?php if(isset($firstname)){echo $firstname;}?>">
                        </label>
                    </div>
                    <div class="col">
                        <label>
                            <input type="text" class="form-control" placeholder="Last name" name="secondname" value="<?php if(isset($secondname)){echo $secondname;}?>">
                        </label>
                    </div>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleInputEmail1"></label><input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="mail" value="<?php if(isset($mail)){echo $mail;}?>">
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <label>
                            <input type="password" class="form-control" placeholder="Password" name="passw1">
                        </label>
                    </div>
                    <div class="col">
                        <label>
                            <input type="password" class="form-control" placeholder="Confirm password" name="passw2">
                        </label>
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
                <h3 style="text-align: center; color: red">
                    <?php
                    if (isset($message))
                    {
                        echo $message;
                    }
                    ?>
                </h3>
            </div>
        </div>
    </div>



</div>
</body>
</html>
