// $(document).ready(function () {
//     $('h1').mouseenter(function () {
//         $(this).addClass('c');
//         $(this).removeClass('b');

//         $(this).css('color', 'red');
//     })
//     $('h1').mouseout(function () {
//         $(this).addClass('b');
//         $(this).removeClass('a');

//         $(this).css('color', 'red');
//     })
// });


///////////////////////////////////////////////////////////////////////////////////////
$(document).ready(function () {
    
    $('.sec2').mouseenter(function () {
        $('.sec2 .card p').css('display', 'none');
        $(this).addClass('bg');
        $(this).removeClass('sec2');
    })
    
    $('.sec2').mouseout(function () {
        $(this).addClass('sec2');
        $(this).removeClass('bg');
    })
    
    $('.sec2 .card .btn').click(function () {
        $("p").css('padding-top', '20px');
        $("p").toggle();
        // $(this).addClass('bg1');
        // $(this).removeClass('sec2');
        
    })
    
    $('.sec2 .btn').click(function () {
        $('.btn').text('Read Less');   
    })
    
    // $('.sec2 .btn').click(function () {
    //     $('.btn').text('Read More');   
    // })

    $(".sec3 a").click(function(){
        $(this).addClass('bg');
        $(".y").animate({left: '25550px'});
      });
    
});