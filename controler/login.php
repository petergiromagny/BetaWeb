<?php

$model=new DAO();

if (isset($_POST['signin']))
{
    $firstname = htmlspecialchars($_POST['firstname']);
    $secondname = htmlspecialchars($_POST['secondname']);
    $mail = htmlspecialchars($_POST['mail']);
    $passw1 = sha1($_POST['passw1']);
    $passw2 = sha1($_POST['passw2']);

    if (!empty($_POST['firstname']) AND !empty($_POST['secondname']) AND !empty($_POST['mail']) AND !empty($_POST['passw1']) AND !empty($_POST['passw2']))
    {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)){

            if ($passw1 == $passw2)
            {

            }
            else
            {
                $error = "Vos mots de passe ne correspondent pas";
            }
        }
        else
        {
            $error = "Votre adresse mail n'est pas valide";
        }


    }
    else
    {
        $error =  "Tout les champs doivent être complété";
    }
}

?>