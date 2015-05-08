<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
<link rel="stylesheet" type="text/css" href="CSS/index.css">
<title>fotographer</title>
</head>

<body>


<div class="container-fluid">
<div class="row">
	<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 top-buffer">
		<img src="img/logo.png" class="img-responsive center-block" width="400px">
	</div>

	<div class="col-lg-3 col-md-0 col-xs-12">
		
	</div>

	<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 top-buffer">
		<a href="#" class="btn btn-info top-buffer" style="width:100%;border-radius:0px;">Hire</a>
	</div>

	<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 top-buffer">
		<a href="#" class="btn btn-info top-buffer" style="width:100%;border-radius:0px;">Work</a>
	</div>

	<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 top-buffer">
		<a href="#" class="btn btn-info top-buffer" style="width:100%;border-radius:0px;">Learn</a>
	</div>

	<div class="col-lg-1 col-md-6 col-sm-12 col-xs-12 top-buffer">
		<a href="#" class="btn btn-info top-buffer" style="width:100%;border-radius:0px;">Gallery</a>
	</div>
</div>
</div>

<div class="contaier-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 hidden-sm hidden-xs"><hr style="border-top: 5px solid #eee;box-shadow: 0px 5px 10px black;width:100%;"></div>
	</div>
</div>

<div class="container">
	<div class="row ">
		<div class="col-lg-12 top-buffer" style="text-align:center;">
			<div class="lead">Show your work to the world</div>
			
		</div>
	</div>

	<div class="row">
	<form role="form" action="addph.php" method="post">
		
		<div class="col-md-12 well">
			<legend>Fashion</legend>
			<div class="col-md-3" style="text-align:center;">
				<div class="lead">Upload Photos</div>
				<p>Select photos from your device</p>
				
				<div class="btn btn-primary btn-file">
					<i class="glyphicon glyphicon-folder-open"></i> &nbsp;&nbsp;Browse...
					<input type="file" id="imgInp"  class="btn" multiple="multiple">
				</div>
				
			</div>

			<div class="col-md-9 well" style="text-align:center;">
				<div class="lead">Uploaded Photos</div><hr>
				<img src="" id="blah" class="img-responsive well" style="max-width:50%;max-height:25%;" />
				
				</div>
				
			</div>

		</div>
	

	</form>
	</div>
	
</div>





<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>