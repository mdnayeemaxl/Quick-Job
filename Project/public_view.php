<?php require_once("include/db.php"); ?>      
<?php require_once("include/function.php");?>
<?php require_once("include/sessions.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">

</head>

<body>

    <!-- navbar -->
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
                        <?php
                        $log='<li class="nav-item">'.' <a class="nav-link"'.'href="signin.php">Log IN</a></li>';
                        $log1='<li class="nav-item">'.' <a class="nav-link"'.'href="signout.php">Log Out</a></li>';
                        if(isset($_SESSION['userid']))
                        {echo $log1;}
                            else 
                            {
                                echo $log;
                            }   
                        ?>

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

    
    <div class="container">
        <div class="row mt-4">

                         <?php 
                        if(isset($_GET["Searchbutton"])){
                            $s=$_GET["Search"];
                            $search="%".$s."%";
                            $sql="SELECT * FROM jobpost WHERE category LIKE '$search' OR title LIKE '$search' OR jobdescription LIKE '$search' OR tme LIKE '$search' ";
                            

                                 }
                                 else{
                            $sql="SELECT * FROM jobpost ORDER BY id desc";}

                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                                
                                while($row = mysqli_fetch_assoc($result)) { 
                                    $i=$row["id"];
                                    $t=$row["title"];
                                    $img=$row["image"];
                                    $jd=$row["jobdescription"];
                                    $tm=$row["tme"];
                                    
                                    ?>
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <img class="card-img-top" src="upload/<?php echo $img;?>" alt="Card Image">
                                                <div class="card-body">
                                                    <h4 class="card-title"><?php echo $t; ?></h4>
                                                    <small class="text-muted"><?php echo "Posted on: ".$tm;?></small>
                                                    <hr>
                                                    <p class="card-text"><?php
                                                        if(strlen($jd)>100)
                                                        {
                                                        $jd= substr($jd,0,100).'...';
                                                        }
                                                    
                                                    echo $jd; 
                                                    ?></p>
                                                    <a class="card-link " href="fullpost.php?id=<?php echo $i;?>" >
                                                        <span class="btn btn-info">Read More >> </span>
                                                    </a>
                                                    <a href="apply.php?id=<?php echo $i;?>" style="float:right;">
                                                        <span class="btn btn-success">Apply</span>
                                                    </a>
                                                </div>
                        
                                            </div>
                                        </div>


                                
                                    
                                    

                               <?php }
                            } else {
                                echo "0 results";
                            }

                            mysqli_close($conn);
                        ?>


            </div>
        </div>
    </div>





    <script src="jquery-3.5.1.slim.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>