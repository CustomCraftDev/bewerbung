<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bewerbung</title>
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			body, html {
			  padding: 0px;
			  margin: 0px;
			  border: 0px none;
			  width: 100%;
			  height: 100%;
			}
			body 
			{
				background: url('dist/img/bg.png') no-repeat center center fixed;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				-webkit-user-select: none;
				-khtml-user-select: none;
				-moz-user-select: none;
				-o-user-select: none;
				user-select: none;
			}
			.panel
			{
				background-color: #222535 !important;
			}
			.panel-default
			{
				border-color: #222535 !important;
			}
			.signup .panel-body
			{
				background-color: white;
			}
			.signup .panel-body label
			{
				color: #222535;
				font-weight: normal;
			}
			.signup .panel-heading
			{
				background-color: #222535;
				border-color: #222535;
			}
			.signup .panel-footer
			{
				background-color: #222535;
				border-color: #222535;
			}
			.btn-submit
			{
				margin-right:5px;
			} 
			#footer 
			{
				color:white;
				clear:both;
				text-align:center;
				padding:8px;
				background-color: #222535;
				position: absolute;
				left: 0;
				bottom: 0;
				height: 40px;
				width: 100%;
				overflow:hidden;
			}

		</style>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<br>
					<div class="panel panel-default signup">
					
						<div class="panel-heading">
							<br>
							<center><img style="width: 50%; margin-left: 10px;" src="dist/img/logo.png" ></img></center>
							<br>
						</div>
						
						<div class="panel-body">
						
							<form class="form-horizontal" action="abschicken.php" method="get">
							
							<div class="form-group">
								<center><h4>VentoxCraft - Bewerbungsformular</h4></center>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_name" placeholder="Max Mustermann">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Alter:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_age" placeholder="14-99">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									E-mail:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_email" placeholder="max.mustermann@e_mail.de">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Minecraft Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="input_username" placeholder="Steve">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Rolle:</label>
								<div class="col-md-8">
									<select class="form-control" name="">
										<option selected="" value="">-</option>
										<option value="">Architekt</option>
										<option value="">Developer</option>
										<option value="">Support</option>
										<option value="">Partner</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Bewerbung:</label>
								<div class="col-md-8">
									<textarea class="form-control" style="resize: vertical;" rows="5" id="input_textfield" placeholder="max. 5000 Zeichen ..."></textarea>
								</div>
							</div>
														
							<div class="form-group">
								<div class="col-md-8 col-md-offset-4">
									<div class="checkbox">
										<label>
											Ich habe die <a href="impressum.php">AGB's</a> gelesen.
											<input type="checkbox" id="input_checkbox">
										</label>
									</div>
								</div>
							</div>
							
							</form>
							
						</div>
						
						<div class="panel-footer">
							<div class="row">
								<div class="form-group">
									<div class="col-md-12">
										<input type="submit" name="cancel" value="Abbrechen" class="btn btn-default pull-right btn-primary">
										<input type="submit" name="submit" value="Abschicken" class="btn btn-default pull-right btn-submit btn-success">
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer navbar-fixed-bottom">
		    <div style="float: left; color: #737373; font-style: italic; line-height: 34px;margin-left: 10px;">
				<strong>Copyright 2016 @ <a href="http://www.ventox-craft.de">ventox-craft.de</a></strong>
			</div>
			<div style="float: right; color: #737373; font-style: italic; line-height: 34px; margin-right: 10px;">
				<strong>Sponsoren: <a href="http://www.animes4me.net">Animes4me.net</a> und <a href="http://www.totalegal.xyz">totalegal.xyz</a></strong>
			</div>
		</div>
		
	</body>
</html>
