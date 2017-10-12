<style>div.stars {
  width: 270px;
  display: inline-block;
}

input.star { display: none; }

label.star {
  float: right;
  padding: 10px;
  font-size: 36px;
  color: #444;
  transition: all .2s;
}

input.star:checked ~ label.star:before {
  content: '\f005';
  color: #FD4;
  transition: all .25s;
}

input.star-5:checked ~ label.star:before {
  color: #FE7;
  text-shadow: 0 0 20px #952;
}

input.star-1:checked ~ label.star:before { color: #F62; }

label.star:hover { transform: rotate(-15deg) scale(1.3); }

label.star:before {
  content: '\f006';
  font-family: FontAwesome;
} </style>

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

						<div class='article' style='margin-left:10%;width:100%;'>
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
                echo"</p></div></div></div></div></div>
                <hr style='width:100%; background-color:#25383B;'>
                <div class='stars' style='background-color:#25383B;'>
                  <form action=''>
                    <input class='star star-5' id='star-5' type='radio' name='star'/>
                    <label class='star star-5' for='star-5'></label>
                    <input class='star star-4' id='star-4' type='radio' name='star'/>
                    <label class='star star-4' for='star-4'></label>
                    <input class='star star-3' id='star-3' type='radio' name='star'/>
                    <label class='star star-3' for='star-3'></label>
                    <input class='star star-2' id='star-2' type='radio' name='star'/>
                    <label class='star star-2' for='star-2'></label>
                    <input class='star star-1' id='star-1' type='radio' name='star'/>
                    <label class='star star-1' for='star-1'></label>
                  </form>
                </div>

                </div>

                <hr style='width:100%; background-color:#25383B;'>

                <div  width:80%;>

                  <div  width:80%;>
                              <div class='widget-area no-padding blank'>
                              <div class='status-upload'>
                                <form action='index.php?c=NewsController&f=coment' method='post'>
                                  <textarea placeholder='Co o tym myślisz?' name='cText'></textarea>
                                  <input type='hidden' name='nID' value='";print_r($data[$pop][0]);echo"'>
                                  <input type='hidden' name='cAuthor' value='3'>
                                  <br>
                                <button type='submit' class='btn btn-success green' style='float:right;'><i class='fa fa-share'></i> Wyslij</button>
                                <br>
                                </form>
                              </div>
                            </div>
                          </div>

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
