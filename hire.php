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

	<div class="col-lg-1 col-md-6 hidden-sm hidden-xs top-buffer">
		<a href="#" class="btn btn-info top-buffer" style="width:100%;border-radius:0px;">Hire</a>
	</div>

	<div class="col-lg-1 col-md-6 hidden-sm hidden-xs top-buffer">
		<a href="#" class="btn btn-info top-buffer" style="width:100%;border-radius:0px;">Work</a>
	</div>

	<div class="col-lg-1 col-md-6 hidden-sm hidden-xs top-buffer">
		<a href="#" class="btn btn-info top-buffer" style="width:100%;border-radius:0px;">Learn</a>
	</div>

	<div class="col-lg-1 col-md-6 hidden-sm hidden-xs top-buffer">
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
			<div class="lead">Lookign for a photographer, tell us your requirement.</div>
		</div>
	</div>

	<div class="row">
	<form role="form" action="addph.php" method="post">
	
	<div class="col-md-12 well">
		<legend>Some thing about your self</legend>
			<div id="cpd">
			<div class="col-md-4">
			<div class="form-group">
				<label for="fullname">Your name :</label>
				<input type="text" required="" class="form-control" id="name" placeholder="Full name">
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

			<div class="col-md-2 col-md-offset-10">
			<div class="form-group">
				<br><input type="button" class="form-control btn-success" value="Next" id="pdsub">
			</div>
			</div>
			</div>
	</div>

	<div class="col-md-12 well">
		<legend>Some details about your event</legend>
			<div id="cpl">
			<div class="col-md-3">
			<div class="form-group">
				<label for="exp">Type of event</label>
				<select class="form-control" placeholder="sds">
					<option value="">-Select-</option>
					<option value="Wedding">Fashion</option>
					<option value="Wildlife">Wildlife</option>
					<option value="Candid">Candid</option>
					<option value="Event">Events</option>
					<option value="portraits">Portraits</option>
					<option value="Fashion">Fashion</option>
					<option value="Journilisam">Journilisam</option>
				</select>
			</div>
			</div>

			<div class="col-md-3">
			<div class="form-group">
				<label for="edate">Date of event</label>
				  <input type="date" class="form-control" id="edate">
			</div>
			</div>			

			<div class="col-md-3">
			<div class="form-group">
				<label for="etime">Time of event</label>
				  <input type="time" class="form-control" id="etime">
			</div>
			</div>	

			<div class="col-md-3">
			<div class="form-group">
				<label for="eLoc">Location</label>
				  <input type="text" placeholder="Where is the event?" class="form-control" id="etime">
			</div>
			</div>

			<div class="col-md-2 col-md-offset-10">
			<div class="form-group" style="  margin-top: 5px;">
				<br><div class="btn btn-danger" id="plrev">Prev</div>
				<div class="btn btn-success" id="plnex" style="float:right;">Next</div>
			</div>
			</div>			

			
			</div>
	</div>

	<div class="col-md-12 well">
		<legend>Submit</legend>
			<div class="col-md-4 col-md-offset-4">
			<input type="submit" style="width:100%;" class="btn btn-info">		
			</div>
	</div>

	

	</form>
	</div>
	
</div>





<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>