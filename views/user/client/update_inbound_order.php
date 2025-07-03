<?php 
  include 'header.php'; 
  $smu_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM inbound_mng WHERE smu_id='$smu_id'");
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
		<h6 class="m-0 font-weight-bold text-dark">Update Purchased Order</h6>
		</div>  
		
		<form method="post" action="../../../system/update_inbound_order.php">
			<div class="card-body">
	            <div class="form-group">
	                <label>SMU ID</label>
	                <input type="text" class="form-control form-control-sm" name="smu_id" value="<?php echo $data['smu_id'] ?>" readonly>
	            </div>
				<div class="form-group">
	                <label>SMU NO</label>
	                <input type="text" class="form-control form-control-sm" name="smu_no" value="<?php echo $data['smu_no'] ?>" required>
	            </div>
				<div class="form-group">
	            	<label>Shipment</label>
					<input type="date" class="form-control form-control-sm" name="shipment_date" value="<?php echo $data['shipment_date'] ?>" required> 
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
	        		<label>Quantity/Box</label>
	            	<input type="text" class="form-control form-control-sm" name="quantity" value="<?php echo $data['quantity'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Expired Date</label>
	            	<input type="date" class="form-control form-control-sm" name="expired_date" value="<?php echo $data['expired_date'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Manufacturing Date</label>
	            	<input type="date" class="form-control form-control-sm" name="manufacturing_date" value="<?php echo $data['manufacturing_date'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Status</label>
	            	<input type="text" class="form-control form-control-sm" name="order_status" value="<?php echo $data['order_status'] ?>" readonly>
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