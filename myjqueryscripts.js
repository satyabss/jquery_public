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




    // alert('Hello i am alert');

    // if(confirm('Are sure to delete'))
    // {
    //     alert('Deleted');
    // }else{
    //     alert('Not Deleted');
    // }


    function myFunction(){
        // var inp1=document.getElementById('name').value;
        // alert(inp1);
    }

    $(document).ready(function(){

    
        $.ajax({
            url:'https://fakestoreapi.com/products',
            method:'GET',
            success:function(response){
                console.log(response);
                var product='';
                $.each(response, function(i, item) {
    product+='<div class="col-md-2"><div class="card"><div class="card-body item"><img src="'+item.image+'" class="img-fluid" style="width:256px;height:256px;"><h6>'+item.title+'</h6><input type="hidden" class="itemid" value="'+item.id+'"></div></div></div>';
});
$('#productlist').html(product);
            }
        });

        $('body').on('click','.item',function(){
            var itemid=$(this).find('.itemid').val();
            
        $.ajax({
            url:'https://fakestoreapi.com/products/'+itemid,
            method:'GET',
            success:function(response){
                // console.log(response);
                var html='';
                html+='<div class="row">';
                html+='<div class="col-md-12 text-center"><img src="'+response.image+'" class="img-fluid" style="width:256px;height:256px;"></div>';
                html+='<div class="col-md-12"><h4>'+response.category+' <span class="float-right">'+response.rating.rate+'('+response.rating.count+')</span></h4></div>';
                html+='<div class="col-md-12"><h5>'+response.title+'</h5></div>';
                html+='<div class="col-md-12"><h6>₹ '+response.price+'</h6>   </div>';
                html+='<div class="col-md-12"><p>'+response.description+'</p></div>';
                html+='</div>';

                $('#productdetail').html(html);

                $('#staticBackdrop').modal('show');
            }
        })
        });



      });