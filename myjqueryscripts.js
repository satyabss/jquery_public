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
    
    $('.sec2').mouseover(function () {
        $('.sec2 .card span').css('display', 'none');
        $('.sec2 .card p').css('display', 'block');
        $(this).addClass('bg');
        $(this).removeClass('sec2');
    })
    
    $('.sec2').mouseout(function () {
        $(this).addClass('sec2');
        $(this).removeClass('bg');
    })
    
    $('.sec2 .card .btn').click(function () {
        $("p").css('padding-top', '20px');
        // $("p").toggle();
        $(this).closest('.card-body').find('span').toggle();
        if( $(this).closest('.card-body').find('a').html()=='Read Less'){
        $(this).closest('.card-body').find('.btn').text('Read More');  
        $(this).closest('.card-body').find('.btn').removeClass('btn-danger'); 
        $(this).closest('.card-body').find('.btn').addClass('btn-primary');  
        }else{
        $(this).closest('.card-body').find('.btn').text('Read Less'); 
        $(this).closest('.card-body').find('.btn').addClass('btn-danger'); 
        $(this).closest('.card-body').find('.btn').removeClass('btn-primary');   


        }

        // $(this).addClass('bg1');
        // $(this).removeClass('sec2');
        
    })
    
    $('.sec2 .btn').click(function () {
    })
    
    // $('.sec2 .btn').click(function () {
    //     $('.btn').text('Read More');   
    // })

    $(".sec3 a").click(function(){
        // $(this).addClass('bg');
        $(".y").animate({left: '25550px'});
      });

      $(".sec3 a").click(function(){
        $(".y").animate({left: '250px'});
      });


      $(".sec3 a").click(function(){
        $(".y").animate({
          height: 'toggle'
        });
      });
    
});
// $(document).ready(function(){
    
//   });







