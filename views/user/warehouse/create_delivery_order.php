<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM delivery_order");
  $data = $row->fetch();
  $row_div = $dbconnect->query("SELECT * FROM delivery_order");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add Order</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Add Delivery Purchased Order</h6>
    	</div>  

    	<!-- FORM HERE -->
		<form method="post" action="../../../system/create_delivery_order.php">
		<div class="card-body">
		<div class="form-group">
	                <label>PO NO</label>
	                <input type="text" class="form-control form-control-sm" name="po_no" placeholder="Input PO NO . ." required>
	            </div>
				<div class="form-group">
	            	<label>Fleet Type</label>
					<input type="text" class="form-control form-control-sm" name="fleet_type" placeholder="Input Fleet Type. ." required>
	        	</div>
				<div class="form-group">
	            	<label>Tenant</label>
					<input type="text" class="form-control form-control-sm" name="tenant" placeholder="Input tenant. ." required>
	        	</div>
				<div class="form-group">
	            	<label>Loading Address</label>
	            	<input type="text" class="form-control form-control-sm" name="loading_address" placeholder="Input Loading Address . ." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Tenant Phone</label>
	            	<input type="text" class="form-control form-control-sm" name="tenant_phone" placeholder="Input Tenant Phone.." required>
	        	</div>
				<div class="form-group">
	        		<label>Pickup Date</label>
	            	<input type="date" class="form-control form-control-sm" name="pickup_date" placeholder="Input Pickup Date.." required>
	        	</div>
				<div class="form-group">
	        		<label>Destination Address</label>
	            	<input type="text" class="form-control form-control-sm" name="destination_address" placeholder="Input Destination Adress.." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Status</label>
	            	<input type="text" class="form-control form-control-sm" name="status" value="Ready to Pick" readonly>
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