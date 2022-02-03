<?php require_once("include/function.php");?>
<?php require_once("include/sessions.php");?>

<?php
        $_SESSION["userid"]=null;
        $_SESSION["username"]=null;
        $_SESSION["accounttype"]=null;
        session_destroy();
        header("Location:public_view.php");
        
?>