<?php exit;?>a:3:{s:8:"template";a:4:{i:0;s:61:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/goods.dwt";i:1;s:81:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/goods_choose_attr.lbi";i:2;s:72:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/comments.lbi";i:3;s:75:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/page_footer.lbi";}s:7:"expires";i:1542195379;s:8:"maketime";i:1542193579;}<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta charset="utf-8" />
<title>新鲜猪扒肉_猪肉_肉蛋速食_精选优品_生鲜超市</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/shengxian/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/shengxian/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/shengxian/style.css" rel="stylesheet" type="text/css" />
 
<style>
.user_top_goods {
height: 5rem;
overflow: hidden; 
background:#ffbf6b;
position:relative
}
.user_top_goods dt {
float: left;
margin: 0.8rem 0.8rem 0;
text-align: center;
position: relative;
width: 3.7rem;
height: 3.7rem;
border-radius: 3.7rem;
padding:0.15rem; background:#FFFFFF
}
.user_top_goods dt img {
width: 3.7rem;
height:3.7rem;
border-radius: 3.7rem;
}
.guanzhu {
background-color: #ffbf6b;
}
.guanzhu {
color: #fff;
border: 0;
height: 2.5rem;
line-height: 2.5rem;
width: 100%;
-webkit-box-flex: 1;
display: block;
-webkit-user-select: none;
font-size: 0.9rem;
}
#cover2 {
    background-color: #333333;
    display: none;
    left: 0;
    opacity: 0.8;
    position: absolute;
    top: 0;
    z-index: 1000;
}
#share_weixin, #share_qq {
    right: 10px;
    top: 2px;
    width: 260px;
}
#share_weixin, #share_qq, #share_qr {
    display: none;
    position: fixed;
    z-index: 3000;
}
#share_weixin img, #share_qq img {
    height: 165px;
    width: 260px;
}
		.button_3 {
    background-color: #EEEEEE;
    border: 1px solid #666666;
    color: #666666;
    font-size: 16px;
    line-height: 20px;
    padding: 10px 0;
    text-align: center;
}
#share_weixin button, #share_qq button {
    margin-top: 25px;
    width: 100%;
}
</style>
 
<script type="text/javascript" src="js/magiczoom_plus.js" ></script>
<script type="text/javascript" src="js/common1.js">
</script>
<script type="text/javascript" src="data/static/js/jquery-1.9.1.min.js"></script><script type="text/javascript" src="themes/shengxian/js/jquery.json.js"></script>
<script type="text/javascript">
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}
</script>
<script language="javascript">
function shows_number(result)
{
     if(result.product_number !=undefined){
         document.getElementById('shows_number').innerHTML = result.product_number+'件';
     }else{
         document.getElementById('shows_number').innerHTML = '无库存';
     }
}
//默认就显示第一个属性库存
function changeKucun()
{
var frm=document.forms['ECS_FORMBUY'];
spec_arr = getSelectedAttributes(frm);
    if(spec_arr==''){
	 var shows_kucun_number = document.getElementById('shows_number');
	 if (shows_kucun_number)
	 {
	   shows_kucun_number.innerHTML = '2997件';
	 }
    }else{
         Ajax.call('goods.php?act=get_products_info', 'id=' + spec_arr+ '&goods_id=' + goods_id, shows_number, 'GET', 'JSON');
    }
}
</script>
</head>
<body>
<header id="header">
  <div class="header_l header_return"> <a class="ico_10" href="cat_all.php"> 返回 </a> </div>
  <h1> 商品详情 </h1>
</header>
 
<script src="themes/shengxian/js/TouchSlide.js"></script>
<section class="goods_slider">
  <div id="slideBox" class="slideBox">
    <div class="scroller"> 
      <!--<div><a href="javascript:showPic()"><img src="images/201707/thumb_img/102_thumb_G_1499030381370.jpg"  alt="新鲜猪扒肉" /></a></div>-->
      <ul>
         
         
              <li><a href="javascript:showPic()"><img style="width:100%;height:auto;" src="/images/201707/goods_img/102_P_1499030381751.jpg" /></a></li>
         
              <li><a href="javascript:showPic()"><img style="width:100%;height:auto;" src="/images/201707/goods_img/102_P_1499046301985.jpg" /></a></li>
         
              <li><a href="javascript:showPic()"><img style="width:100%;height:auto;" src="/images/201707/goods_img/102_P_1499046301649.jpg" /></a></li>
         
              <li><a href="javascript:showPic()"><img style="width:100%;height:auto;" src="/images/201707/goods_img/102_P_1499046302153.jpg" /></a></li>
         
              <li><a href="javascript:showPic()"><img style="width:100%;height:auto;" src="/images/201707/goods_img/102_P_1499046302330.jpg" /></a></li>
                      </ul>
    </div>
    <div class="icons">
      <ul>
        <i class="current"></i> 
         
         
        <i class="current"></i> 
         
        <i class="current"></i> 
         
        <i class="current"></i> 
         
        <i class="current"></i> 
         
        <i class="current"></i> 
         
              </ul>
    </div>
  </div>
  <a class="collect" id="collect_box" href="javascript:collect(102)" style="display: inline;"></a>
