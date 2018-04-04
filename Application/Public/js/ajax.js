$(function(){

	$isFirst=false;
    $html=$('.main_box').html();

    $('#MainBox').on('click','.openstack',function(){
        var app = $(this).attr('data-a');
        $.ajax({
           
            type: "post",
            cache:false, 
            url: "./openstack/app/"+app,
            success: function(msg){
                    $('.main_box').empty();
                    $('.main_box').html(msg);
                    $isFirst=true;
            },
            error:function(msg){
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.vsphere',function(){
        var app = $(this).attr('data-a');
        $.ajax({
           
            type: "post",
            cache:false, 
            url: "./vsphere/app/"+app,
            success: function(msg){
                $('.main_box').empty();
                $('.main_box').html(msg);
                $isFirst=true;
            },
            error:function(msg){
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.svn',function(){    
        var app = $(this).attr('data-a');
        $.ajax({
           
            type: "post",
            cache:false, 
            url: "./svn/app/"+app,
            success: function(msg){

                $('.main_box'). empty();
                $('.main_box').html(msg);
                $isFirst=true;
            },
            error:function(msg){
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.openstack_del',function(){
        var app = $(this).attr('data-a');
        $.ajax({
           
            type: "post",
            cache:false, 
            url: "./openstack/app/"+app+"/flag/1",
            success: function(msg){
                $('.main_box').empty();
                $('.main_box').html(msg);
                $isFirst=true;
            },
            error:function(msg){
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.vsphere_del',function(){
        var app = $(this).attr('data-a');
        $.ajax({
           
            type: "post",
            cache:false, 
             url: "./vsphere/app/"+app+"/flag/1",
            success: function(msg){
                $('.main_box').empty();
                $('.main_box').html(msg);
                $isFirst=true;
            },
            error:function(msg){
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.svn_del',function(){
        var app = $(this).attr('data-a');
        $.ajax({
           
            type: "post",
            cache:false, 
            url: "./svn/app/"+app+"/flag/1",
            success: function(msg){
                $('.main_box').empty();
                $('.main_box').html(msg);
                $isFirst=true;
            },
            error:function(msg){
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.course',function(){
        var id = $(this).attr('data-a');

        $.ajax({
           
            type: "post",
            cache:false, 
            url: "./develop/id/"+id,
            success: function(msg){
                $('.main_box').empty();
                $('.main_box').html(msg);
                $isFirst=true;
            },
            error:function(msg){ 
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.affiche',function(){

        $.ajax({
           
            type: "post",
            cache:false, 
            url: "index",
            success: function(msg){
                $('.main_box').empty();
                $('.main_box').html("<div class='mainbox'><div id='nav' class='mainnav_title'></div><div class='journey_title'><a href='javascript:;' onClick='option(51)'><img src='/cloud/application/public/img/images/back.png' style='float: left;'></a><p>公告内容</p></div><div class='message_board'><form action='?act=search' method='post'><p><span class='content bold'>公告内容：</span>经过了云计算小组的不懈努力，结果你猜，你猜我猜不猜，你猜我猜你猜不猜...经过了云计算小组的不懈努力，结果你猜，你猜我猜不猜，你猜我猜你猜不猜...经过了云计算小组的不懈努力，结果你猜，你猜我猜不猜，你猜我猜你猜不猜...经过了云计算小组的不懈努力，结果你猜，你猜我猜不猜，你猜我猜你猜不猜...</p><p><span class='bold'>发布时间：</span>2017年9月18日 13:25</p><input type='submit' value='删除' class='a_btn' onClick='courseDel()'></form></div></div>");
                $isFirst=true;
            },
            error:function(msg){ 
               
                console.log(msg);
            }
        });
    });

    $('#MainBox').on('click','.messageBoard',function(){
        var user = $(this).attr('data-a');
        $.ajax({
           
            type: "post",
            cache:false, 
            url: "./touchUs/u/"+user,
            success: function(msg){
                $('.main_box').empty();
                $('.main_box').html(msg);
                $isFirst=true;
            },
            error:function(msg){ 
               
                console.log(msg);
            }
        });
    });

	$('#leftMenu dd').click(function(){
		if($isFirst){
            let ddIndex=$(this).prop('id').slice(4,);
            $('.main_box').html($html);
            $('.main_box li').hide();
            $('.nav_'+ddIndex).show();
	    }

    	$isFirst=false;
	});
})