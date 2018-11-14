<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:69:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/pre_sale_list.dwt";i:1;s:77:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/pre_sale_list.lbi";i:2;s:69:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/pages.lbi";i:3;s:75:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/page_footer.lbi";}s:7:"expires";i:1542183777;s:8:"maketime";i:1542181977;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>预售活动_生鲜超市</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/shengxian/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/shengxian/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/shengxian/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/shengxian/js/jquery.min.js"></script> 
<script type="text/javascript" src="themes/shengxian/js/jquery.json.js"></script> 
<script type="text/javascript" src="themes/shengxian/js/transport_jquery.js"></script>
<script type="text/javascript" src="themes/shengxian/js/jquery.countdown-2.5.3.min.js"></script> 
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header" style="z-index:1">
    <div class="header_l"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
    <h1> 预售活动 </h1>
  </header>
      <div id="J_ItemList" class="srp album flex-f-row" style="opacity:1;">
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="pre_sale.php?id=1" style="display:block;font-size:0px;"> <img src="/images/201707/thumb_img/14_thumb_G_1498962975550.jpg" alt="烟台红富士5斤礼盒装"> </a> </div>
          <div class="protime"><font id="ps_cd_14"></font><font id="ps_label_14" over="false">结束未处理</font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2017, 07-1, 07, 00, 00, 00);
				            					   	           	//if(14 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "2";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_14").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_14").html("");
					   	    				$("#ps_label_14").html("后结束");
					   	    				$("#ps_label_14").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2017, 07-1, 07, 00, 00, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_14").html("");
					   	    				$("#ps_label_14").html("活动已结束");
					   	    				$("#ps_label_14").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="pre_sale.php?id=1" >烟台红富士5斤礼盒装</a> </div>
            <div class="proPrice"> 
              <em>￥<span>36.00</span></em> 
            </div>
            <div class="proSales"><em>1</em>人预定</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="pre_sale.php?id=2" style="display:block;font-size:0px;"> <img src="/images/201707/thumb_img/67_thumb_G_1498969691344.jpg" alt="金龙鱼 葵花食用调和油5L+花生浓香食用调和油5L"> </a> </div>
          <div class="protime"><font id="ps_cd_67"></font><font id="ps_label_67" over="false">后开始</font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2019, 07-1, 04, 00, 00, 00);
				            					   	           	//if(67 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "0";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_67").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_67").html("");
					   	    				$("#ps_label_67").html("后结束");
					   	    				$("#ps_label_67").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2020, 07-1, 11, 00, 00, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_67").html("");
					   	    				$("#ps_label_67").html("活动已结束");
					   	    				$("#ps_label_67").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="pre_sale.php?id=2" >金龙鱼 葵花食用调和油5L+花生浓香食用调和油5L</a> </div>
            <div class="proPrice"> 
              <em>￥<span>30.00</span></em> 
            </div>
            <div class="proSales"><em>0</em>人预定</div>
          </div>
        </div>
      </div>
       
       
            <div class="product flex_in single_item">
        <div class="pro-inner">
          <div class="proImg-wrap"> <a href="pre_sale.php?id=3" style="display:block;font-size:0px;"> <img src="/images/201707/thumb_img/15_thumb_G_1498963389239.jpg" alt="特级库尔勒香梨（大果）"> </a> </div>
          <div class="protime"><font id="ps_cd_15"></font><font id="ps_label_15" over="false">后结束</font></div>
							<script type="text/javascript">
				            $().ready(function(){
				            	countdown.setLabels(
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '毫秒|秒|分|小时|天| 周| 月| 年| 十年| 世纪| 千年',
				   	   				 '',//秒连接符
				   	   				 '',//其他时间连接符
				   	   				 'End',
				   	   				 function(n){ return n.toString()
				   	   			});
				            					   	           	var endDate = new Date(2021, 07-1, 08, 00, 00, 00);
				            					   	           	//if(15 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	var status = "1";
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
					   	           	$("#ps_cd_15").html(ts.toString());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中->预售中
				   	    				if(ts == "End"){
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_15").html("");
					   	    				$("#ps_label_15").html("后结束");
					   	    				$("#ps_label_15").attr("over", true);
					   	    				status = 1;
					   	    				endDate = new Date(2021, 07-1, 08, 00, 00, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//预售中->活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_15").html("");
					   	    				$("#ps_label_15").html("活动已结束");
					   	    				$("#ps_label_15").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
			            </script>
          <div class="proInfo-wrap">
            <div class="proTitle"> <a href="pre_sale.php?id=3" >特级库尔勒香梨（大果）</a> </div>
            <div class="proPrice"> 
              <em>￥<span>20.00</span></em> 
            </div>
            <div class="proSales"><em>1</em>人预定</div>
          </div>
        </div>
      </div>
       
       
    </div>
    </div>
<section class="list-pagination">
    <div class="pagenav-wrapper" id="J_PageNavWrap" style="">
      <div class="pagenav-content">
        <div class="pagenav" id="J_PageNav" style="display:flex; text-align:center;">
          <div class="p-prev p-gray"> 
                             <a  class="no">首页</a> 
                        </div>
          <div class="p-prev p-gray"> 
                            <a class="no">上一页</a>   
                          </div>
          <div class="pagenav-cur">
            <div class="pagenav-text"> <span>1/1</span> <i></i> </div>
            <select name="page" class="pagenav-select" onchange="window.location.href=this.options[this.selectedIndex].value" >
                            
              <option value="pre_sale.php?act=list&page=1">1</option>
                                    </select>
          </div>
          <div class="p-next p-gray" > 
          	              <a class="no">下一页</a> 
                        </div>
          <div class="p-end p-gray">
                      <a class="no">末页</a> 
                      </div>
        </div>
      </div>
    </div>
</section><div id="content" class="footer mr-t20">
  
    <p class="region">&copy; 2012-2018 生鲜超市 版权所有，并保留所有权利。 </p>
    <p class="region"> 
     
    ICP备案证书号: <a href="http://www.miibeian.gov.cn/" target="_blank"> 粤ICP备12061602号 </a> 
    	</p>
<div style="height:5em"></div>
</div>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i>
                <span class="global-nav__nav-tit">分类</span>
            </a>
        </div>
<!--        <div class="global-nav__nav-item">
            <a href="javascript:get_search_box();" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i>
                <span class="global-nav__nav-tit">搜索</span>
            </a>
        </div>-->
        <div class="global-nav__nav-item">
            <a href="flow.php?step=cart" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
</div>
<div id="toTop" class="toTop">
  <img alt="" src="themes/shengxian/images/scropTop.png">
</div>
<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}
	var offset = $("#toTop").offset();		
	var bottom = $("#toTop").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#toTop").fadeIn(800);
			
			if(isIe6)
			{			
				$("#toTop").css("position","absolute")	
				$("#toTop").css("bottom",bottom)
			}
		}
		else
		{
			$("#toTop").fadeOut(500);
		}
		
	});
	
	$("#toTop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
})
</script>
<script type="text/javascript" src="themes/shengxian/js/zepto.min.js"></script>
<script type="text/javascript">
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){
     $nav.removeClass('global-nav--current');
   }
   
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script> </div>
<script type="text/javascript" src="themes/shengxian/js/jquery.more.js"></script> 
<script type="text/javascript" src="themes/shengxian/js/ectouch.js"></script> 
</body>
</html>