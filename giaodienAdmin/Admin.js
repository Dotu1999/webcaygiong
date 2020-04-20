$(document).ready(function(){ 

//chuột phải
$('.menu1').on('contextmenu','button',function(){

//$(".menu1 button").contextmenu(function(event){
    i=this;
	$('.mouse_right').css("display","block");
    var x=event.pageX;
    var y=event.pageY;
    $('.mouse_right').css("top",y+"px");
    $('.mouse_right').css("left",x+"px");
    event.preventDefault();
    $('#delete').click(function(){
        $(i).remove();
    });
    $('#edit').click(function(){
        $('.rename').css("display","flex");
        $('.black').css("display","block");
        $('.nameDmsp').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
                if($('.nameDmsp').val()!='')
            {
                $(i).html($('.nameDmsp').val());
                $('.nameDmsp').val('');
                $('.rename').css("display","none");
                $('.black').css("display","none");
            }
        }
    });
    });
})
$('body').click(function(){
        $('.mouse_right').css("display","none");
        //$('.rename').css("display","none");
        //$('.black').css("display","none");
    });
$('.black').click(function(){
        $('.mouse_right').css("display","none");
        $('.rename').css("display","none");
        $('.black').css("display","none");
        $('.new_dmsp').css("display","none");
    });
$('#add_dmsp').click(function(){
        $('.new_dmsp').css("display","flex");
        $('.black').css("display","block");
        //alert("hello");
    });
$('.name_new').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
                if($('.name_new').val()!='')
            {
                var a=$('.menu1 button:eq(0)').clone();
                a.html($('.name_new').val());
                $(a).css("display","block");
                $('.menu1').append(a)
                $('.name_new').val('');
                $('.new_dmsp').css("display","none");
                $('.black').css("display","none");
            }
        }
    });
$('.Edit').click(function(){
        location.href='./CapnhatthongtinSP.html'
    });
$('.Editbaiviet').click(function(){
        location.href='./Changebaiviet.html'
    });
$('.DeleSP').click(function(){
        $(this).parent().remove();
        //alert("hello");
    });
$('.DeleBaiViet').click(function(){
        $(this).parent().remove();
        //alert("hello");
    });
})//đóng ready