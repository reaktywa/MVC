<?php

$wynik=count($data);
while($wynik>0)
{
$wynik --;
echo "<div class='row'><strong><h4>";
print_r($data[$wynik][0]);
echo "</h4></strong>  <div>";
print_r($data[$wynik][1]);
echo "</div></div><br>";
echo "<div class='row'>
<form action='index.php?c=Controller&f=ban' method='post'>
<input type='hidden' name='userID' value='".($data[$wynik][2])."'>
<button type='submit'>BAN</button>
</form>

<form action='index.php?c=Controller&f=unban' method='post'>
<input type='hidden' name='userID' value='".($data[$wynik][2])."'>
<button type='submit'>UNBAN</button>
</form>

</div>
<hr>
 ";
}
echo "<a href='/MVC/mvc/index.php?c=UserController&f=panel'>Wróć</a>";
?>
