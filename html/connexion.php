<?php 

    include "config.php";
    $db= connect();
    if (isset(['bt']))
    {
        $req = "SELECT * from users where email='$email' && mdp='$mp'";
        $res = mysqli_query($req);
        $num = mysqli_num_rows($res);
        if $num == 1 
            echo "welcome";
        else 
        echo"echec";

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>connexion</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/tp.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
</head>
<body>
        <img src="../images/6.png" height ="65" width="110"/>
    
        <center><a href="inscription.html" ><button type="button" class="btn btn-warning"><span>inscription</span></button></a></center>
    <br>
        <center><a href="index.html" ><button type="button" class="btn btn-warning" ><span>Home</span></button></a></center><br/><br><br>
        <center>
            <table>
                <form action="" metod="POST">
                    <tr><td><label for="email">Email</label></td><td><input type="email" id="i1" value="exemple@exemple" name="email"></td></tr>
                    <tr><td><label for="mdp">mot de passe</label></td><td><input type="password" id="i2"  name="mp"></td></tr>
                    <tr><td><a href="HOME.html"><button type="button" class="btn btn-success" name="bt">Connecter</button></a></td><td><input type="reset" class="btn btn-danger" value="Effacer"></td></tr>
                </form>
            </table>
            
        </center>
        
</body>
</html>