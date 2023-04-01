<?php 
include('inc/header.php');
$inventory = new Inventory();
?>
<script src="js/jquery.dataTables.min.js"></script>	
<script src="js/category.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?> 
<div class="container">		
									<h3>Category List</h3>
									<button type="button" name="add" id="categoryAdd" data-bs-toggle="modal" data-bs-target="#categoryModal" class="btn btn-primary btn-sm bg-gradient rounded-0"><i class="far fa-plus-square"></i> Add Category</button>   		
						<div id="subcontent">
                    		<table id="categoryList">
                    			<thead><tr>
									<th>ID</th>
									<th>Product Name</th>
									<th>Status</th>
									<th></th>
								</tr></thead>
                    		</table>
						</div>
    <div id="categoryModal" class="modal fade">
    	<div class="modal-dialog modal-dialog-centered">
    			<div class="modal-content">
    				<div class="modal-header">
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add Category</h4>
    					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    				</div>
    				<div class="modal-body">
    					<form method="post" id="categoryForm">
							<input type="hidden" name="categoryId" id="categoryId"/>
							<input type="hidden" name="btn_action" id="btn_action"/>
							<label>Category Name</label>
							<input type="text" name="category" id="category" class="form-control rounded-0" required />
    					</form>
    				</div>
    				<div class="modal-footer">
    					<input type="submit" name="action" id="action" class="btn btn-primary btn-sm rounded-0" value="Add" form="categoryForm"/>
    					<button type="button" class="btn btn-default btn-sm rounded-0 border" data-bs-dismiss="modal">Close</button>
    				</div>
    			</div>
    	</div>
</div>	
<?php include('inc/footer.php');?>