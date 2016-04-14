<?php
require_once '../include.php';
$page="personal_center.php";
//检查是否登入
checkCustomerLogined($page);

@$customer_id=$_SESSION['login_customer_id'];

//我的账户
$customer_row=SCInformation("xplender_customer","customer_id='{$customer_id}'");

//订单
//每页显示订单行数（进行中）
$order_pageSize=5;

$order_page_index=@$_REQUEST['order_page_index']?(int)$_REQUEST['order_page_index']:1;
$index_name="order_page_index";
$order_rows=getProductPage($order_page_index,$order_pageSize,"xplender_order","`customer_id`='{$customer_id}' and `order_status`='have in hand' ");
$order_totalPage=$totalPage;

$success_order_page=@$_REQUEST['success_order_page']?(int)$_REQUEST['success_order_page']:1;
$index_name="success_order_page";
$success_order_row=getProductPage($success_order_page,$order_pageSize,"xplender_order","`customer_id`='{$customer_id}' and `order_status`='order success'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>xplender</title>
</head>
<body>
    <!--我的账户-->
    <form action="../doAction.php?act=updateAddress" method="post">	
    	<div class="order_address">
			<h3 class="title">Edit your address</h3>
			<ul class="adr_list">
			    <li class="adr_item">
					<span class="item_title">email:</span>
					<input type="text" class="adr_input" name="customer_email" value="<?php echo $customer_row['customer_email']; ?>" readonly  required>
				</li>
				<li class="adr_item">
					<span class="item_title">Full name:</span>
					<input type="text" class="adr_input" name="customer_fullName" value="<?php echo $customer_row['customer_fullName']; ?>" required>
				</li>
    			<li class="adr_item">
					<span class="item_title">Phone:</span>
					<input type="text" class="adr_input" name="customer_phone" value="<?php echo $customer_row['customer_phone']; ?>" required>
				</li>
				<li class="adr_item">
					<span class="item_title">Address line 1:</span>
					<input type="text" class="adr_input" name="customer_c_address" placeholder="Street address, P.O. box, company name, c/o " value="<?php echo $customer_row['customer_c_address']; ?>"  required>
				</li>
				<li class="adr_item">
					<span class="item_title">Address line 2:</span>
					<input type="text" class="adr_input" name="customer_p_address" placeholder="Apartment, suite, unit, building, floor, etc. " value="<?php echo $customer_row['customer_p_address']; ?>" required>
				</li>
				<li class="adr_item">
					<span class="item_title">City:</span>
					<input type="text" class="adr_input" name="customer_city" value="<?php echo $customer_row['customer_city']; ?>" required>
				</li>
				<li class="adr_item">
					<span class="item_title">State/Province/Region: </span>
					<input type="text" class="adr_input" name="customer_state" value="<?php echo $customer_row['customer_state']; ?>" required>
				</li>
				<li class="adr_item">
					<span class="item_title">ZIP: </span>
					<input type="text" class="adr_input" name="customer_zip" value="<?php echo $customer_row['customer_zip']; ?>" required>
				</li>
				<li class="adr_item">
					<span class="item_title">Country: </span>
					<!--$customer_row['customer_country']获得表单中存储的国家值-->
					<select class="adr_select" name="customer_country" required>
					    <option value="american" <?php if($customer_row['customer_country']=="american") echo "selected='selected'"; ?> >American</option>
						<option value="china" <?php if($customer_row['customer_country']=="china") echo "selected='selected'"; ?> >China</option>
					</select>
				</li>
			</ul>
    		<input class="pay btn" value="submit" type="submit"> 
		</div>
	</form>
	<!--我的订单 进行中-->
	<table class="" border='1'>
        <thead>
            <tr>
                <td>product img</td>
				<td>product name</td>
				<td>number</td>
				<td>order time</td>
				<td>order id</td>
                <td>logistics company</td>
				<td>logistics number</td>
                <td>logistics status</td>
				<td>order status</td>
				<td>评论按钮</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($order_rows as $row): ?>
			    <tr>
					<td><?php 
					    $product_row=SCInformation("xplender_product","product_name='{$row['product_name']}'");
						echo "<img src='{$product_row['images_url']}' width='100' height='100' />"
					?></td>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['order_number']; ?></td>
					<td><?php 
					    $time=date("Y-m-d H:i:s",$row['order_time']);
						echo $time; 
					?></td>
					<td><?php echo $row['order_id']; ?></td>
					<td><?php echo $row['order_company']; ?></td>
					<td><?php echo $row['logistics_number']; ?></td>
					<td><?php echo $row['logistics_status']; ?></td>
					<td><?php echo $row['order_status']; ?></td>
					<td><input type="button" value="添加评论" disabled /></td>
				</tr>
			<?php endforeach; ?>
			<?php if($order_rows>$pageSize):?>
				<tr>
					<td colspan="10" class="no-padding-right"><?php echo showPage($index_name,$order_page_index,$order_totalPage);?></td>
				</tr>
			<?php endif;?>                   
        </tbody>
    </table>
	<!--我的订单 success-->
	<table class="" border='1'>
        <thead>
            <tr>
                <td>product img</td>
				<td>product name</td>
				<td>number</td>
				<td>order time</td>
				<td>order id</td>
                <td>logistics company</td>
				<td>logistics number</td>
                <td>logistics status</td>
				<td>order status</td>
				<td>评论按钮</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($success_order_row as $row): ?>
			    <tr>
					<td><?php 
					    $product_row=SCInformation("xplender_product","product_name='{$row['product_name']}'");
						echo "<img src='{$product_row['images_url']}' width='100' height='100' />";
					?></td>
					<td><?php echo $row['product_name']; ?></td>
					<td><?php echo $row['order_number']; ?></td>
					<td><?php 
					    $time=date("Y-m-d H:i:s",$row['order_time']);
						echo $time; 
					?></td>
					<td><?php echo $row['order_id']; ?></td>
					<td><?php echo $row['order_company']; ?></td>
					<td><?php echo $row['logistics_number']; ?></td>
					<td><?php echo $row['logistics_status']; ?></td>
					<td><?php echo $row['order_status']; ?></td>
					<td><input type="button" value="添加评论" disabled /></td>
				</tr>
			<?php endforeach; ?>
			<?php if($success_order_row>$pageSize):?>
				<tr>
					<td colspan="10" class="no-padding-right"><?php echo showPage($index_name,$success_order_page,$totalPage);?></td>
				</tr>
			<?php endif;?>                   
        </tbody>
    </table>
	
</body>
</html>