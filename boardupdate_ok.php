<?php
session_start();
include('./dbconn.php');

$boardIdx = $_POST['boardIdx'];
$boardTitle = $_POST['boardTitle'];
$boardDetail = $_POST['boardDetail'];

$upError = $_FILES['uploadFile']['error'];
$fileName = $_FILES['uploadFile']['name'];
$fileTmp = $_FILES['uploadFile']['tmp_name'];
$upAddr = "./Upload/".$fileName;

if($upError != UPLOAD_ERR_OK && $upError != 4){
	switch($upError){
		case UPLOAD_ERR_INI_SIZE || UPLOAD_ERR_FORM_SIZE:
			echo"
				<script>
					alert(\"파일 사이즈가 초과되었습니다!!!\");
					history.back();
				</script>
			";
			 break;
		case UPLOAD_ERR_PARTIAL:
			echo"
				<script>
 					alert(\"파일이 제대로 업로드 되지 않았습니다!!!\");
					history.back();
				</script>
			";
			break;
	}
	exit;
}
move_uploaded_file($fileTmp, $upAddr);

$sql = "UPDATE userboardtb set boardTitle = '$boardTitle', boardDetail = '$boardDetail', boardFile = '$fileName' where boardIdx='$boardIdx';";
$rst = mysqli_query($conn, $sql);

if($rst){
    echo"
        <script>
            alert(\"게시글이 수정됐습니다!!!\");
        </script>
    ";
    header("Location:./su_view.php?idx=$boardIdx");
}else{
    echo" 
	<script>
            alert(\"게시글 수정 실패!!!\");
            history.back();
        </script>
	";
   exit;
}
?>