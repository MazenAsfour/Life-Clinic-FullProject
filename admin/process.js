const list1=document.querySelector('.list');
const list2=document.querySelector('.list2');
const list3=document.querySelector('.list3');
const list4=document.querySelector('.list4');
console.log(list1.style.display);


$(document).ready(function(){
var a=$('ul .list1');
//console.log(a);


$('.cl').click(function(){

$('ul .first').fadeToggle();
});


$('.all').click(function(){

    $('ul .list2').fadeToggle();
});



$('.cl3').click(function(){

$('ul .list3').fadeToggle();
});
$('.cl4').click(function(){

$('ul .list4').fadeToggle();
});

$('.detail1').click(function(){

    $('.sliderdetail').fadeToggle();
});
$('.seredit').click(function(){

    $('.services').fadeToggle();
});
$('.work1').click(function(){

    $('.work').fadeToggle();
});
$('.fut1').click(function(){

    $('.fut').fadeToggle();
});

$('.prices1').click(function(){

    $('.prices').fadeToggle();
});
$('.doctor1').click(function(){

    $('.doctor').fadeToggle();
});
$('.feedback1').click(function(){

    $('.feedback').fadeToggle();
});
$('.ques1').click(function(){

    $('.ques').fadeToggle();
});
$('.know1').click(function(){

    $('.know').fadeToggle();
});



});