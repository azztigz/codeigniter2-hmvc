<div class="clearfix" style="height:20px;"></div>

<div class="container">

	<div class="row">

		<div class="login-panel panel panel-default">

			<div class="panel-heading">
			    <h3 class="panel-title">Please Sign In</h3>
			</div>

			<div class="panel-body">
			    <form role="form" action="" method="post" id="register">
			        <fieldset>
			            <div class="form-group">
			              <input class="form-control" placeholder="E-mail" name="email" type="email" value="" id="email" autofocus="">
			            </div>
			            <div class="form-group">
			                <input class="form-control" placeholder="Password" name="password" type="password" value="" id="password">
			            </div>
						<div class="checkbox">
			                <label>
			                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
			                </label>
			            </div>
			            <button type="button" class="btn btn-xm btn-info btn-block" onclick="loginBut()"><i class="fa fa-user"></i> Login</button>
					</fieldset>
			    </form>
			</div>

		</div>


	<!-- Button trigger modal -->
	<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
	  Launch demo modal
	</button>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        ...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default btn-xs" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary btn-xs">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	</div>

</div>


<script type="text/javascript">
	function loginBut(){
		alert($('#register').serialize());
	}
</script>

