<head>
  <style>body, html{
    background-color:#34515E;
   font-family: 'Open Sans Condensed', sans-serif;
    font-size: 18px;

}

.register-form{
    font-size: 16px;
   left: 50%;
    top: 50%;
    position: absolute;
    -webkit-transform: translate3d(-50%, -50%, 0);
    -moz-transform: translate3d(-50%, -50%, 0);
    transform: translate3d(-50%, -50%, 0);
}

.regbutton{
    height: 50px;
    width: 200px;
    background-color:tomato;
    border-radius: 0px;
    font-size: 18px;
    color:white;
    border: none !important;
    margin-bottom: 5px;
}
.regbutton:hover{
    color: white;
    background-color:#aa422f;
}
.regbutton:active{
    color: white;
    background-color:#aa422f;
}
.logbutton{
    height: 50px;
    width: 200px;
    background-color:yellowgreen;
    border-radius: 0px;
    font-size: 18px;
    color:white;
    border: none !important;
    margin-bottom: 5px;
}
.logbutton:hover{
    color: white;
    background-color:darkolivegreen;
}
.logbutton:active{
    color: white;
    background-color:darkolivegreen;
}

.register-form label{
    color: aliceblue;

}
.register-form input{
    margin-bottom: 5px;
    width: 430px;
    height: 40px;
    border-radius: 0px;
}

</style>
</head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<div class="container-fluid">

	 <form action="./UserModel.php" method="post" class="register-form">
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="loginek">Login</label>
               <input name="loginek" class="form-control" type="text">
           </div>
      </div>

      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
              <label for="haselko">Haslo</label>
               <input name="haselko" class="form-control" type="password">
           </div>
      </div>
      <div class="row">
           <div class="col-md-4 col-sm-4 col-lg-4">
               <input name="kategoria" class="form-control" type="hidden" value="szarak">
           </div>
      </div>
      <hr>
      <div class="row">
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
            <input type="submit" value="Rejestruj">

          </div>
      </div>
    </form>
</div>
