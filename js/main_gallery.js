window.onload = () => {
    
    const main_gallery_img_array = [
        './img/main/main_slideImg1.png',
        './img/main/main_slideImg2.jpg',
        './img/main/main_slideImg3.jpg',
        './img/main/main_slideImg4.jpg',
    ];

    const main_gallery_text_array = [
        '2019년 포도 따기',
        '2018년 포도 따기',
        '2017년 포도 따기',
        '2015년 가족과 함께'
    ];

    const main_gallery_array = [];

    function GalleryObject(main_gallery_img,main_gallery_text,index){
        //배열에서 받아올 값
        //객체 안에 넣을거임
        this.main_gallery_img = main_gallery_img;
        this.main_gallery_text = main_gallery_text;
        
        this.galleryPrint = function(){
            const gallery_img = document.querySelectorAll('.gallery_img');
            const gallery_info_text = document.querySelectorAll('.gallery_info_text');
            
            //alert(gallery_info_text[index]);
            gallery_info_text[index].innerHTML = this.main_gallery_text;
			gallery_img[index].setAttribute('src',this.main_gallery_img);
        }
    }


    for(let i = 0; i < main_gallery_img_array.length; i++){
        main_gallery_array.push(new GalleryObject( main_gallery_img_array[i], main_gallery_text_array[i], i ));
        main_gallery_array[i].galleryPrint();
    }
    
}