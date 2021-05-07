<!DOCTYPE html>
<!--- formulaire de connexion--->
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">            
            <title>Connexion</title>
        </head>

<body>
<!--messages d'erreurs-->
    <div class="textestyle"><div class="login-form">
<?php 
    if(isset($_GET['login_err']))
    {
        $err = htmlspecialchars($_GET['login_err']);
            switch($err)
        {
            case 'password':
?>
    <div class="alert alert-danger"> <strong>Erreur</strong> mot de passe incorrect.</div>
<?php
            break;
            case 'email':
?>
    <div class="alert alert-danger"><strong>Erreur,</strong> email incorrect.</div>
<?php
            break;
            case 'already':
?>
    <div class="alert alert-danger"><strong>Erreur,</strong> compte non existant.</div>
<?php
            break;
    }
        }
?> 

<!--formulaire de connexion -->
    <form action="connexion.php" method="post">
    <h2 class="text-center">Connexion</h2>       
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>

        <input type='checkbox'class='check-box'><span> Sauvegarder le mot de passe </span>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>   
        <p class="text-center"><a href="inscription.php">Vous n'avez pas encore de compte? C'est par ici pour s'inscrire</a></p>

    </form>
    </div>
    </div>
        

<style>
body{
    background-image:radial-gradient(#89151A, #003A5A) ;
    background-color: rgb(157,2,8);
    background-position: center;
    background-size: cover;
}

.textestyle{
    font-family: 'Red Hat Display', sans-serif; 
    color: white;
    text-align: center;
}

.btn{ 
    top: 0;
	left:0;
	position: absolute;
	width: 140px;
	height: 100%;
	background: #ffd04f;
	border-radius: 30px;
	transition: .5s;
    width: 50%;
	margin:35px auto;
	position:relative;
	box-shadow: 0 0 20px 9px #ff61241f;
    font-family: 'Red Hat Display', sans-serif ;
}

.check-box{
	margin: 30px 10px 34px 0;
}
.login-form {
    width: 340px;
    margin: 50px auto;
}
.login-form form {
    margin-bottom: 15px;
    background:rgba(0,0,0,0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
    }
.form-control {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</body>
</html>
