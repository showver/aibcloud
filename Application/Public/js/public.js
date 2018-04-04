/*-----  H5图片预览  -----*/    
    function change(m,n) {
        var pic = document.getElementById(m),
        file    = document.getElementById(n);

         // gif在IE浏览器暂时无法显示
         /*if(ext!='png'&&ext!='jpg'&&ext!='jpeg'){
             alert("图片的格式必须为png或者jpg或者jpeg格式！"); 
             return;
         }*/
         var isIE = navigator.userAgent.match(/MSIE/)!= null,
         isIE6    = navigator.userAgent.match(/MSIE 6.0/)!= null;

         if(isIE) {
            file.select();
            var reallocalpath = document.selection.createRange().text;

            // IE6浏览器设置img的src为本地路径可以直接显示图片
             if (isIE6) {
                pic.src = reallocalpath;
             }else {
                // 非IE6版本的IE由于安全问题直接设置img的src无法显示本地图片，但是可以通过滤镜来实现
                 pic.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='image',src=\"" + reallocalpath + "\")";
                 // 设置img的src为base64编码的透明图片 取消显示浏览器默认图片
                 pic.src = 'data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==';
             }
         }else {
            html5Reader(file);
            function html5Reader(file){
                var file = file.files[0];
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e){
                    var pic = document.getElementById(m);
                    pic.src=this.result;
                }
                // pic.src = window.URL.createObjectURL(file);
            }
         }
         // html5Reader(file);
    }

     

/*-----  正则验证  -----*/
    function zzyz( x, y, tip_right, tip_wrong){
        //定义一个数组，存储各个输入框的验证值，默认设为false；
         reg = new Array();
        reg['username'] = 'false';
        reg['eamil'] = 'false';
        reg['password'] = 'false';
        reg['rpwd'] = 'false';
        reg['qq'] = 'false';
        reg['phnumber'] = 'false';

        $(x).blur(function(){
           
                   
            var a = $(this).attr('name');

            var temp1 = '<span style="color: green">'
                        +'<i class="icon icon-ok"></i>'
                        +'&nbsp;&nbsp;<b>'+tip_right
                        +'</b></span>';
            var temp2 = '<span style="color:red;">'
                        +'<i class="icon icon-remove"></i>'
                        +'&nbsp;&nbsp;<b>'+tip_wrong
                        +'</b></span>';
            var value = $(x).val();
            var leng = value.length;

             

            if( typeof(y)=='string'){
                var value2 = $(y).val();
                if ( leng <= 0 || !( value == value2 ) ) {
                    $(this).siblings('span').remove();
                    $(this).parent().append(temp2);
                    // alert(1);
                      reg[a]='false';
                    return regx=false;
                }else{
                    $(this).siblings('span').remove();
                    if (tip_right) {
                        $(this).parent().append(temp1);
                    }
                    // alert(2);
                    
                      reg[a]='true';
                    return regx=true;
                }
            }else{

                if ( leng <= 0 || !y.test(value) ) {
                    $(this).siblings('span').remove();
                    $(this).parent().append(temp2);
                    // alert(3);
                      reg[a]='false';
                     
                     
                    return regx=false;
                }else{
                    $(this).siblings('span').remove();
                    
                    if (tip_right) {
                        $(this).parent().append(temp1);
                    }
                    // alert(4);
                      reg[a]='true';
                    return regx=true;
                }
            }
          
        });
    }

/*-----  nav hoverdown  -----*/
    function navHover( hoverObj, showObj ){

        // var height = eval($(showObj).height()+40)+'px';

        $( hoverObj ).on({

            mouseenter:function(){

                $( showObj ).css('visibility','visible');
                // $( '#hoverdown' ).css('visibility','visible');
                // $( '#hoverdown' ).css('height',height);
            },

            mouseleave:function(){

                timer=setTimeout(function(){
                    $( showObj ).css('visibility','hidden');
                    // $( '#hoverdown' ).css('visibility','hidden');
                },100);

                $( showObj ).on({

                    mouseenter:function(){
                        clearTimeout(timer);
                    },

                    mouseleave:function(){
                        $( showObj ).css('visibility','hidden');
                        // $( '#hoverdown' ).css('visibility','hidden');
                    }

                });
            }
        });
    }

/*-----  getCenterXY  -----*/
    function getPosition(obj){
        //获得当前IE窗口可视区域中心点
        alert(55);
       var x=$(window).width()/2;
       var y=$(window).height()/2;

       //获得div的宽度一半，高度一半
       var div_w=$("#"+divId).width()/2;
       var div_h=$("#"+divId).height()/2;


       //获得滚动条偏移量
       var stop=$("body").scrollTop();
       var sleft=$("body").scrollLeft();

        alert($(this).text());

       //获得最终div显示位置
       var left=x-div_w+sleft+"px";
       var top=y-div_h+stop+"px";

       //设置 div 样式
       $("#"+divId).css({left:left,top:top});

       //显示面板
       $("#"+divId).fadeIn(200);
    }


$(function() {
/*----- nav  hover underline -----*/
    $(".nav-content>ul>li>a").mouseenter(function(){
        var parent=$(this).parent();
        var left=parent.position().left;
        var width=parent.css('width');
        $(".back").stop(true,true).animate({left:left,width:width}, "fast");
        $(".back").css("background-color","#F00");//鼠标放上去色块颜色改变
    });
    $(".nav-content>ul>li>a").mouseleave(function(){
        var parent=$(this).parent();
        var left=parent.position().left;
        var width=parent.css('width');
        $(".back").stop(true,true).animate({left:left,width:width},"fast");

    });
    $(".nav-content>ul").mouseleave(function(){
        $(".back").css("background-color","#0CF");//鼠标放上去色块颜色改变
    });



/*----- nav  hover show -----*/
    navHover( '#hoverdown-1', '#showdown-1');
    navHover( '#hoverdown-2', '#showdown-2');
    navHover( '#hoverdown-3', '#showdown-3');








});

