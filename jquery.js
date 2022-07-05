  const b=document.querySelector('html,body');
//console.log(b);
$(window).scroll(function(){
    //console.log($(this).scrollTop());
    if($(this).scrollTop() >= 400 ){
        $(".scroll").fadeIn();
    }
    else {
        $(".scroll").fadeOut();
    };
    $('.scroll').click(function(){
        b.scrollTo({
            top:30,
            behavior:'smooth'
        })
    });
   

    $('.click1').click(function(){
        $('.f2').slideUp();
        $('.f3').slideUp();
        $('.f4').slideUp();
        $('.f5').slideUp();
        $('.f1').slideDown(1000);
    });
    $('.click2').click(function(){
        $('.f1').slideUp();
        $('.f3').slideUp();
        $('.f4').slideUp();
        $('.f5').slideUp();
        $('.f2').slideDown(1000);
    });
    $('.click3').click(function(){
        $('.f2').slideUp();
        $('.f1').slideUp();
        $('.f4').slideUp();
        $('.f5').slideUp();
        $('.f3').slideDown(1000);
    });
    $('.click4').click(function(){
        $('.f4').slideDown(1000);
        $('.f3').slideUp();
        $('.f2').slideUp();
        $('.f5').slideUp();
        $('.f1').slideUp();
    });
    $('.click5').click(function(){
        $('.f5').slideDown(1000);
        $('.f3').slideUp();
        $('.f4').slideUp();
        $('.f2').slideUp();
        $('.f1').slideUp();
    });

    $('.close').click(function(){
        $('.signup').slideToggle(1000);
        $('.headerstags').fadeIn(1000);
        console.log($('.signup'));
    });
});


function show1(){
    b.scrollTo({
        top:0,
        behavior:"smooth"
    })
     
}
  
