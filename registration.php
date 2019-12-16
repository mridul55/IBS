	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Registration</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Text:100,300,400,500,600,700,800&display=swap" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script src="js/main.js"></script>
		

		

		<style>
			.alert{
				padding: 7px;
				margin-bottom: 5px;
			}
			fieldset{
				border: 1px solid #ddd;
				padding: 0 10px;
				margin-bottom: 20px;
			}
			legend{
				border: none;
				text-align: center;
				font-size: 24px;
			}
			body{
				font-family: 'Big Shoulders Text', cursive;
			}
			label{
				font-size: 18px;
			}

			.panel-heading h3{
				font-size: 35px;
				font-weight: 100;	
			}

			.breadcrumb{
				background-color: #428bca;
				border-radius: 0px;
				margin-bottom: 0;
			}

			.breadcrumb li a{
				color: #fff;
			}

			.breadcrumb .active{
				color: #ddd;
			}
		</style>
	</head>
	<body>
		<section>
			<ol class="breadcrumb bg-primary">
				<li><a href="index.php">Home</a></li>
				<li class="active">Registration</li>
			</ol>
		</section>

		<div class="container">
			<div class="row">

				<div class="col-md-12" style="margin-top: 10vh;">
					<div class="panel panel-primary">

						<div class="panel-heading text-center">
							<h3>Register for 13th IBS Alumni Convention</h3>
						</div>

						<div class="panel-body" style="padding: 20px 30px 30px 30px;">
							<form action="" method="POST" id="add" data-url="ajax/registration.php" enctype="multipart/form-data">
								
								

								<fieldset>
									<legend>Personal Information</legend>
									<div class="col-md-6">
										<div class="form-group">
											<label for="full_name_bangla">Full Name(Bangla)*</label>
											<input type="text" id="full_name_bangla" class="form-control" name="full_name_bangla" placeholder="পুরো নাম বাংলায় লিখুন" value="" >
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="full_name_english">Full Name(English)*</label>
											<input type="text" id="full_name_english" class="form-control" name="full_name_english" placeholder="Full name" value="" >
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<label for="present_address">Present Address*</label>
											<textarea id="present_address" class="form-control" name="present_address" placeholder="Present address"></textarea>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="permanent_address" required>Permanent Address*</label>
											<textarea id="permanent_address" class="form-control" name="permanent_address" placeholder="Permanent address"></textarea>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="user_profile_picture">Profile Picture*</label>
											<input type="file" id="user_profile_picture" class="form-control" name="user_profile_picture">
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="cell_number">Cell Number*</label>
											<input id="cell_number" class="form-control" name="cell_number" placeholder="Cell number" value="" >
										</div>
									</div>
									
								</fieldset>
								
								<fieldset>
									<legend>Account Information</legend>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="email">Email*</label>
											<input type="text" id="email" class="form-control" name="email" placeholder="Email" value="" >
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="password">Create Password*</label>
											
											<div class="input-group">
												<input type="password" id="password" class="form-control pwd" name="password" placeholder="******" >
												<span class="input-group-btn">
													<button class="btn btn-default reveal" type="button"><i id="eye" class="fa fa-eye"></i></button>
												</span>        
											</div>
											<h5 id="msg"></h5>
											
											<script>
												$('#password').keyup(function(event) { 
													var input = $('#password').val();
													
													if (input.length < 6) {
														$("#msg").html("Password Must be atleast 6 character!");
													}else{
														$("#msg").html("Password is strong!");
													}
												}); 
											</script>
											
										</div>
									</div>
								</fieldset>
								
								
								<fieldset>
									<legend>Occupational Information</legend>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="occupation">Occupation*</label>
											<input type="text" id="occupation" class="form-control" name="occupation" placeholder="Occupation" value="" >
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="designation">Designation*</label>
											<input type="text" id="designation" class="form-control" name="designation" placeholder="Designation" value="" >
										</div>
									</div>
									
									<div class="col-md-12">
										<div class="form-group">
											<label for="office_name">Name of institution*</label>
											<input type="text" id="office_name" class="form-control" name="office_name" placeholder="Office name" value="" >
										</div>
									</div>
								</fieldset>
								
								<fieldset>
									<legend>Educational Information</legend>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="name_of_degree">Name of degree*</label>
											<select name="name_of_degree" id="name_of_degree" class="form-control">
												<option value="MPhil">MPhil</option>
												<option value="PHD">PHD</option>
											</select>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="topic_of_research">Research title</label>
											<input type="text" class="form-control" name="topic_of_research" id="topic_of_research" placeholder="Research Title" value="" >
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="session">Session*</label>
											<select name="session" id="session" class="form-control" >
												<option value>Select</option>
												
												
												
												<option value="1974-1975">1974-1975</option>
												
												
												
												<option value="1975-1976">1975-1976</option>
												
												
												
												<option value="1976-1977">1976-1977</option>
												
												
												
												<option value="1977-1978">1977-1978</option>
												
												
												
												<option value="1978-1979">1978-1979</option>
												
												
												
												<option value="1979-1980">1979-1980</option>
												
												
												
												<option value="1980-1981">1980-1981</option>
												
												
												
												<option value="1981-1982">1981-1982</option>
												
												
												
												<option value="1982-1983">1982-1983</option>
												<option value="1983-1984">1983-1984</option>
												<option value="1984-1985">1984-1985</option>
												<option value="1985-1986">1985-1986</option>
												<option value="1986-1987">1986-1987</option>
												<option value="1987-1988">1987-1988</option>
												<option value="1988-1989">1988-1989</option>
												<option value="1989-1990">1989-1990</option>
												<option value="1990-1991">1990-1991</option>
												<option value="1991-1992">1991-1992</option>
												<option value="1992-1993">1992-1993</option>
												<option value="1993-1994">1993-1994</option>
												<option value="1994-1995">1994-1995</option>
												<option value="1995-1996">1995-1996</option>
												<option value="1996-1997">1996-1997</option>
												<option value="1997-1998">1997-1998</option>
												<option value="1998-1999">1998-1999</option>
												<option value="1999-2000">1999-2000</option>
												<option value="2000-2001">2000-2001</option>
												<option value="2001-2002">2001-2002</option>
												<option value="2002-2003">2002-2003</option>
												<option value="2003-2004">2003-2004</option>
												<option value="2004-2005">2004-2005</option>
												<option value="2005-2006">2005-2006</option>
												<option value="2006-2007">2006-2007</option>
												<option value="2007-2008">2007-2008</option>
												<option value="2008-2009">2008-2009</option>
												<option value="2009-2010">2009-2010</option>
												<option value="2010-2011">2010-2011</option>
												<option value="2011-2012">2011-2012</option>
												<option value="2012-2013">2012-2013</option>
												<option value="2013-2014">2013-2014</option>
												<option value="2014-2015">2014-2015</option>
												<option value="2015-2016">2015-2016</option>
												<option value="2016-2017">2016-2017</option>
												<option value="2017-2018">2017-2018</option>
												<option value="2018-2019">2018-2019</option>
											</select>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="awarded">Year of award</label>
											<select name="awarded" id="awarded" class="form-control" >
												<option value>Select</option>
												<option value="1">Not Yet Awarded</option>
												<option value="1974">1974</option>
												<option value="1975">1975</option>
												<option value="1976">1976</option>
												<option value="1977">1977</option>
												<option value="1978">1978</option>
												<option value="1979">1979</option>
												<option value="1980">1980</option>
												<option value="1981">1981</option>
												<option value="1982">1982</option>
												<option value="1983">1983</option>
												<option value="1984">1984</option>
												<option value="1985">1985</option>
												<option value="1986">1986</option>
												<option value="1987">1987</option>
												<option value="1988">1988</option>
												<option value="1989">1989</option>
												<option value="1990">1990</option>
												<option value="1991">1991</option>
												<option value="1992">1992</option>
												<option value="1993">1993</option>
												<option value="1994">1994</option>
												<option value="1995">1995</option>
												<option value="1996">1996</option>
												<option value="1997">1997</option>
												<option value="1998">1998</option>
												<option value="1999">1999</option>
												<option value="2000">2000</option>
												<option value="2001">2001</option>
												<option value="2002">2002</option>
												<option value="2003">2003</option>
												<option value="2004">2004</option>
												<option value="2005">2005</option>
												<option value="2006">2006</option>
												<option value="2007">2007</option>
												<option value="2008">2008</option>
												<option value="2009">2009</option>
												<option value="2010">2010</option>
												<option value="2011">2011</option>
												<option value="2012">2012</option>
												<option value="2013">2013</option>
												<option value="2014">2014</option>
												<option value="2015">2015</option>
												<option value="2016">2016</option>
												<option value="2017">2017</option>
												<option value="2018">2018</option>
											</select>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="name_of_superviser">Name of superviser</label>
											<input type="text" class="form-control" name="name_of_superviser" id="name_of_superviser" placeholder="Name of superviser" value="" >
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="crest">Recived Crest in previous convention?*</label>
											<select name="crest" id="crest" class="form-control" >
												<option value="Yes">Yes</option>
												<option value="No">No</option>
											</select>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="recived_awarde">Awards</label>
											<input type="text" name="recived_awarde" id="recived_awarde" placeholder="Recived award" class="form-control" value="">
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="number_of_publication">Number of articles*</label>
											<input type="text" name="number_of_publication" id="number_of_publication" placeholder="পাবলিকেশনের সংখ্যা লিখুন" class="form-control" value="" >
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="number_of_article">Number of books*</label>
											<input type="text" name="number_of_article" id="number_of_article" placeholder="আর্টিকেল এবং বই এর সংখ্যা লিখুন" class="form-control" value="" >
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="list_of_publication">List of articles</label>
											<textarea id="list_of_publication" class="form-control" name="list_of_publication" placeholder="পাবলিকেশনের তালিকা দিন"></textarea>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group">
											<label for="list_of_books">List of books</label>
											<textarea name="list_of_books" id="list_of_books" class="form-control" placeholder="আর্টিকেল এবং বই তালিকা দিন"></textarea>
										</div>
									</div>
									
								</fieldset>
								
								<fieldset>
									<legend>Payment Information</legend>
									
									<div class="col-md-12">
										<div class="form-group">
											<label for="membership_type">
												<input type="checkbox" name="checkboxlist" id="Member" value="2500" required="" /> &nbsp;Life Member / Member*
											</label>
											&nbsp;
											<label for="membership_type">
												<input type="checkbox" name="checkboxlist" id="Member1" value="2000" required="" /> &nbsp;Associate Member*
											</label>
											<br>
											<label for="membership_type">
												<input type="checkbox" id="spouse_check" name="checkboxlistsp" value="1000" required="" /> &nbsp;Spouse
												<input type="text" id="spouse_name" name="spouse_name" placeholder="Name Of Your Spouse" style="display: none;">
												<script>
													$(document).ready(function() {
											        //set initial state.
											        
											        $("#spouse_check").change(function() {
											        	if(this.checked) {
											        		$("#spouse_name").css("display", "inline");
											        	}else{
											        		$("#spouse_name").css("display", "none");
											        	}
											        });
											      });
											    </script>
											  </label>
											  
											  <br>
											  <label for="membership_type">
											  	<input type="checkbox" name="checkboxlistch" id="childcheck" value="500" required="" /> &nbsp;Children
											  </label>
											  <input type="number" id="child" name="number_of_children" value="0" style="display: none;">
											  <div class="input_fields_wrap" style="display: inline;">
											  	
											  </div>
											  <script>
											  	var wrapper = $(".input_fields_wrap");
											  	
											  	$('#child').on('change', function() {
											  		var bla = $('#child').val();
											  		console.log(bla);
											  		
											    for (x=0; x < bla;x++) { //max input box allowed
											    	
											    	
											      $(wrapper).append('<div style="display: inline;"><input type="text" name="mytext[]" placeholder="Name Of Your Children"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
											    }
											  });
										$(wrapper).on("click", ".remove_field", function(e) { //user click on remove text
											e.preventDefault();
											$(this).parent('div').remove();
											x--;
										});
									</script>
									<br>
									<label for="membership_type">
										<input type="checkbox" name="checkboxlistdr" id="driverCheck" value="1000" required="" /> &nbsp;Driver and others
									</label>
									<input type="number" id="driver" value="0" name="number_of_driver" style="display: none;">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label for="total_to_be_paid">Total To Be Paid*</label>
									<input type="number" id="total_to_be_paid" class="form-control" name="total_to_be_paid" placeholder="Total amount to be paid" readonly="" value="" required="">
								</div>
							</div>
							
							<div class="col-md-12" style="margin-bottom: 15px;">
								<div class="text-center">
									<button class="btn btn-danger btnadd">Calculate Total Fee</button>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="payment_type">Payment Type</label>
									<select name="payment_type" id="payment_type" class="form-control">
										<option>Select</option>
										<option value="Check">Check</option>
										<option value="Bkash">bKash</option>
										<option value="Cash">Cash</option>
										<option value="Online Check">Online Check</option>
									</select>
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label for="ref_id">Transiction Id/Reference Id</label>
									<input type="text" id="ref_id" class="form-control" name="ref_id" placeholder="Transiction Id/Reference Id" value="">
								</div>
							</div>
						</fieldset>
						<button type="submit" class="btn btn-primary btn-block btn-lg" name="signup">SIGN UP</button>
					</form>
				</div>
				<div class="panel-footer">
					<div class="row">
						<div class="col-md-6 text-center">
							<a href="index.php" class="btn btn-info btn-block"><i class="fa fa-home"></i> Back To Home</a>
						</div>
						<div class="col-md-6 text-center">
							<a href="signin.php" class="btn btn-success btn-block"><i class="fa fa-user-secret"></i> Go To Sign In</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<script>
	$(".reveal").on('click',function() {
		var $pwd = $(".pwd");
		if ($pwd.attr('type') === 'password') {
			$pwd.attr('type', 'text');
			$("#eye").attr("class","fa fa-eye-slash");
		}else {
			$pwd.attr('type', 'password');
			$("#eye").attr("class","fa fa-eye");
		}
	});
</script> 

<script>
	$("#childcheck").change(function() {
		if(this.checked) {
			$("#child").css("display", "inline");
		}else{
			$("#child").css("display", "none");
		}
	});
	
	$("#driverCheck").change(function() {
		if(this.checked) {
			$("#driver").css("display", "inline");
		}else{
			$("#driver").css("display", "none");
		}
	});
</script> 

<script type="text/javascript">
	$(document).ready(function() {
		$('#Member').change(function() {
			if(this.checked) {
				$("#Member1").attr("disabled", true);
			}else{
				$("#Member1").removeAttr("disabled");
			}
            //$('#Member').val(this.checked);        
          });

		$('#Member1').change(function() {
			if(this.checked) {
				$("#Member").attr("disabled", true);
			}else{
				$("#Member").removeAttr("disabled");
			}      
		});
	});
	$(document).ready(function(){
		$('.btnadd').click(function(){
			event.preventDefault();
			var checkValues = $('input[name=checkboxlist]:checked').map(function(){
				return parseInt($(this).val());
			}).get();

			var checkValuessp = $('input[name=checkboxlistsp]:checked').map(function()
			{
				return parseInt($(this).val());
			}).get();

			var checkValuesch = $('input[name=checkboxlistch]:checked').map(function()
			{
				return parseInt($(this).val());
			}).get();

			var checkValuesdr = $('input[name=checkboxlistdr]:checked').map(function()
			{
				return parseInt($(this).val());
			}).get();

			var dr = parseInt($("#driver").val());
			var ch = parseInt($("#child").val());
			var child_total= parseInt(ch*checkValuesch);
			var dr_total = parseInt(dr*checkValuesdr);
			var total_paid = parseInt(eval(Number(child_total) + Number(dr_total) + Number(checkValuessp) + Number(checkValues)));
			console.log(total_paid);
			$("#total_to_be_paid").val(total_paid);

			
		});
	});
</script> 
</body>
</html>



