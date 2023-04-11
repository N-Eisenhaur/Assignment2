<?php

$role_received = $_GET("Role");





?>

<html>

<body>

<H1> Hello  <?=$role_received?> </H1>

<h2> Here are your options:</h2>

<?php

if ($role_received) == ("Admin") {
echo "<a href=\"#\"> New Account </a>";

}

elseif ($role_received) == ("Manager") {

  echo "<a href=\"#\"> Lost Password </a>";
}

elseif($role_received) == ("CEO") {

  echo "<a href=\"#\">Phone Number </a>";
}


?>




</body>

</html>