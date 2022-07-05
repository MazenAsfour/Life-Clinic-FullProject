$(document).ready(function(){
    $('.headertags1').hide();
    $('.signup1').show();
  
    //alert('hello');
    $('.showsign').click(function(){
      
        $('.headertags2').fadeOut();
        $('.login1').slideUp(1000);
        $('.signup').slideDown(1000);
        $('.headerstags').fadeOut(1000);
     
    });

    $('.close1').click(function(){
        $('.headertags1').fadeIn(1000);
        $('.signup1').slideUp(1000);
        $('.headertags').fadeIn(1000);
        $('.headertags2').hide();
        $('.login1').show();
    });
   
    $('.headertags2').hide();
    $('.login1').show();

    $('.closelog1').click(function(){
    $('.login1').slideUp(1000);
    $('.headertags2').fadeIn(1000);
    
    });

    $('.showlog1').click(function(){
    $('.login1').slideDown(1000);
    $('.headertags2').fadeOut(1000);
   
    });

    
    ////
  
        //bars
        $(".bars").click(function(){
          $(".second ul").slideToggle(500);
          $('.move i').fadeToggle();
          $('.leftcontact form').fadeToggle();
          $('.appointment').fadeToggle();
        });
        //niceScroll
        $('html').niceScroll();
        //log / sign
        //$('.showsign').click(function(){
            
            
        //});
       
        $('.close').click(function(){
            $('.headerstags').fadeIn(1000);
            $('.headertags1').fadeIn(1000);
            $('.headertags2').fadeIn(1000);
            $('.signup').slideUp(1000);
        });
        $('.showlog').click(function(){
            $('.headerstags').fadeOut(1000);
            $('.login').slideDown(1000);
            $('.login1').slideDown(1000);
            $('.headertags1').fadeOut(1000);
        });
        $('.closelog').click(function(){
            $('.login').slideToggle(1000);
            $('.headerstags').fadeToggle(1000);
            $('.headertags1').fadeIn(1000)
            $('.headertags2').fadeIn(1000)
        });
      
        $('.profile').click(function(){
            ///alert('hello');
            $('.editprofile').slideDown(1000);
            $('.headerstags3').fadeOut(1000);
            $('.headerstags').fadeOut(1000);
        });
        $('.closeprofile').click(function(){
            //alert('hello');
            $('.editprofile').slideUp(1000);
            $('.headertags1').fadeIn(1000);
            $('.headertags3').fadeIn(1000);
            $('.headertag4').fadeIn(1000);
            $('.headerstags').fadeIn(1000);
        });
        $('.headertags3').fadeOut(1000);
       $('.headertag4').fadeOut();

       $('.closeresult').click(function(){
        //alert('hello');
        $('.result').slideUp(1000);
        $('.headerstags').fadeIn(1000);
        });
        
        $('.editresult').slideDown(1500);
        //$('.headertagsresult').fadeOut(1000);
        var resulttag=document.querySelector('.editresult');
        console.log(resulttag.className);
        if( resulttag.className =='result editresult text-center'){
            $('.headerstags').fadeOut(1000);
            //alert('hello');
            console.log(resulttag);
        }
        if( resulttag.className =='result defultresult'){
            $('.headerstags').fadeIn(1000);
            //alert('hello');
            console.log(resulttag);
        }

        $('.closeresult').click(function(){
            //alert('hello');
            $('.result1').show(1000);
            $('.headertagsresult').fadeIn(1000);
        });

       jQuery.noConflict();
        
        });
      ////
