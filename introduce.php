<?php
include("./dbconn.php");
?>
<!DOCTYPE html>
<html lang="ko">
   <head>
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="introduce.css">
       
    </style>
   </head>
   <body>
       <div class="wrap">
           <div class="intro_bg">
               <div class="header">
                   <div class="mainlogo">
                       <a href="C:\Users\seung\Desktop\homepage\home.html">
                           <h2><img src="/css/image/info.png" height="60px">주식회사</h2>
                       </a>
                   </div> 
                   
                   <ul class="nav">
                       <!-- <li><a href="https://www.cisco.com/c/ko_kr/solutions/small-business/solutions/small-business-hybrid-work.html?CCID=cc003693&DTID=psexsp001647&OID=dmocsm028979&POSITION=SEM&COUNTRY_SITE=kr&CAMPAIGN=SB-01&CREATIVE=-&REFERRING_SITE=Google&KEYWORD=cisco&gad_source=1&gclid=Cj0KCQjw8J6wBhDXARIsAPo7QA8AfTOILg4DDhoRZ4KpN0Is_dV9EprgVamQyz8tFe8xQf4Bx0tAuGAaAtdyEALw_wcB&gclsrc=aw.ds">home</a></li> -->
                       <li><a href="./introduce.php#">회사소개</a></li>
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
               <div class="container">
                    <!-- <img src="image/logoshielders.png" class="logo"> -->
                    <h1>"Core Values"</h1>
                    <p><img src="/css/image/info.png" height=" 50px">주식회사는 ‘Security's Good’ 브랜드 철학을 바탕으로 고객에게 <br>더 나은 보안서비스를 제공하기 위해<br>
                        ▲최고의(First) ▲차별화된(Unique) ▲세상에 없던(New)<br>F·U·N 경험을 선사하고자 항상 노력합니다.
                    </p>
                    <img src="image/info.png" class="img"> <!-- .img 클래스 추가 -->
                </div>
           </div>
       </div>
   </body>
</html>