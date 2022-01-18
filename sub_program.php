<!DOCTYPE html>
<html lang="ko">
	<head>
		<meta charset="utf-8">
		<!<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
		<link rel="stylesheet" href="css/sub_program.css">
		<link rel="stylesheet" href="css/common/header.css">
		<link rel="stylesheet" href="css/common/footer.css">
		<link rel="stylesheet" href="css/common/fixed.css">

		<title>포도 축제 프로그램 페이지</title>

		<style>
			header{ background-image: url(./img/sub_header/축제정보.jpg); }
		</style>
	</head>

     <body>
          <?php
          include "./sub_header.html";
          include "./fixed.html";
          ?>

     <p class="sub_title">축제 프로그램</p>

     <section class="pageArea">
          <!-- 프로그램 감싸고 있는 컨테이너 -->
          <section class="contentsArea">

               <!-- 1이미지 -->
               <section class="img_container">
                    <img class="imgWrap" src="./img/sub_program_img/포도따기.jpg">
               </section>
               
               <!-- 프로그램 설명  -->
               <section class="program_container">
                    <div class="textArea">
                         <p class="title">포도따기</p>
                         <!-- 콘텐츠 내용 -->
                         <p class="text">
                              남녀노소! 관계없이 모두 즐길 수 있는 포도따기체험 <br>
                              참가 접수: 송산포도농원<br>
                              참가 비용: 현장 문의
                         </p>
                         <!-- 공지사항 박스 -->
                         <p class="text2">
                              &lt;공지사항&gt;<br>
                              오전 11시부터 오후 4시까지 (1인당 하루 2회 한정)<br>
                              1박스 무게에 따라 가격 상이 (5kg/3kg)
                         </p>
                         <div class="btn_wrap">
                              <button class="btn" type="button" onclick="location.href='./sub_guideMap.php'">위치보기</button>
                         </div>
                    </div>
                    
               </section>
          </section>

          <section class="contentsArea">
               <!-- 2이미지 -->
               <section class="img_container">
                    <img class="imgWrap" src="./img/sub_program_img/포도밟기.jpg">
               </section>
               
               <!-- 프로그램 설명  -->
               <section class="program_container">
                    <div class="textArea">
                         <p class="title">포도밟기</p>
                         <!-- 콘텐츠 내용 -->
                         <p class="text">
                              남녀노소! 관계없이 모두 즐길 수 있는 포도밟기체험 <br>
                              참가 접수: 궁평항광장<br>
                              참가 비용: 현장 문의
                         </p>
                         <!-- 공지사항 박스 -->
                         <p class="text2">
                              &lt;공지사항&gt;<br>
                              오전 11시부터 오후 4시까지 30분 간격 운행
                         </p>
                         <div class="btn_wrap">
                              <button class="btn" type="button" onclick="location.href='./sub_guideMap.php'">위치보기</button>
                         </div>
                    </div>
               </section>

          </section>
     </section>

     <?php
     include "./footer.html";
     ?>
     </body>
     <script type="text/javascript" src="./js/sub_dday.js"></script>
</html>
