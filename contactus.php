<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- BOOTSTRAP -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.theme.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		
		<!-- Other -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	
	<body>
		<div class="navbar">
			<ul class="list-inline list-unstyled container clearfix">
				<li class="navitem"><a href="index.php">Home</a></li>
				<li class="navitem"><a href="#">Projects</a></li>
				<li class="navitem"><a href="contactus.php">Contact Us</a></li>
			</ul>
		</div>
		<div class="container main">
			<h1 class="text-center">Contact Us</h1>
			
			<form action="index.php" method="POST">
				<div class="form-group text-center">
					<label for="TheEmail">E-Mail</label>
					<input type="email" class="form-control smalltextbox" name="email" id="TheEmail" placeholder="Something@Something.com" />
				</div>				
				<br />
				<div class="form-group text-center">
					<label for="TheFullName">FullName</label>
					<input type="text" class="form-control smalltextbox" name="fullname" id="TheFullName" placeholder="First Last" />
				</div>
				<br />
				<div class="form-group text-center">
					<label for="TheBody">Body</label>
					<textarea class="form-control smalltextarea" name="body" id="TheBody" rows="10" cols="20" placeholder="Something..."></textarea>
				</div>				
				<div class="form-group text-center">
					<button type="submit" class="btn btn-default">Submit</button>
				</div>
				
			</form>

		</div>
		<div class="container footer">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 enable-right-border">
					<h4 class="text-center">Pages</h4>
					<ul class="text-left">
						<li class="footeritem"><a href="index.php">Home</a></li>
						<li class="footeritem"><a href="#">Projects</a></li>
						<li class="footeritem"><a href="#">Contact Us</a></li>
					</ul>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 enable-right-border">
					<h4 class="text-center">Information</h4>
					<dl class="dl-horizontal text-left">
						<dt>Developed By</dt>
						<dd>Christian Deacon</dd>
						
						<dt>Date Created</dt>
						<dd>6-18-15</dd>
						
						<dt>Skill Level</dt>
						<dd>8/10</dd>
					</dl>
				</div>
				
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<h4 class="text-center">Contact Information</h4>
					
					<address>
						<abbr title="Phone Number">P</abbr>: (1)-856-535-1096
						<br />
						<abbr title="E-Mail">E</abbr>: <a href="mailto:christiand@thdevelopingcommunity">Christian Deacon</a>
					</address>
				</div>
			</div>
		</div>
		
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>