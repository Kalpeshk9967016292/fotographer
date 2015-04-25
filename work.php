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
			<div class="lead">Register here to start finding projects to work on.</div>
		</div>
	</div>

	<div class="row">
	<form role="form">
	
	<div class="col-md-12 well">
		<legend>About you</legend>
			<div id="pd">
			<div class="col-md-4">
			<div class="form-group">
				<label for="fullname">Your name :</label>
				<input type="text" class="form-control" id="name" placeholder="Full name">
			</div>
			</div>

			<div class="col-md-4">
			<div class="form-group">
				<label for="dob">Your Birthday :</label>
				<input type="date" class="form-control" id="dob">
			</div>
			</div>

			<div class="col-md-4">
			<div class="form-group">
				<label for="mob">Mobile No :</label>
				<input type="phone" class="form-control" id="mob" placeholder="Mobile number">
			</div>
			</div>

			<div class="col-md-4">
			<div class="form-group">
				<label for="mob">E-mail :</label>
				<input type="email" class="form-control" id="mob" placeholder="yourid@something.com">
			</div>
			</div>

			<div class="col-md-2 col-md-offset-6">
			<div class="form-group">
				<br><input type="button" class="form-control btn-success" value="Next" id="pdsub">
			</div>
			</div>
			</div>
	</div>

	<div class="col-md-12 well">
		<legend>About your professionl life</legend>
			<div id="pl">
			<div class="col-md-4">
			<div class="form-group">
				<label for="exp">Experiance:</label>
				<input type="number" class="form-control" id="exp" placeholder="Years">
			</div>
			</div>

			<div class="col-md-4">
			<div class="form-group">
				<label for="loc">Your Location:</label>
				<input type="text" class="form-control" id="loc" placeholder="Location">
			</div>
			</div>

			<div class="col-md-2 col-md-offset-2">
			<div class="form-group" style="  margin-top: 5px;">
				<br><div class="btn btn-danger" id="plrev">Prev</div>
				<div class="btn btn-success" id="plrev" style="float:right;">Next</div>
			</div>
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