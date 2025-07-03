<?php 
  include 'header.php'; 
  $user_id = $_GET['id'];
  $row = $dbconnect->query("SELECT * FROM user WHERE user_id = '$user_id'");
  $data = $row->fetch();
  $row_div = $dbconnect->query("SELECT * FROM division");
?>
	
	
<!-- Page Heading -->
<div class="d-sm-flex align-Orders-center justify-content-between mb-4">
  <!-- TITLE -->
  <span><i class="fa fa-angle-right">&nbsp;</i>Update user</span>
</div>
<!-- End of Page Heading -->


<!-- Content -->
  	
<div class="row justify-content-center"> 
  <div class="col-lg-6">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      
		<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold text-dark">Update user</h6>
		</div>  
		
		<form method="post" action="../../system/update-user.php">
			<div class="card-body">
                <div class="form-group">
                  <label>User ID</label>
                	<input type="text" class="form-control form-control-sm" name="user_id" value="<?php echo $data['user_id'] ?>" readonly>
                </div>
                <div class="form-group">
                	<label>Username</label>
                	<input type="text" class="form-control form-control-sm" name="username" value="<?php echo $data['username'] ?>" required>
                </div>
                <div class="form-group">
                	<label>Password</label>
                	<input type="text" class="form-control form-control-sm" name="password" value="<?php echo $data['password'] ?>" required>
                </div>
                <div class="form-group">
                	<label>User Name</label>
                	<input type="text" class="form-control form-control-sm" name="user_name" value="<?php echo $data['user_name'] ?>" required>
                </div>
                <div class="form-group">
                	<label>User Bank</label>
                	<input type="text" class="form-control form-control-sm" name="user_bank" value="<?php echo $data['user_bank'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Account Number</label>
                    <input type="number" class="form-control form-control-sm" name="account_number" value="<?php echo $data['account_number'] ?>" required>
                </div>
                <div class="form-group">
                    <label>Choose Role</label>
                    <select id="division_id" name="division_id" class="form-control form-control-sm">
					<?php while($data = $row_div->fetch()){ ?>
                    	<option value="<?php echo $data['division_id']?>"><?php echo $data['division_name']?></option>
					<?php } ?>
                    </select>
				</div>
		    </div>
		    <div class="card-footer al-right">
	                <input type="submit" class="btn btn-sm btn-warning" value="Update user">
	        </div>
        </form>

    </div>
  </div>
</div>

<!-- End of Content -->

<?php include 'footer.php' ?>