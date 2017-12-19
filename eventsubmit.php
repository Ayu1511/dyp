<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		ID : <input type="text" name="id">
		Title : <input type="text" name="title">
		Description : <input type="textarea" name="desc">
		Image : <input type="file" name="image">
		<input type="submit" name="submit" value="Submit">
	</form>

</body>
</html>


<?php
include "connect.php";
if(isset($_POST['submit']))
{
 	if(isset($_FILES['image']))
 	{
 		//Get the file attributes
		$errors= array();
	    $file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
		 
		//allowed extension array     
		$extensions= array("image/jpeg","image/jpg","image/png");
		 
		//checking the allowed extensions    
		if(in_array($file_type,$extensions)=== false){
		    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		
		//Checking the allowed file size      
		if($file_size > 2097152){
		    $errors[]='File size must be exactely 2 MB';
		}
		 
		//no errors then upload the file to the destination     
		if(empty($errors)==true){
		    move_uploaded_file($file_tmp,"images/".$file_name);
		}
		else
		{
		    print_r($errors);
			echo "<script type='text/javascript'>alert('Hello Could not insert! Please try again')</script>";
			exit();
		}

		//Get the variables to be inserted in the database
		$id = $_POST['id'];
		$name = $file_name;
		$title = $_POST['title'];
		$info = $_POST['desc'];
		

		$sql = "UPDATE info set img = '$name', title = '$title', info = '$info' where id = '$id'";

		//Check for query
		$result=(mysqli_query($conn,$sql));
		if ($result) 
		{
		 	echo "<script type='text/javascript'>alert('Event Created Successfully')</script>";
		}
		else{
			echo "Go to hell nahi jaari teri application";
		}
				
	}
	else
	{
	    //print_r($errors);
	    echo "<script type='text/javascript'>alert('Could not insert! Please try again')</script>";
	}
}

?>