<?php 
include('inc/header.php');
$inventory = new Inventory();
?>
<script src="js/jquery.dataTables.min.js"></script>	
<script src="js/purchase.js"></script>
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">		

                            	<h3>Purchase List</h3>
                                <button type="button" name="addPurchase" id="addPurchase" class="btn btn-primary btn-sm rounded-0"><i class="far fa-plus-square"></i> Add Purchase</button>
                        <div id="subcontent">
                            <table id="purchaseList">
                                <thead><tr>
                                    <th>ID</th> 									
									<th>Product</th>	
									<th>Quantity</th>	
									<th>Supplier</th>                                           
                                    <th></th>
                                </tr></thead>
                            </table>
                        </div>

        <div id="purchaseModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="fa fa-plus"></i> Add Purchase</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">                           
                            <form method="post" id="purchaseForm">
                            <input type="hidden" name="purchase_id" id="purchase_id" />
                            <input type="hidden" name="btn_action" id="btn_action" />
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <select name="product" id="product" class="form-select rounded-0" required>
                                        <option value="">Select Product</option>
                                        <?php echo $inventory->productDropdownList();?>
                                    </select>
                                </div>	                           
                                <div class="form-group">
                                    <label>Product Quantity</label>
                                    <div class="input-group">
                                        <input type="text" name="quantity" id="quantity" class="form-control rounded-0" required pattern="[+-]?([0-9]*[.])?[0-9]+" />        
                                    </div>
                                </div>                           
                                <div class="form-group">
                                    <label>Supplier</label>
                                    <select name="supplierid" id="supplierid" class="form-select rounded-0" required>
                                        <option value="">Select Supplier</option>
                                        <?php echo $inventory->supplierDropdownList();?>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="action" id="action" class="btn btn-primary btn-sm rounded-0" value="Add" form="purchaseForm"/>
                            <button type="button" class="btn btn-default border btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
            </div>
        </div>
</div>	
<?php include('inc/footer.php');?>