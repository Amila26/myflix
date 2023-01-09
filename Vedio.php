<?php
include "verify_session.php";
include 'func.php';
// session_destroy();

?>
<html>
    <head>
        <title> My Flix Vedio </title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="image/movie-logo.png" class="logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
                <span class="navbar-text">
                <?php
                echo $userNAme;
                //print_r($_SESSION);
              // echo "User ID ".$_SESSION['user_email'];
              // echo "|";
              // echo "User Name: ".$_SESSION["user_password"];
              ?>
              <button type="button" class="btn btn-primary" onclick="myFunction()">Sign out</button>
                </span>
              </div>
            </div>
          </nav>









    <div class="rowr">
        <!-- <a href="#" class="header-btn" onclick="myFunction()">Sing Out</a> -->
        
        
    </div>
    <div class="contauiner movie-details">
        <div class="row">
            <div class="col-md-6 left-box">
        
                <h1>Movies </h1>
                <p>Movies move us like nothing else can, whether they’re scary, funny, dramatic, romantic or anywhere in-between. So many titles, so much to experience.</p>
            </div>
            <div class="col-md-6 left-box"></div>
            <div class="container series">
                <h3>Popular Movies </h3>
            <div class="row">
    <?php
   $mongoViewvideo = mongoViewvideos();
  //  print_r($mongoViewvideo);
   foreach($mongoViewvideo as $docs){
      $_id =  $docs->_id;
      $id = $docs->id;
      $mv_name = $docs->mv_name;
      $desctribtion =  $docs->desctribtion;
      $category =  $docs->category;
      $mv_length =  $docs->mv_length;
      $writer =  $docs->writer;
      $director =  $docs->director;
      $cast =  $docs->cast;
      $year = $docs->year;
  
    ?>
                <div class="col-md-3 mb-3">
                 <a href='https://d1c0q68deratr.cloudfront.net/<?php echo $id."mp4";?>'>
                   <iframe id="<?php echo $id;?>" src="https://d1c0q68deratr.cloudfront.net/<?php echo $id.".mp4";?>" allowfullscreen></iframe>  
                   </a>
                   <button type="button" style="background-color:black;"><i class="fa fa-thumbs-up" style='font-size:15px;color:blue'></i></button>
                   <button type="button" style="background-color:black;"><i class="fa fa-eye" style='font-size:15px;color:blue'></i></button>
                   
                  </div>
<?php }?>
            </div>
            </div>

        </div>
    </body>

    <script>
function myFunction() {

  <?php session_destroy();?>
   window.location="https://clownfish-app-krh8z.ondigitalocean.app/login.php" ;   
}
</script>




</html>