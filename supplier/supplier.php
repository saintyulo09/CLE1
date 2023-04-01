<?php 
include('inc/header.php');
$inventory = new Inventory();
?>
<script src="js/jquery.dataTables.min.js"></script>		
<script src="js/supplier.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">		
							<h3>Supplier List</h3>
							<button type="button" name="add" id="addSupplier" data-bs-toggle="modal" data-bs-target="#userModal" class="btn btn-primary btn-sm rounded-0"><i class="far fa-plus-square"></i> Add Supplier</button>
						<div id="subcontent">
							<table id="supplierList">
								<thead>
									<tr>
										<th>ID</th>										
										<th>Name</th>
										<th>Mobile Number</th>
										<th>Address</th>
										<th>Status</th>										
										<th></th>
									</tr>
								</thead>
							</table>
						</div>
        <div id="supplierModal" class="modal fade">
        	<div class="modal-dialog modal-dialog-centered">
        			<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title"><i class="fa fa-plus"></i> Add Supplier</h4>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
        					<form method="post" id="supplierForm">
								<input type="hidden" name="supplier_id" id="supplier_id" />
								<input type="hidden" name="btn_action" id="btn_action" />
								<div class="mb-3">
									<label>Supplier Name</label>
									<input type="text" name="supplier_name" id="supplier_name" class="form-control rounded-0" required />
								</div>	
								<div class="mb-3">
									<label>Mobile</label>
									<input type="text" name="mobile" id="mobile" class="form-control rounded-0" required />
								</div>								
								<div class="mb-3">
									<label>Address</label>
									<textarea name="address" id="address" class="form-control rounded-0" rows="5" required></textarea>
								</div>
        					</form>
						</div>
						<div class="modal-footer">
							<input type="submit" name="action" id="action" class="btn btn-primary rounded-0 btn-sm" value="addSupplier" form="supplierForm"/>
							<button type="button" class="btn btn-default border rounded-0 btn-sm" data-bs-dismiss="modal">Close</button>
						</div>
					</div>
        	</div>
        </div>	
</div>	
<?php include('inc/footer.php');?>