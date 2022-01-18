<!doctype html>
<html lang="ko">
	<head>		
		<meta charset="utf-8">
		<link rel="stylesheet" href="./css/index.css">
		<link rel="stylesheet" href="./css/common/footer.css">
		<link rel="stylesheet" href="./css/common/fixed.css">
		<link rel="stylesheet" href="./css/popup.css">
		<link rel="shortcut icon" type="image⁄x-icon" href="./img/main/main-grape1.png">
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
     	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		<title> 송산 포도 축제</title>

	</head>
	<body>
		<!-- 팝업 -->
		<section class="popup_wrap">
			<section class="popup_box">
				<span class="close_Btn"> 닫기 X </span>
				<div class="popup_con">
					<span> 이 페이지는 포트폴리오 용도로 만들어졌습니다. </span>
				</div>
				
			</section>
		</section>

		<!-- 상단 헤더 랩  -->
		<section class="mainHeaderWrap no-drag " id="homePage_top">
			<!-- 헤더 메뉴 랩 -->
			<section class="header_mu">
				<!-- 로고 이미지 랩 -->
				<div class="img_wrap">
					<a href="./index.php">
						<img src="./img/sub_logo2.png">
					</a>
				</div>

				<!-- 헤더 오른쪽 대 메뉴 이곳에 호버이벤트 있음 -->
				<ul class="sub_manu">
					<!-- 대메뉴 타이틀 -->
					<li class="sub_manu_title mgR_50"> 
						<!-- 타이틀 명 ( 언더라인 이벤트 넣기 위함) -->
						<a href="./sub_greeting.php"><span class="hover_event">축제 소개</span></a>
						<!-- 소메뉴  - 호버 시 나오는 부분-->
						<ul class="sub_sub_manu">
							<!-- 소메뉴 - 타이틀 , 링크 넣는 곳  LI로 구분해주세요 ~ -->
							<a href="./sub_greeting.php">
								<li>
									<span> 인사말 </span>
								</li>
							</a>

							<a href="./sub_outline.php">
								<li>
									<span> 축제 개요 </span>
								</li>
							</a>

							<a href="./sub_way.php">
								<li>
									<span> 찾아오시는 길 </span>
								</li>
							</a>
						</ul>
					</li>

					<li class="sub_manu_title mgR_50"> 
						<!-- 타이틀 명 ( 언더라인 이벤트 넣기 위함) -->
						<a href="./sub_program.php"><span class="hover_event"> 축제 정보 </span></a>
						<!-- 소메뉴  - 호버 시 나오는 부분-->
						<ul class="sub_sub_manu">
							<!-- 소메뉴 - 타이틀 , 링크 넣는 곳  LI로 구분해주세요 ~ -->
							<a href="./sub_program.php">
								<li>
									<span> 축제 프로그램 </span>
								</li>
							</a>

							<a href="./sub_guideMap.php">
								<li>
									<span> 축제 배치도 </span>
								</li>
							</a>
						</ul>
					</li>
					
					<li class="sub_manu_title"> 
						<!-- 타이틀 명 ( 언더라인 이벤트 넣기 위함) -->
						<a href="./sub_gallery.php">
							<span class="hover_event">
							갤러리
							</span>
						</a>
					</li>
				</ul>
			</section>

			<!-- 가운데 타이틀 랩 -->
			<section class="title_wrap t_c">
				<span class="title_1 text_white m_tS ">2021년 제3회</span>
				<span class="title_2 text_white m_tS ">송산 포도 축제</span>
				<span class="title_3 text_white m_tS ">12.27 ~ 12.31</span>
			</section>

			<!-- 포도, 디데이 랩 -->
			<section class="count_img_wrap">
				<div class="bg_white m_bS f_l"> <img src="./img/main/main-grape1.png" title="왼쪽포도" class="img_margin"> </div>
				<span class="m_tS" id="endFestivalHeader"> D - <b id="ddayCount"></b></span>
				<div class="bg_white m_bS f_r"> <img src="./img/main/main-grape2.png" title="오른쪽포도"> </div>
			</section>
		</section>

		<!-- 안녕 포도 부분 -->
		<section class="hi_grape_wrap">
			<section class="hi_grape_pos">
				
				<section>
					
					<h1> 안녕 포도 ?</h1>
					<p> 
						인간이 재배했던 가장 오래된 과일인 <span class="pu">포도!</span> <br>
						여러 종류의 포도를 알리기 위해 열린 축제로써<br>
						<b class="bl">싱싱한</b> <b class ="pu">포도</b>를 직접따는 체험으로 시작하여, 남녀노소 좋아하는 포도 밟기 <span class="gr">축제!</span><br>
						무더운 여름 포도축제에 와서 <span class="bl">시원하게</span> 즐기고 가세요!
					</p>									
				</section>
				<img src="./img/main/main_hi_grape.png" class="hi_grape_img f_r">				
				

				
			</section>
		</section>

		<!-- 우리의 포도 -->
		<!-- <section class="we_grape"> -->
		
		<!-- </section>  -->


		<!-- 함께 즐기는 프로그램 -->
		<section class="together_program_wrap t_c">
			<section class="together_program_background">
				<h1> 함께 즐기는 포도 프로그램</h1>
				
				<section class="together_program">
					<div onclick="location.href='./sub_program.php'">
						<h3> 포도 도장 찍기</h3>
						<img src="./img/main/main_together_program.png">
						<span class="title_info"> 도장을 모아 포도와 바꿔요 </span>
						<span> 접수 시간 : 오전 10시~11시</span>
						<span class="arrow_Text"> 더보기 </span>
						<ion-icon name="arrow-forward-outline" class="arrowIcon_left"></ion-icon>
					</div>
					
					<div onclick="location.href='./sub_program.php'">
						<h3> 포도 따기</h3>
						<img src="./img/main/main_together_program2.png">
						<span class="title_info"> 도장을 모아 포도와 바꿔요 </span>
						<span> 접수 시간 : 오전 10시~11시</span>
						<span class="arrow_Text"> 더보기 </span>
						<ion-icon name="arrow-back-outline" class="arrowIcon_right"></ion-icon>
					</div>

				</section>
			</section>
		</section>

		<!-- 포도축제 일정 -->
		<section class="program_calendar_wrap">
			<!-- 가운데정렬 -->
			<section>
				<h1> 축제 일정 </h1>
				<!-- <section class="ui_wrap"> -->

					<ul class="festival_day" >
						<li id ="day_1" class="activeBtn">
							<h3> 상시 운영 </h3>
						</li>
						<li id ="day_2">
							<h3> 08.21 (토) </h3>
						</li>
						<li id ="day_3">
							<h3> 08.22 (일) </h3>
						</li>
					</ul>
					
					<ul class="festival_time d_b" id="festival_time1" >
						<li> <span> 10:00 ~ 12:00 </span> 포도 도장 접수 </li>
						<li> 12:00 ~ 14:00 포도 밟기</li>
						<li> 16:00 ~ 17:00 포도 따기</li>
						<li> 18:00 ~ 20:00 포도 도장 교환</li>
					</ul>
					
					<ul class="festival_time f_l d_n" id="festival_time2">
						<li> 18:00 ~ 19:00 포도 특별 행사 판매</li>
					</ul>
					
					<ul class="festival_time  f_l d_n" id="festival_time3">
						<li> 18:00 ~ 20:00 게스트 콘서트</li>
						<li> 21:00 ~ 22:00 이벤트 경품 행사</li>
					</ul>
					
				<!-- </section> -->
			</section>
		</section>

		<!-- 함께 즐기는 프로그램 -->
		<section class="main_gallery_wrap t_c">
			<section class="main_gallery_position">
				<h1> 포토 갤러리 </h1>

				<section class="main_gallery" id="main_gallery">
					<div class="gallery_box"  onclick="location.href='./sub_gallery.php'">
						<img class="gallery_img" src="./img/main/main_slideImg1.png">
						<span class="gallery_info_text">2020년</span>
					</div>

					<div class="gallery_box"  onclick="location.href='./sub_gallery.php'">
						<img class="gallery_img" src="">
						<span class="gallery_info_text">2020년</span>
					</div>

					<div class="gallery_box"  onclick="location.href='./sub_gallery.php'">
						<img class="gallery_img" src="">
						<span class="gallery_info_text">2020년</span>
					</div>
					
					<div class="gallery_box"  onclick="location.href='./sub_gallery.php'">
						<img class="gallery_img" src="">
						<span class="gallery_info_text">2020년</span>
					</div>
				</section>

			</section>
		</section>

		<!-- 푸터 인클루드, 픽스드 인클루드 -->
		<?php
			include "./footer.html";
			include "./fixed.html";
		?>

		<script type="text/javascript" src="./js/main_program_calendar.js"></script>
		<script type="text/javascript" src="./js/main_gallery.js"></script>
		<script type="text/javascript" src="./js/main_dday.js"></script>
	</body>

	<!-- 팝업 js -->
	<script>
     	$('.close_Btn').on("click",function(){
			$('.popup_wrap').css('display','none');
		});
	</script>

</html>