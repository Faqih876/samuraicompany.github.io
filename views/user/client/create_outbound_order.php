<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM outbound_mng");
  $data = $row->fetch();
  $row_div = $dbconnect->query("SELECT * FROM outbound_mng");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Add Sales Order</span>
</div>
<!-- End of Page Heading -->


<!-- Content here -->
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      	<div class="card-header py-3">
    	    <h6 class="m-0 font-weight-bold text-dark">Add Order</h6>
    	</div>  

    	<!-- FORM HERE -->
		<form method="post" action="../../../system/create_outbound_order.php">
		<div class="card-body">
		<div class="form-group">
	                <label>SO NO</label>
	                <input type="text" class="form-control form-control-sm" name="so_no" placeholder="Input SO NO . ." required>
	            </div>
				<div class="form-group">
	            	<label>Tenant</label>
					<input type="text" class="form-control form-control-sm" name="tenant" placeholder="Input tenant. ." required>
	        	</div>
				<div class="form-group">
	            	<label>SKU</label>
	            	<input type="text" class="form-control form-control-sm" name="sku_no" placeholder="Input SKU . ." required>
	        	</div>
				<div class="form-group">
	        		<label>Category</label>
	            	<input type="text" class="form-control form-control-sm" name="category" placeholder="Input Category.." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Quantity/Box</label>
	            	<input type="text" class="form-control form-control-sm" name="quantity" placeholder="ex : 1000" required>
	        	</div>
				<div class="form-group">
	        		<label>Address</label>
	            	<input type="text" class="form-control form-control-sm" name="address" placeholder="Input Address.." required>
	        	</div>
	        	<div class="form-group">
	        		<label>Status</label>
	            	<input type="text" class="form-control form-control-sm" name="so_status" value="Open Sales Order" readonly>
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