</section>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#slideBox",
	titCell:".icons ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".scroller ul", 
	effect:"leftLoop", 
	autoPage:true,//自动分页
	autoPlay:true //自动播放wq
});
function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script> 
 
<section class="goodsInfo_title">
  <div class="blank1"></div>
  <ul>
    <li>
         	<b class="price">￥<span>30.0</span></b>
       
           <p class="xiaoliang">已售出 <span class="sales">101</span> </p>
    </li>
  </ul>
  <div class="blank1"></div>
  <h1> 新鲜猪扒肉 </h1>
  <div class="blank1"></div>
    <div class="brief">
     
  </div>
  <div class="blank1"></div>
</section>
<div class="blank2"></div>
  
<section class="goodsInfo_time">
		<script type="text/javascript" src="themes/shengxian/js/jquery.countdown-2.5.3.min.js"></script>
		  <ul>
		    <li><span class="time_title">限时秒杀</span> <span class="time"><time class="countdown" id="timedown"><font id="ps_labels_102" over="false"></font><strong id="ps_cd_102" style="color:#abd012;">请稍等, 正在载入中...</strong><font id="ps_labele_102" over="false"></font></time></span> </li>
		  </ul>
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
				            					   	           	var endDate = new Date(2023, 07-1, 09, 17, 37, 00);
				   	           	var status = "1";
							$("#ps_labels_102").html("还剩");
							$("#ps_labele_102").html("结束");
				            					            					   	           	//if(102 == 62){
				   	           	//	endDate = new Date(2015, 6, 29, 12, 09);
				   	           	//}
				   	           	
				   	           	
				   	         	var timerId = null;
				   	           	
				   	           	function countdown_callback(ts){
							//alert(ts);
					   	           	$("#ps_cd_102").html(ts.toString());
				   	    			//alert($("#ps_cd_102").html());
				   	    			
				   	    			if(status == 0){
				   	    				//预热中-&gt;秒杀中
				   	    				if(ts == "End"){
			Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_102").html("");
					   	    				//$("#ps_label_102").html("销售中");
					   	    				$("#zhuangtai102").removeClass("weikaishi");
					   	    				$("#zhuangtai102").addClass("jinxinzhong");
					   	    				$("#ps_labels_102").attr("over", true);
					   	    				$("#ps_labele_102").attr("over", true);
							$("#ps_labels_102").html("还剩");
							$("#ps_labele_102").html("结束");
					   	    				status = 1;
					   	    				endDate = new Date(2023, 07-1, 09, 17, 37, 00);
					   	    				timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
					   	    			}
				   	    			}else{
				   	    				//秒杀中-&gt;活动已结束
				   	    				if(ts == "End" || new Date().getTime() > endDate.getTime()){
					   	    				window.clearInterval(timerId);
					   	    				$("#ps_cd_102").html("");
					   	    				$("#ps_labels_102").html("活动已结束");
										Ajax.call('index.php?act=clear_cache', 'POST', 'JSON');
					   	    				$("#nowbuy").html("活动已结束");
										$('#buy_btn').attr('href','javascript:void(0);');
					   	    				$("#ps_labele_102").html("");
					   	    				$("#ps_labels_102").attr("over", true);
					   	    				$("#ps_labele_102").attr("over", true);
					   	    			}
				   	    			}
				   	           	}
				   	           	
				   	            timerId = countdown(countdown_callback, endDate, countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS);
				            });
		</script>		
</section>
<div class="blank2"></div>
<section class="goodsInfo_user_service">
  <ul>
    <li class="goodsInfo_li_more"><span class="goodsInfo_li_title">会员优惠</span></li>
  </ul>
</section>
<section id="choose_good_user" style="height:0; overflow:hidden;">
    <section class="good_user_service">
        <h2>会员享受优惠价格</h2>
        <ul>
	            <li>
                <p class="p_left">QQ用户：￥<span>38.0</span></p>
	    </li>
	            <li>
                <p class="p_left">一星用户：￥<span>36.1</span></p>
	    </li>
	            <li>
                <p class="p_left">二星用户：￥<span>34.2</span></p>
	    </li>
		            <li>
                <p class="p_left">购买此商品可使用：3800积分</p>
	    </li>
			        </ul>
    </section>
    <div class="goods_shut"><a href="javascript:void(0)" id="close_choose_good_user_service" class="shut" style=" color:#FFF;font-size:18px;">确定</a></div>
