$('#NewsAndMedia').owlCarousel({
  autoplay:true,
  autoplayHoverPause:true,
  autoplayTimeout:4000,
  loop:true,
    margin:0,
  nav:true,
  navText: [ '<img src="images/prev-arrow.png" alt=""/>', '<img src="images/next-arrow.png" alt=""/>' ],
    dots:false,
  responsive:{
        0:{
            items:1,
      margin:0,
        },
        768:{
            items:3,

        },
        992:{
            items:3,
        }
    }
});
