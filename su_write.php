<?php
    session_start();
    if(!isset($_SESSION['ss_mb_id'])){
        echo "
            <script>
                alert(\"로그인 해주세요!!!\");
               	location.href = \"./home1.php\";
            </script>
	";
    }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>공지사항</title>
    <link rel="stylesheet" href="./css/css.css">
</head>
<body>
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

            <!-- <div>
                <div class="searchArea">
                    <form>
                        <input type="search" placeholder="Search">
                        <span>검색</span>
                    </form>
                </div>
            </div> -->
        </div>
        <div class="board_wrap">
            <div class="board_title">
                <strong>고객지원</strong>
                <p>사용하시는 제품에 문제가 있을시 빠르게 확인하고 조치해드립니다.</p>
            </div>
            <div class="board_write_wrap">
            <form action="boardWrite_ok.php" method="post" enctype="multipart/form-data">
                <div class="board_write">
                    <div class="title">
                        <dl>
                            <dt>제목</dt>
                            <dd><input type="text" name="boardTitle" placeholder="제목 입력"></dd>
                        </dl>
                    </div>
                    <div class="cont">
                        <textarea name="boardDetail" placeholder="내용 입력"></textarea>
                    </div>
                    <div>
    	                <label for="boardFile"></label>
		                <p><input type="file" name="uploadFile" id="upload" accept="image/*, .jpg" /></p>
	                </div>
                </div>
                <div class="bt_wrap">
                    <button><input type="submit" value="올리기"></button>
                    <a href="su_list.php">취소</a>
                    <!-- <a href="su_list.php">취소</a> -->
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>