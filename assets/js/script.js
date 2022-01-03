function toggle(){
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    toggle.classList.toggle('active');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}


const swiper = new Swiper('.swiper', {
    // Optional parameters
    
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets'
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
      autoplay: {
        delay: 2000,
      },
     
   
  });




  const myCarousel = new Carousel(document.querySelector("#myCarousel"), {
    
  });

  const myyCarousel = new Carousel(document.querySelector("#myyCarousel"), {
    // Your options go here
  });

