<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM inbound_mng");


?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Inbound Management</span>
</div>
<!-- End of Page Heading -->


<!-- Content here --> 
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Inbound Purchased Order Table</h6>
      </div>  

      <div class="card-body">
    
      <!-- BUTTON-->
      <div class="pb-3"><a href="create_inbound_order.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Add Order</a></div>
      <!-- End BUTTON -->


      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>SMU ID</th>
              <th>SMU NO</th>
              <th>Shipment Date</th>
              <th>Tenant</th>
              <th>SKU</th>
              <th>Quantity/Box</th>
              <th>Expired Date</th>
              <th>Manufacturing Date</th>
              <th>Status</th>
              <th width="10%">ACTION</th>
            </tr>
          </thead>
          <tbody>
          
            <?php if($row->rowCount() > 0){
              $no = 1;
              while($data = $row->fetch()){
            ?>

            <tr>
              <td><?php echo $no ?></td>
              <td><?php echo $data['smu_id'] ?></td>
              <td><?php echo $data['smu_no'] ?></td>
              <td><?php echo $data['shipment_date'] ?></td>
              <td><?php echo $data['tenant'] ?></td>
              <td><?php echo $data['sku_no'] ?></td>
              <td><?php echo $data['quantity'] ?></td>
              <td><?php echo $data['expired_date'] ?></td>
              <td><?php echo $data['manufacturing_date'] ?></td>
              <td><?php echo $data['order_status'] ?></td>
              <td align="center">
                <a href="update_inbound_order.php?id=<?php echo $data['smu_id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                <a href="../../../system/delete_inbound_mng.php?id=<?php echo $data['smu_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i></a>
              </td>

            </tr>
            
            <?php $no++; }} ?>

          </tbody>
        </table>
      </div>
      <!-- END OF TABLE -->
      </div>
    </div>
  </div>
</div>
<!-- End of Content -->


<?php include 'footer.php' ?>