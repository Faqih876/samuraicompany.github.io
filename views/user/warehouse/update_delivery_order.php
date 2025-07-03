<?php 
  include 'header.php'; 
  $po_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM delivery_order WHERE po_id='$po_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update Order</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Delivery Purchased Order</h6>
		</div>  
		
		<form method="post" action="../../../system/update_delivery_order.php">
			<div class="card-body">
            <div class="form-group">
	                <label>PO ID</label>
	                <input type="text" class="form-control form-control-sm" name="po_id" value="<?php echo $data['po_id'] ?>" required>
	          </div>
			  <div class="form-group">
	                <label>PO NO</label>
	                <input type="text" class="form-control form-control-sm" name="po_no" value="<?php echo $data['po_no'] ?>" required>
	          </div>
			      <div class="form-group">
	            	<label>Fleet Type</label>
				      	<input type="text" class="form-control form-control-sm" name="fleet_type" value="<?php echo $data['fleet_type'] ?>" required> 
	        	</div>
				    <div class="form-group">
	            	<label>Tenant</label>
	            	<input type="text" class="form-control form-control-sm" name="tenant" value="<?php echo $data['tenant'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Loading Address</label>
	            	<input type="text" class="form-control form-control-sm" name="loading_address" value="<?php echo $data['loading_address'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Tenant Phone</label>
	            	<input type="text" class="form-control form-control-sm" name="tenant_phone" value="<?php echo $data['tenant_phone'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Pickup Date</label>
	            	<input type="date" class="form-control form-control-sm" name="pickup_date" value="<?php echo $data['pickup_date'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Destination Address</label>
	            	<input type="text" class="form-control form-control-sm" name="destination_address" value="<?php echo $data['destination_address'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Status</label>
	            	<input type="text" class="form-control form-control-sm" name="status" value="<?php echo $data['status'] ?>" readonly>
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