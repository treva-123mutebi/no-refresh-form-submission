<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="https://sourcecodester.com">Sourcecodester</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Submit POST Without Page Refresh In SQLite3</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form method="POST">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" id="firstname"/>
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control" id="lastname"/>
				</div>
				<div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" id="address"/>
				</div>
				<center><button type="button" class="btn btn-primary" id="save" >Insert</button></center>
			</form>
		</div>
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr >
						<th>Firstname</th>
						<th>Lastname</th>
						<th>Address</th>
					</tr>
				</thead>
				<tbody id="data"></tbody>
			</table>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"/></script>	
<script src="js/script.js"/></script>	
</body>	
</html>