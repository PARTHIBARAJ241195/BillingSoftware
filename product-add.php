<?php
include('header.php');

?>

<h2>Add Product</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Product Information</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_product">
					<input type="hidden" name="action" value="add_product">

					<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control required" name="product_name" placeholder="Work Name">
						</div>
						<div class="col-xs-4">
							<textarea class="" rows="4" cols="55"  style="padding: 5px 10px; font-size: 12px; border-radius:3px;" name="product_desc" placeholder="Work Description"></textarea>
						</div>
						<div class="col-xs-2" >
							<input type="text" class="form-control required" name="product_area" placeholder="Area" value ="1">
						</div>
						<div class="col-xs-2" style= "margin-right: 0px;">
							<div class="input-group">
								<span class="input-group-addon"><?php echo CURRENCY ?></span>
								<input type="number" name="product_price" class="form-control required" placeholder="0.00" aria-describedby="sizing-addon1">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_product" class="btn btn-success float-right" value="Add Product" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>