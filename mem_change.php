<?php
include("./dbconn.php");

// if(isset($_SESSION['ss_mb_id']) && $_GET['mode'] == 'modify') {
    $mb_id = $_SESSION['ss_mb_id'];

    $sql = " SELECT * FROM member WHERE mb_id = '$mb_id' ";
    $result = mysqli_query($conn, $sql);
    $mb = mysqli_fetch_assoc($result);
    mysqli_close($conn);

    $mode = "modify";
    $title = "회원수정";
    $modify_mb_info = "readonly";
// } 
//else {
//     $mode = "insert";
//     $title = "회원가입";
//     $modify_mb_info = '';
// }
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
                            <h2>회원정보수정</h2>
                        </div>
                        <hr/>
                        <form action="./register_update.php" onsubmit="return fregisterform_submit(this);" method="post">
                            <input type="hidden" name="mode" value="<?php echo $mode ?>">
                                <div class="id">
                                    <label>아이디</label>
                                    <label><?php echo $mb['mb_id'] ?></label>
                                </div>
                                <hr/>
                                <div class="password">
                                    <label>비밀번호</label>
                                    <input name="mb_password" type="password" maxlength="10" placeholder="8글자이상" required />
                                </div>
                                <hr/>
                                <div class="password">
                                    <label>비밀번호 확인</label>
                                    <input name="mb_password_re" type="password" maxlength="10" placeholder="8글자이상" required />
                                </div>
                                <hr/>
                                <div class="name">
                                    <label>이름</label>
                                    <input name="mb_name" type="text" maxlength="10" required />
                                </div>
                                <hr/>
                                <div class="email">
                                    <label>이메일</label>
                                    <input name="mb_email" type="email" placeholder="0000 @ 0000.com" required />
                                </div>
                                <hr/>
                                <div class="gender">
                                    <label>성별</label>
                                    <label><input type="radio" name="mb_gender" value="남자" <?php echo ($mb['mb_gender'] = "남자") ? "checked" : "";?> >&nbsp;&nbsp;남자</label>
                                    <label><input type="radio" name="mb_gender" value="여자" <?php echo ($mb['mb_gender'] = "여자") ? "checked" : "";?> >&nbsp;&nbsp;여자</label>
                                </div>
                                <hr/>
                                <div class="job">
                                    <label>직업</label>
                                    <select name="mb_job">
                                    <option value="">선택하세요</option>
                                        <option value="학생" <?php echo ($mb['mb_job'] == "학생") ? "selected" : "";?> >학생</option>
                                        <option value="회사원" <?php echo ($mb['mb_job'] == "회사원")? "selected" : "";?> >회사원</option>
                                        <option value="공무원" <?php echo ($mb['mb_job'] == "공무원") ?"selected" : "";?> >공무원</option> 
                                        <option value="주부" <?php echo ($mb['mb_job'] == "주부") ? "selected" : "";?> >주부</option> 
                                        <option value="무직" <?php echo ($mb['mb_job'] == "무직") ? "selected" : "";?> >무직</option>
                                    </select>
                                </div>
                                <hr/>
                                <div class="lang">
                                    <label>관심언어</label>
                                    <label><input type="checkbox" name="mb_language[]" value="HTML" <?php echo strpos($mb['mb_language'], 'HTML') !== false ? 'checked' : '' ?>>&nbsp;&nbsp;HTML</label> 
                                    <label><input type="checkbox" name="mb_language[]" value="CSS" <?php echo strpos($mb['mb_language'], 'CSS') !== false ? 'checked' : '' ?>>&nbsp;&nbsp;CSS</label>
                                    <label><input type="checkbox" name="mb_language[]" value="PHP" <?php echo strpos($mb['mb_language'], 'PHP') !== false ? 'checked' : '' ?>>&nbsp;&nbsp;PHP</label>
                                    <label><input type="checkbox" name="mb_language[]" value="MySQL" <?php echo strpos($mb['mb_language'], 'MySQL') !== false ? 'checked' : '' ?>>&nbsp;&nbsp;MySQL</label> 
                                </div>
                                <hr/>
                            <div class="button">
                                <input type="submit" value="변경하기" id="change" />
                                <input type="button" value="취소하기" id="cancel" onclick="location.href='./home1.php'"/>
                            </div>
                        </form>
                    </div>
                </div>               
            </div>
        </div>
</form>
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


<script>
    function fregisterform_submit(f) {

    if (f.mb_id.value.length < 1) {
        alert("아이디를 입력하십시오.");
        f.mb_id.focus();
        return false;
    }

    if (f.mb_name.value.length < 1) {
        alert("이름을 입력하십시오.");
        f.mb_name.focus();
        return false;
    }

    if (f.mb_password.value.length < 3) {
        alert("비밀번호를 3글자 이상 입력하십시오.");
        f.mb_password.focus();
        return false;
    }

    if (f.mb_password.value != f.mb_password_re.value) {
        alert("비밀번호가 같지 않습니다.");
        f.mb_password_re.focus();
        return false;
    }

    if (f.mb_password.value.length > 0) {
            if(f.mb_password_re.value.length < 3){
                alert("비밀번호를 3글자 이상 입력하십시오.");
                f.mb_password_re.focus();
                return false;
            }
    }

    if (f.mb_email.value.length < 1) {
        alert("이메일을 입력하십시오.");
        f.mb_email.focus();
        return false;
    }

    if (f.mb_email.value.length > 0) {
        var regExp = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
            if (f.mb_email.value.match(regExp) == null) {
            alert("이메일주소가 형식에 맞지 않습니다.");
            f.mb_email.focus();
            return false;
    }
}

    return true;

}
</script>

</body>
</html>