</section>
<section class="goodsInfo_canshu">
  <ul>
    <li class="goodsInfo_li_more"><span class="goodsInfo_li_title">商品参数</span></li>
  </ul>
</section>
<section id="choose_good_canshu" style="height:0; overflow:hidden;">
    <section class="good_canshu">
        <h2>商品详细参数</h2>
        <ul>
            <li>
                <p class="p_left">商品名称：</p><p class="p_right">新鲜猪扒肉</p>
	    </li>
	                <li>
                <p class="p_left">商品编号：</p><p class="p_right">MDZ000102</p>
	    </li>
	    	    	                <li>
                <p class="p_left">上架时间：</p><p class="p_right">2017-07-03</p>
	    </li>
	    	                <li>
                <p class="p_left">商品重量：</p><p class="p_right">0克</p>
	    </li>
	    	    	      	        		    <li>
			<p class="p_left">产地：</p><p class="p_right">四川</p>
		    </li>
	        		    <li>
			<p class="p_left">来源：</p><p class="p_right">国产</p>
		    </li>
	        	      	            </ul>
    </section>
    <div class="goods_shut"><a href="javascript:void(0)" id="close_choose_canshu" class="shut" style=" color:#FFF;font-size:18px;">确定</a></div>
</section>
<div class="wrap">
  <section class="goodsBuy">
        <section class="goodsInfo_buyinfo" onclick="choose_attr(0)">
      <ul>
        <li class="goodsInfo_li_more"><span class="goodsInfo_li_title">请选择&nbsp;&nbsp;&nbsp;&nbsp;部位 / 规格</span></li>
      </ul>
    </section>
        <form action="javascript:addToCart(102)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
	<section class="f_block" id="choose_attr" style="height:0; overflow:hidden;">
	
<div class="f_title_attr">
<img  id="ECS_GOODS_ATTR_THUMB" src="/images/201707/thumb_img/102_thumb_G_1499030381370.jpg" style=" float:left;">
<div class="f_title_arr_r">
<span>价格：<i id="ECS_GOODS_AMOUNT">0</i></span>
 
    
     <span>库存：<i id="shows_number">载入中···</i></span>
    
<span>销量：<i>101</i></span>
<span id="ECS_GOODS_ATTR"></span>
</div>
<a class="c_close_attr" href="javascript:void(0)" onclick="close_choose_attr();"></a>
<div style="height:0px; line-height:0px; clear:both;"></div>
</div>
<div class="f_content_attr">
<ul class="navContent" style="display:block;"> 
               
              		<li>
		<div class="title">部位</div>
                <div class="items"> 
                   
                   
                   
                  
                  <input type="hidden" name="spec_attr_type" value="6">
                  <ul class="ys_xuan" id="xuan_6">
                    <div class="catt" id="catt_6"> 
                       
                      <a href="javascript:" class="cattsel" onclick="show_attr_status(this,102);" name="3" id="xuan_a_3">
		      <p class="padd" title="大腿肉">
		      		      <img src="/images/201707/goods_img/102_G_1499046326895.jpg" id="spec_img_3" width="40" height="40" alt="大腿肉">
		      			  <i></i></p>
			   <input style="display:none" id="spec_value_3" type="radio" name="spec_6" value="3" checked />
                      </a> 
                       
                      <a href="javascript:"  onclick="show_attr_status(this,102);" name="4" id="xuan_a_4">
		      <p class="padd" title="小腿肉">
		      		      <img src="/images/201707/goods_img/102_G_1499046336288.jpg" id="spec_img_4" width="40" height="40" alt="小腿肉">
		      			  <i></i></p>
			   <input style="display:none" id="spec_value_4" type="radio" name="spec_6" value="4"  />
                      </a> 
                       
                    </div>
                  </ul>
                  <input type="hidden" name="spec_list" value="1" />
                   
                   
                   
                </div>
              		<li>
		<div class="title">规格</div>
                <div class="items"> 
                   
                   
                   
                  
                  <input type="hidden" name="spec_attr_type" value="7">
                  <ul class="ys_xuan" id="xuan_7">
                    <div class="catt" id="catt_7"> 
                       
                      <a href="javascript:" class="cattsel" onclick="show_attr_status(this,102);" name="5" id="xuan_a_5">
		      <p class="padd" title="500G">
		      		      <img src="/images/201707/goods_img/102_G_1499046344353.jpg" id="spec_img_5" width="40" height="40" alt="500G">
		      			  <i></i></p>
			   <input style="display:none" id="spec_value_5" type="radio" name="spec_7" value="5" checked />
                      </a> 
                       
                      <a href="javascript:"  onclick="show_attr_status(this,102);" name="6" id="xuan_a_6">
		      <p class="padd" title="1000G">
		      		      <img src="/images/201707/goods_img/102_G_1499046352886.jpg" id="spec_img_6" width="40" height="40" alt="1000G">
		      			  <i></i></p>
			   <input style="display:none" id="spec_value_6" type="radio" name="spec_7" value="6"  />
                      </a> 
                       
                      <a href="javascript:"  onclick="show_attr_status(this,102);" name="7" id="xuan_a_7">
		      <p class="padd" title="2000G">
		      		      <img src="/images/201707/goods_img/102_G_1499046359779.jpg" id="spec_img_7" width="40" height="40" alt="2000G">
		      			  <i></i></p>
			   <input style="display:none" id="spec_value_7" type="radio" name="spec_7" value="7"  />
                      </a> 
                       
                    </div>
                  </ul>
                  <input type="hidden" name="spec_list" value="2" />
                   
                   
                   
                </div>
               
               
              <script type="text/javascript">
