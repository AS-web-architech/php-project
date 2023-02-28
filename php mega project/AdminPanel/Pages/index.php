<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/images/logo (3).png">
    <!-- swiper css cdn  -->
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- bootstrap cdn -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- style_css -->
    <link rel="stylesheet" href="../assets/css/admin.css">
    <!-- Font_Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Admin | Tickets Bucket</title>
</head>
<body>
    <!-- ######################## Navigation ########################## -->
  <div class="conatiner">
    <div class="navigation">
        <ul>
        <li>
            <a href="#">
                <span class="icon">
                    <!-- <ion-icon name="ticket-outline"></ion-icon> -->
                    <img src="../assets/images/mylogo (2).png" alt="" class="ion-icon">
                </span>
                <!-- <span class="title" style="margin-top:20px;margin-left: 6px;">Tickets Bucket</span> -->
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon">
                  <ion-icon name="home-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Dashboard</span>
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon">
                <ion-icon name="people-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Customers</span>
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon">
                   <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Messages </span>
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon">
                <ion-icon name="help-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Help</span>
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon">
                <ion-icon name="settings-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Setting</span>
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
                </span>
                <span class="title" style="margin-top:20px;margin-left: 10px;">Password</span>
            </a>
        </li>
        <li>
           <a href="#">
                <span class="icon">
                <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <form action="" method="post" style="margin-top:20px;margin-left: 10px;">
                   <span class="title" name="logout" type="submit">Logout</span>
                </form>
                <?php
 


                  if(isset($_POST['logout'])){
                    session_start();
                   session_unset();
                   session_destroy();
 
                   echo "<script>window.location.href ='http://localhost/php%20mega%20project/pages/adminlogin.php';</script>"; 
 
                  }
                ?>
 
            </a>
        </li>
        </ul>
    </div>

    <!-- ############################### Main ########################### -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
               <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search Here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>
            
               <div>
                   <h5 style="color:white;"><?php echo $_SESSION['adminName']; ?>&nbsp;&nbsp;<img class="admin" src="../assets/images/admin.dp.png" alt=""></h5>
                   
               </div>
        </div><br>
        <!-- ############################ cards ######################### -->
     <div class="cardBox">
        <div class="card">
            <div>
              <div class="iconBx">
                <i class="fa-solid fa-money-bills"></i>
              </div>
                <div class="number">Rs231,292</div>
                <div class="cardName">Today's Corss Sales</div>
            </div>
            
        </div>
        
        <div class="card">
            <div>
              <div class="iconBx">
                <i class="fa-solid fa-ticket"></i>
              </div>
                <div class="number">37,032</div>
                <div class="cardName">Tickets Sold</div>
            </div>
        </div>

        <div class="card">
            <div>
              <div class="iconBx">
                 <i class="fa-solid fa-users"></i>
              </div>
                <div class="number">50,369</div>
                <div class="cardName">Customers</div>
            </div>
        </div>
        <div class="card">
            <div>
               <div class="iconBx">
                  <i class="fa-solid fa-video"></i>
               </div>
               <div class="number">1000</div>
                <div class="cardName">New Movies</div>
            </div>
        </div>
        <!-- <div class="card">
            <div>
                <div class="cardName">Theater</div>
                <div class="number">400</div>
            </div>
            <div class="iconBx">
            <i class="fa-solid fa-masks-theater"></i>
            </div>
        </div> -->

     </div>

     <!-- ############################## User Data List ############################ -->
       <div class="details">
          <div class="userData">
              <div class="cardHeader">
                  <h2 class="userHd">User Details</h2>
                       <button type="submit" class="Addbtn" name="fetch">Add Users</button>
                  <!-- <button type="add" class="Addbtn" >Add Users</a> -->
              </div>

              <?php
                 include "connection.php";
    

                     $fetch = "SELECT * FROM registration";
                     $res = mysqli_query($conn, $fetch);


                ?>
             <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Contact</th>
                        <th>Country</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($res)) {  ?>
                        <tr>
                            <td><?php echo $row["user_id"] ?></td>
                            <td><?php echo $row["user_name"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo $row["password"] ?></td>
                            <td><?php echo $row["phone_no"] ?></td>
                            <td><?php echo $row["country"] ?></td>
                            <td> <div class="pic"><img src="../assets/images/<?php echo $row["picture"] ?>" alt=""></div></td>
                            <td><button class="btn btn-primary">
                                    <a href="update.php?id=<?php echo $row["user_id"] ?>" class="text-white ">Add
                                    </a></button>
                                <button class="btn btn-danger">
                                    <a href="delete.php?id=<?php echo $row["user_id"] ?>" class="text-white ">Delete</a>
                                </button></td>
                            <td></td>

                        </tr>
                    <?php       }    ?>
                </tbody>
             </table>
          </div>
       </div>
    </div>

    
  </div>

  <!-- javascript cdn  -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <!-- main_js -->
  <script src="../assets/js/main.js"></script>
  <!-- ionicons -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>