<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
</head>
<body>
  <table id="t">
    <tr>
        <td class="c">Текст</td>
    </tr>
</table>
<script>
/*вариант 1 js*/
  el=document.getElementById("t").getElementsByClassName("c");
  el[0].style.color='green';
/*вариант 2 js*/
  el2=document.getElementById("t");
  el2.className+="a";
/*вариант 3 js*/
 el3=document.getElementsByTagName("td");
 el3[0].style.cssText='color:green;';
/*вариант 4 jquery*/
$("#t .c").css("color","green");
  /*вариант 5 jquery*/
$("#t").addClass('a');



</script>
<script src="js/main.js"></script>
</body>
</html>