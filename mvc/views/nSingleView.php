<?php


$wynik=count($data);
$pop=$wynik/$wynik;
$wynik2=count($data);

while($pop>0)
{
$pop --;
echo"
<div class='container '>
    <section id='wrapper'>
				<div class='row' >
					<div class='col-md-10'>

						<div class='article' style='padding-right:10%'>
							<h2>";

            print_r($data[$pop][1]);
            echo "</h2>

							<ul class='list-unstyled list-inline'>
								<li><i class='fa fa-calendar'></i> ";
                print_r($data[$pop][3]);
                echo"</li>
								<li><i class='fa fa-user'></i> ";
                print_r($data[$pop][4]);
                echo "</li>
							</ul>

							<div class='article-content'>

								<p>";
                print_r($data[$pop][2]);
                echo"</p></div></div></div></div></div></div>

                <hr width:80%;>

                <div  width:80%;>

                

                  </div>
                </div>

							";
}
echo "<center>";
while($wynik2 )
{$wynik2--;

              echo "

              <div class='container' style='background-color:#E0E0E0;border:medium solid #1E2832;width:90%'>

              <strong style='float:left;' >";
              print_r($data[$wynik2][6]);
              echo "</strong>

              <span class='text-muted' style='float:right;'>";
              print_r($data[$wynik2][7]);
              echo "</span></br>


              <div class='panel-body' >";
              print_r($data[$wynik2][5]);
              echo "
              </div><!-- /panel-body -->

              </div><!-- /container -->
</br>

";
}
echo "</center>";

?>
