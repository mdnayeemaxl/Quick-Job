<?php require_once("include/db.php"); ?>
<?php require_once("include/function.php");?>
<?php require_once("include/sessions.php");?>
<?php
$eemail="";
$epass="";
if(isset($_POST["Submit"]))
    {
        $email=$_POST["email"];
        $password=$_POST["pass"];
        $act=$_POST["accounttype"];
        if(empty($email))
            {
                $eemail='<div class="alert alert-danger">Email is Required</div></br>';
            }
        if(empty($password))
        {
            $epass='<div class="alert alert-danger">Password is Required</div></br>';
        }
        if(!empty($email)&&!empty($password))
        {   
            if($act=="Employer")
            {

                    $sql="SELECT * FROM employer WHERE email='$email' AND password='$password'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {

                        while($row = mysqli_fetch_assoc($result)) { 
                         $ID=$row["id"];
                         $NAME=$row["name"];

                        }
                        $_SESSION["userid"]=$ID;
                        $_SESSION["username"]=$NAME;
                        $_SESSION["accounttype"]=$act;
                        
                        header("Location:public_view.php");
                    } else {
                        header("Location:signin.php");
                    }

                    mysqli_close($conn);
            }
            else{
                $sql="SELECT * FROM jobseeker WHERE email='$email' AND password='$password'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) { 
                        $ID=$row["id"];
                        $NAME=$row["name"];

                       }
                       $_SESSION["userid"]=$ID;
                       $_SESSION["username"]=$NAME;
                       $_SESSION["accounttype"]=$act;
                       header("Location:public_view.php");
                } else {
                    header("Location:signin.php");
                }

                mysqli_close($conn);
                }
            }


    }
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
	<title>Job Categories </title>

</head>
<body>

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Job Portal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-auto">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contract Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item p-3 mb-2 bg-dark text-white" href="#">Employer</a>
                                <a class="dropdown-item p-3 mb-2 bg-dark text-white" href="#">Job-Seaker</a>
                                <div class="dropdown-divider"></div>

                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <form class="form-inline" action="#">
                            <div class="form-group">
                            <input class="form-control" type="text" name="Search" placehoder="Search Here">
                            <button  class="btn btn-primary" name="Searchbutton">Go</button>

                            </div>
                        </form>
                    </ul>

                </div>
            </div>    
        </div>

    </nav>
	
 	
	<section class ="container py-2 mb-4">
		<div class="row" >
			<div class="offset-lg-1 col-lg-10" >
                <?php
                    echo error();
                    echo success();
                ?>
				<form class="" action="signin.php" method="post">                                              <?php//////////////////////////////////////?>
					<div class="card bg-secondary text-light">
						<div class="card-header">
							<h1> Sign In</h1>
						</div>
                        
						<div class="card-body bg-dark">

                            <div class="form-group">
								<label for="email"> <span style="color:rgb(0, 153, 153) ">Email</span></label>
								<input class ="form-control" type="text" name="email" id="email" placeholder="Email Address" value=""> <?php echo $eemail; ?>
                            </div>
                            
                            <div class="form-group">
								<label for="password"> <span style="color:rgb(0, 153, 153) ">Password</span></label>
								<input class ="form-control" type="password" name="pass" id="password" placeholder="Password" value=""> <?php echo $epass; ?>
                            </div>
                            
                            <div class="form-group">
								<label for="AccountType"> <span class="FieldInfo"style="color:rgb(0, 153, 153)">Account Type</span></label>
								<select class="form-control" id="AccountType" name="accounttype"><?php echo $etype; ?>
                                        <option>Employer</option> 
                                        <option>Job Seeker</option> 
                                </select>
                            </div>
                            


							<div class="row">
								<div class="col-lg-12">
									<button type="submit" name="Submit" class="btn btn-success btn-block bg-info">
										Login
									</button>
									
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	
	</section>
    
    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
