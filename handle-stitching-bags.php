<?php include("header.php"); ?>
	<section class="content">
        <div class="container-fluid">
       
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
					 <div class="card">
                        <div class="header">
                            <h2>Handle (single / double / digital) colour stitching</h2>
                       
                        </div>
                        <div class="body"> <!-- Nav tabs -->
                            <form id="defaultForm" method="post"  action="target.php">
							<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<th>Colour</th>
											<th>MOQ</th>
											<th>Bag size</th>
											<th>Finishing sizes</th>
											<th>Bag GSM – 110 big</th>
											<th>Bag GSM – 110 small</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <tr>
									
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>Single Color</option>
												<option>Double Color</option>
												<option>Handle Own Digital Color</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>200</option>
												<option>500</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>8x10</option>
												<option>10x14</option>
												<option>12x16</option>
												<option>14x16</option>
												<option>14x18</option>
												<option>14x20</option>
												<option>16x18</option>
												<option>17x18</option>
												<option>16x12</option>
												<option>18x16</option>
												<option>20x16</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>7x10</option>
												<option>9x14</option>
												<option>11x16</option>
												<option>13x16</option>
												<option>13x18</option>
												<option>13x20</option>
												<option>15x18</option>
												<option>16x18</option>
												<option>15x12</option>
												<option>17x16</option>
												<option>19x16</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>7.5</option>
												<option>9</option>
												<option>10.5</option>
												<option>11.5</option>
												<option>12</option>
												<option>12.5</option>
												<option>13</option>
												<option>13.5</option>
												<option>10.5</option>
												<option>13</option>
												<option>14</option>
												
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>9.5</option>
												<option>11</option>
												<option>12.5</option>
												<option>13.5</option>
												<option>14</option>
												<option>14.5</option>
												<option>15</option>
												<option>15.5</option>
												<option>16</option>
												
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
