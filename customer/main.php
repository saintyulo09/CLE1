<?php
$count = 1;
$count = 1;
if($customer->list_customer() != false){
foreach($customer->list_customer() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=customer&action=profile&id=<?php echo $customer;?>"></a></td>
        <td><?php echo $customer;?></td>
      </tr>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>