<?php
session_start();
include('./dbconn.php');

$boardIdx = $_GET['idx'];
$delSql = "DELETE FROM userboardtb where boardIdx = '$boardIdx';";
$delete = mysqli_query($conn, $delSql);

if($delete){
    // echo"
    //     <script>
    //         alert(\"Delete!!\");
    //     </script>
    // ";
    // header("Location:./su_list.php");
    echo "<script>alert('삭제되었습니다.');</script>";
    echo "<script>location.replace('./su_list.php');</script>";
}else{
    echo" 
	<script>
            alert(\"Delete Fail!!!\");
            history.back();
        </script>
	";
   exit;
}
?>