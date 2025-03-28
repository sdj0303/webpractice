<?php
    session_start();
    include('./dbconn.php');

    $uId = $_SESSION['ss_mb_id'];
    $bTitle = $_POST['boardTitle'];
    $bDetail = $_POST['boardDetail'];
    $bDate = date('Y-m-d H:i:s');

    $upError = $_FILES['uploadFile']['error'];
    $fileName = $_FILES['uploadFile']['name'];
    $fileTmp = $_FILES['uploadFile']['tmp_name'];
    $upAddr = "./Upload/".$fileName;
    $bFile = $upAddr;
    
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

    $sql = "INSERT INTO userboardtb
            (userId, boardTitle, boardDetail, boardDate, boardFile)
            VALUES('$uId', '$bTitle', '$bDetail', '$bDate', '$bFile');
            ";
    $rst = mysqli_query($conn, $sql);
    
    if($rst){
        echo"
            <script>
                alert(\"게시글이 올라갔습니다!!!\");
                location.href = \"./su_list.php\";
            </script>
        ";
    }else{
        echo " 
            <script>
                alert(\"게시글이 올라가지 못했습니다!!!\");
                history.back();
            </script>
        ";
       exit;
    }
?>