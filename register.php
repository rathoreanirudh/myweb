<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/form.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="register.php">Register</a>
            </div>

            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <form action="complete.php" method="post" class="form-horizontal" role="form">
            		<h2>Registration Form&nbsp;<small>Only for service stations</small></h2>
            		<br>
               		     <div class="form-group">
                    		<label for="firstName" class="col-sm-3 control-label">Full Name of the service station</label>
                        	    <div class="col-sm-9">
                            	    <input type="text" id="firstName" placeholder="example: Honda Service Station" class="form-control" autofocus>
                             	</div>
                    	</div>
                    	<div class="form-group">
                        	 <label for="email" class="col-sm-3 control-label">Email</label>
                        		<div class="col-sm-9">
                           	      <input type="email" id="email" placeholder="corporation@domain.com" class="form-control">
                            	</div>
                    	</div>
                    	<div class="form-group">
                        	 <label for="phno" class="col-sm-3 control-label">Phone number</label>
                        		<div class="col-sm-9">
                           	      <input type="phno" id="phno" placeholder="mobile number or landline(with area code)" class="form-control">
                            	</div>
                    	</div>
                    	<div class="form-group">
                    	    <label class="control-label col-sm-3">Bike companies serviced</label>
                    	   <big>     <div class="col-sm-9">
                    	            <div class="checkbox">
                    	                <label><input type="checkbox" id="hondacheckbox" value="Honda">Honda</label>
                    	                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	                <label><input type="checkbox" id="herocheckbox" value="Hero">Hero</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	                <label><input type="checkbox" id="yamahacheckbox" value="Yamaha">Yamaha</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	                <label><input type="checkbox" id="suzukicheckbox" value="Suzuki">Suzuki</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <br>
                    	                <label><input type="checkbox" id="bajajcheckbox" value="Bajaj">Bajaj</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	                <label><input type="checkbox" id="kawasakicheckbox" value="Kawasaki">Kawasaki</label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	                <label><input type="checkbox" id="harleycheckbox" value="Harley Davidson">Harley Davidson</label>
                    	                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label><input type="checkbox" id="tvscheckbox" value="TVS">TVS</label>
                    	                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    	            </div>
                    	        </div></big>
                    	</div> <!-- /.form-group -->
                    	<br>
                        <div class="form-group">
                        	 <label for="compaddr" class="col-sm-3 control-label">Complete Address</label>
                        		<div class="col-sm-9">
                           	      <input type="compaddr" id="compaddr" placeholder="Complete Address" class="form-control">
                            	</div>
                    	</div>
                        <div class="form-group">
                        	 <label for="numberofbike" class="col-sm-3 control-label">Number of bikes tht can be serviced in a day</label>
                        		<div class="col-sm-9">
                           	      <input type="numberofbike" id="numberofbike" placeholder="Number Of Bikes for example:20(should not be mentioned as words)" class="form-control">
                            	</div>
                    	</div>
                        <div class="form-group">
                        	 <label for="account" class="col-sm-3 control-label">Account Details</label>
                        		<div class="col-sm-9">
                           	      <input type="account" id="account" placeholder="Account Details" class="form-control">
                            	</div>
                    	</div>
		   		</form>
		   		<a href="" class="btn btn-primary btn-xl page-scroll">Register</a>
            </div>
        </div>
    </header>
</body>
</html>
