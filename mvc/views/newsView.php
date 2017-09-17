<h1> ROZDZIAL </h1>
<?php

$wynik=count($data);
while($wynik>0)
{
$wynik --;
echo "<h2 >";
print_r($data[$wynik][3]);
echo "<br><br></h2>";

  echo "<h6 style='float:right'>";
print_r($data[$wynik][1]);
echo "<br><br></h6>";


  echo "<h3>";
print_r($data[$wynik][2]);
echo "<br><br><br><hr></h3>";
}


?><center>
<form  action="/action_page.php" method="get" id="dane">
<input type="hidden" name="od" value=$od-5>
<input type="hidden" name="do" value=$do-5>
</form>
<button type="submit" form="nameform" value="Submit">Poprzednia</button><b> <?php echo "1" ?> </b>
<form  action="/action_page.php" method="get" id="dane">
<input type="hidden" name="od" value=$od+5>
<input type="hidden" name="do" value=$do+5>
</form>
<button type="submit" form="nameform" value="Submit">Następna</button></center>
