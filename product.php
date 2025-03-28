<?php
include("./dbconn.php");
?>
<!DOCTYPE html>
<html lang="ko">
   <head>
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="./product.css">
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
                </div>
               <div class="middle">
                    <header class="pro_name">
                        <h1>제품소개</h1>
                    </header>
                    <div class="device1" >
                        <div class="vpn1">
                            <img src="css/image/vpn1.png" style="width: 350px; height: 250px;">
                        </div>
                        <div class="ex1">
                            <h2>DSR-500</h2>
                            <hr/>
                            <p><h5>
                                | 강력한 VPN라우터<br/>
                                | 안전한 네트워크 이중화<br/>
                                | VPN 지원<br/>
                                | 웹 필터링 기능 지원<br/><br/>
                                <strong class="price">도매가 : 584,100￦</strong><br/>
                                </h5></p>
                        </div>
                    </div>
                    <hr/>
                    <div class="device2" >
                        <div class="vpn2">
                            <img src="css/image/vpn2 (2).png" style="width: 350px; height: 250px;">
                        </div>
                        <div class="ex2">
                            <h2>DSR-250</h2>
                            <hr/>
                            <p><h5>
                                | 강력한 VPN라우터<br/>
                                | 안전한 네트워크 이중화<br/>
                                | VPN 지원<br/>
                                | 웹 필터링 기능 지원<br/><br/>
                                <strong class="price">도매가 : 318,000￦</strong><br/>
                                </h5></p>
                        </div>
                    </div>
                    
               </div>
           </div>
       </div>
   </body>
</html>