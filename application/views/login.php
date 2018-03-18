<?php include("include/login_header.php") ?><body class="login-container login-cover">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">
				<div class="text-center">
                <img src="<?php echo base_url(); ?>assets/images/logo_login.png" alt="logo" title="logo">
                <h3 style="color:#FFF;">School Management System</h3>
               
                </div>
				<!-- Content area -->
				<div class="content pb-20">
					<!-- Form with validation -->
					<?php echo form_open('project_main/validation_login') ?>
						<div class="panel panel-body login-form">
                       
							<div class="text-center">
                             <strong class="text-danger"><?php echo validation_errors(); ?></strong>
                               <?php if($this->session->flashdata('failear_msg')){?>
                                    <div class="alert bg-danger">
                                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                        <?php echo $this->session->flashdata('failear_msg'); ?>
                                    </div>
                                <?php } ?>
                                <?php if(isset($success_msg)){?>
                                    <div class="alert bg-success">
                                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                                        <?php echo $success_msg; ?>
                                    </div>
                                <?php } ?>
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-users4"></i></div>
								<h5 class="content-group">Login to your account</h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
                                <?php
								$data1 = array(
									'name'        => 'username',
									'id'          => 'username',
									'class'       => 'form-control',
									'maxlength'   => '30',
									'placeholder' => 'Username'
								);
								echo form_input($data1);
								 ?>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<?php
								$data2 = array(
									'name'        => 'password',
									'id'          => 'password',
									'class'       => 'form-control',
									'maxlength'   => '30',
									'placeholder' => 'Password'
								);
								echo form_password($data2);
								 ?>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" checked="checked">
											Remember
										</label>
									</div>

									<div class="col-sm-6 text-right">
										<a href="#">Forgot password?</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>

							<!--<div class="content-divider text-muted form-group"><span>or sign in with</span></div>
							<ul class="list-inline form-group list-inline-condensed text-center">
								<li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
								<li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
								<li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
							</ul>

							<div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
							<a href="login_registration.html" class="btn btn-default btn-block content-group">Sign up</a>
							<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>-->
					</form>
					<!-- /form with validation -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
<!-- Added by HTTrack -->



<meta http-equiv="content-type" content="text/html;charset=UTF-8"><!-- /Added by HTTrack -->
</html>
