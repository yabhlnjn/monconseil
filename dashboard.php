<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Conseil</title>
    <style>
         @font-face {
    font-family: 'Quicksand';
    src: url("Quicksand_Book.otf");
   }
        body {
            font-family:'Quicksand', sans-serif;
            background: url(blurry_background.jpg);
            margin: 0;
            padding: 0;
        }
        .dashboard-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: rgba(255, 255, 255);
            padding: 20px 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            color: #333;
        }
        p {
            color: #555;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    div {
        max-width: 800px;
        margin: 20px auto;
        background-color: rgba(255, 255, 255, .3);
        padding: 20px 30px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
     
    }
    section{
        max-width: 800px;
        margin: 50px auto;
        background-color: rgba(255, 255, 255);
        padding: 20px 30px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        
        
    }
    </style>
</head>
<body>

<div class="dashboard-container">
    <h2>Bienvenue dans le récapitulatif de votre conseil de classe</h2><br>
    <div class="intro"><p>Profs présent:</p></div>
    <div><p>Commentaire du conseil de classe:</p></div>
    <div><p>Points Forts:</p></div>
    <div><p>Points à revoir:</p></div>
     
</div>
<section class="clasement"><p>Classement:</p>
<div ><p style="display:flex;align-items: center;justify-content: center;">/30</p></div>
<br><br><a href="logout.php">Se déconnecter</a>

</section>
</body>
</html>
