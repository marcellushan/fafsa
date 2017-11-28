
 <div class="main container">
 <h2 class="mytitle">Complete the form below to reserve your space at an upcoming workshop.
</h2>


				<?php echo validation_errors(); ?>
				<form action="submit" method="post">
				<input type="hidden" name="submit_date" value="<?php echo date("Y-m-d") ?>">
				<input type="hidden" name="event_id" value="1">
				
											<h3 class="bs-center">Items you MUST bring with you to complete the FAFSA application:</h3>
											<div class="row">
												<div class="col-md-6">
													<h4>Independent Student</h4>
													<ol>
														<li>Student Social Security Number</li>
														<li>Student 2016 1040 Tax form</li>
														<li>Student 2016 W-2 if worked but did not file taxes for 2016</li>
													</ol>
												</div>
												<div class="col-md-6">
													<h4>Dependent Student</h4>
													<ol>
														<li>Student Social Security Number</li>
														<li>Student 2016 1040 Tax form</li>
														<li>Parent(s) 2016 1040 Tax form</li>
														<li>Student 2016 W-2 if worked but did not file taxes for 2016 </li>
														<li>Parent(s) 2016 w-2 if they worked  but did not file</li>
													</ol>
												</div>
											</div>
				
					<fieldset>
						<!-- Form Name -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
											<!-- Text input-->
											<h3>Name</h3>
											<input name="attendee_name" type="text"  maxlength="40" placeholder="Required" class="form-control" value="<?php echo set_value('attendee_name'); ?>" >
										</div>
										<div class="col-md-6">
											<!-- Text input-->
											<h3>Email Address</h3>
											<input name="email" type="email"  maxlength="40" placeholder="Required" class="form-control" value="<?php echo set_value('email'); ?>" >
										</div>
										<div class="col-md-6">
											<!-- Text input-->
											<h3>Phone Number</h3>
											<input name="phone" type="text"  maxlength="40" placeholder="Required" class="form-control" value="<?php echo set_value('phone'); ?>" >
										</div>
										<div class="col-md-6">
											<!-- Text input-->
											<h3>Number Attending</h3>
											<input name="num_attending" type="number"  maxlength="40" placeholder="Required" class="form-control" value="<?php echo set_value('num_attending'); ?>">
										</div>
									</div>
									<br>
							
							<div class="row">
								<div class="col-md-6">
									<h3><select class="date" name="event_date">
										<option value="">Select a Date &nbsp;</option>
										<option month="1" value="2017-11-30">November 30</option>
										<option month="2" value="2017-12-01">December 1</option>
										<option month="3" value="2017-12-12">December 12</option>
										<option month="4" value="2017-12-14">December 14</option>
									</select></h3>
								</div>
								<div class="col-md-6">
									<h3><select name="location">
										<option value="">Select a Location &nbsp; </option>
										<option  id="floyd"value="Floyd">Floyd </option>
										<option  id="cartersville"value="Cartersville">Cartersville</option>
<!--										<option id="mavalue="Marietta">Marietta - Main Office</option>-->
										<option id="paulding"  value="Paulding">Paulding</option>
										<option id="douglasville"  value="Douglasville">Douglasville</option>
									</select></h3>
								</div>
							
							
							
							</div>
	
								
								
																			<input type="submit" class="btn btn-primary btn-lg center-block" value="Submit" />

		
									</div>
							</form>
	<script type="text/javascript">
	$( ".date" ).change(function() {
		var mine = $(".date option:selected" ).attr('month');
		if (mine == 1)
			{
				$('#floyd').attr('disabled', true);
				$('#cartersville').attr('disabled', true);
				$('#paulding').attr('disabled', true);
				$('#douglasville').removeAttr('disabled');
			}
		else if (mine == 3)
			{
				$('#floyd').attr('disabled', true);
				$('#douglasville').attr('disabled', true);
				$('#paulding').attr('disabled', true);
				$('#cartersville').removeAttr('disabled');
			}
		else if (mine == 4)
		{
			$('#cartersville').attr('disabled', true);
			$('#douglasville').attr('disabled', true);
			$('#paulding').attr('disabled', true);
			$('#floyd').removeAttr('disabled');
		}
		else
		{
			$('#douglasville').attr('disabled', true);
			$('#floyd').removeAttr('disabled');
			$('#paulding').removeAttr('disabled');
			$('#cartersville').removeAttr('disabled');
		}
// 		  alert( mine );
		});

	</script>
