<?php
	if(isset($_POST['person_id'])&&isset($_POST['name'])&&isset($_POST['password'])&&isset($_POST['title'])
		&&isset($_POST['institution'])&&isset($_POST['email'])&&isset($_POST['telephone_number'])) {
        $password = test($_POST['password']);
    	$name = test($_POST['name']);
        $title = test($_POST['title']);
        $institution = test($_POST['institution']);
        $email = test($_POST['email']);
        $person_id = test($_POST['person_id']);
        $telephone_number= test($_POST['telephone_number']);
        # 连接数据库   
        $con =new mysqli("localhost","root","","pc");
        if ($con->connect_error){
            echo "1";
         }
 		else {
 			$con->query('set names utf8');
            $sql = "INSERT INTO person(person_id,password,email,title,name,institution,telephone_number)
                    VALUES('$person_id','$password','$email','$title','$name','$institution','$telephone_number')";           
            if ($con->query($sql) === TRUE) {
            	echo "0";
            }
            else
            	echo "2";
 		}
     }
	function test($data){
       $data = trim($data);
       $data = addslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
?>