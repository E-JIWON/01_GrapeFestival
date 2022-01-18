
	
			const day_1 = document.getElementById('day_1');
			const day_2 = document.getElementById('day_2');
			const day_3 = document.getElementById('day_3');
			let festival_time1 = document.getElementById('festival_time1');
			let festival_time2 = document.getElementById('festival_time2');
			let festival_time3 = document.getElementById('festival_time3');

			// // 축제일
			// const festival_day_array = [
			// 	"08.01",
			// 	"08.02",
			// 	"08.03",
			// 	"08.04"
			// ];
			// // 축제 프로그램
			// const  program_name_array= [
			// 	"포도 밝기",
			// 	"포도 따기",
			// 	"포도 요리",
			// 	"포도 교환"
			// ];
			// // 축제 프로그램 별 시간
			// const program_time_array = [
			// 	"10:00 ~ 12:00",
			// 	"13:00 ~ 1500",
			// 	"17:00 ~ 19:00",
			// 	"20:00 ~ 21:00",
			// ];

			function dayBtn(dayNum){
				switch(dayNum){
					case 1 :
						//클래스 추가하는거 해야됨
					day_1.setAttribute('class','activeBtn');
					day_2.setAttribute('class','deactiveBtn');
					day_3.setAttribute('class','deactiveBtn');

					festival_time1.classList.replace('d_n', 'd_b');
					festival_time2.classList.replace( 'd_b' ,'d_n');
					festival_time3.classList.replace( 'd_b' ,'d_n');
					
					break;

					case 2 :
					day_1.setAttribute('class','deactiveBtn');
					day_2.setAttribute('class','activeBtn');
					day_3.setAttribute('class','deactiveBtn');

					festival_time1.classList.replace('d_b', 'd_n');
					festival_time2.classList.replace( 'd_n' ,'d_b');
					festival_time3.classList.replace( 'd_b' ,'d_n');
					break;

					case 3 :
					day_1.setAttribute('class','deactiveBtn');
					day_2.setAttribute('class','deactiveBtn');
					day_3.setAttribute('class','activeBtn');

					festival_time1.classList.replace('d_b', 'd_n');
					festival_time2.classList.replace( 'd_b' ,'d_n');
					festival_time3.classList.replace( 'd_n' ,'d_b');

					break;

				}
			}
			
			day_1.addEventListener('click',function() { dayBtn(1); });
			day_2.addEventListener('click',function() { dayBtn(2); });
			day_3.addEventListener('click',function() { dayBtn(3); });
