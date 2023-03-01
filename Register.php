<!doctype html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css” />

  </head>
  <title>Registration Page</title>
  
  <body>
<div class="">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="/"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">Registration</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Login<span class="sr-only">(current)</span></a>
      
    </ul>
  </div>
</nav>
</div>
 <div class="container shadow-lg">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2 class="text-black">Register Here </h2>
            
            <hr>
            <form action = "login.php" method = "post" >
                <h2>Login</h2>
                <?php if(isset($_GET['error'])) { ?>
                <p class = "error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            
                <div class="form-group mt-3 mb-3">
                    <label class="form label">Name:</label>
                    <input type="text" class="form-control" required name="Firstname">
                </div>
                
                <div class="form-group  mb-2">
                    <label class="form label">password:</label>
                    <input type="password" class="form-control" required name="password">
                </div>

                <div class="form-group  mb-2">
                    <label class="form label">DOB:</label>
                    <input type="text" class="form-control" required name="DOB">
                </div>

                <div class="form-group  mb-2">
                    <label class="form label">Age:</label>
                    <input type="text" class="form-control" required name="contactnumber">
                </div>

                <div class="form-group  mb-2">
                    <label class="form label">Contact:</label>
                    <input type="text" class="form-control" required name="contactnumber">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                
                
            </form>
        </div>


    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>