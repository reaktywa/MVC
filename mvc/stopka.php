</div>
 </section>


 <section id="four" class="wrapper style2 special">
 	<div class="inner">
 		<header class="major narrow">
 			<h2>Paginacja</h2>

 			<div class="container">
 			    <div class="paginate" style="width:50%;"><!-- remove width id you don't need it-->
 			        <ul class="pagination">

                <?php

for ($s=0,$z=1;$s<11 && $z<5;$s++,$z++)
{
echo "<a href='/MVC/mvc/index.php?DO=$s#' class='button'>$z</a>";
  $s+=3;
}
echo "<br>";
$strona= ($_SERVER['REQUEST_URI']);
echo "Numer strony: ";
echo (substr($strona, 22)/4)+1;

 ?>
         </ul>
         <div class="clearfix"></div>
       </div>
 </div>

 		</header>
		<form action="#" method="POST">
 			<div class="container 75%">

 			</div>
 		</form>
 	</div>
 </section>

 <!-- Scripts -->
 <script src="assets/js/jquery.min.js"></script>
 <script src="assets/js/skel.min.js"></script>
 <script src="assets/js/util.js"></script>
 <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
 <script src="assets/js/main.js"></script>

 </body>
 </html>