var myString=new Array();
myString[0]="|3|5|";
myString[1]="|3|6|";
myString[2]="|3|7|";
myString[3]="|4|5|";
myString[4]="|4|6|";
myString[5]="|4|7|";
</script> 
               
              
<li>
        <div class="title1">数量</div>
        <div class="item1">
	   <span class="ui-number radius5" style="float:left;"> 
                        <button type="button" class="decrease radius5" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="2997" type="text" />
            <button type="button" class="increase radius5" onclick="changenum(1)">+</button>
             
           </span>
      </div>
      
    </li>        
</ul>
</div>
<div class="f_foot">
<input type="submit"  border="0" class="add_gift_attr" value="提交" />
<div style=" height:30px"></div>
</div>
	</section>
    </form>
  </section>
</div>
<script type="text/javascript">
//介绍 评价 咨询切换
var tab_now = 1;
function tab(id){
	document.getElementById('tabs' + tab_now).className = document.getElementById('tabs' + tab_now).className.replace('current', '');
	document.getElementById('tabs' + id).className = document.getElementById('tabs' + id).className.replace('', 'current');
	tab_now = id;
	if (id == 1) {
		document.getElementById('tab1').className = '';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 2) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = '';
		document.getElementById('tab3').className = 'hidden';
	}else if (id == 3) {
		document.getElementById('tab1').className = 'hidden';
		document.getElementById('tab2').className = 'hidden';
		document.getElementById('tab3').className = '';
	}
}
</script> 
<section class="s-detail">
  <header>
    <ul style="position: static;" id="detail_nav">
      <li id="tabs1" onClick="tab(1)" class="current"> 详情 </li>
      <li id="tabs2" onClick="tab(2)" class=""> 评价 <span class="review-count">(0)</span> </li>
      <li id="tabs3" onClick="tab(3)" class=""> 热销 </li>
    </ul>
  </header>
  <div id="tab1" class="">
<div class="spxq_main">
<style>
.spxq_main table {
    width: 100%;
}
.spxq_main table td {
    border: 1px solid #e5e5e5;
    padding: 5px 10px;
    background-color: #fff;
}
.spxq_main table td.th {
    background-color: #f5f5f5;
    font-weight: bold;
    text-align: right;
    width: 70px;
}
.spxq_main table td strong {
    font-weight: 400;
}
.spxq_main table td div, .spxq_main table td span {
    display: block;
    margin-bottom: 4px;
}
</style>
</div>
    <div class="desc wrap">
      <div class="blank2"></div>
	  
	  		<p>
	<a href="http://www.0769web.net"><img src="images/upload/Image/201606.jpg" alt="" /></a>
</p>	      </div>
  </div>
  <div id="tab2" class="hidden">
    <div class="wrap">
      <div class="blank2"></div>
      <script type="text/javascript" src="data/static/js/transportjq.js"></script><script type="text/javascript" src="data/static/js/utils.js"></script><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:102;}554fcae493e564ee0dc75bdf2ebf94ca</div>
 </div>
  </div>
  <div id="tab3" class="hidden">
    <div class="wrap">
      <ul class="m-recommend ">
        <div class="blank2"></div>
              </ul>
    </div>
  </div>
