<?php
include("./dbconn.php");

$mb_id = $_SESSION['ss_mb_id'];

if($mb_id != 'admin'){
    echo "
    <script>
        alert(\"관리자 계정이 아닙니다 돌아가세요!!!\");
           location.href = \"./home1.php\";
    </script>
";
}

$sql = "SELECT mb_id, mb_email, mb_name FROM member";
$result = mysqli_query($conn, $sql);

//html 코드 넣고 네비 다 넣고 위쪽 마무리 지으면 그 아래쪽에 아래 코드를 넣을건데
// 쿼리 결과 처리
if (mysqli_num_rows($result) > 0) {
    // 데이터 출력
    while($row = mysqli_fetch_assoc($result)) {
        echo "mb_id: " . $row["mb_id"]. " - mb_email: " . $row["mb_email"]. " - mb_name: " . $row["mb_name"]. "<br>";
    }
} else {
    echo "0 results";
}

// 연결 닫기
//mysqli_close($conn);
?>
//html 코드 넣고 네비 다 넣고 위쪽 마무리 지으면 그 아래쪽에 아래 코드를 넣을건데
// 쿼리 결과 처리
if (mysqli_num_rows($result) > 0) {
    // 데이터 출력
    while($row = mysqli_fetch_assoc($result)) {
        echo "mb_id: " . $row["mb_id"]. " - mb_email: " . $row["mb_email"]. " - mb_name: " . $row["mb_name"]. "<br>";
    }
} else {
    echo "0 results";
}

// 연결 닫기
//mysqli_close($conn);
<div class="board_wrap">
            <div class="board_title">
                <strong>고객지원</strong>
                <p>사용하시는 제품에 문제가 있을시 빠르게 확인하고 조치해드립니다.</p>
            </div>
</div>