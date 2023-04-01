<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
$subpage = (isset($_GET['subpage']) && $_GET['subpage'] != '') ? $_GET['subpage'] : '';
$action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
$id = (isset($_GET['id']) && $_GET['id'] != '') ? $_GET['id'] : '';
?>
            <link rel="stylesheet" href="css/custom.css?<?php echo time();?>">
        </button>
			<ul id="menu">		
				<li ><a href="index.php">Home</a></li>
                <li ><a href="index.php?page=inventory">Inventory</a></li>
				<li ><a href="index.php?page=customer">Customer</a></li>
				<li ><a href="index.php?page=category">Category</a></li>
				<li ><a href="index.php?page=brand">Brand</a></li>
				<li ><a href="index.php?page=supplier">Supplier</a></li>
				<li ><a href="index.php?page=product">Product</a></li>
				<li ><a href="index.php?page=purchase">Purchase</a></li>
				<li ><a href="index.php?page=order">Orders</a></li>	
                <li ><a href="index.php?page=users">User</a></li>	
                <li><a href="logout.php">Log Out</a></li> 		
			</ul>
		<div id="content">
                <?php
                switch($page){
                            case 'customer':
                                require_once 'customer/customer.php';
                            break; 
                            case 'category':
                                require_once 'category/category.php';
                            break; 
                            case 'brand':
                                require_once 'brand/brand.php';
                            break; 
                            case 'supplier':
                                require_once 'supplier/supplier.php';
                            break;
							case 'product':
                                require_once 'product/product.php';
                            break; 
                            case 'purchase':
                                require_once 'purchase/purchase.php';
                            break; 
                            case 'order':
                                require_once 'orders/order.php';
                            break;
                            case 'users':
                                require_once 'users/index.php';
                            break;
                            case 'inventory':
                                require_once 'inventory/inventory.php';
                            break;
                            default:
                                require_once 'main.php';
                            break; 
                        }
                ?>
            </div>
	</div>
</nav>