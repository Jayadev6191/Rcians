<div class="container">
	<div class="box effect5">
		<img src="assets/img/p2.png">
	</div>
</div>
<!-- /container -->

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Log in</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="" placeholder="Password">
					</div>
					<button type="submit" class="btn  btn-primary">
						Log in
					</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Register</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="text" class="form-control" id="reg-name" placeholder="Enter name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="reg-email" placeholder="Enter email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="reg-pass" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Re-Password</label>
						<input type="password" class="form-control" id="" placeholder="Password">
					</div>
					<button type="submit" class="btn  btn-primary" id="register">
						Register
					</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
    $("#register").on("click", function(){
            var name = $("#reg-name").text();
            var email = $("#reg-email").text();
            var pass = $("#reg-pass").text();
            var data = {
                "name": name,
                "email": email,
                "password":pass
            };
            $.ajax({
                url: "<?php echo config_item('base_url_api');?>rcian/logout",
                data: data,
            }) .done(function( msg ) {
                alert( "Data Saved: " + msg );
              });
       })
</script>