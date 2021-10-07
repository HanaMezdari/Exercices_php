<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Calculatrice PHP</title>
    <style>
      
      #resultat{
          
          text-align:center;
          font-size:30px;
      }
      .ball {
  display: inline-block;
  width: 100%;
  height: 100%;
  margin: 0;
  border-radius: 50%;
  position: relative;
  -webkit-transform-style: preserve-3d;
  background: url('http://hop.ie/balls/images/world-map-one-color.png') repeat-x;
  background-size: auto 100%;
  -webkit-animation: move-map 30s infinite linear;
  -moz-animation: move-map 30s infinite linear;
  -o-animation: move-map 30s infinite linear;
  -ms-animation: move-map 30s infinite linear;
  animation: move-map 30s infinite linear;
}

.ball:before {
  content: "";
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  box-shadow: -40px 10px 70px 10px rgba(0,0,0,0.5) inset;
  z-index: 2;
}

.ball:after {
  content: "";
  position: absolute;
  border-radius: 50%;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  -webkit-filter: blur(0);
  opacity: 0.3;
  background: radial-gradient(circle at 50% 80%, #81e8f6, #76deef 10%, #055194 66%, #062745 100%);
}

.ball .shadow {
  position: absolute;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle at 50% 50%, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.1) 40%, rgba(0, 0, 0, 0) 50%);
  -webkit-transform: rotateX(90deg) translateZ(-150px);
  -moz-transform: rotateX(90deg) translateZ(-150px);
  -ms-transform: rotateX(90deg) translateZ(-150px);
  -o-transform: rotateX(90deg) translateZ(-150px);
  transform: rotateX(90deg) translateZ(-150px);
  z-index: -1;
}
body {
  width: 300px;
  margin: 20px auto;
  background: linear-gradient(to bottom, rgba(100, 100, 100, 0.2) 0%, rgba(255, 255, 255, 0.5) 40%, #ccc 100%);
  background-repeat: no-repeat;
 
}
.stage {
  width: 300px;
  height: 300px;
  display: inline-block;
  margin: 20px;
  -webkit-perspective: 1200px;
  -moz-perspective: 1200px;
  -ms-perspective: 1200px;
  -o-perspective: 1200px;
  perspective: 1200px;
  -webkit-perspective-origin: 50% 50%;
  -moz-perspective-origin: 50% 50%;
  -ms-perspective-origin: 50% 50%;
  -o-perspective-origin: 50% 50%;
  perspective-origin: 50% 50%;
}

@-moz-keyframes move-map {
  0% {
    background-position: -849px 0; }

  100% {
    background-position: 0 0; } }

@-webkit-keyframes move-map {
  0% {
    background-position: 0 0; }
  100% {
    background-position: -849px 0; }
}


@-o-keyframes move-map {
  0% {
    background-position: -849px 0; }

  100% {
    background-position: 0 0; } }

@-ms-keyframes move-map {
  0% {
    background-position: -849px 0; }

  100% {
    background-position: 0 0; } }

@keyframes move-map {
  0% {
    background-position: -849px 0; }

  100% {
    background-position: 0 0; } }



    </style>
</head>
<body>

<section class="stage">
    <figure class="ball"><span class="shadow"></span></figure>
  </section>

    
   
    <div class="calcule" >
     <center><h2>CALCULATRICE PHP</h2></center>
     <form action=""  method="POST" >
       <label for="num1">Valeur 1</label>
       <input type="number" name="num1" class="form-control">
       <label for="num2">Valeur 2</label>
       <input type="number" name="num2" class="form-control">
       <label>Choisir votre operation :</label>
       <select name="operation"  class="form-control">
             <option >non</option>
             <option >+</option>
             <option >-</option>
             <option >x</option>
             <option >/</option>
      </select><br>
        
       <input type="submit" name="submit" value="Calculer" class="btn btn-success" >
       <input type="reset" value="Réntialiser" class="btn btn-danger" name="submit1">

     </form>
     <br>
     <h3> Réponse de calcul : </h3>
     <div id="resultat" class="form-control">
      <?php
       if(isset($_POST['submit'])){
         $value1 = $_POST['num1'];
         $value2 = $_POST['num2'];
         $signe = $_POST['operation'];

         switch($signe){
              case'non':
              echo"Faites votre calcul";
              break;

              case'+':
              echo $value1 + $value2;
              break;

              case'-':
              echo $value1 - $value2;
              break;

              case'x':
              echo $value1 * $value2;
              break;

              case'/':
              echo $value1 / $value2;
              break;
         }
       }
      ?>
     </div>
    </div>
   <div>
   
</body>
</html>