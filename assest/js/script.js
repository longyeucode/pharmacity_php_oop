var hinh=[
    "icon/1.webp",
    "icon/913x280 (x1 (1).webp",
    "icon/913x280 (x1 (3).webp"
  ];
  
  
  var index=0;
  // function prev(){
  //   index--;
  //   if(index<0) index=hinh.length-1;
  //   document.getElementById('banner').src=hinh[index];
  //   document.getElementById("0").style.color='white';
  //   document.getElementById("1").style.color='white';
  //   document.getElementById("2").style.color='white';
  //   document.getElementById(index).style.color='#1598d4'
  
  
  // }
  
  function next(){
    index++;
    if(index==hinh.length) index=0;
    document.getElementById('banner').src=hinh[index];
    document.getElementById("0").style.color='white';
    document.getElementById("1").style.color='white';
    document.getElementById("2").style.color='white';
    document.getElementById(index).style.color='#1598d4'
  }
  setInterval("next()",2000)



  $('.products-grid').slick({
    infinite: true,
    slidesToShow: 5 , // Số sản phẩm hiển thị trên một slide
    slidesToScroll: 1,
    prevArrow: '<button type="button" class="slick-prev">Previous</button>',
    nextArrow: '<button type="button" class="slick-next">Next</button>',
    responsive: [
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1.25,
                slidesToScroll: 2
            }
        }
    ]
});