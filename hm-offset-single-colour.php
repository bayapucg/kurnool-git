<?php include("header.php"); ?>
<style>
.bootstrap-select {
}

</style>
<section class="content">
        <div class="container-fluid">
       
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>HM offset single colour </h2>
                       
                        </div>
                        <div class="body"> <!-- Nav tabs -->
                            <form id="defaultForm" method="post"  action="hm-offset-single-colour.php">
									<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<th>Description</th>
											<th>Comments</th>
											<th>Diamond (running)</th>
											<th>Gold (new)</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      <tr>
										<th>Bag colours</th>
										<td>NA</td>
										<td>
											<select class="form-control" >
												<option>White</option>
												<option>Lvory</option>
												<option>Green</option>
												<option>Pink</option>
												<option>Orange</option>
												<option>Red</option>
											</select>
										</td>
										<td>Only White</td>
                                      </tr> 
									   <tr>
										<th rowspan="2" class="vertical-center">Printing colours</th>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>For White </option>
												<option>Lvory Bags</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>Magenta</option>
												<option>Green</option>
												<option>Cyan</option>
												<option>Black</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>Magenta</option>
												<option>Green</option>
												<option>Cyan</option>
												<option>Black</option>
											</select>
										</td>
                                      </tr> 
									  <tr>
										<td>
											<select class="form-control">
												<option>Select </option>
												<option>Other Bag Colors</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select </option>
												<option>Black</option>
												<option>Cyan</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select </option>
												<option>Black</option>
												<option>Cyan</option>
											</select>
										</td>
                                      </tr> 
									    <tr>
										<th>Rate </th>
										<td>NA</td>
										<td>230</td>
										<td>200</td>
                                      </tr>
									  <tr>
										<th rowspan="2" class="vertical-center">Plate</th>
										<td>
											One design two time
										</td>
										<td>100</td>
										<td>100</td>
                                      </tr> 
									  <tr>
										<td>One design two years</td>
										<td>1000</td>
										<td>1000</td>
                                      </tr> 
									  <tr>
										<th>MOQ </th>
										<td>NA</td>
										<td>10kgs</td>
										<td>10kgs</td>
                                      </tr> 
									  <tr>
										<th>Vertical sizes </th>
										<td colspan="2">
											<select class="form-control">
												<option>Select </option>
												<option>9x11</option>
												<option>10x14</option>
												<option>12x16</option>
												<option>12x18</option>
												<option>14x16</option>
												<option>14x18</option>
												<option>14x20</option>
												<option>16x20</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select </option>
												<option>9x11</option>
												<option>10x14</option>
												<option>12x16</option>
												<option>12x18</option>
												<option>14x16</option>
												<option>14x18</option>
												<option>14x20</option>
												<option>16x20</option>
											</select>
										</td>
                                      </tr>
									  <tr>
										<th>Horizontal sizes</th>
										<td colspan="3" class="text-center">NA</td>
                                      </tr>
									  <tr>
										<th>Side box / Gazette</th>
										<td colspan="3" class="text-center">Only 16x20 With 3 Inch Gazetee</td>
                                      </tr> 
									  <tr>
										<th>Microns</th>
										<td >NA</td>
										<td >50</td>
										<td >60</td>
                                      </tr>
									  
									  
                                    </tbody>
                                </table>
                            </div>
						
							<div class="form-group">
                            <label class="col-lg-3 control-label">Mobile</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" name="username" placeholder="Enter mobile" />
                            </div>
                        </div>

							<div class="form-group">
								<div class="col-lg-2 col-lg-offset-10">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add Vendor</button>
									
								</div>
							</div>
						</form>
						
                        </div>
						<div class="clearfix"></div>
                    </div>
                </div>
            </div>
           
            
            
    </section>
	<script type="text/javascript">
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#defaultForm').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty'
                    }
                }
            },
            lastName: {
                group: '.col-lg-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    },
                    remote: {
                        type: 'POST',
                        url: 'remote.php',
                        message: 'The username is not available'
                    },
                    different: {
                        field: 'password,confirmPassword',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and cannot be empty'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and cannot be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            birthday: {
                validators: {
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The birthday is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            'languages[]': {
                validators: {
                    notEmpty: {
                        message: 'Please specify at least one language you can speak'
                    }
                }
            },
            'programs[]': {
                validators: {
                    choice: {
                        min: 2,
                        max: 4,
                        message: 'Please choose 2 - 4 programming languages you are good at'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

    // Validate the form manually
    $('#validateBtn').click(function() {
        $('#defaultForm').bootstrapValidator('validate');
    });

    $('#resetBtn').click(function() {
        $('#defaultForm').data('bootstrapValidator').resetForm(true);
    });
});
</script>
<?php include("footer.php"); ?>
