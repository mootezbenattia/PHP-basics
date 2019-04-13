
<?php
    include "config.php";
    $base = connect(); 
    if(isset($_POST['bt'])){
        
        $n = $_REQUEST["nom"];  
        $p = $_REQUEST["prenom"];
        $t = $_REQUEST["tel"];
        $s = $_REQUEST["sexe"];  
        $e = $_REQUEST["email"];
        $d = $_REQUEST["dt"];
        $na = $_REQUEST["nation"];
        $m = $_REQUEST["mdp"];
        $mc = $_REQUEST["mdpc"];
      
       
        $req = "INSERT INTO users (id,nom,prenom,tel,sexe,email,dt,nation,mot de passe) VALUES (NULL,$n,$p,$t,$s,$e,$d,$na,$m)";
       
      
           
        $resp = $base->exec($req);
           
            
           
            if ($resp == 1){
                echo "données inserer w jawhom behi";
            }
            else
                echo "bara thabet fel requete wala fel fichier config";
        }
?>
<!DOCtYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>inscription</title>
    <link rel="stylesheet" type="text/css" media="screen" href="../css/tp.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css">
    
</head>
<body>
<div>


</div>
    
        <img src="../images/6.png" height ="65" width="110"/>
        <center><a href="connexion.html" ><button type="button" class="btn btn-warning"><span>Connexion</span></button></a></center><br/>
        <center><a href="index.html" ><button type="button" class="btn btn-warning"><span>Home</span></button></a></center><br/><br><br>
        
            <form action="" method="POST" >
                
                <div class="form-group">
                   <label for ="Nom">Nom</label> <input type="text" name="nom" class="form-control" ></div>
                <div class="form-group">
                <label for ="prénom">Prénom</label><input type="text" name="prenom" class="form-control" ></div>
                <div class="form-group">
                    <label for="tel">Telephone</label><input type="tel" name="tel" class="form-control"></div>
                <div class="form-group">
                    <label for="sexe">Sexe:</label>
                    <div class="form-check">
                            <input class="form-check-input"  type="radio"  id="Radio1" name="sexe" value="male">
                            <label class="form-check-label" for="exampleRadios1" >
                              Male
                            </label>
                    </div>
                    <div class="form-check">
                            <input name="sexe" class="form-check-input" type="radio"  id="radio2"  value="female">                           <label class="form-check-label" for="exampleRadios1" >
                              female
                            </label>
                    </div>
                    <div class="form-check">
                            <input class="form-check-input" name="sexe" type="radio"  id="Radio3" value="Autre" >
                            <label class="form-check-label" for="exampleRadios1" >
                                  Autre
                            </label>
                    </div>
                </div>
                   
                <div class="form-group">
                    <label for="email">Email:</label><input type="email" name="email" class="form-control" ></div>
                <div class="form-group">
                    <label for="date">Date de naissance:</label><input type="date" name="dt" class="form-control" ></div>
                <div class="form-group">
                    <label for="nation">Nationalité:</label><select name="nation" class="form-control"><option selected disabled>choisisez votre nationalité </option>
                    <option>Tunisienne</option><option >Francaise</option><option >Anglaise</option><option>Algérienne</option><option >Américainne</option></select></div>
                <div class="form-group">
                    <label for="int">Les intérets:</label>
                        <div class="form-check">
                            <input class="form-check-input" name="ht[]" type="checkbox" value="HTML" id="Check1">
                            <label class="form-check-label" for="Check1">
                              HTML
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input"name="ht[]"type="checkbox" value="CSS" id="Check2" >
                            <label class="form-check-label" for="Check2">
                                CSS
                            </label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" name="ht[]" type="checkbox" value="JAVA SCRIPT"  id="Check3">
                                <label class="form-check-label" for="check3">
                                  JAVA SCRIPT
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="ht[]" value="BOOTSTRAP" id="Check4" >
                                <label class="form-check-label" for="Check4">
                                  BOOTSTRAP
                                </label>
                              </div>
                            </div>
                    
                    
                <div class="form-group">
                    <label for ="mdp">Mot de passe:</label><input type="password" name="mdp" class="form-control" required placeholder="entrer votre mot de passe"></div>
                <div class="form-group">
                    <label for ="mdpc">Confirmer mot de passe:</label><input name="mdpc" type="password" class="form-control" required placeholder="confirmer le"></div>
                   <center> <button type="submit"  class="btn btn-success" name="bt">Envoyer</button><span></span><span></span> <button type="reset" class="btn btn-danger" >Annuler</button></center> 
                
                
                
          </form>
          
    
    
</body>
</html>