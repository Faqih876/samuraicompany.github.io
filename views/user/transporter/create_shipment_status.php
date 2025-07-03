<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM shipment_status");
  $data = $row->fetch();
  $row_div = $dbconnect->query("SELECT * FROM fleet_status");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Shipment Status</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Add Shipment Status</h6>
    	</div>  

    	<!-- FORM HERE -->
		<form method="post" action="../../../system/create_shipment_status.php">
		<div class="card-body">
			<div class="form-group">
	                <label>No Plate</label>
	                <input type="text" class="form-control form-control-sm" name="no_plate" placeholder="Input Plate Number . ." required>
	            </div>
				<div class="form-group">
	            	<label>Fleet Type</label>
					<input type="text" class="form-control form-control-sm" name="fleet_type" placeholder="Input Fleet Type. ." required>
	        	</div>
				<div class="form-group">
	            	<label>No Surat</label>
					<input type="text" class="form-control form-control-sm" name="no_surat" placeholder="Input No Surat. ." required>
	        	</div>
				<div class="form-group">
	            	<label>PO NO</label>
	            	<input type="text" class="form-control form-control-sm" name="po_no" placeholder="Input PO Number . ." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Fleet Location</label>
	            	<input type="text" class="form-control form-control-sm" name="fleet_location" placeholder="Input Fleet Location.." required>
	        	</div>
				<div class="form-group">
	        		<label>Surat Jalan</label>
	            	<input type="text" class="form-control form-control-sm" name="surat_jalan" value="Available" readonly>
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
	            	<label>PLATE ID</label>
                    <select id="plate_id" name="plate_id" class="form-control form-control-sm">
					          <?php while($data = $row_div->fetch()){ ?>
                    <option value="<?php echo $data['plate_id']?>"> <?php echo $data['plate_id']?></option>
					          <?php } ?>
                    </select>
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