</section>
<div id="content" class="footer mr-t20">
  
    <p class="region">&copy; 2012-2018 生鲜超市 版权所有，并保留所有权利。 </p>
    <p class="region"> 
     
    ICP备案证书号: <a href="http://www.miibeian.gov.cn/" target="_blank"> 粤ICP备12061602号 </a> 
    	</p>
<div style="height:5em"></div>
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
</script> 
 
<script type="text/javascript">
var goods_id = 102;
var goodsattr_style = 1;
var gmt_end_time = 1751702400;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 102;
var now_time = 1542164779;
onload = function(){
  changePrice();
  changeKucun();//这里是添加的
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: '',
    timestamp: 1542193579,
    nonceStr: 'nwQE5QUZYXavQrtB',
    signature: '0cb9186bfc6414f97b71f7f509340b2f2d688f39',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage' 
    ]
  });
 wx.ready(function () {
	//青蜂网络监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '新鲜猪扒肉',
      desc: '新鲜猪扒肉',
      link: '',
      imgUrl: '/images/201707/thumb_img/102_thumb_G_1499030381370.jpg',
      trigger: function (res) {
		
				alert('糟糕，需要分销商登录才能获得提成哦！');
				
      },
      success: function (res) {
		      },
      cancel: function (res) {
        alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
	//分享到朋友圈青蜂网络
    wx.onMenuShareTimeline({
      title: '新鲜猪扒肉',
      desc: '新鲜猪扒肉',
      link: '',
      imgUrl: '/images/201707/thumb_img/102_thumb_G_1499030381370.jpg',
      trigger: function (res) {
			
        			alert('糟糕，需要分销商登录才能获得提成哦！');
		      },
      success: function (res) {
       	      },
      cancel: function (res) {
         alert('很遗憾，您已取消分享');
      },
      fail: function (res) {
        alert(JSON.stringify(res));
      }
    });
});
</script>
<section class="page_mask" style="display: none;"></section>
<section class="mdetail_bottom">
    <section class="collect bdbox">
        <a href="index.php"><img src="themes/shengxian/images/b2.png" width="50" height="50"></a>
    </section>
    <section class="cart bdbox">
        <a href="flow.php"><img src="themes/shengxian/images/b1.png" width="50" height="50"></a>
    </section>
    <section class="actions bdbox clearfix">
        <a id="addcartButton" onclick="choose_attr(0)" class="btn-popupSKU-addcart j-openPopupSKU" href="javascript:;">加入购物车</a>
        <a id="buyButton" onclick="choose_attr(1)" class="btn-popupSKU-buynow j-openPopupSKU" href="javascript:;">立刻购买</a>
    </section>
</section>
<script>
function choose_attr(num){
	document.body.style.overflow='hidden';
	$("#choose_attr").animate({height:'80%'},[10000]);
		var total=0,h=$(window).height(),
        top =$('.f_title_attr').height()||0,
		bottom =$('#choose_attr .f_foot').height()||0,
        con = $('.f_content_attr');
		total = 0.8*h;
		con.height(total-top-bottom+'px');
	$(".page_mask").show();
        if(num == 0){
            var actionForm = document.getElementById('ECS_FORMBUY');  
            actionForm.action = "javascript:addToCart(102),close_choose_attr()";
        }
        if(num == 1){
            var actionForm = document.getElementById('ECS_FORMBUY');  
            actionForm.action = "javascript:addToCart_quick(102),close_choose_attr()";
        }
}
function close_choose_attr(){	
document.body.style.overflow='';
	$(".page_mask").hide();	
	$('#choose_attr').animate({height:'0'},[10000]);
}
</script>
<script type="text/javascript">
$('.goodsInfo_volume_price').click(function(){
	$("#choose_good_volume_price").animate({height:'80%'},[10000]);
	$(".page_mask").show();
});
$('#close_choose_good_volume_price').click(function(){
	$(".page_mask").hide();
	$('#choose_good_volume_price').animate({height:'0'},[10000]);
});
$('.goodsInfo_user_service').click(function(){
	$("#choose_good_user").animate({height:'80%'},[10000]);
	$(".page_mask").show();
});
$('#close_choose_good_user_service').click(function(){
	$(".page_mask").hide();
	$('#choose_good_user').animate({height:'0'},[10000]);
});
$('.goodsInfo_canshu').click(function(){
	$("#choose_good_canshu").animate({height:'80%'},[10000]);
	$(".page_mask").show();
});
$('#close_choose_canshu').click(function(){
	$(".page_mask").hide();
	$('#choose_good_canshu').animate({height:'0'},[10000]);
});
</script>
</body>
</html>