<?php include("header.php"); ?>
	<section class="content">
        <div class="container-fluid">
       
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
					 <div class="card">
                        <div class="header">
                            <h2>16*19 stitch bag Old type of stitching</h2>
                       
                        </div>
                        <div class="body"> <!-- Nav tabs -->
                            <form id="defaultForm" method="post"  action="target.php">
							<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<th colspan="7" class="text-center">Bag GSM -110, Sidepatty GSM – 110, Big Holes</th>
											
                                        </tr>  
										<tr>
											<th>Design</th>
											<th>Bag GSM</th>
											<th>Sidepatty GSM</th>
											<th>Sidepatty printing</th>
											<th>4 inches</th>
											<th>6 inches</th>
											<th>8 inches</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <tr>
									
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>Own Design</option>
												<option>Double Color</option>
												<option>Single Color</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
													<option>110 Big</option>
													<option>110 Small</option>
													
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>70</option>
												<option>110 Big</option>
												<option>110 Small</option>
												
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>Yes</option>
												<option>No</option>
												
												
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>19</option>
												<option>19.5</option>
												<option>20</option>
												<option>20.5</option>
												<option>21</option>
												<option>21.5</option>
												<option>22</option>
												
												
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>21.6</option>
												<option>21.5</option>
												<option>22.5</option>
												<option>22</option>
												<option>23.5</option>
												<option>20.6</option>
												<option>20.5</option>
												<option>19.6</option>
												
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>22.5</option>
												<option>24</option>
												<option>23</option>
												<option>24.5</option>
												<option>23</option>
												<option>21.5</option>
												<option>22</option>
												<option>20.5</option>
												
											</select>
										</td>
										
									</tr>	
                                    </tbody>
                                </table>
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
