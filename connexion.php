<?php 
    session_start();
    require_once 'config.php';

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        /** on stock */
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        /** pour voir si la personne est bien inscrite dans notre base */
        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        /** on stock les données dans data */
        $data = $check->fetch();
        /** pour voir si la personne existe = 1 */
        $row = $check->rowCount();

        if($row == 1)
        {
        /** on regarde si l'email est valide*/
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data['password']))
                {
        /** on créer une session */
                    $_SESSION['user'] = $data['email'];
                    header('Location: landing.php');
                    die();
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }
