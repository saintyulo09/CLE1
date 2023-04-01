<?php 
include('inc/header.php');
$inventory = new Inventory();
?>

<script src="js/jquery.dataTables.min.js"></script>		
<script src="js/brand.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">		
			
                			<h3>Brand List</h3>
                			<button type="button" name="add" id="addBrand" class="btn btn-primary bg-gradient btn-sm rounded-0"><i class="far fa-plus-square"></i> New Brand</button>
                <div id="subcontent">	
					<table id="brandList">
                		<thead>
							<tr>
								<th>ID</th>
								<th>Category</th>
								<th>Brand Name</th>
								<th>Status</th>
								<th></th>
							</tr>
						</thead>
                	</table>
				</div>
    <div id="brandModal" class="modal fade">
    	<div class="modal-dialog modal-dialog-centered">
    			<div class="modal-content">
    				<div class="modal-header">
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add Brand</h4>
    					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    				</div>
    				<div class="modal-body">
    					<form method="post" id="brandForm">
    					<input type="hidden" name="id" id="id" />
    					<input type="hidden" name="btn_action" id="btn_action" />
							<div class="mb-3">
								<select name="categoryid" id="categoryid" class="form-select rounde-0" required>
									<option value="">Select Category</option>
									<?php echo $inventory->categoryDropdownList(); ?>
								</select>
							</div>
							<div class="mb-3">
								<label>Enter Brand Name</label>
								<input type="text" name="bname" id="bname" class="form-control  rounde-0" required />
							</div>
    					</form>
    				</div>
    				<div class="modal-footer">
    					<input type="submit" name="action" id="action" class="btn btn-primary btn-sm rounded-0" value="Add" form="brandForm"/>
    					<button type="button" class="btn btn-default btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
    				</div>
    			</div>
    	</div>
</div>	
<?php include('inc/footer.php');?>