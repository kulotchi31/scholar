<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>

 <!-- Earnings (Monthly) Card Example -->

 <div class="row" >

 <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><h4>Rejected</h4></div>
              <div class="h4 mb-0 font-weight-bold text-gray-800">100</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><h4>Pending</h4></div>
              <div class="h4 mb-0 font-weight-bold text-gray-800">18</div>
            </div>
            <div class="col-auto">
            <i style="font-size:30px" class="fa">&#xf110;</i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




<?php
include('includes/footer.php');
?>