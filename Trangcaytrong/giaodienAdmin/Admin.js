$(document).ready(function(){ 
//chuột phải
// alert("hek");
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
        $.ajax({
                    url : "../Dele_Dmsp.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         id : $(i).children('.id_dmsp').html(),
                    },
                    success : function (result){
                        $(i).remove();
                    }
                });
    });
    $('#edit').click(function(){
        $('.rename').css("display","flex");
        $('.black').css("display","block");
        $('.nameDmsp').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
                if($('.nameDmsp').val()!='')
            {
                $.ajax({
                    url : "../Change_dmsp.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         id : $(i).children('.id_dmsp').html(),
                         name:$('.nameDmsp').val()
                    },
                    success : function (result){
                        $(i).children('span:eq(0)').html(result);
                        $('.nameDmsp').val('');
                        $('.rename').css("display","none");
                        $('.black').css("display","none");
                    }
                });
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
                $.ajax({
                    url : "../AdDmSP.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         name : $('.name_new').val(),
                    },
                    success : function (result){
                        //alert(result);
                        var a=$('.menu1 button:eq(0)').clone();
                        a.html(result);
                        $(a).css("display","block");
                        $('.menu1').append(a)
                        $('.name_new').val('');
                        $('.new_dmsp').css("display","none");
                        $('.black').css("display","none");
                    }
                });
            }
        }
    });
$('#bodySP').on("click",'.Edit',function(){
     location.href='./CapnhatthongtinSP.php?idSanpham='+$(this).parent().children('td:eq(0)').html();
});
// $('.Edit').click(function(){
//         location.href='./CapnhatthongtinSP.html'
//     });
$('.Editbaiviet').click(function(){
        location.href='./Changebaiviet.php?idbv='+$(this).parent().children('td:eq(0)').html();
    });
$('#bodySP').on("click",'.DeleSP',function(){
    $.ajax({
                    url : "../Dele_SP.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         id : $(this).parent().children('td:eq(0)').html(),
                    },
                    success : function (result){
                        //$(this).parent().remove();
                    }
                });
     $(this).parent().remove();
    //alert("hello");
});
$('#body_BV').on("click",'.DeleBaiViet',function(){
    $.ajax({
                    url : "../Dele_BV.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         id : $(this).parent().children('td:eq(0)').html(),
                    },
                    success : function (result){
                        //$(this).parent().remove();
                    }
                });
     $(this).parent().remove();
});
// $('.DeleBaiViet').click(function(){

//         $(this).parent().remove();
//         //alert("hello");
//     });



// show sp
$('.menu1').on("click",'button',function(){
    i1=this;
    $.ajax({
                    url : "../show_SP.php",
                    type : "post",
                    dataType:"json",
                    data : {
                         idDMSP : $(i1).children('.id_dmsp').html(),
                    },
                    success : function (result){
                        $('#bodySP').html('');
                        //alert($(i1).children('.id_dmsp').html());
                        $.each (result, function (key, item){
                                var p=document.createElement("tr");
                                var c1=document.createElement("td");
                                var c2=document.createElement("td");
                                var c3=document.createElement("td");
                                var c4=document.createElement("td");
                                var c5=document.createElement("td");
                                $(p).append(c1);
                                $(p).append(c2);
                                $(p).append(c3);
                                $(p).append(c4);
                                $(p).append(c5);
                                $(p).children('td:eq(0)').html(item['id']);
                                $(p).children('td:eq(1)').html(item['name']);
                                $(p).children('td:eq(2)').html(item['gia']);
                                $(p).children('td:eq(3)').html("Edit");
                                $(p).children('td:eq(4)').html("Delete");
                                $(p).children('td:eq(4)').addClass('DeleSP');
                                $(p).children('td:eq(3)').addClass('Edit')
                                $(p).children('td:eq(3)').css("cursor","pointer");
                                $(p).children('td:eq(4)').css("cursor","pointer")
                                $('#bodySP').append(p);

                                // console.log(c.children('td:eq(0)').html(item['id']));
                            });
                    }
                });
    $('#addsp').css("display","block");
    $('#addsp').css("cursor","pointer");
    $('#addsp').click(function(){
        location.href='./ThongtinSP.php?idDMSP='+ $(i1).children('.id_dmsp').html();
        $('.thongtinsp input').value('');
    });


})
$('#post_ttBV').click(function(){
    // alert("hello");
        $.ajax({
                    url : "../Add_BV.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         Name : $(this).parent().children('input:eq(0)').val(),
                         mota: $(this).parent().children('textarea:eq(0)').val(),
                         anhmota: $(this).parent().children('input:eq(1)').val(),
                         noidung: $(this).parent().children('textarea:eq(1)').val(),
                         anhnoidung: $(this).parent().children('input:eq(2)').val(),
                         ketthuc: $(this).parent().children('textarea:eq(2)').val(),
                         anh_end: $(this).parent().children('input:eq(3)').val(),
                         status: $(this).parent().children('select:eq(0)').val()

                    },
                    success : function (result){
                        if(result=="hello"){
                        alert("Bạn đã đăng bài viết thành công");
                        location.href='./Quanlybaiviet.php';
                        }
                        else{
                            alert("Đăng bài viết không thành công,mời bạn kiểm tra xem đã điền đầy đủ thông tin chưa");

                        }
                        // alert(result);
                        
                    }
                })
                });
//change bài viết
$('#changebv').click(function(){
    // alert("hello");
        $.ajax({
                    url : "../change_BV.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         Id:$(this).parent().children('input:eq(0)').val(),
                         Name : $(this).parent().children('input:eq(1)').val(),
                         mota: $(this).parent().children('textarea:eq(0)').val(),
                         anhmota: $(this).parent().children('input:eq(2)').val(),
                         noidung: $(this).parent().children('textarea:eq(1)').val(),
                         anhnoidung: $(this).parent().children('input:eq(3)').val(),
                         ketthuc: $(this).parent().children('textarea:eq(2)').val(),
                         anh_end: $(this).parent().children('input:eq(4)').val(),
                         status: $(this).parent().children('select:eq(0)').val()

                    },
                    success : function (result){
                        if(result=="hello"){
                        alert("Bạn đã thay đổi thông tin bài viết  thành công");
                        location.href='./Quanlybaiviet.php';
                        }
                        else{
                            alert("sửa bài viết không thành công,mời bạn kiểm tra xem đã điền đầy đủ thông tin chưa");

                        }
                        // alert(result);
                        
                    }
                })
                });



})//đóng ready