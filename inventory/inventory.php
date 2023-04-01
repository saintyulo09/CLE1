<?php 
include('inc/header.php');
$inventory = new Inventory();
?>
<script src="js/jquery.dataTables.min.js"></script>	
<script src="js/category.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>  
<div class="container">	
<h3>Inventory</h3>
	<div id="subcontent">
			<table id="inventoryDetails">
					<thead><tr>
							<th>#</th>      
							<th>Product/Code</th>      
							<th>Inventory</th> 
							<th>Inventory Recieved</th> 									
							<th>Inventory Shipped</th>
							<th>Inventory on Hand</th>								
					</tr></thead>
			</table>
	</div>
</div>	
<?php include('inc/footer.php');?>