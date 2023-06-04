<?php
class our_store{

function con(){
	$con = mysqli_connect('localhost','root','','mybase');
	return $con;

}//Con end

function user_account(){

if(isset($_POST['btn-user'])){
	$a = $_POST['fname'];
	$b = $_POST['father'];
	$c = $_POST['email'];
	$d = $_POST['psw'];
	$e = $_POST['no'];
	$f = $_POST['role'];
	$img = $_FILES['img']['name'];
	$query = mysqli_query($this->con(),"INSERT INTO `user_account`( `u_full_name`, `u_father_name`, `u_email`, `u_psw`, `u_no`,  `u_role`, `u_img`) VALUES ('$a','$b','$c','$d','$e',$f,'$img')");

		move_uploaded_file($_FILES['img']['tmp_name'],"assets/images/user/".$img );



}

}#user account end

function user_login(){
if(isset($_POST['btn_login'])){
$email = $_POST['username'];
$psw = $_POST['psw'];

$qu = mysqli_query($this->con(),"SELECT * FROM user_account WHERE  u_email = '$email' and u_psw = '$psw' ");
$count = mysqli_num_rows($qu);
if($count == 0){
echo("<script>alert('Something is Wrong')</script>");

}
else{
header("location:index.php");

}


}


}




}//Class end

$ob =  new our_store;



 ?>
