<!doctype html>
<html lang="en">
<head>
	<?php include 'assets/head.php' ?>
	<title>Galactic Servers - Network Status</title>
</head>
<body>
	<div class="page-wrap">
		<?php include 'assets/navigation.php' ?>
		<div id="slider">
			<div class="container">
				<h1>Network Status</h1>
			</div>
		</div>
		<div class="container">
			<p class="focus">Status of Galactic nodes can be viewed on this page.</p>

			<table class="table table-striped">
				<thead>
					<tr>
						<th>Name</th>
						<th>Status</th>
						<th>Uptime</th>
						<th>CPU</th>
						<th>RAM</th>
						<th>Network</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th width="20%">Lorem</th>
						<td width="10%"><span class="label label-success">Online</span></td>
						<td width="10%">43 Days</td>
						<td width="20%">
							45%
							<div class="progress progress-striped active">
								<div class="progress-bar progress-bar-success" style="width:45%"></div>
							</div>
						</td>
						<td width="20%">
							75%
							<div class="progress progress-striped active">
								<div class="progress-bar progress-bar-info" style="width:75%"></div>
							</div>
						</td>
						<td width="20%">
							15 Mbps
							<div class="progress progress-striped active">
								<div class="progress-bar progress-bar-warning" style="width:15%"></div>
							</div>
						</td>
					</tr>
					<tr>
						<th width="20%">Ipsum</th>
						<td width="10%"><span class="label label-danger">Offline</span></td>
						<td width="10%">64 Days</td>
						<td width="20%">
							32%
							<div class="progress progress-striped active">
								<div class="progress-bar progress-bar-success" style="width:32%"></div>
							</div>
						</td>
						<td width="20%">
							50%
							<div class="progress progress-striped active">
								<div class="progress-bar progress-bar-info" style="width:50%"></div>
							</div>
						</td>
						<td width="20%">
							10 Mbps
							<div class="progress progress-striped active">
								<div class="progress-bar progress-bar-warning" style="width:10%"></div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php include 'assets/footer.php' ?>
</body>
</html>