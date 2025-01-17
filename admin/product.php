<?php
    session_start();
    include('../general/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Page</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/admin-style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <?php include('../components/admin-navbar.php'); ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include('../components/admin-sidebar.php'); ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Products</h3>
                    <?php include('message.php'); ?>
                    <?php include('errors.php'); ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title mb-0">Details</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-borderless">
                        <thead>
                          <tr>
                            <th>Product ID</th>
                            <th>Product Name</th>
                            <th>Descriptions</th>
                            <th>Product Type</th>
                            <th>Price</th>
                            <th>Size</th>
                            <th>Color</th>
                            <th>Image URL</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                       

                       // $sql = "SELECT member_id, username, firstname, lastname, email, mobile, password, gender, startdate, enddate, address, age, m_weight, height, membership.Name FROM members INNER JOIN membership ON members.membership_id = membership.membership_id WHERE member_id;";

                       $query = "SELECT * FROM product";
                       $query_run = mysqli_query($db, $query);

                       if(mysqli_num_rows($query_run) > 0)
                       {
                           foreach($query_run as $membership)
                           {
                               ?>
                               <tr>
                                   <td><?= $membership['product_id']; ?></td>
                                   <td><?= $membership['pro_Name']; ?></td>
                                   <td><?= $membership['pro_desc']; ?></td>
                                   <td><?= $membership['pro_type']; ?></td>
                                   <td><?= $membership['pro_price']; ?></td>
                                   <td><?= $membership['size']; ?></td>
                                   <td><?= $membership['color']; ?></td>
                                   <td><?= $membership['image_url']; ?></td>
                                   <td>
                                       <a href="product-edit.php?id=<?= $membership['product_id']; ?>" class="btn btn-dark btn-sm">Edit</a>
                                       <form action="code.php" method="POST" class="d-inline">
                                     <!-- <button type="button" class="btn btn-danger btn-sm"  data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$membership['product_id'];?>">
                                                                     Delete
                                                                   </button> -->
                                           <!-- Modal -->
                                     <div class="modal fade" id="staticBackdrop<?=$membership['product_id'];?>" data-bs-backdrop="static" value="<?=$membership['product_id'];?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                         <div class="modal-content">
                                           <div class="modal-header">
                                             <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Product</h1>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                           </div>
                                           <div class="modal-body">
                                             <p>Deleting <?= ucfirst($membership['pro_Name']); ?>, are you sure?</p>
                                           </div>
                                           <div class="modal-footer">
                                             <button type="button" class="btn btn-dark btn-sm" data-bs-dismiss="modal">Close</button>
                                             <button type="submit" name="delete_product" value="<?=$membership['product_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                       </form>
                                   </td>
                               </tr>
                       
                               <?php
                           }
                       }
                       else
                       {
                           echo "<h5> No Record Found </h5>";
                       }







                       ?>

 
     
                            <!-- delete -->
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-7 grid-margin stretch-card">
                  <div class="card-body">
                    <!-- <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"> + New Package </button> -->
                    <!-- Modal -->
                    <div class="modal fade" action="membership-plan.php" method="POST" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">New Package</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <div class="container">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <form action="#" method="POST">
                                                    <div class="mb-3">
                                                        <label>Package Name</label>
                                                        <input type="text" name="Name" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Price</label>
                                                        <input type="text" type="number" min="0" name="membership_price" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Sign Up Fees</label>
                                                        <input type="number" min="0" max="200" name="signup_fees" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label>Period</label>
                                                        <input ttype="number" min="0" max="200" name="period" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <button type="submit" name="save_package" class="btn btn-dark">Add Package</button>
                                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                                        
 
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                          </div>
                        </div>
                      </div>
                      </div>
                              <!-- Modal ends -->



                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../vendors/chart.js/Chart.min.js"></script>
    <script src="../vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="../js/dataTables.select.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../js/off-canvas.js"></script>
    <script src="../js/hoverable-collapse.js"></script>
    <script src="../js/template.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../js/dashboard.js"></script>
    <script src="../js/Chart.roundedBarCharts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- End custom js for this page-->
  </body>
</html>




