
<?php

include "./pages/bootstrap.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ticketbuckets.com</title>
</head>
<body>
      <!-- navbar start  -->
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    
    <a class="navbar-brand" href="#"><img src="./images/mylogo (2).png" alt="logo" class="img-fluid"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">movies</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#" >
            theatre
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" >register
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" data-bs-toggle="modal" data-bs-target="#loginForm">dashboard
          </a>
          <!-- Modal -->
          <div class="modal fade" id="loginForm" tabindex="-1" aria-labelledby="loginModel" aria-hidden="true">
          <div class="modal-dialog ">
            <div class="modal-content  ">
              <div class="modal-header bg-danger text-center ">
                <h5 class="modal-title mx-auto" id="loginModel">login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- login modal form -->
                <div class="container">
                <form class="row g-3">
                <div class="col-md-12">
                    <label for="inputEmail4" class="form-label"><i class="fa fa-user" aria-hidden="true"></i>
                     username:</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-12">
                    <label for="inputEmail4" class="form-label">
                    <i class="fa-solid fa-envelope"></i>  Email:</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-12">
                    <label for="inputPassword4" class="form-label"><i class="fa-solid fa-lock"></i> Password:</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                    <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Remember Me?
                      </label>
                     <a href="" style="text-decoration:none;">forget password</a>                      
                    </div>
                  </div>
                  
               </form>
               </div>
              </div>
              <div class="modal-footer">
                   <div class=" ms-auto  ">
                    <button type="submit" class="btn btn-dark ">Sign in</button>
                  </div>
             </div>
            </div>
          </div>
      </div>
      </li>
      </ul>

    </div>
  </div>
</nav>



  <!-- navbar ends  -->
</body>
</html>