<?php 
include('inc/header.php');
$inventory = new Inventory();
?>
<script src="js/jquery.dataTables.min.js"></script>		
<script src="js/customer.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">		
							<h3>Customer List</h3>
							<button type="button" name="add" id="addCustomer" data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-primary bg-gradient btn-sm rounded-0"><i class="far fa-plus-square"></i> New Customer</button>
						<div id="subcontent">	
							<table id="customerList">
								<thead>
									<tr>
										<th>ID</th>										
										<th>Name</th>
										<th>Address</th>
										<th>Mobile Number</th>
										<th>Balance</th>
										<th></th>
									</tr>
								</thead>
							</table>
						</div>
        <div id="customerModal" class="modal">
        	<div class="modal-dialog modal-dialog-centered  rounded-0">
        			<div class="modal-content rounded-0">
						<div class="modal-header">
							<h4 class="modal-title"><i class="fa fa-plus"></i> Add Customer</h4>
							<button type="button" class="btn-close text-xs" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="container-fluid">
								<form method="post" id="customerForm">
									<input type="hidden" name="userid" id="userid" />
									<input type="hidden" name="btn_action" id="btn_action" value="customerAdd" />
									<div class="mb-3">
										<label class="control-label">Name</label>
										<input type="text" name="cname" id="cname" class="form-control rounded-0" required />
									</div>
									<div class="mb-3">
										<label class="control-label">Mobile</label>
										<input type="number" name="mobile" id="mobile" class="form-control rounded-0" required />
									</div>
									<div class="mb-3">
										<label class="control-label">Balance</label>
										<input type="number" name="balance" id="balance" class="form-control rounded-0" required />
									</div>
									<div class="mb-3">
										<label class="control-label">Address</label>
										<textarea name="address" id="address" class="form-control rounded-0" rows="5" required></textarea>
									</div>
								</form>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name="action" id="action" class="btn btn-sm rounded-0 btn-primary" form="customerForm" >Save</button>
							<button type="button" class="btn btn-sm rounded-0 btn-default border" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
        	</div>
        </div>	
</div>	
<?php include('inc/footer.php');?>