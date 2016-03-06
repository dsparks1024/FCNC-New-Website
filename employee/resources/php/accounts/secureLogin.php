<?	
	session_start();	
	
	include_once($_SERVER['DOCUMENT_ROOT'].'/globalConfig.php');
	
	// Public
	$db = new Database(MYSQL_SERVER_ADDRESS,MYSQL_USERNAME,MYSQL_PASSWORD,MYSQL_DB_NAME);
	// Localhost
	//$db = new Database("localhost","root","root","FCNC_v3.0");

/**
 * This script securly logs a user into the system.
 *
 * @author Dominick Sparks
 */

// 1. Obtain input
        
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

// 1.1 Sanitize input

// 2. Validate user credentials
    
    if($username =='' || $password==''){
        echo('no input');
    }else{
        validateUser($username,$password,$db);
    }
// 3. Log user in
    
    function validateUser($username,$password,$db){
       $query = $db->query("SELECT * FROM users WHERE `username`='$username'");
       
       if($query->num_rows != 1){
           echo('invalid');
       }else{
           $array = $query->fetch_assoc();
           if($password == $array['password']){
               $auth = $array['authorization'];
               logUserIn($username,$auth);
               echo("valid");
               //header("Location: /employee/");
           }else{
               echo 'notFound';
           }
       }
        
    }
    
    function logUserIn($username,$auth){
        $_SESSION['username'] = $username;
        $_SESSION['auth'] = $auth;
        $_SESSION['loginTime'] = time();
    }
?>