<?php
	include('./dbconn.php');
	$userid = $_POST['mb_id'];
    $sql = "SELECT * from member where mb_id='$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
if($row){
	$_SESSION['ss_mb_id'] = $userid;
	echo "<script>alert('회원님의 비밀번호를 변경합니다.'); location.href='mem_change.php';</script>";

}else{
	echo "<script>alert('없는 계정입니다.'); history.back();</script>";
}
?>
