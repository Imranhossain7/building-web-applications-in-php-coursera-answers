<html>
<body>
<title> Md Imran Hossain Shakil(chane your name as title)</title>
<h1> Welcome to my guessing game</h1>

<?php
$correctnumber=28; // change it as given number to you

if($_GET['guess'])
{
  if (is_numeric($_GET['guess'])===FALSE)
 {
echo "Your guess is not a number";
}
else if ($_GET['guess']<$correctnumber)
 {
echo "Your guess is too low";
}
else if ($_GET['guess']>$correctnumber)
 {
echo "Your guess is too high";
}
else if ($_GET['guess']==$correctnumber)
 {
echo "Congratulations - You are right";
}
}
else
{
echo "Missing guess parameter <br> Your guess is too short";
}



?>
</body>
</html>