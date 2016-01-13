<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bewerbung</title>
		<link href="http://www.animes4me.net/minecraft/robert/dist/css/bootstrap.min.css" rel="stylesheet">
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
				background: url('http://www.animes4me.net/minecraft/robert/dist/img/bg.png') no-repeat center center fixed;
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
			.highlight{
				background-color: #72A4D2;
			}

		</style>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="http://www.animes4me.net/minecraft/robert/dist/js/bootstrap.min.js"></script>
		
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<br>
					<div class="panel panel-default signup">
					
						<div class="panel-heading">
							
							<center><img style="width: 70%; margin-left: 10px;" src="http://www.animes4me.net/minecraft/robert/dist/img/logo.png" ></img></center>

						</div>
						
						<div class="panel-body">
						
							<form id="myform" class="form-horizontal">
							
							<div class="form-group">
								<center><h4>VentoxCraft - Bewerbungsformular</h4></center>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="input_name" placeholder="Max Mustermann">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Alter:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="input_age" placeholder="14-99">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									E-mail:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="input_email" placeholder="max.mustermann@e_mail.de">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Minecraft Name:</label>
								<div class="col-md-8">
									<input type="text" class="form-control" name="input_username" placeholder="Steve">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-md-3 control-label">
									Rolle:</label>
								<div class="col-md-8">
									<select class="form-control" name="input_choose">
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
									<textarea class="form-control" style="resize: vertical;" rows="5" name="input_textfield" placeholder="max. 5000 Zeichen ..."></textarea>
								</div>
							</div>
														
							<div class="form-group">
								<div class="col-md-12">
									<div class="checkbox">
										<label style="float: right;">
											<input id="checkbox" type="checkbox" name="input_checkbox">
											Ich habe die <a href="impressum.php">AGB's</a> gelesen.
										</label>
									</div>
								</div>
							</div>
							
							</form>
							
						</div>
						
						<div class="panel-footer">
							<div class="row">
								<div class="form-group">
									<div class="col-md-8 col-md-offset-4">
										<input type="submit" id="submit" name="submit" value="Bewerbung abschicken" class="btn btn-default pull-right btn-submit btn-success">
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<br></br>
			<br></br>
		</div>
		
		<div class="footer navbar-fixed-bottom" style="z-index: -1;">
			<center>
		    <div style="color: #737373; font-style: italic; line-height: 34px;">
				<strong>Copyright 2016 @ <a href="http://www.ventox-craft.de">ventox-craft.de</a></strong>
				<strong>sponsored by: <a href="http://www.animes4me.net">Animes4me.net</a></strong>
			</div>
			</center>
		</div>
		
		<script type="text/javascript">
			$("#submit").click(function(){
				var isFormValid = true;
				$("input").each(function(){
					if ($.trim($(this).val()).length == 0){
						$(this).addClass("highlight");
						isFormValid = false;
					} else {
						$(this).removeClass("highlight");
					}
				});
				if(!isFormValid) {
					alert("Bitte fülle alle angegebenen Felder aus.");
				}else{
					if(document.getElementById('checkbox').checked){
						$.ajax({
							url:'http://www.animes4me.net/minecraft/robert/bewerbung.php',
							type:'post',
							data:$('#myform').serialize(),
							success:function(){
								$("#submit").removeClass('btn btn-default pull-right btn-submit btn-success').addClass('btn btn-default pull-right btn-primary');
								
								$("#submit").attr("value", "Abgeschickt").attr("id", "no_submit");
							}
						});
					}else{
						alert("Du musst den AGB's zustimmen.");
					}
				}
			});
		</script>
		
	</body>
</html>
