<?php 
  include 'header.php'; 
  $picking_list_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM picking_list WHERE picking_list_id='$picking_list_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Picking List</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Picking List</h6>
		</div>  
		
		<!-- FORM HERE -->
   <div class="card-body">
          <div class="form-group">
              <label>SO NO</label>
              <input type="text" class="form-control form-control-sm" name="so_id" value="<?php echo $data['so_id'] ?>" readonly>
          </div> 
          <div class="form-group">
              <label>Tenant</label>
              <input type="text" class="form-control form-control-sm" name="tenant" value="<?php echo $data['tenant'] ?>" readonly>
          </div>
          <div class="form-group">
           <label>SKU</label>
              <input type="text" class="form-control form-control-sm" name="sku" value="<?php echo $data['sku'] ?>" readonly>
          </div>
          <div class="form-group">
           <label>Category</label>
              <input type="text" class="form-control form-control-sm" name="category" value="<?php echo $data['category'] ?>" readonly>
          </div>
          <div class="form-group">
           <label>Quantity/Box</label>
              <input type="text" class="form-control form-control-sm" name="quantity" value="<?php echo $data['quantity'] ?>" readonly>
          </div>
          <div class="form-group">
           <label>Address</label>
              <input type="text" class="form-control form-control-sm" name="address" value="<?php echo $data['address'] ?>" readonly>
          </div>
          <div class="card-footer al-right">
             <input type="submit" class="btn btn-sm btn-success" value="Submit">
         </div>
    </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>