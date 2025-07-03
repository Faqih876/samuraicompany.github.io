<?php 
  include 'header.php'; 
  $so_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM outbound_mng WHERE so_id='$so_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Outbound Management</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Outbound Purchased Order Table</h6>
		</div>  
		
		<form method="post" action="../../../system/update_outbound_order.php">
			<div class="card-body">
	            <div class="form-group">
	                <label>SO ID</label>
	                <input type="text" class="form-control form-control-sm" name="so_id" value="<?php echo $data['so_id'] ?>" readonly>
	            </div>
				<div class="form-group">
	                <label>SO NO</label>
	                <input type="text" class="form-control form-control-sm" name="so_no" value="<?php echo $data['so_no'] ?>" required>
	            </div>
				<div class="form-group">
	            	<label>Tenant</label>
	            	<input type="text" class="form-control form-control-sm" name="tenant" value="<?php echo $data['tenant'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>SKU</label>
	            	<input type="text" class="form-control form-control-sm" name="sku_no" value="<?php echo $data['sku_no'] ?>" required>
	        	</div>
				<div class="form-group">
	        		<label>Category</label>
	            	<input type="text" class="form-control form-control-sm" name="category" value="<?php echo $data['category'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Quantity/Box</label>
	            	<input type="text" class="form-control form-control-sm" name="quantity" value="<?php echo $data['quantity'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Address</label>
	            	<input type="text" class="form-control form-control-sm" name="address" value="<?php echo $data['address'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Status</label>
	            	<input type="text" class="form-control form-control-sm" name="so_status" value="<?php echo $data['so_status'] ?>" readonly>
	        	</div>
		    </div>
		    <div class="card-footer al-right">
	            <input type="submit" class="btn btn-sm btn-warning" value="Submit">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>