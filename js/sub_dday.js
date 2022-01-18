function ddayCounter() {
    let ddayCountAll = document.getElementById('ddayCountAll');
    let endFestival = document.getElementById('endFestival');
    
    let festivalToday = new Date();	

    const festivalDday = new Date("Mon 12 27 2021 09:00:00");
    const festivalEndday = new Date("Fri 12 31 2021 09:00:00");

    let festivalDdayCount = festivalDday.getTime() - festivalToday.getTime();
    let festivalDdayEndCount = festivalEndday.getTime() - festivalToday.getTime();

    let festivalResult = Math.floor(festivalDdayCount / (1000 * 60 * 60 * 24)) +1;	//일
    let festivalResultEnd = Math.floor(festivalDdayEndCount / (1000 * 60 * 60 * 24)) +1;	//일

    if(festivalResultEnd  < 0){
        endFestival.innerHTML = "축제 <br>  종료";
    }else if (festivalResult ) {
        ddayCountAll.innerHTML = festivalResult;
    }
}
ddayCounter();