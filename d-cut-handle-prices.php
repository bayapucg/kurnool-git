<?php include("header.php"); ?>
	<section class="content">
        <div class="container-fluid">
       
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
					 <div class="card">
                        <div class="header">
                            <h2>D cut / Handle Prices & Handle Bags</h2>
                       
                        </div>
                        <div class="body"> <!-- Nav tabs -->
                            <form id="defaultForm" method="post"  action="target.php">
							<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<th>Type</th>
											<th>Orientation</th>
											<th>Bag size</th>
											<th>GSM</th>
											<th>Bags / KG</th>
											<th>Cost / Bag / Single Colour</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <tr>
									
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>D cut</option>
												<option>Handle Bags</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>Vertical</option>
												<option>Horizontal</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>9x11</option>
												<option>10x14</option>
												<option>12x14</option>
												<option>12x16</option>
												<option>12x18</option>
												<option>14x16</option>
												<option>14x18</option>
												<option>14x20</option>
												<option>16x20</option>
												<option>18x14</option>
												<option>18x16</option>
												<option>20x14</option>
												<option>20x16</option>
												<option>22x14</option>
												<option>22x16</option>
												
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>55</option>
												<option>70</option>
											</select>
										</td>
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>109</option>
												<option>80</option>
												<option>64</option>
												<option>67</option>
												<option>53</option>
												<option>60</option>
												<option>47</option>
												<option>54</option>
												<option>43</option>
												<option>51</option>
												<option>40</option>
												<option>46</option>
												<option>36</option>
												<option>42</option>
												<option>33</option>
												<option>37</option>
												<option>29</option>
												<option>35</option>
												<option>31</option>
												<option>32</option>
												<option>28</option>
												<option>29</option>
												<option>26</option>
											</select>
										</td>	
										<td>
											<select class="form-control">
												<option>Select</option>
												<option>3</option>
												<option>3.6</option>
												<option>4.2</option>
												<option>4</option>
												<option>4.7</option>
												<option>4.3</option>
												<option>5</option>
												<option>4.6</option>
												<option>5.4</option>
												<option>4.8</option>
												<option>5.6</option>
												<option>5.2</option>
												<option>6</option>
												<option>5.5</option>
												<option>6.5</option>
												<option>6.1</option>
												<option>7.3</option>
												<option>6.3</option>
												<option>6.8</option>
												<option>6.80</option>
												<option>7.4</option>
												<option>7.3</option>
												<option>8</option>
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
			<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					 <div class="card">
                        <div class="header">
                            <h2>Cost per kg</h2>
                       
                        </div>
                        <div class="body"> <!-- Nav tabs -->
                            <form id="defaultForm" method="post"  action="target.php">
							<div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<th>Type</th>
											<th rowspan="2" class="vertical-center">Single colour</th>
											<th >Kg cost</th>
											<th>Cost / Bag</th>
																					
                                        </tr>
										<tr>
											<td>
												<select class="form-control">
													<option>Select</option>
													<option>Woollen</option>
													<option>Plastic Handle</option>
													<option>Stick</option>
													
													
												</select>
											</td>
											
											<td >170</td>
											<th>1.5 </th>
																					
                                        </tr>
                                    </thead>
                                    
                                    
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
