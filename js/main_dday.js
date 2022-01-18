    function ddayCounter() {
        const ddayCount = document.getElementById('ddayCount');
        const ddayCountAll = document.getElementById('ddayCountAll');
        const endFestivalHeader = document.getElementById('endFestivalHeader');
        const endFestival = document.getElementById('endFestival');
        
        let festivalToday = new Date();	
        //현재 날짜 정보를 제공하는 Date 객체
        const festivalDday = new Date("Mon 12 27 2021 09:00:00");
        const festivalEndday = new Date("Fri 12 31 2021 09:00:00");
        // 디데이 날짜 정보를 제공하는 Date 객체

        let festivalDdayCount = festivalDday.getTime() - festivalToday.getTime();
        let festivalDdayEndCount = festivalEndday.getTime() - festivalToday.getTime();
        //축제일(dday) 객체 - 현재 날짜 객체


        let festivalResult = Math.floor(festivalDdayCount / (1000 * 60 * 60 * 24)) +1;	//일
        let festivalResultEnd = Math.floor(festivalDdayEndCount / (1000 * 60 * 60 * 24)) +1;	//일
        //const festivalResultHours = Math.floor((festivalDdayCountAll % (1000*60*60*24))/(1000*60*60)); //시간
        //const festivalResultMin= Math.floor((festivalDdayCountAll % (1000*60*60))/(1000*60)); // 분
        //const festivalResultSec = Math.floor((festivalDdayCount % (1000*60*60*24))/(1000*60*60)); //초 

            // Math.floor 함수를 이용해서 근접한 정수값을 가져온다.
            // Math. ceil은 소수점 첫째 자리에서 무조건 올림을 하여 정수로 반환함

            // 디데이 날짜에서 현재 날짜를 빼면 지금부터 남은 시간을 밀리초 단위로 구할 수 있음
            // 남은 시간을 일 단위로 계산한 다음 오늘 날짜까지 포함시키기 위하여 Math.ceil() 메서드를 사용
            // 1초 = 1,000(msc)
            // 1분 (60초) = 1000 * 60
            // 1시간 ( 60분) 1000 * 60 * 60
            // 1일 (60분 * 24) 1000 * 60 * 60 * 24                                                                                   


        if(festivalResultEnd  < 0){
            endFestival.innerHTML = "축제 <br>  종료";
            endFestivalHeader.innerHTML = "축제 종료";
            endFestivalHeader.style.fontSize = "4vw";
        }else if (festivalResult ) {
            ddayCount.innerHTML = festivalResult;
            ddayCountAll.innerHTML = festivalResult;
        }


        //alert( festivalResult + " 일 " +festivalResultHours + "시간" + festivalResultMin +  "분" );
        //alert("D-D" + festivalResult + "남");

        //alert("today : " + today);
        //alert("dday : " + dday);
    }
    ddayCounter();