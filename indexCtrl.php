<?php
$formError = array();
$regexObjet = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';
$regexMessage = '%^([A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+)([- ]{1}[A-Z]{1}[a-zÀ-ÖØ-öø-ÿ]+){0,1}$%';


if (isset($_POST['send'])) {
    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $email = htmlspecialchars($_POST['email']);
        } else {
            $formError['email'] = 'Vôtre adresse email est incorrect';
        }
    } else {
        // On va réutiliser notre erreur lastName parce que les deux ne peuvent pas exister en même temps.
        $formError['email'] = 'Veuillez renseigner votre adresse email';
    }
    if (!empty($_POST['nameSocity'])) {
        if (preg_match($regexObjet, $_POST['nameSocity'])) {
            $object = htmlspecialchars($_POST['nameSocity']);
        } else {
            $formError['nameSocity'] = 'Veillez bien remplir avec des lettres';
        }
    } else {
        // On va réutiliser notre erreur lastName parce que les deux ne peuvent pas exister en même temps.
        $formError['nameSocity'] = 'Veillez bien remplir le champ';
    }
    if (!empty($_POST['objectOfMess'])) {
        if (preg_match($regexObjet, $_POST['objectOfMess'])) {
            $object = htmlspecialchars($_POST['objectOfMess']);
        } else {
            $formError['objectOfMess'] = 'Veillez bien remplir avec des lettres';
        }
    } else {
        // On va réutiliser notre erreur lastName parce que les deux ne peuvent pas exister en même temps.
        $formError['objectOfMess'] = 'Veillez bien remplir le champ';
    }
    if (!empty($_POST['message'])) {
        if (preg_match($regexObjet, $_POST['message'])) {
            $message = htmlspecialchars(utf8_decode($_POST['message']). '\r\n');
        } else {
            $formError['message'] = 'Il y a des caractères non autoriser, veillez bien remplir le champ';
        }
    } else {
        // On va réutiliser notre erreur lastName parce que les deux ne peuvent pas exister en même temps.
        $formError['message'] = 'Veillez bien remplir le champ';
    }
/**
 * $destinataire = 'odilecoutiez@gmail.com';
 * $entete = 'From: ' .$email ;
* $objet = $_POST['objectOfMess'];
 * $mesage = $_POST['message'];
 * $message = utf8_decode($mesage); 
 *   mail($destinataire, $object, $message, $entete);
 */

}



