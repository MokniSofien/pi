 <?php
 session_start();
 
 
 if (@$_SESSION['connecte']=="ok!!")
{
	echo $_SESSION['connecte'] ;
	//header ('location: google.com');
	die("<script>
        if(typeof(parent) != 'undefined'){
            parent.window.location.href='../profile/index.php';
        }else{
            parent.window.location.href='../profile/index.php';
        }
    </script>");
	

}
else { }


?>