<? 
	session_start(); 
	@extract($_POST);
	@extract($_GET);
	@extract($_SESSION);
	//세션변수 4
	//num=7&page=1
	//$num
	//$page
	//$listsyle

	include "../lib/dbconn.php";

	$sql = "select * from greet where num=$num";
	$result = mysqli_query( $connect, $sql);

	$row = mysqli_fetch_array($result); 
	$item_nick     = $row[nick];  	
	$item_subject     = $row[subject];
	$item_content     = $row[content];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>고객지원 - 공지사항</title>
	<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
	<link rel="stylesheet" href="../common/css/aos.css">
    <link rel="stylesheet" href="../common/css/common.css">
    <link rel="stylesheet" href="./css/greet.css">

	
</head>

<body>
<div class="skipNav">
			<a href="#content">본문 바로가기</a>
			<a href="#gnb">글로벌 네비게이션 바로가기</a>
		</div>
	<? include '../common/sub_header.html' ?>

  <div class="wrap">
	<div class="visual">
         <strong>회사소개</strong>
        </div>
        <div class="sub_nav">
            <ul>
                <li><a class="current" href="../sub6/sub1_1.html">고객의소리</a></li>
                <li><a href="../sub6/sub1_2.html">아이디어제안</a></li>
                <li><a href="../sub6/sub1_3.html" href="./list.php">채용공고</a></li>
            </ul>
        </div>

        <article id="content">
            <div class="title_area">
                <h2>공지사항</h2>
            </div>
			<div class="content_area">
                <div class="summary">
                    <p>포스코엠텍 공지사항을 알려드립니다.</p>
                    <p>철강포장 및 소재 전문기업으로서 철강사업에 새로운 가치를 제공하고 시너지를 창출하고자 합니다.</p>
                </div>

				<div class="bbs_wrap">
					<form  name="board_form" method="post" action="insert.php?mode=modify&num=<?=$num?>&page=<?=$page?>&liststyle=<?=$liststyle?>">
						<ul class="bbs_write_top">
							<li>
								<dl>
									<dt>닉네임</dt>
									<dd><?=$item_nick?></dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><label for="subject">제목</label></dt>
									<dd>
										<input type="text" name="subject" id="subject" value="<?=$item_subject?>" >
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><label for="contents">내용</label></dt>
									<dd>
										<textarea name="contents" id="contents"><?=$item_content?></textarea>
									</dd>
								</dl>
							</li>
						</ul>

					
						<div class="btn_wrap">
							<a href="list.php?page=<?=$page?>&liststyle=<?=$liststyle?>">목록</a>
							<button type="submit" class='active'>완료</button>
						</div>

					</form>
				</div>
			</div>
        </article>

		<? include "../common/sub_footer.html" ?>
		</div>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css" integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
	<script src="../common/js/aos.js"></script>
	<script src="../common/js/jquery-1.12.4.min.js"></script>
	<script src="../common/js/jquery-migrate-1.4.1.min.js"></script>
	<script src="../common/js/jquery.easing.1.3.js"></script>
	<script src="../common/js/common.js"></script>


</body>
</html>