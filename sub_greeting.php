<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/sub.greeting.css">
        <link rel="stylesheet" href="./css/common/header.css">
        <link rel="stylesheet" href="./css/common/footer.css">
		<link rel="stylesheet" href="css/common/fixed.css">
		<link rel="stylesheet" href="css/common/common.css">
        
        <style>
			header{ background-image: url(./img/sub_header/인사말2.jpg); }
        </style>
    </head>
    <body>
        <?php 
		    include "./sub_header.html";
            include "./fixed.html";
        ?>

        <p class="sub_title">인사말</p>

        <section class="topArea">
            <section class="topBox">
                <img src="./img/sub_greeting/greeting.jpg">
                    <div class="shadowBox">
                        <p class="tT1">송산포도축제</p>
                        <p class="tT2">어울림과 즐거움이 있습니다.</p>
                        <p class="tT3">소중한 가족, 그리고 사랑하는 연인과 <br> 함께 즐겨보세요</p>
                        <p class="tT3">아름다운 자연의 맛과 멋이 살아있는 <br> 송산포도축제로 여러분을 초대합니다.</p>
                </div>
            </section>
        </section>

        <section class="textArea">
            <div>
                <h1>제17회 송산포도축제</h1>
                <p>
                인간이 재배했던 가장 오래된 과일 포도!<br>
                여러종류의 포도를 알리기 위해 열린 축제로 포도를 직접 따는 체험부터,<br>
                포도를 이용해 여러가지 음식을 만들고, <br>
                오감을 만족시킬 수 있는 포도밟기 등 다양한 체험이 열리는 축제입니다.
                </p>
            </div>
        </section>

        <section class="videoArea">
            <div>
                <h1>포도축제 2배로 즐기는법!</h1>
                <iframe width="100%" height="500px" src="https://www.youtube.com/embed/Ih2vLtCLm-c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </section>

        <?php include"./footer.html"; ?>
    </body>
    <script type="text/javascript" src="./js/sub_dday.js"></script>
</html>