<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="css/regist.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" >
  </head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="https://www.pngkey.com/png/full/400-4000674_archangel-ios-android-mobile-action-rpg-transparent-archangel.png"  width="40" height="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#index.html">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">Archangels</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Play</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<form enctype="multipart/form-data" action="welcome.php" method="POST" autocomplete="off">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <div class="form-group">
      <label for="username"></label>
      <i class="bi bi-person-fill"></i>
      <input autocomplete="off" type="text" class="form-control" id="username" name="username" placeholder="Username" >
    </div>
  </div>

  <div class="textbox">
    <div class="form-group">
      <label for="password"></label>
      <i class="bi bi-lock-fill"></i>
      <input autocomplete="off" type="password" class="form-control" id="pass"  placeholder="Password" >
    </div>
  </div>


  <div class="textbox">
          <div class="input-group">
            <label for="date"></label>
         <span style="margin:5px;"><i class="bi bi-calendar-date"></i></span> 
            <input autocomplete="off" type="text" class="form-control" id="date" name="date" placeholder="Date">
          </div>
      </div>

      <div class="textbox">
        <div class="form-group">
          <label for="color"></label>
          <i class="bi bi-palette"></i>
          <input autocomplete="off" type="text" class="form-control" name="color" id="color" placeholder="Favorite Color" >
        </div>
      </div>
      
      <div class="textbox">
        <div class="input-group">
       <span style="margin:2px;"><i class="bi bi-image"></i></span> 
      <center><input type="file" name="file" id="file" accept="image/*"></center>
        </div>
    </div>
      <input class="btn btn-success" type="submit" name="upload" value="Register">
</div>
</form>


<!--javascript-->

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$(function() {
    $("#date").datepicker();
})
</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
