<!-- <div class="container-contact100">

		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Send Us A Message
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
					<input class="input100" type="text" name="email" placeholder="E-mail">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Please enter your message">
					<textarea class="input100" name="message" placeholder="Your Message"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>
	 -->

	 <div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
		<!-- Nested Row within Card Body -->
		<div class="row">
			<div class="col-lg">
				<div class="p-5">
					<div class="text-center">
						<h1 class="h4 text-gray-900 mb-4">Contact Us!</h1>
					</div>
					<form class="user" method="post" >
		<div class="form-group">
			<input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
			
		</div>
		<div class="form-group">
			<input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= set_value('email'); ?>">
			
		</div>
		<div class="form-group">
			<input type="text" class="form-control form-control-user" id="phone" name="phone" placeholder="Phone" value="<?= set_value('phone'); ?>">
			
		</div>
			<div class="mb-3">
				<textarea class="form-control is-invalid" id="message" placeholder="Please Enter Your Message " required></textarea>
				<div class="invalid-feedback">
				Please enter a message.
				</div>
			</div>
		<button type="submit" class="btn btn-danger btn-user btn-block">
			Send Us Your Message
		</button>
	</form>
				</div>
			</div>
		</div>
	</div>
</div>

</div> 