<?php
include("./dbconn.php");
?>
<!DOCTYPE html>
<html lang="ko">
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="find.css">
   </head>
   <body>
       <div class="wrap">
           <div class="intro_bg">
               <div class="header">
                   <div class="mainlogo">
                       <a href="./home1.php">
                           <h2><img src="css/image/logo.png" height="60px">주식회사</h2>
                       </a>
                   </div> 
                   
                   <ul class="nav">
                       <!-- <li><a href="https://www.cisco.com/c/ko_kr/solutions/small-business/solutions/small-business-hybrid-work.html?CCID=cc003693&DTID=psexsp001647&OID=dmocsm028979&POSITION=SEM&COUNTRY_SITE=kr&CAMPAIGN=SB-01&CREATIVE=-&REFERRING_SITE=Google&KEYWORD=cisco&gad_source=1&gclid=Cj0KCQjw8J6wBhDXARIsAPo7QA8AfTOILg4DDhoRZ4KpN0Is_dV9EprgVamQyz8tFe8xQf4Bx0tAuGAaAtdyEALw_wcB&gclsrc=aw.ds">home</a></li> -->
                       <li><a href="./introduce.php">회사소개</a></li>
                       <li><a href="./product.php">제품 및 서비스</a></li>
                       <li><a href="./su_list.php">고객지원</a></li>
                       <li><a href="./information.php">동향정보</a></li>
                   </ul>
                   <?php if(!isset($_SESSION['ss_mb_id'])) { ?>
                   <div>
                       <div class="login">
                           <li><a href="./login.html">로그인</a></li>
                       </div>
                   </div>
                   <div>
                       <div class="mem_info">
                           <li><a href="./mem_info.php">회원정보</a></li>
                       </div>
                   </div>
                   <?php } else { ?> 
                    <div>
                       <div class="login">
                           <li><a href="./logout.php">로그아웃</a></li>
                       </div>
                   </div>
                   <div>
                       <div class="mem_info">
                           <li><a href="mem_info.php">회원정보</a></li>
                       </div>
                   </div>
                   <?php } ?>
               </div>
               <div class="middle">
                    
                        <div class="find_wrapper">
                            <h2>회원정보 찾기</h2>
                            <div class="id_bor">
                                <div class="find_id">
                                    <h4>아이디 찾기</h4><br>
                                    <form method="post" action="./findlook.php" id="id_form">
                                        <h4>이름</h4><input type="text" name="mb_name" placeholder="이름">
                                        <h4>이메일</h4><input type="email" name="mb_email" placeholder="Email">
                                        <input type="submit" value="아이디 찾기">
                                    </form>
                                </div>
                            </div>
                        </br>
                            <div class="pw_bor">
                                <div class="find_pw">
                                    <h4>비밀번호 찾기</h4><br>
                                    <form method="post" action="./find_pw.php" id="pw_form">
                                        <h4>아이디</h4><input type="text" name="mb_id" placeholder="아이디">
                                        <input type="submit" value="비밀번호 찾기">
                                    </form>
                                </div>
                            </div>
                        </div>
                    
               </div>
           </div>
       </div>
   </body>
</html>