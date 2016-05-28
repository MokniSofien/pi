<?phpsession_start();
require('login.php');

if(null==($_SESSION[connecte]=="ok!!")
{
	header('location:../connexion/test');

}
else {
	header('location:../connexion/');
	
}
$session=$_SESSION['logged']==true;

$login=isset($_session['email'])? $_session['email']:'';
 ?>