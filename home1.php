<?php
include("./dbconn.php");
?>
<!DOCTYPE html>
<html lang="ko">
   <head>
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" type="text/css" href="./home.css">
   </head>
   <body>
       <div class="wrap">
           <div class="intro_bg">
               <div class="header">
                   <div class="mainlogo">
                       <a href="./home1.php">
                           <h2><img src="./css/image/logoshielders.png" height="40px">쉴더스</h2>
                       </a>
                   </div> 
                   <ul class="nav">
                       <!-- <li><a href="https://www.cisco.com/c/ko_kr/solutions/small-business/solutions/small-business-hybrid-work.html?CCID=cc003693&DTID=psexsp001647&OID=dmocsm028979&POSITION=SEM&COUNTRY_SITE=kr&CAMPAIGN=SB-01&CREATIVE=-&REFERRING_SITE=Google&KEYWORD=cisco&gad_source=1&gclid=Cj0KCQjw8J6wBhDXARIsAPo7QA8AfTOILg4DDhoRZ4KpN0Is_dV9EprgVamQyz8tFe8xQf4Bx0tAuGAaAtdyEALw_wcB&gclsrc=aw.ds">home</a></li> -->
                       <li><a href="#">회사소개</a></li>
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
                   <!-- <div>
                       <div class="searchArea">
                           <form>
                               <input type="search" placeholder="Search">
                               <span>검색</span>
                           </form>
                       </div>
                   </div> -->
               </div>
               <div class="intro_text">
                   <!-- <h4><img src="image/logoshielders.png"> 쉴더스</h4> -->
                   <h4>Total Security Company</h4>
                   <h1 class="contents1">Security is not a product, but a process.</h1>
               </div>
                   <!-- <ul class="end">
                       <li><a href="#">약관</a></li>
                       <li><a href="#">개인정보 보호정책</a></li>
                   </ul> -->
           </div>
           <!-- </div>
           <ul class="amount">
               <li><div>3</div></li>                         </li>
               <li><div>2</div></li>                         </li>
               <li><div>1</div></li>                         </li>
               <li><div>3</div></li>                         </li>
           </ul> -->
       </div>   
   </body>
</html>
  