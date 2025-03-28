<?php
include("./dbconn.php");
?>
<!DOCTYPE html>
<html lang="ko">
   <head>
       <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="./information.css">
       <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: black;
            padding: 20px;
            text-align: center;
        }
        main {
            padding: 20px;
            margin-bottom: 50px;
            width: 400px;
        }
        h1 {
            color: #fff;
        }
        p {
            line-height: 1.6;
        }
    </style> -->
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
                <header class="info_name">
                    <h1>사이버 보안 2023 동향 정보</h1>
                </header>
                
                <main class=" main">
                    
                    <div class="info01">
                        <h2>생성형 AI 현황 및 전망 </h2>
                        <p><a href="https://www.itfind.or.kr/trend/trend/hotIssue/read.do?selectedId=0000001103&pageSize=10&pageIndex=0">생성형 AI 시장은 2028년까지 10배 성장하여 77조에 이를 것으로 예측되며, 파이낸셜타임스와 옴디아 보고서는 이 기술을 혁신적이고 파괴적이라 평가한다</a></p>
                        <style>a {text-decoration: none;}</style>
                    </div>
                    <hr>
                    <div class="info02">
                        <h2>양자 암호 프로토콜 최신 연구 동향</h2>
                        <p><a href="https://www.itfind.or.kr/trend/trend/hotIssue/read.do?selectedId=0000001104&pageSize=10&pageIndex=0">양자 컴퓨터/알고리즘의 개발과 발전은 현대 최고의 슈퍼컴퓨터로도 풀 수 없는 공개키 암호를 쉽게 풀어버릴 수 있어 기존 암호 시스템에 위협이 될 수 있다</a></p>
                        <style>a {text-decoration: none;}</style>
                    </div>
                    <hr>
                    <div class="info03">
                        <h2>6g 미래 기술 동향 </h2>
                        <p><a href="https://www.itfind.or.kr/trend/trend/hotIssue/read.do?selectedId=0000001097&pageSize=10&pageIndex=0">ITU-R (International Telecommunication Union Radiocommunications) Working Party 5D는 2022년 6월 회의에서 6G 이동통신 초기 표준화 과정의 일환으로 지상 이동통신의 미래기술 동향에 대한 보고서를 완성한 바 있다</a></p>
                        <style>a {text-decoration: none;}</style>
                    </div>
                    <hr>
                    <div class="info04">
                        <h2>Web 3.0</h2>
                        <p><a href="https://www.itfind.or.kr/trend/trend/hotIssue/read.do?selectedId=0000001083&pageSize=10&pageIndex=2">Web 3.0 시대 메타버스를 넘어: 초거대 인공지능의 출현과 새로운 도전</a></p>
                        <style>a {text-decoration: none;}</style><br>
                    </div>
                </main>
                
               </div>
           </div>
       </div>
   </body>
</html>