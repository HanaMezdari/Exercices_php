
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="form.css">
    
</head>
<body>
<form action="formulaire.php" method="POST">
       
    
      
 <div class="grid-container"> 
    <fieldset>
        <legend>Civilité</legend>
      

        <div class="grid-item1"><label for="nom">Votre nom :</label>
                                <input type="text" id="nom" name="nom"  placeholder ="premiere lettre en Majuscule" required
                                 pattern ="[A-z]{6.30}"></div>  <br>
        <div class="grid-item2"><label for="prenom">Votre prenom :</label>
                                <input type="text" id="prenom" name="prenom"  placeholder ="premiere lettre en Majuscule" required
                                 pattern ="[A-z]{6.30}"></div>  <br>
            
        
        <div class="grid-item3"> <label>Votre catégorie :</label>
                                 <select name="catégorie" id="catégorie">
                                      <option value="Etudiant">Etudiant</option>
                                      <option value="Enseignant">Enseignant</option>
                                      <option value="Directeur">Directeur</option>
                                 </select><br><br>
        
        <div class="grid-item4"><label id="sexe" for="sexe">Votre sexe:</label>
                                 <input type="radio"   name="sexe" value="Femme" cheked>Femme   
                                <input type="radio"   name="sexe" value="Homme">Homme</div><br>
        
        <div class="grid-item8"> <label>Votre année de naissance :</label>
                                 <input type="number" name="naissance" id="naissance "  >
                                     
                                 <br><br>                        
        <div class="grid-item5">
            <div class="right"> <label for="qualifications" id="qualifications">Quels sont vos qualifications :</label></div>
            <div class="left"> <select multiple name="qualifications" id="qualifications" >
                                 <option value="BAC+2">BAC+2</option>
                                 <option value="BAC+3">BAC+3</option>
                                 <option value="BAC+4">BAC+4</option>
                                 <option value="BAC+5">BAC+5</option></select></div><br></div>
        
        <div class="grid-item7"> <br><br><input type="submit"  id="submit" value="Valider">
                                  <input type="reset" id="submit" value="Reintialiser"></div><br>
        
        
       
        
    </fieldset>
  </div> 

</form>

</body>
</html>
    