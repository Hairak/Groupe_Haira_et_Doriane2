<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link rel="stylesheet" href="style.css">
            <title>Inscription</title>
            <?php include 'nav.php'; ?>
        </head>

<body>
    <h1 class="textestyle">Bienvenue sur Idiomas.</h1>

    <!--- messages d'erreur/succès--->
    <div class="textestyle"> <div class="login-form">
    <?php 
        if(isset($_GET['reg_err']))
            {
                $err = htmlspecialchars($_GET['reg_err']);

        switch($err)
            {
                case 'success':
    ?>
        <div class="alert alert-success">
        <strong>Bravo,</strong> inscription réussie !
        </div>
        
    <?php
        break;
        case 'password':
    ?>
        <div class="alert alert-danger">
        <strong>Erreur,</strong> les mots de passe sont différents.
        </div>
    <?php
        break;
        case 'email':
    ?>
        <div class="alert alert-danger">
        <strong>Erreur,</strong> email non valide.
        </div>
    <?php
        break;
        case 'email_length':
    ?>
        <div class="alert alert-danger">
        <strong>Erreur,</strong> email trop long.
        </div>
    <?php 
        break;
        case 'pseudo_length':
    ?>
    <div class="alert alert-danger">
        <strong>Erreur,</strong> le pseudo trop long.
        </div>
    <?php 
        case 'already':
    ?>
        <div class="alert alert-danger">
        <strong>Erreur,</strong> le compte est déjà existant.
        </div>
    <?php 
                    }
                }
    ?>

    <!--- formulaire --->
        <div class= "full-page">
        <form action="inscription_traitement.php" method="post">
        <h2 class="text-center">Inscription</h2>       
            <div class="input-field"><div class="form-group">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
            </div></div>

            <div class="input-field"><div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div></div>

            <div class="input-field"><div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div></div>

            <div class="input-field"><div class="form-group">
            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
            </div></div>    
                
            <input type='checkbox'class='check-box' required="required"><span>J'accepte les conditions générales d'utilisation</span>
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">S'inscrire</button><br>
            <p class="text-center"><a class="link" href="index.php">Vous êtes déjà inscrit.e ? Rendez-vous sur la page connexion.</a></p>
            </div>
            </div>   
        </form>
            </div></div>

<style>

.textestyle{
  font-family: 'Red Hat Display', sans-serif; 
  color: white;
  text-align: center;
}

.input-field
{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: transparent;
}
body{
    background-image:radial-gradient(#89151A, #003A5A) ;
    background-color: rgb(157,2,8);
    background-position: center;
    background-size: cover;
        }
.login-form{
    width:380px;
	height:500px;
	position:relative;
	margin:2% auto;
	background:rgba(0,0,0,0.3);
	padding:10px;
    overflow: hidden;
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

.input-group-register{
    top: 120px;
	position:absolute;
	width:280px;
	transition:.5s;
}
.form-controls{
	width: 100%;
	padding:10px 0;
	margin:5px 0;
	border-left:0;
	border-top:0;
	border-right:0;
	border-bottom: 1px solid #999;
	outline:none;
	background: transparent;
}
.submit-btn{
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: #FCD582;
	border: 0;
	outline: none;
	border-radius: 30px;
    color: white;
}
.check-box{
	margin: 30px 10px 34px 0;
  
}

 
</style>
</body>
</html>
