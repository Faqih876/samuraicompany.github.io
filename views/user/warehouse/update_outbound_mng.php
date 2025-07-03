<?php 
  include 'header.php'; 
  $so_id = $_GET['id'];
  $row_od = $dbconnect->query("SELECT * FROM outbound_mng WHERE so_id='$so_id'");
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
  <form method="post" action="../../../system/update_outbound_mng.php">
   <div class="card-body">
          <div class="form-group">
              <label>SO ID</label>
              <input type="text" class="form-control form-control-sm" name="so_id" value="<?php echo $data['so_id'] ?>" readonly>
          </div>
          <div class="form-group">
              <label>SO NO</label>
              <input type="text" class="form-control form-control-sm" name="so_no" value="<?php echo $data['so_no'] ?>" readonly>
          </div>
          <div class="form-group">
              <label>Tenant</label>
              <input type="text" class="form-control form-control-sm" name="tenant" value="<?php echo $data['tenant'] ?>" readonly>
          </div>
          <div class="form-group">
              <label>SKU</label>
              <input type="text" class="form-control form-control-sm" name="sku_no" value="<?php echo $data['sku_no'] ?>" readonly>
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
            <div class="form-group">
            <label>Status</label>
                <div class="form-group mx-4">
                    <?php 
                    $A = null;
                    $B = null;

                    switch ($data['so_status']) {
                      case 'Checking':
                        $A = 'checked';
                        break;
                      case 'Open Sales Order':
                        $B = 'checked';
                      break;  
                    } ?>

                    <input type="radio" name="so_status" value="Checking" <?php echo $A; ?>>
                    <label class="mr-2">Checking</label>

                    <input type="radio" name="so_status" value="Open Sales Order" <?php echo $B; ?>>
                    <label class="mr-2">Open Sales Order</label>
                </div>
          </div>
          <div class="card-footer al-right">
             <input type="submit" class="btn btn-sm btn-success" value="Submit">
         </div>
        </form>
    </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>