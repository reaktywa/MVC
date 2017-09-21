
<?php

$wynik=count($data);
while($wynik>0)
{
$wynik --;

echo "<article class='feature left'>
  <span class='image'><img src='images/pic01.jpg' alt='' /></span>
  <div class='content'><h2>";

print_r($data[$wynik][2]);
echo "</h2><p>";

//substr(($data[$wynik][2]),0,5);

print_r(substr(($data[$wynik][3]),0,120));
echo "...</p>
<ul class='actions'>
  <li>
    <a href='#' class='button alt'>More</a>
  </li>
</ul>
</div>
</article>";
}
?>
