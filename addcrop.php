<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Agrimarket</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="shortcut icon" href="assets/images/aaa.png">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Agrimarket</a>
			</div>


		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Crop Updatation</div>
					<div class="panel-body">
				<form  action="update.php" method="POST">
					<div class="row">
						<div class="col-md-6">
							<label for="cropname">CropName</label>
							<input type="text" id="cropname" name="cropname" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="quantity">Quantity</label>
							<input type="text" id="quantity" name="quantity" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="email">Email</label>
							<input type="text" id="mail" name="mail" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="price">Price</label>
							<input type="text" id="cropprice" name="cropprice" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="mobile">Mobile</label>
							<input type="text" id="mobile" name="mobile" class="form-control">
						</div>
						<div class="col-md-6"></div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address1">Address #1</label>
							<input type="textarea" id="address1" name="address1" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address2">Address #2</label>
							<input type="textarea" id="address2" name="address2" class="form-control">
						</div>
					</div>

					<br><br>
					<div class="col-md-12">
					<!--	<input type="button" class="btn btn-primary" value="Update" name="update" id="update_btn"> -->
						<button  type="submit" class="btn btn-primary" value="Update" name="update" id="update_btn">Update</button>
					</div>

					</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>






	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
<style> .foot{text-align: center;}
</style>
</html>
