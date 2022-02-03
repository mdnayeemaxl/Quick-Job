<?php require_once("include/db.php"); ?>
<?php require_once("include/function.php");?>
<?php require_once("include/sessions.php");?>
<?php
if(isset($_POST["Submit"]))
    {
        $category=$_POST["Title"];
           
        if(empty($category)){
            $_SESSION["Error"]="Please Fill up the Input Field";
            reload("Job_category.php");
        }
        else{
            $vlu=$_POST['Title'];
            
            $sql="INSERT INTO category (title) VALUES ('$vlu') ";
            if (mysqli_query($conn, $sql)) {
                $_SESSION["success"]="Category Type :"." ".$vlu." " ."has uccessfully Added";              //focus on this line
                reload("Job_category.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
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
            <a class="navbar-brand" href="#">ADD CATEGORY</a>
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
                            <a class="nav-link" href="#">MY Profile</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#">Employer Info<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Job Seeker Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log out</a>
                        </li>

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
				<form class="" action="Job_category.php" method="post">
					<div class="card bg-secondary text-light">
						<div class="card-header">
							<h1> Add New Job category</h1>
						</div>
						<div class="card-body bg-dark">
							<div class="form-group">
								<label for="title"> <span style="color:rgb(0, 153, 153) ">Category Title</span></label>
								<input class ="form-control" type="text" name="Title" id="title" placeholder="Add New Category Title" value=""> 
							</div>
							<div class="row">
								<div class="col-lg-12">
									<button type="submit" name="Submit" class="btn btn-success btn-block">
										ADD
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