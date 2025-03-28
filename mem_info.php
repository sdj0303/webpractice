<?php
    session_start();
    include("./dbconn.php");
    if(!isset($_SESSION['ss_mb_id'])){
        echo "
            <script>
                alert(\"로그인 해주세요!!!\");
               	location.href = \"./home1.php\";
            </script>
	";
    }
    else{
        $mb_id = $_SESSION['ss_mb_id'];
    
        $sql = " SELECT * FROM member where mb_id = TRIM('$mb_id') ";
        $result = mysqli_query($conn, $sql);
        $mb = mysqli_fetch_assoc($result);
    
        mysqli_close($conn);
        
    }
?>
<html lang="kr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./ex.css">
    </head>
<body>

<div class="wrap">
            <div class="intro_bg">
                <div class="header">
                    <div class="mainlogo">
                        <a href="./home1.php">
                            <h2><img src="css/image/logoshielders.png" height="40px">쉴더스</h2>
                        </a>
                    </div>
                </div>
                <div class="middle">
                    <div class="mem_info">
                        <div class="pg_name">
                            <h2>회원정보</h2>
                        </div>
                        <hr/>
                            <div class="id">
                                <label>아이디</label>
                                <label><?php echo $mb['mb_id'] ?></label>
                            </div>
                            <hr/>
                            <div class="name">
                                <label>이름</label>
                                <label><?php echo $mb['mb_name'] ?></label>
                            </div>
                            <hr/>
                            <div class="email">
                                <label>이메일</label>
                                <label><?php echo $mb['mb_email'] ?></laebl>
                            </div>
                            <hr/>
                            <div class="gender">
                                <label>성별</label>
                                <label><?php echo $mb['mb_gender'] ?></label>
                            </div>
                            <hr/>
                            <div class="job">
                                <label>직업</label>
                                <label><?php echo $mb['mb_job'] ?></label>
                            </div>
                            <hr/>
                            <div class="name">
                                <label>관심언어</label>
                                <label><?php echo $mb['mb_language'] ?></label>
                            </div>
                            <hr/>
                            <div class="name">
                                <label>회원정보수정일</label>
                                <label><?php echo $mb['mb_modify_datetime'] ?></label>
                            </div>
                            <hr/>
                        <div class = "button">
                            <input Type ="button" value="정보수정" onClick="location.href='./mem_change.php'">
                            <input Type ="button" value="돌아가기" onClick="location.href='./home1.php'">
                            <!-- <a href ="./mem_change.php">회원정보수정</a>
                            <a href ="./home1.php">돌아가기</a> -->
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </body>
</html>
<!-- <h1><?php echo $title ?></h1>

<form action="./register_update.php" onsubmit="return fregisterform_submit(this);" method="post">
    <input type="hidden" name="mode" value="<?php echo $mode ?>">

<table>
    <tr>
        <th>아이디</th> 
        <td><input type="text" name="mb_id" value="<?php echo $mb['mb_id'] ?>" <?php echo $modify_mb_info ?>></td>
    </tr>
    <tr>
        <th>비밀번호</th>
        <td><input type="password" name="mb_password"></td>
    </tr>
    <tr>
        <th>비밀번호 확인</th>
        <td><input type="password" name="mb_password_re"></td>
    </tr>
    <tr>
        <th>이름</th>
        <td><input type="text" name="mb_name" value="<?php echo $mb['mb_name'] ?>" <?php echo $modify_mb_info ?>></td>
    </tr>
    <tr>
        <th>이메일</th>
        <td><input type="text" name="mb_email" value="<?php echo $mb['mb_email'] ?>"></td>
    </tr>
    <tr>
        <th>성별</th>
        <td>
            <label><input type="radio" name="mb_gender" value="남자" <?php echo ($mb['mb_gender'] = "남자") ? "checked" : "";?> >남자</label>
            <label><input type="radio" name="mb_gender" value="여자" <?php echo ($mb['mb_gender'] = "여자") ? "checked" : "";?> >여자</label>
        </td>
    </tr>
    <tr>
        <th>직업</th>
        <td>
            <select name="mb_job">
                <option value="">선택하세요</option>
                <option value="학생" <?php echo ($mb['mb_job'] == "학생") ? "selected" : "";?> >학생</option>
                <option value="회사원" <?php echo ($mb['mb_job'] == "회사원")? "selected" : "";?> >회사원</option>
                <option value="공무원" <?php echo ($mb['mb_job'] == "공무원") ?"selected" : "";?> >공무원</option> 
                <option value="주부" <?php echo ($mb['mb_job'] == "주부") ? "selected" : "";?> >주부</option> 
                <option value="무직" <?php echo ($mb['mb_job'] == "무직") ? "selected" : "";?> >무직</option>
            </select>
        </td>
    </tr>
    <tr>
        <th>관심언어</th>
        <td>
            <label><input type="checkbox" name="mb_language[]" value="HTML" <?php echo strpos($mb['mb_language'], 'HTML') !== false ? 'checked' : '' ?>>HTML</label> 
            <label><input type="checkbox" name="mb_language[]" value="CSS" <?php echo strpos($mb['mb_language'], 'CSS') !== false ? 'checked' : '' ?>>CSS</label>
            <label><input type="checkbox" name="mb_language[]" value="PHP" <?php echo strpos($mb['mb_language'], 'PHP') !== false ? 'checked' : '' ?>>PHP</label>
            <label><input type="checkbox" name="mb_language[]" value="MySQL" <?php echo strpos($mb['mb_language'], 'MySQL') !== false ? 'checked' : '' ?>>MySQL</label> 
        </td>
    </tr>
    <tr>
        <td colspan="2" class="td_center"><input type="submit" value="<?php echo $title?>"><a href="./login.php">취소</a></td>
    </tr>
</table> -->
