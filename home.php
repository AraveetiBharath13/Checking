<?php 
session_start();
if(isset($_SESSION['id']) && isset($_SESSION('user_name'))) { ?>
   
<!doctype html>
<html lang="en" xmlns:th="http://www.thymeLeaf.com">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <title>Sharing Economy Platform</title>
  
  <body>
<div class="">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">User Details</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="vendorhomepage">Home <span class="sr-only">(current)</span></a>
      </li>
      
      
      
      
    </ul>
  </div>
</nav>
</div>
<div class="container">



<div class="container-fluid">
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Welcome, <?php echo $_SESSION['user_name']; ?></h1>
     
      <p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add Products</button>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change user Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form  >  
        
    <div class="form-group">
            <label for="message-text" class="col-form-label">Name :</label>
             <input type="text" class="form-control" id="recipient-name"  name="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Age:</label>
             <input type="text" class="form-control" id="recipient-name"  name="name">
          </div>             
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> DOB:</label>
            <input type="text" class="form-control" id="recipient-name"   name="price">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"> Contact:</label>
            <input type="text" class="form-control" id="recipient-name"  name="weight">
          </div>
          
          
                <button onclick="" class="btn btn-success">Save</button>
       </form>
      </div>
      
    </div>
  </div>
</div>



</div>
    
    </div>
  </div>

<p>Your Products Details</p>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">DOB</th>
      <th scope="col">Contact</th>
      
    </tr>
  </thead>
  <tbody>
    
  <tr>
      <th ></th>
      <td <?php echo $_SESSION['user_name']; ?>></td>
      <td <?php echo $_SESSION['age']; ?>></td>
      <td <?php echo $_SESSION['dob']; ?>></td>
      <td <?php echo $_SESSION['Contact']; ?>></td>
        <td>
  
  </td>  
    </tr>
  </td> 
    </tr>
    
  </tbody>
</table>









 </div>     

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
} 
else{
    header("Location: Register.php")
    exit();
}
?>