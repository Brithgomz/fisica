<html>
<head> <title> Caida libre  </title>
</head>
<!-- FORMULAS -->
<body background="https://static.vecteezy.com/system/resources/previews/006/329/755/non_2x/hand-drawn-math-formula-and-chemistry-formula-mathematics-background-physics-formula-physics-chemistry-formula-education-and-learning-background-vector.jpg"> <div align="center">
<br>
<br>
<br>
<br>
<br><font face="Comic Sans MS" size="5" color="white"> 
<form method="POST" action="">
<p><h1><font size="6" color="white"> Inserta la VELOCIDAD INICIAL</font></h1></p>
<input type="text" name="a">
<br> <br>
<p><h1> <font size="6"color="white">Inserta el TIEMPO</font></h1></p>
<input type="text" name="b">
<br> <br>
<input type="submit" value="resultado" style='width:130px; height:45px'>

</form>
     </body>
     <?php
$a = $_POST['a'];
$b = $_POST['b']; 
$gravedad = 9.8;
$sx = $a + $gravedad * $b;
echo  "<font size=\"6\" color=\"white\">'La Velocidad final:$sx  M/S'</font>";
?>
<!-- FIN FORMULA 1 -->
<div>
</html