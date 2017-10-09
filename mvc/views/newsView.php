
<?php

$wynik=count($data);
while($wynik>0)
{
$wynik --;

echo "<article class='feature left'>

  <div class='content'><h2>";

print_r($data[$wynik][1]);
echo "</h2><p>";

echo "<h4>";
print_r($data[$wynik][3]);
echo "</h4>";


print_r(substr(($data[$wynik][2]),0,120));
echo "...</p>
<ul class='actions'>
  <li>
    <a href='./index.php?DO=0&c=NewsController&f=singleView&sid=".$data[$wynik][0]."#' class='button alt'>Więcej</a>
  </li>
</ul>
</div>
</article>";
}

?>
<center>
 			<div class="container">
 			    <div class="paginate" style="width:50%;"><!-- remove width id you don't need it-->
 			        <ul class="pagination">
                <?php

for ($s=0,$z=1;$s<11 && $z<5;$s++,$z++)
{
echo "<a href='/MVC/mvc/index.php?DO=$s&c=NewsController&f=test#' class='button'>$z</a>";
$s+=3;
}
echo "<br>";
$strona= ($_SERVER['REQUEST_URI']);
echo "Numer strony: ";
echo (substr($strona, 22)/4)+1;


?>
</ul>
<div class="clearfix"></div>
</div></center>
