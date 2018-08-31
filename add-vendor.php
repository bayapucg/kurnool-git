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
                            <h2>Roll Printing </h2>
                       
                        </div>
                        <div class="body"> <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#home" data-toggle="tab" aria-expanded="true">Stereo</a></li>
                                <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">Plate</a></li>
                           
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="home">
                                    <form id="defaultForm" method="post"  action="target.php">
									<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2">Description</th>
                                            <th class="text-center" rowspan="2"> Cover type</th>
                                            <th class="text-center" colspan="3">Model Numbers</th>
                                            <th class="text-center" colspan="2">Own Design (Present) </th>
                                         
                                        </tr>  
										<tr>
                                            
                                            <th>Double colour</th>
                                            <th>Three / Four colour</th>
                                            <th>Digital </th>
                                            <th>Only letters & clip arts(2) </th>
                                            <th>Digital </th>
                                         
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      <tr>
										<th>Company stereo</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												<option>U-CUT</option>
											</select>
										</td>
										<td>No Charges</td>
										<td>NA</td>
										<td>Minimum Amount</td>
										<td>NA</td>
										<td>NA</td>
                                      </tr>  
									  <tr>
										<th>Customer stereo </th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												<option>U-CUT</option>
											</select>
										</td>
										<td>Full amount</td>
										<td>NA</td>
										<td>Full amount</td>
										<td>Full amount</td>
										<td>Full amount</td>
									
                                      </tr>  
									  <tr>
										<th>Printing colours</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												<option>U-CUT</option>
											</select>
										</td>
										<td colspan="5">
											<select class="form-control">
												<option>Cyan</option>
												<option>Magenta</option>
												<option>Yellow</option>
												<option>Black</option>
												<option>Red</option>
												<option>Green</option>
												<option>Blue</option>
												<option>Orange</option>
												<option>Brown Gold</option>
												<option>Navy Blue </option>
												<option>Violet </option>
												<option>Pink </option>
											</select>
										</td>
                                      </tr> 
									   <tr>
										<th>Printing colours</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												<option>U-CUT</option>
											</select>
										</td>
										<td colspan="5" class="text-center">
											Only White
										</td>
                                      </tr> 
									  <tr>
										<th>Customer stereo </th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												<option>U-CUT</option>
											</select>
										</td>
										<td>30kgs (35kgs)</td>
										<td>NA</td>
										<td>30kgs (35kgs)</td>
										<td>30kgs (35kgs)</td>
										<td>30kgs (35kgs)</td>
                                      </tr> 
									  <tr>
										<th>Rate </th>
										<td>LD</td>
										<td>30kgs (35kgs)</td>
										<td>NA</td>
										<td>30kgs (35kgs)</td>
										<td>30kgs (35kgs)</td>
										<td>30kgs (35kgs)</td>
                                      </tr> 
									  <tr>
										<th>Microns </th>
										<td>HM</td>
										<td>60</td>
										<td>NA</td>
										<td>60</td>
										<td>60</td>
										<td>60</td>
                                    </tr>
									<tr>
										<th>Vertical sizes</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5">
											<select class="form-control">
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
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5">
											<select class="form-control">
												<option>18x14</option>
												<option>18x16</option>
												<option>20x14</option>
												<option>20x16</option>
												<option>20x18</option>
											</select>
										</td>
                                    </tr>
										<tr>
										<th>Side box / Gazette</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5" class="text-center">
											4 Inches
										</td>
                                    </tr>
									<tr>
										<th>Handle Bag sizes</th>
										<td>LD</td>
										<td colspan="5">
											<select class="form-control">
												<option>12x18</option>
												<option>14x18</option>
												<option>14x20</option>
												<option>16x18</option>
												<option>16x20</option>
												<option>16x20 Box</option>
												<option>Only White Bag</option>
											</select>
										</td>
                                    </tr>	
									<tr>
										<th>Handle Colors</th>
										<td>LD</td>
										<td colspan="5">
											<select class="form-control">
												<option>Red</option>
												<option>Blue</option>
												<option>Black</option>
												
											</select>
										</td>
                                    </tr>
										
                                        
                                    </tbody>
                                </table>
                            </div>
						
						</form>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <form id="defaultForm" method="post"  action="target.php">
									<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
                                            <th class="text-center" rowspan="2">Description</th>
                                            <th class="text-center" rowspan="2"> Cover type</th>
                                            <th class="text-center" colspan="3">Model Numbers</th>
                                            <th class="text-center" colspan="2">Own Design (Present) </th>
                                         
                                        </tr>  
										<tr>
                                            
                                            <th>Double colour</th>
                                            <th>Three / Four colour</th>
                                            <th>Digital </th>
                                            <th>Only letters & clip arts(2) </th>
                                            <th>Digital </th>
                                         
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                      <tr>
										<th>Company stereo</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
											
											</select>
										</td>
										<td>NA</td>
										<td>NA</td>
										<td>Minimum Amount</td>
										<td>NA</td>
										<td>NA</td>
                                      </tr>  
									  <tr>
										<th>Plate</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td>NA</td>
										<td>NA</td>
										<td>100</td>
										<td>NA</td>
										<td>NA</td>
									
                                      </tr>  
									  <tr>
										<th>Printing colours</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5">
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
										<th>Printing colours</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5" class="text-center">
											Only White
										</td>
                                      </tr> 
									  <tr>
										<th>Quantity </th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td>20KGs</td>
										<td>NA</td>
										<td>NA</td>
										<td>NA</td>
										<td>NA</td>
										
                                      </tr> 
									  <tr>
										<th>Rate </th>
										<td>LD</td>
										<td>250</td>
										<td>NA</td>
										<td>NA</td>
										<td>NA</td>
										<td>NA</td>
										
                                      </tr> 
									  <tr>
										<th>Microns </th>
										<td>HM</td>
										<td>60</td>
										<td>NA</td>
										<td>NA</td>
										<td>NA</td>
										<td>NA</td>
										
                                    </tr>
									<tr>
										<th>Vertical sizes</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5">
											<select class="form-control">
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
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5">
											<select class="form-control">
												<option>18x14</option>
												<option>18x16</option>
												<option>20x14</option>
												<option>20x16</option>
												<option>20x18</option>
											</select>
										</td>
                                    </tr>
										<tr>
										<th>Side box / Gazette</th>
										<td>
											<select class="form-control">
												<option>LD</option>
												<option>HM</option>
												
											</select>
										</td>
										<td colspan="5" class="text-center">
											4 Inches
										</td>
                                    </tr>
									<tr>
										<th>Handle Bag sizes</th>
										<td>LD</td>
										<td colspan="5">
											<select class="form-control">
												<option>12x18</option>
												<option>14x18</option>
												<option>14x20</option>
												<option>16x18</option>
												<option>16x20</option>
												<option>16x20 Box</option>
												<option>Only White Bag</option>
											</select>
										</td>
                                    </tr>	
									<tr>
										<th>Handle Colors</th>
										<td>LD</td>
										<td colspan="5">
											<select class="form-control">
												<option>Red</option>
												<option>Blue</option>
												<option>Black</option>
												
											</select>
										</td>
                                    </tr>
										
                                        
                                    </tbody>
                                </table>
                            </div>
						
							

							<div class="form-group">
								<div class="col-lg-9 col-lg-offset-3">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Add Vendor</button>
									
								</div>
							</div>
						</form>
                                    </p>
                                </div>
                              
                                
                            </div>
						
						
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
