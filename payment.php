<?php include( 'header.php'); ?>
<!-- Full Width Column -->
<div class="container">
	<div class="row">
		<?php if (isset($_POST['addpayment'])){ 
			$registant_id = $help->validAndEscape($_POST['registant_id']);
			$stmt = $db->link->query("select * from registration where id ='$registant_id'") or die($db->link->error)."at line number ".__LINE__;
			if ($stmt) {
				if ($stmt->num_rows > 0) {
					$data = $stmt->fetch_assoc();
					header("location: paymentstatus.php?action=entrans&registrationid=".$data['id']);
				} else {
					$message = "<h3 style='color: red; text-align:center;'>No Registration ID found. Try by another ID</h3>";
				}
			}
		} ?>	
	
		
		<div class="col-md-12">
			<!-- /.box-header -->
			<div style="background:#fff; padding:20px;box-shadow:0 1px 1px 0px #EFEFEF; class="table-container">
				<h3 class="box-title"><i class="fa fa-money" aria-hidden="true"></i> PAYMENT<hr></h3>

					<?php if(isset($message)){
						 echo $message ;
						}  ?>

					<div class="row">

					<form action="" method="post" >	
						
						<div class="col-md-offset-3 col-md-6">
							<div class="form-group">
								<input name="registant_id" type="text" class="form-control1" tabindex="2"  placeholder="Registration ID"  required="" />
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer"> <center>
					<input type="hidden" name="addpayment">
					<button type="reset"class="btn btn-danger" value="Reset">Reset</button>
					<button type="submit" name="sign_up" tabindex="18" class="btn btn-success"> <i class="fa fa-reply" aria-hidden="true"></i> Submit</button>
				
				</form>
				</center>
				
			</div> 

		</div> 
	</div>
	
</div>
<!-- /.box-body -->
<?php include( 'footer.php'); ?>																																																		