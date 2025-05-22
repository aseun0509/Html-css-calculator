<?php 
// ui and ux design was gotten from youtube, but functionality wass developed by meee




 ?>




<!DOCTYPE html>
<script>alert("Enjoy an arithmetic calculator developed by Akindele Oluwaseun");</script>
<html lang="en" >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arithmetic  Calculator</title>
  <link rel="stylesheet" href="cssstyle.css">

</head>

<center>
  <h2 style="color:#fff; padding:25px">Basic Arithmetic Calculator</h2>
</center>
<body>
<div class="container">
  <form class="calculator" name="calc">
    <textarea name="txt" readonly class="value" rows="3"></textarea>
    <span class="num clear" onclick="calc.txt.value = ''">c</span>
    <span class="num" onclick="document.calc.txt.value +='/'">/</span>
    <span class="num" onclick="document.calc.txt.value +='*'">*</span>
    <span class="num" onclick="document.calc.txt.value +='7'">7</span>
    <span class="num" onclick="document.calc.txt.value +='8'">8</span>
    <span class="num" onclick="document.calc.txt.value +='9'">9</span>
    <span class="num" onclick="document.calc.txt.value +='-'">-</span>
    <span class="num" onclick="document.calc.txt.value +='4'">4</span>
    <span class="num" onclick="document.calc.txt.value +='5'">5</span>
    <span class="num" onclick="document.calc.txt.value +='6'">6</span>
    <span class="num plus" onclick="document.calc.txt.value +='+'">+</span>
    <span class="num" onclick="document.calc.txt.value +='1'">1</span>
    <span class="num" onclick="document.calc.txt.value +='2'">2</span>
    <span class="num" onclick="document.calc.txt.value +='3'">3</span>
    <span class="num" onclick="document.calc.txt.value +='0'">0</span>
    <span class="num" onclick="document.calc.txt.value +='00'">00</span>
    <span class="num" onclick="document.calc.txt.value +='.'">.</span>
    <span class="num equal" onclick="document.calc.txt.value =eval(calc.txt.value)">=</span>
  </form>
</div>

</body>

<center>
  <p class="developer">Developed By <a href="" title="Visit Developer">Akindele Oluwaseun</a></p>
</center>

<script src="script.js"></script>

</html>
