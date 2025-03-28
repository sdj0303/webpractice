<?php
    include('./dbconn.php');
    // if($conn) echo "ok\n";
	
    if(isset($_GET['page']))
        $page = $_GET['page'];
    else
        $page = 1;
    $cntSql = "SELECT * FROM userboardtb;";
    $cntRst = mysqli_query($conn, $cntSql); 
    $cnt = mysqli_num_rows($cntRst);
    $pagePer = 10;
    $pageIdx = ($page-1)*$pagePer + 1;
    $pageIdx -= 1;

    $sql = "SELECT * FROM userboardtb order by boardDate asc limit $pageIdx, $pagePer;";
    $rst = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100..900&display=swap" rel="stylesheet">
    <title>공지사항</title>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="./boardIndex.css">
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

        </div>
        <div class="board_wrap">
            <div class="board_title">
                <strong>고객지원</strong>
                <p>사용하시는 제품에 문제가 있을시 빠르게 확인하고 조치해드립니다.</p>
            </div>
            <div id="board_main">
                <table id="board">
                <thead>
                    <tr>
                        <th width=100>No</th>
                        <th width=500>제목</th>
                        <th width=200>작성자</th>
                        <th width=200>작성일</th>
                        <th width=100>조회수</th>
                    </tr>
                </thead>
                <?php 
                    while($arr = mysqli_fetch_array($rst)) {
                        $cmpId = $arr['mb_id'];
                        $idSql = "SELECT * from userboardtb where userId = '$cmpId';";
                        $idRst = mysqli_query($conn, $idSql);
                        $idArr = mysqli_fetch_array($idRst);
                
                ?>
                <tbody>
                    <tr align="center">
                        <td><?php echo $arr['boardIdx']; ?></td>    
                        <td><a href="su_view.php?idx=<?php echo $arr['boardIdx']; ?>"><?php echo $arr['boardTitle']; ?></a></td>
                        <td><?php echo $arr['userId'];?></td>
                        <td><?php echo $arr['boardDate']; ?></td>
                        <td><?php echo $arr['boardViews']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            </div>
            <div id="page_nums">
            <?php
                if($page > 1){
                    $page--;
                    echo "<a href=\"su_list.php?page=1\" class=\"page_str\">[처음]</a>";
                    echo "<a href=\"su_list.php?page=$page\" class=\"page_str\">[이전]</a>";
                }
                $totalPage = ceil($cnt / $pagePer);
                $pageNum = 1;

                while($pageNum <= $totalPage){
                    if($page == $pageNum)
                        echo "<a href=\"su_list.php?page=$pageNum\" id=\"cur_page\" class=\"page_num\">$pageNum</a>";
                    else
                        echo "<a href=\"su_list.php?page=$pageNum\" class=\"page_num\">$pageNum</a>";
                    $pageNum++;
                }
                if($page < $totalPage){
                    $page++;
                    echo "<a href=\"su_list.php?page=$page\"class=\"page_str\">[다음]</a>";
                    echo "<a href=\"su_list.php?page=$totalPage\" class=\"page_str\">[끝]</a>";
                }
            ?>
                <div id="board_write">
                    <input type="button" value="글쓰기"onclick="location.href='su_write.php'" id="write_btn" class="form_btn"/>
                </div>
            </div>
            <!-- <div class="board_list_wrap"> -->
                <!-- <div class="board_list">
                    <div class="top">
                        <div class="num">No</div>
                        <div class="title">제목</div>
                        <div class="writer">작성자</div>
                        <div class="date">작성일</div>
                        <div class="view">조회수</div>
                    </div>
                </div>
                <?php 
                    while($arr = mysqli_fetch_array($rst)) {
                        $cmpId = $arr['mb_id'];
                        $idSql = "SELECT * from member where mb_id = '$cmpId';";
                        $idRst = mysqli_query($conn, $idSql);
                        $idArr = mysqli_fetch_array($idRst);
                
                ?>
                   <tbody>
                    <tr align="center">
                        <td><?php echo $arr['boardIdx']; ?></td>
                        <td><a href="boardView.php?idx=<?php echo $arr['boardIdx']; ?>"><?php echo $arr['boardTitle']; ?></a></td>
                        <td><?php echo $idArr['mb_name']; ?></td>
                        <td><?php echo $arr['boardDate']; ?></td>
                        <td><?php echo $arr['boardViews']; ?></td>
                    </tr>
                </tbody>
                    <?php } ?>
                </div>
            <div class="board_page">
                <?php
                if($page > 1){
                    $page--;
                    echo "<a href=\"su_list.php?page=1\" class=\"page_str\">[처음]</a>";
                    echo "<a href=\"su_list.php?page=$page\" class=\"page_str\">[이전]</a>";
                }
                $totalPage = ceil($cnt / $pagePer);
                $pageNum = 1;

                while($pageNum <= $totalPage){
                    if($page == $pageNum)
                        echo "<a href=\"su_list.php?page=$pageNum\" id=\"cur_page\" class=\"page_num\">$pageNum</a>";
                    else
                        echo "<a href=\"su_list.php?page=$pageNum\" class=\"page_num\">$pageNum</a>";
                    $pageNum++;
                }
                if($page < $totalPage){
                    $page++;
                    echo "<a href=\"su_list.php?page=$page\"class=\"page_str\">[다음]</a>";
                    echo "<a href=\"su_list.php?page=$totalPage\" class=\"page_str\">[끝]</a>";
                }
                ?>
                
                <div class="bt_wrap">
                    <a href="su_write.html" class="on">글쓰기</a>
                </div>
            </div> -->
        </div>
    </div>
</body>
</html> 