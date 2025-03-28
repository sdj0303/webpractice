<?php
include('./dbconn.php');
if($_POST["mb_name"] == "" || $_POST["mb_email"] == ""){
		echo '<script> alert("항목을 입력하세요"); history.back(); </script>';
	}
	else{

	$username = $_POST['mb_name'];
	$email = $_POST['mb_email'];


$sql = "SELECT mb_id from member where mb_name = '$username' and mb_email = '$email'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if($row){
	echo "<script>alert('회원님의 ID는 ".$row['mb_id']."입니다.'); history.back();</script>";
}else{
echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
}
?>