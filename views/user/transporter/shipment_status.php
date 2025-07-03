<?php 
  include 'header.php'; 
  $row = $dbconnect->query("SELECT * FROM shipment_status");
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Shipment Status</span>
</div>
<!-- End of Page Heading -->


<!-- Content here --> 
<div class="row justify-content-center"> 
  <div class="col-lg-10">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Shipment Status</h6>
      </div>  

      <div class="card-body">
    
      <!-- BUTTON-->
      <div class="pb-3"><a href="create_shipment_status.php" class="btn btn-sm btn-success"><i class="fas fa-fw fa-plus">&nbsp;</i>Add Shipment</a></div>
      <!-- End BUTTON -->


      <!-- TABLE HERE -->
      <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th width="1%">No.</th>
              <th>Shipment ID</th>
              <th>No Plate</th>
              <th>Fleet Type</th>
              <th>No Surat</th>
              <th>PO NO</th>
              <th>Fleet Location</th>
              <th>Surat Jalan</th>
              <th>Status</th>
              <th>Plate ID</th>
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
              <td><?php echo $data['shipment_id'] ?></td>
              <td><?php echo $data['no_plate'] ?></td>
              <td><?php echo $data['fleet_type'] ?></td>
              <td><?php echo $data['no_surat'] ?></td>
              <td><?php echo $data['po_no'] ?></td>
              <td><?php echo $data['fleet_location'] ?></td>
              <td><?php echo $data['surat_jalan'] ?></td>
              <td><?php echo $data['shp_status'] ?></td>
              <td><?php echo $data['plate_id'] ?></td>
              <td align="center">
                <a href="update_shipment_status.php?id=<?php echo $data['shipment_id'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                <a href="../../../system/delete_shipment_status.php?id=<?php echo $data['shipment_id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash"></i></a>
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