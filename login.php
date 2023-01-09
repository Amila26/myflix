<html lang="en">



<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color: rgb(10, 9, 9);">
  <div class="container">
    <div class="bg-image"
      style="background-image: url('https://assets.nflxext.com/ffe/siteui/vlv3/7cee2527-d2cc-4cc9-99f6-d1375e72d46e/55399a55-7430-494f-acfc-3b5df25f773b/GB-en-20230103-popsignuptwoweeks-perspective_alpha_website_small.jpg'); height: 100vh;">
      <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-sm-8 col-md-6 col-lg-4 bg-white rounded p-4 shadow">
          <div class="row justify-content-center mb-4",>
            <img src="image/movie-logo.png" class="w-25" />
          </div>
          <form id="myformses_1" name="formlogin" action="#" method="#">  
            <!-- we are change here remove post method and action -->
            <div class="mb-4">
              <label for="email" class="form-label">User Name</label>
              <input type="email" class="form-control" id="email" name="user_email" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email.</div>

            </div>
            <div class="mb-4">
              <label for="password" class="from-label">Password</label>
              <input type="password" class="form-control" id="password" name="user_password" aria-describedby="passwordHelp">
              <div id="passwordHelp" class="form-text">Password must be over 6 characters long</div>

            </div>
            <div id='resonse' class="mb-3 text-black" style='display:none'></div>
            <div class="mb-4 form-check">
              <input type="checkbox" class="form-check-input" id="remember">
              <label></label>
            </div>
            <button type="submit" class="btn btn-primary lgnBtn">Submit</button>
            <div class="text-center">
              <p class="lbl">Not a member? <a href="register.html">Register</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- set Java Script -->
<!-- Latest compiled JavaScript -->
<script src="assets/assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function () {

                $(".lgnBtn").click(function (e) {

                    // var r = $(this).attr("data-id");
                    var dataString = $('#myformses_1').serialize();
                    // $('#loading_air_cell_book2').show();
                    $('#resonse').hide();
                  
                    $.ajax({
                        type: 'POST',
                        url: 'http://localhost/login_verify.php',
                        data: dataString,
                        success: function (data) {
                            
                            $('#resonse').html(data);
                            // $('#loading_air_cell_book2').hide();

                            // $('#message-review2').show();
                           

                        }
                    });


                });
});
</script>



</body>

</html>