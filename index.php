<?php
include("config.php");

$message = '';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];

        // Liste des utilisateurs et leurs pages respectives
        $userPages = [
          'yassin' => 'yassin.php',
          'fanette.bailly' => 'fanette.php',
          'claire.berthoumieu' => 'claire.php',
          'lila.berthoumieux' => 'lila.php',
          'lucie.boure' => 'lucie.php',
          'jeanne.bozzardi' => 'jeanne.php',
          'clement.champiot' => 'clement.php',
          'lilou.derulliere' => 'lilou.php',
          'myla.dupuy' => 'myla.php',
          'doaa.elfarraa' => 'doaa.php',
          'solenn.gauthier' => 'solenn.php',
          'maud.ghidossi' => 'maud.php',
          'alix.girardi' => 'alix.php',
          'lea.gritti' => 'lea.php',
          'mayaswan.hyman' => 'mayaswan.php',
          'cynda.ladjimi' => 'cynda.php',
          'amine.laraiedh' => 'amine.php',
          'mathilde.lompech' => 'mathilde.php',
          'lison.marty' => 'lison.php',
          'gabriel.massue' => 'gabriel.php',
          'lutece.moreau' => 'lutece.php',
          'maelle.pasche' => 'maelle.php',
          'julie.pomies' => 'julie.php',
          'ambre.postel' => 'ambre.php',
          'cloe.ribreau' => 'cloe.php',
          'eleane.rieubland' => 'eleane.php',
          'ilana.robert' => 'robert.php',
          'lilas.salesses' => 'lilas.php',
          'charlotte.samel' => 'charlotte.php',
          'salome.tserediani' => 'salome.php',
      ];
      
        // Redirection en fonction du nom d'utilisateur
        if (isset($userPages[$user['username']])) {
            header('Location: ' . $userPages[$user['username']]);
        } else {
            header('Location: dashboard.php');
        }
    } else {
        $message = 'Mauvais identifiants';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
     
    <div class="container">
    

    <?php if (!empty($message)): ?>
        <p style="color:red"><?= $message ?></p>
    <?php endif; ?>

    <form action="login.php" method="post">
        <p>Votre conseil de classe</p>
        <div>
            <label for="username" ></label>
            <input type="text" id="username" name="username" placeholder="Identifiants">
        </div>

        <div>
            <label for="password" > <div class="password-icon">
    <i data-feather="eye"></i>
    <i data-feather="eye-off"></i>
  </div>
</label>
            <input type="password" placeholder="Mot de passe" type="password" id="password" name="password">
            
        </div>

        <div>
            <input type="submit" value="CONNECTER">
        </div>
    </form>
</div>
    
  </form>
    
</div>
<!-- ICON SCRIPT -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace();
</script>
    <style>
   @font-face {
    font-family: 'Grafton';
    src: url("ZTGrafton-Regular.ttf");
   }
   body {
  background: url(blurry_background.svg);
  height: 100vh;
  font-family: 'Grafton';
  display: flex;
  align-items: center;
  justify-content: center;
}

.container {
  position: relative;
}
form {
  background: rgba(255, 255, 255, .3);
  padding: 3rem;
  height: 320px;
  border-radius: 20px;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  -moz-backdrop-filter: blur(10px);
  box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
  text-align: center;
}

p {
  color: white;
  font-weight: 500;
  opacity: .7;
  font-size: 1.4rem;
  margin-bottom: 60px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
}
  
a {
  text-decoration: none;
  color: #ddd;
  font-size: 12px;
}

a:hover {
  text-shadow: 2px 2px 6px #00000040;
}

a:active {
  text-shadow: none;
}

input {
  background: transparent;
  border: none;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  border-color: transparent;
  padding: 1rem;
  width: 200px;
  border-radius: 50px;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  -moz-backdrop-filter: blur(5px);
  box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
  color: white;
  font-weight: 500;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  transition: all .3s;
  margin-bottom: 2em;
  font-family: 'Grafton';
}

input:hover,
input[type="username"]:focus,
input[type="password"]:focus{
  background: rgba(255,255,255,0.1);
  box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
  font-family: 'Grafton';
  border-color: transparent;
}
    
input[type="button"] {
  margin-top: 10px;
  width: 150px;
  font-size: 1rem;
  cursor: pointer;
  font-family: 'Grafton';
  border-color: transparent;
}

::placeholder {
  color: #fff;
}

.drop {
  background: rgba(255, 255, 255, .3);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 10px;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  box-shadow: 10px 10px 60px -8px rgba(0,0,0,0.2);
  position: absolute;
  transition: all 0.2s ease;
}

label {
  position: relative;
}

label input {
  font-size: 1em;
  color: #f9f9f9;
  background: transparent;
  padding: 1rem 1.2rem;
  width: 350px;
  border-radius: 5px;
  border: 2px solid #7a7a7a;
  transition: all 0.2s;
}

label .password-icon {
  display: flex;
  align-items: center;
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  width: 20px;
  color: #f9f9f9;
  transition: all 0.2s;
}

label .password-icon:hover {
  cursor: pointer;
  color: #ff4754;
}

label .password-icon .feather-eye-off {
  display: none;
}
</style>
<script>const eye = document.querySelector(".feather-eye");
const eyeoff = document.querySelector(".feather-eye-off");
const passwordField = document.querySelector("input[type=password]");
eye.addEventListener("click", () => {
  eye.style.display = "none";
  eyeoff.style.display = "block";
  passwordField.type = "text";
});

eyeoff.addEventListener("click", () => {
  eyeoff.style.display = "none";
  eye.style.display = "block";
  passwordField.type = "password";
});</script>
</head>
<body>


</body>
</html>