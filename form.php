<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CarFaqs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/formValidation.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* YOUR CSS HERE
        http://www.w3schools.com/Css/css_pseudo_classes.asp */
    </style>
  </head>

  <body>



    <ul class="nav nav-pills">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="form.php">Form</a></li>
      <li class="Top cars"><a href="Analytics.php">Analytics</a></li>
      <li class="Categories">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
          Categories <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>



    <?php include 'save.php';?>
     
    <form id="registrationForm" class="form-horizontal" method ="POST" action="">
        <div class="form-group">
            <label class="col-xs-3 control-label">Full name</label>
            <div class="col-xs-4">
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" />
            </div>
            <div class="col-xs-4">
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Email Address</label>
            <div class="col-xs-5">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email Address"/>
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Password</label>
            <div class="col-xs-5">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-xs-3 control-label">Gender</label>
            <div class="col-xs-5">
                <div class="gender">
                    <label>
                        <input type="radio" name="gender" id ="gender" value="male" /> Male
                    </label>
                </div>
                <div class="gender">
                    <label>
                        <input type="radio" name="gender" id="gender" value="female" /> Female
                    </label>
                </div>
                <div class="gender">
                    <label>
                        <input type="radio" name="gender" id="gender" value="other" /> Other
                    </label>
                </div>
            </div>
        </div>
      
          <div class="form-group">
            <label class="col-xs-3 control-label">New Cars</label>
                <div><textarea id="textarea" name="textarea" rows="2" cols="45" onfocus="if(this.value == 'What cars would you like to see on this website?') this.value='';" onblur="if(this.value == '') this.value='What cars would you like to see on this website?';">What cars would you like to see on this website?</textarea>
                </div>
            </div>
        
        <div class="form-group">
            <label class="col-xs-3 control-label">How many cars do you own?</label>
                <div>               
                                    <select name="cars" id="cars">
                                        <option value="0">1</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4+">4+</option>
                                    </select>
                </div>
            </div>
        
        <div class="form-group">
            <div class="col-xs-9 col-xs-offset-3">
                <button type="submit" class="btn btn-primary" name="signup" value="submit">Submit</button>
            </div>
        </div>
        
    </form>

    <div id="test" height="500"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/formValidation.min.js"></script>
    <script src="js/framework/bootstrap.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#registrationForm').formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                firstName: {
                    row: '.col-xs-4',
                    validators: {
                        notEmpty: {
                            message: 'The first name is required'
                        }
                    }
                },
                lastName: {
                    row: '.col-xs-4',
                    validators: {
                        notEmpty: {
                            message: 'The last name is required'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required'
                        },
                        different: {
                            field: 'username',
                            message: 'The password cannot be the same as username'
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
            }
        });
    });





    </script>



  </body>
</html>
