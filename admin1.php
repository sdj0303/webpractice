<?php
include("./dbconn.php");

$mb_id = $_SESSION['ss_mb_id'];

if($mb_id != 'admin'){
    echo "
    <script>
            alert(\"관리자 계정이 아닙니다 돌아가세요!!!\");
           location.href = \"../home1.php\";
    </script>
";
}

$sql = "SELECT mb_id, mb_email, mb_name FROM member";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <title>공지사항</title>
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../bod.css">
</head>
<body>
    <div class="intro_bg">
        <div class="header">
            <div class="mainlogo">
                <a href="../home1.php">
                    <h2><img src="../css/image/logoshielders.png" height="40px">쉴더스</h2>
                </a>
            </div> 
            
            <ul class="nav">
                <!-- <li><a href="https://www.cisco.com/c/ko_kr/solutions/small-business/solutions/small-business-hybrid-work.html?CCID=cc003693&DTID=psexsp001647&OID=dmocsm028979&POSITION=SEM&COUNTRY_SITE=kr&CAMPAIGN=SB-01&CREATIVE=-&REFERRING_SITE=Google&KEYWORD=cisco&gad_source=1&gclid=Cj0KCQjw8J6wBhDXARIsAPo7QA8AfTOILg4DDhoRZ4KpN0Is_dV9EprgVamQyz8tFe8xQf4Bx0tAuGAaAtdyEALw_wcB&gclsrc=aw.ds">home</a></li> -->
                <li><a href="#">회사소개</a></li>
                <li><a href="../product.php">제품 및 서비스</a></li>
                <li><a href="../su_list.php">고객지원</a></li>
                <li><a href="../information.php">동향정보</a></li>
            </ul>
            <?php if(!isset($_SESSION['ss_mb_id'])) { ?>
                   <div>
                       <div class="login">
                           <li><a href="../login.html">로그인</a></li>
                       </div>
                   </div>
                   <div>
                       <div class="mem_info">
                           <li><a href="../mem_info.php">회원정보</a></li>
                       </div>
                   </div>
                   <?php } else { ?> 
                    <div>
                       <div class="login">
                           <li><a href="../logout.php">로그아웃</a></li>
                       </div>
                   </div>
                   <div>
                       <div class="mem_info">
                           <li><a href="../mem_info.php">회원정보</a></li>
                       </div>
                   </div>
                   <?php } ?>

        </div>
        <div class="board_wrap">
            <div class="board_title">
                <strong>관리자 홈</strong>
                <p>모든 회원 정보 확인(아이디, 이름, 이메일)</p>
            </div>

                <div id="board_main">
                        <table id="board">
                        <thead>
                            <tr>
                                <th width=200>아이디</th>
                                <th width=200>이름</th>
                                <th width=200>이메일</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_assoc($result)) { ?>
                            <tbody>
                            <tr align="center">
                                <td><?php echo $row['mb_id']; ?></td>
                                <td><?php echo $row['mb_name']; ?></td>
                                <td><?php echo $row['mb_email']; ?></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                </div>
        </div>
                
    </div>
</body>
</html>

