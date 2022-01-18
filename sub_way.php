<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./css/sub_way.css">
        <link rel="stylesheet" href="./css/common/header.css">
        <link rel="stylesheet" href="./css/common/footer.css">
		<link rel="stylesheet" href="./css/common/fixed.css">
		<link rel="stylesheet" href="./css/common/common.css">
        
        <style>
			header{ background-image: url('./img/sub_header/찾아오는길.jpg') }
        </style>

    </head>
    <body>
        <?php 
		    include "./sub_header.html";
            include "./fixed.html";
        ?>

        <p class="sub_title">찾아오시는 길</p>

        <section class="topArea">
            <section class="imageBox">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12726.247483962108!2d126.66858993994464!3d37.115545488995956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b08a3b654c709%3A0xe9e1988daabf5224!2z6raB7Y-J7ZWt7ISg7LCp7J6l!5e0!3m2!1sko!2skr!4v1629031269245!5m2!1sko!2skr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>
        </section>

        <section class="subArea">
            <section class="subBox">
            <p> 주소 : 경기도 화성시 궁평항 광장 </p>
            </section>
        </section>
            
        <section class="roadArea">
            <section class="iconBox">
                <p>자가용 이용 시</p>
                <div class="roadIcon">
			        <h1 class="car"><i class="fas fa-car fa-3x" style="font-size:3vw;"></i></h1>
		        </div>
		        <div class="infoicon_wrap" style="height: 3.5vw;">
	                <div class="infoIcon">1코스</div>
        	        <span>서부간선도로 -> 서해안고속도로 -> 제 2외곽 순환 고속도로 -> 영종로</span>
		        </div>
		        <div class="infoicon_wrap">
	                <div class="infoIcon" style="background-color: rgb(107, 83, 115);">2코스</div>
			    <span>봉담고속도로 -> 비몽매송도시고속도로 -> 영종로</span>
		    </div>
            </section>
        </section>

        <div class="line"></div><!--line-->

        <section class="roadArea2">
            <section class="iconBox2">
                <p class="useText deepgreen">대중교통 이용 시</p>
	            <div class="roadIcon2">
		            <h1 class="bus"><i class="fas fa-bus fa-3x" style="font-size:3vw;"></i><h1>
	            </div>
	        <div class="infoicon_wrap" style="height: 3.5vw;">
	            <div class="infoIcon">1코스</div>
        	    <span>시청역 -> 400(수원역 환승센터) -> 궁평항정류장</span>
	        </div>
	        <div class="infoicon_wrap" style="height: 3.5vw;">
		        <div class="infoIcon" style="background-color: rgb(107, 83, 115);">2코스</div>
		        <span>M51212(명동국민은행앞) -> 400(수원광교박물관) -> 궁평항정류장</span>
	        </div>
	        <div class="infoicon_wrap">
	            <div class="infoIcon" style="background-color: rgb(94, 73, 101);">3코스</div>
        	    <span>M51212(명동국민은행앞) -> 400(호반하든가임) -> 궁평항정류장</span>
	        </div>
        </div>
            </section>
        </section>

	    <div class="line">
	    </div><!--line-->		    

        <section class="bboxArea">
            <section class="bBox">
                <p class="bbT1">교통문의</p>
                <p class="bbT2">수원버스터미널 : 1688-5455&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;화성시 교통행정과 : 031-5189-1542</p>
            </section>
        </section>

            <?php include"./footer.html"; ?>
        </body>
        <script type="text/javascript" src="./js/sub_dday.js"></script>
    </html>