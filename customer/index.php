<?php
include_once 'classes/class.inventory.php';
$inventory = new Inventory();
?>
<div id="subcontent">
    <?php
      switch($action){
                case 'profile':
                    require_once 'customer/view-profile.php';
                break;
                default:
                    require_once 'customer/main.php';
                break; 
            }
    ?>
  </div>