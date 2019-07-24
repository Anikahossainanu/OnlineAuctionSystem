<!DOCTYPE html>
<html lang="en">
	<head>
		
		@include('layout.customer.header')
    </head>
	<body>
		@include('layout.customer.header2')
		<div class="section">
					<!-- container -->
					<div class="container">
						<!-- row -->
						<div class="row">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">
								<br><br><br><br><br><br>
								<form>
								
								  <div class="form-group">
								    <label for="exampleInputEmail1">Email address</label>
								    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								    
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Password</label>
								    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								  </div>
								  
								  <button type="submit" class="btn btn-primary">Submit</button>
									<p>Don't have an account?<a href='signup'>Sign up here</a></p>
								</form>
								<br><br><br><br><br><br>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->

				</div>

		@include('layout.customer.footer')
		@include('layout.customer.scripts')
	</body>
</html>
