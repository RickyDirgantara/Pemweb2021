<?php

if (isset($_POST["upload"])){
$file = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];
$extension = pathinfo($file, PATHINFO_EXTENSION);
$rename = 'Upload';
$newname=$rename.'.'.$extension;

move_uploaded_file($tmp_name, "uploads/".$newname);
if ($newname==$rename){
    unlink("uploads/$newname");
}

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/font.css">
    <title>Welcome</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap');

        body{
            font-size: 22px;
            font-family: 'Lato', sans-serif;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://media1.giphy.com/media/FehJD6hdmlo9yYNi2y/giphy.gif?cid=ecf05e47vrlp0tnjji5f4o45alrxr0ajdsvp5k3gmy9smyyh&rid=giphy.gif&ct=g');
            background-size: cover;
            }   
        .banner-content{
            height: 100%;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .img{
            background-size: cover;
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: 0 auto;    
            display:flex;
            object-fit: cover;
            padding-bottom: 20px;
            
                }
    </style>
</head>
<body>
<div class="container banner-content col-lg-6">
                <div>
                    <h1 class="fs-1">
                    <img class="img" src="uploads/Upload.jpg">
                    <strong>Welcome To <ins>Archangel</ins> <center> <div style="color:<?php echo $_POST['color'];?>"> <?php echo $_POST['username'];?></div> </center>
                    <center>
                        <p>You are born in <?php echo $_POST['date']; ?></p>


                        <button type="button" onclick="location.href='index.html';" class="btn btn-success" >Home</button></center>
                </div>
            </div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>