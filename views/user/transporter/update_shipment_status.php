<?php 
  include 'header.php'; 
  $shipment_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM shipment_status WHERE shipment_id='$shipment_id'");
  $data = $row_od->fetch();
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Shipment</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update Shipment Status</h6>
		</div>  
		
		<form method="post" action="../../../system/update_shipment_status.php">
			<div class="card-body">
	            <div class="form-group">
	                <label>No Plate</label>
	                <input type="text" class="form-control form-control-sm" name="no_plate" value="<?php echo $data['no_plate'] ?>" required>
	            </div>
				<div class="form-group">
	            	<label>Fleet Type</label>
	            	<input type="text" class="form-control form-control-sm" name="fleet_type" value="<?php echo $data['fleet_type'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>No Surat</label>
	            	<input type="text" class="form-control form-control-sm" name="no_surat" value="<?php echo $data['no_surat'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>PO NO</label>
	            	<input type="text" class="form-control form-control-sm" name="po_no" value="<?php echo $data['po_no'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Fleet Location</label>
	            	<input type="text" class="form-control form-control-sm" name="fleet_location" value="<?php echo $data['fleet_location'] ?>" required>
	        	</div>
	        	<div class="form-group">
	        		<label>Surat Jalan</label>
	            	<input type="text" class="form-control form-control-sm" name="surat_jalan" value="<?php echo $data['surat_jalan'] ?>" readonly>
	        	</div>
	        	<div class="form-group">
            		<label>Status :  </label>
                <div class="form-group mx-4">
                    <?php 
                    $A = null;
                    $B = null;
					$C = null;

                    switch ($data['shp_status']) {
                      case 'Ready to Picked':
                        $A = 'checked';
                        break;
                      case 'In Delivery':
                        $B = 'checked';
                      break;  
					  case 'Shipped':
                        $C = 'checked';
                      break; 
                    } ?>

                    <input type="radio" name="shp_status" value="Ready to Picked" <?php echo $A; ?>>
                    <label class="mr-2">Ready to Picked</label>

                    <input type="radio" name="shp_status" value="In Delivery" <?php echo $B; ?>>
                    <label class="mr-2">In Delivery</label>
					
					<input type="radio" name="shp_status" value="Shipped" <?php echo $C; ?>>
                    <label class="mr-2">Shipped</label>
                </div>
				<div class="form-group">
	        		<label>Plate ID</label>
	            	<input type="text" class="form-control form-control-sm" name="plate_id" value="<?php echo $data['plate_id'] ?>" readonly>
	        	</div>
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