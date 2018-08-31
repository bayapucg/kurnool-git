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
                   
                    <div class="row">
                    <div class="col-md-5">
					 <div class="card">
                        <div class="header">
                            <h2>D-Cut / Handle</h2>
                        </div>
                        <div class="body"> 
                            <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<td>NA</td>
											<th>Sidepatty finishing size</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                   
									<tr>
										<th>Single colour </th>
										<td>100</td>	
									</tr>	
									
									  
                                    </tbody>
                                </table>
						
                        </div>
						<div class="clearfix"></div>
                    </div>
                    </div>
					<div class="col-md-7">
					 <div class="card">
                        <div class="header">
                            <h2>Stitching</h2>
                        </div>
                        <div class="body"> 
                            <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<td>NA</td>
											<th>With sidepatty printing</th>
											<th>Without sidepatty printing</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                   
									<tr>
										<th>Single colour </th>
										<td>150</td>	
										<td>100</td>	
									</tr>
									<tr>
										<th>Double colour </th>
										<td>300</td>	
										<td>200</td>	
									</tr>	
									
									  
                                    </tbody>
                                </table>
						
                        </div>
						<div class="clearfix"></div>
                    </div>
                    </div>
                    </div>
					<div class="row">
                    <div class="col-md-12">
					 <div class="card">
                        <div class="header">
                            <h2>Digital bags</h2>
                        </div>
                        <div class="body"> 
                            <table class="table table-bordered table-striped table-hover ">
                                    <thead>
                                        <tr>
											<td>NA</td>
											<th>Own design</th>
											<th>Min. 300 bags double colour</th>
											<th>Old models single colour</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                   
									<tr>
										<th>Single colour </th>
										<td>600</td>	
										<td>300</td>	
										<td>100</td>	
									</tr>	
									
									  
                                    </tbody>
                                </table>
						
                        </div>
						<div class="clearfix"></div>
                    </div>
                    </div>
					
                    </div>
					<div class="row">
                    <div class="col-md-12">
					 <div class="card">
                  
                        <div class="body"> 
						<h4>Block charges:</h4>
                          <ul class="help-li">
							<li>Single design means one design, one size & same letters</li>
							<li>If customer wants one time used plate, will be sent to the customer through transport (charges should pay by customer). </li>
							<li>For non woven fabric – block charges can be taken for 1 year.</li>
							<li>Block charges cannot be permanent.</li>
                          </ul>
						
                        </div>
						<div class="clearfix"></div>
                    </div>
                    </div>
					
                    </div>
                </div>
            </div>
           
            
            
    </section>
	<script type="text/javascript">
	$(function () {
    //Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    //Popover
    $('[data-toggle="popover"]').popover();
})
	</script>
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
