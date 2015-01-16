<div class="clearfix" style="height:20px;"></div>

<div class="container" id="main_wrapper">

	<div class="col-md-12">

	<div class="col-md-8">

		<div class="login-panel panel panel-default">

			<div class="panel-heading">
			    <h3 class="panel-title">User Registration</h3>
			</div>

			<div class="panel-body">
				<div class="alert alert-success" id="regSuccess">Please check your email and confirm your account. Thank you!</div>
			    <form role="form" action="" method="post" id="register">
			        <div class="form-group">
			      		<label>Email</label>
						<input type="email" name="user_email" class="form-control" placeholder="Email">
						<div id="email" style="display:none;"></div>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="user_pass" class="form-control" placeholder="Password">
						<div id="password" style="display:none;"></div>
					</div>
					<div class="form-group">
						<label>Firstname</label>
						<input type="text" name="user_fname" class="form-control" placeholder="Firstname">
						<div id="fname" style="display:none;"></div>
					</div>
					<div class="form-group">
						<label>Lastname</label>
						<input type="text" name="user_lname" class="form-control" placeholder="Lastname">
						<div id="lname" style="display:none;"></div>
					</div>

					<div class="form-group">
						<label>Mobile</label>
						<input type="text" name="user_mobile" class="form-control" placeholder="Mobile">
						<div id="mobile" style="display:none;"></div>
					</div>
					<div class="form-group">
						<label>Address 1</label>
						<textarea name="user_add1" class="form-control" placeholder="Address 1" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Address 2</label>
						<textarea name="user_add2" class="form-control" placeholder="Address 2" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>City</label>
						<input type="text" name="user_city" class="form-control" placeholder="City">
					</div>
					<div class="form-group">
						<label>State</label>
						<input type="text" name="user_state" class="form-control" placeholder="State">
					</div>
					<div class="form-group">
						<label>Zip</label>
						<input type="text" name="user_zip" class="form-control" placeholder="Zip">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" name="user_phone" class="form-control" placeholder="Phone">
					</div>

					<hr/>

					<div class="form-group">
						<label>Company Name</label>
						<input type="text" name="user_cname" class="form-control" placeholder="Company Name" value="">
					</div>
					<div class="form-group">
						<label>Company Address 1</label>
						<textarea name="user_cadd1" class="form-control" placeholder="Company Address 1" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Company Address 2</label>
						<textarea name="user_cadd2" class="form-control" placeholder="Company Address 2" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Company City</label>
						<input type="text" name="user_ccity" class="form-control" placeholder="Company City" value="">
					</div>
					<div class="form-group">
						<label>Company State</label>
						<input type="text" name="user_cstate" class="form-control" placeholder="Company State" value="">
					</div>
					<div class="form-group">
						<label>Company Zip</label>
						<input type="text" name="user_czip" class="form-control" placeholder="Company Zip" value="">
					</div>
					<div class="form-group">
						<label>Company Phone</label>
						<input type="text" name="user_cphone" class="form-control" placeholder="Company Phone" value="">
					</div>
					<div class="form-group">
						<label>Company Website URL</label>
						<input type="text" name="user_cweburl" class="form-control" placeholder="Company Website URL" value="">
					</div>
					<button type="button" onclick="register()" class="btn btn-success btn-xm btn-block">
					<span class="glyphicon glyphicon-user" aria-hidden="true"> Register</span>
					</button>
			    </form>
			</div>
		</div>

	</div>


	<div class="col-md-4">

		<div class="login-panel panel panel-default">

			<div class="panel-heading">
			    <h3 class="panel-title">User Login</h3>
			</div>

			<div class="panel-body">
			    <form role="form" action="" method="post" id="loguser">
			        <fieldset>
			            <div class="form-group">
			              <input class="form-control" placeholder="E-mail" name="email" type="email" value="" id="email" autofocus="">
			            </div>
			            <div class="form-group">
			                <input class="form-control" placeholder="Password" name="password" type="password" value="" id="password">
			            </div>
			            <button type="button" class="btn btn-xm btn-info btn-block" onclick="logUser()"><span class="glyphicon glyphicon-user" aria-hidden="true"> Login</span></button>
					</fieldset>
			    </form>
			</div>
		</div>

		<div class="login-panel panel panel-default">

			<div class="panel-heading">
			    <h3 class="panel-title">Administrator Login</h3>
			</div>

			<div class="panel-body">
			    <form role="form" action="" method="post" id="logadmin">
			        <fieldset>
			            <div class="form-group">
			              <input class="form-control" placeholder="E-mail" name="email" type="email" value="" id="email" autofocus="">
			            </div>
			            <div class="form-group">
			                <input class="form-control" placeholder="Password" name="password" type="password" value="" id="password">
			            </div>
			            <button type="button" class="btn btn-xm btn-danger btn-block" onclick="logAdmin()"><span class="glyphicon glyphicon-user" aria-hidden="true"> Login</span></button>
					</fieldset>
			    </form>
			</div>
		</div>

	</div>

	</div>

</div>


<script type="text/javascript">

	$(document).ready(function(){
		$('#regSuccess').fadeOut();
	});

	function register(){
		$.ajax({
	      url : '<?php echo base_url("main/registerUser"); ?>',
	      type : 'post',
	      data : $("#register").serialize(),
	      dataType : 'json',
	      success : function(json) {
	      	if(json.stats == 1){
				if(json.email != ""){
					$("#email").html(json.email).fadeIn();
				}else{
					$("#email").empty().fadeOut();
				}
				if(json.password != ""){
					$("#password").html(json.password).fadeIn();
				}else{
					$("#password").empty().fadeOut();
				}
				if(json.fname != ""){
					$("#fname").html(json.fname).fadeIn();
				}else{
					$("#fname").empty().fadeOut();
				}
				if(json.lname != ""){
					$("#lname").html(json.lname).fadeIn();
				}else{
					$("#lname").empty().fadeOut();
				}
				if(json.mobile != ""){
					$("#mobile").html(json.mobile).fadeIn();
				}else{
					$("#mobile").empty().fadeOut();
				}

				logs();
	        }else{
	          	$('#regSuccess').fadeIn();
	          	setInterval(function(){
	          		$('#regSuccess').fadeOut();
	          	},5000);
	          	$('#register')[0].reset();
	          	logs();
	        }
	      }
	    });    
	}

	function logs(){
		$("html, body").animate({ scrollTop: $('#main_wrapper').offset().top }, 1000);
	}

	function logUser(){
		alert($('#loguser').serialize());
	}

	function logAdmin(){
		alert($('#logadmin').serialize());
	}
</script>

