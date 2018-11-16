<?php exit;?>a:3:{s:8:"template";a:9:{i:0;s:63:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/index.dwt";i:1;s:77:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/ad_position.lbi";i:2;s:85:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/recommend_promotion.lbi";i:3;s:75:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/group_buy.lbi";i:4;s:80:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/recommend_best.lbi";i:5;s:79:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/recommend_new.lbi";i:6;s:79:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/recommend_hot.lbi";i:7;s:75:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/cat_goods.lbi";i:8;s:77:"D:/wamp/wamp/www/new/newBegin/mobile/themes/shengxian/library/page_footer.lbi";}s:7:"expires";i:1542341899;s:8:"maketime";i:1542340099;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>丽花农产品</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="themes/shengxian/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="themes/shengxian/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/shengxian/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/shengxian/js/TouchSlide.js"></script>
<script type="text/javascript" src="themes/shengxian/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/shengxian/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="themes/shengxian/js/ectouch.js"></script>
<script type="text/javascript" src="themes/shengxian/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript">
  function getLocalTime(nS) {
    return new Date(parseInt(nS) * 1000).toLocaleString().replace(/:\d{1,2}$/, ' ');
  }
  function limitCount() {
    var a = limitCount.doms = limitCount.doms || $("#JS_limit_table div.JS_leaveTime");
    a.each(function() {
      var c = $(this);
      var b = c[0]._timeline = c[0]._timeline || c.data("timeline");
      c.html(limitFormatTime(b - limitCount.unixTime));
    });
  }
  function limitFormatTime(e) {
    if (e < 0) {
      e = 0;
    }
    var NowTime = new Date();
    var t = e * 1000 - (NowTime.getTime() + NowTime.getTimezoneOffset() * 60 *1000);
    /*var d=Math.floor(t/1000/60/60/24);
        t-=d*(1000*60*60*24);
        var h=Math.floor(t/1000/60/60);
        t-=h*60*60*1000;
        var m=Math.floor(t/1000/60);
        t-=m*60*1000;
        var s=Math.floor(t/1000);*/
    var d = Math.floor(t / 1000 / 60 / 60 / 24);
    if (d<10){
       d = '0' + d;
    }
    var h = Math.floor(t / 1000 / 60 / 60 % 24);
    if (h<10){
       h = '0' + h;
    }
    var m = Math.floor(t / 1000 / 60 % 60);
    if (m<10){
       m = '0' + m;
    }
    var s = Math.floor(t / 1000 % 60);
    if (s<10){
       s = '0' + s;
    }
    if (t < 0) {
    return "活动结束";
    }
    return '<em>'+ d + '</em>天' + '<em>' + h + '</em>时<em>' + m + '</em>分<em>' + s + '</em>秒';
  }
  function _COMMON_UNIX_TIME() {
    limitCount.unixTime = 0;
    setInterval(limitCount, 1000);
  }
  _COMMON_UNIX_TIME();
</script>
 
<style>
*{outline:0;-webkit-tap-highlight-color:transparent;-webkit-box-sizing:border-box;box-sizing:border-box}
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
 
</head>
<body>
<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <h1> 丽花农产品 </h1>
    <div class="header_r"> <a class="ico_01" href="flow.php"> 购物车 </a> </div>
  </header>
</div>
 
<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd">
    
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"1";s:3:"num";s:1:"4";}554fcae493e564ee0dc75bdf2ebf94ca
  </div>
  <div id="get_search_box" class="transparent">
    <div class="header-wrap"> <a href="javascript:void(0);" class="header-inp"> <i class="icon"></i> <span class="search-input" id="keyword" placeholder=""></span> </a> </div>
  </div>
</div>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#focus",
	titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".bd ul", 
	effect:"leftLoop", 
	autoPlay:true,//自动播放
	autoPage:true //自动分页
});
</script>
<div id=content>
  
  <div class="region row row_category">
    <ul class="flex flex-f-row">
            <li class="flex_in"> <a href="user.php" title="个人中心"> <div class="CarouselImg"><img src="data/item_pic/1443584373727011961.png" /></div> </a>
        <p> 个人中心 </p>
      </li>
                  <li class="flex_in"> <a href="distribute.php" title="分销中心"> <div class="CarouselImg"><img src="data/item_pic/1443586488909704319.png" /></div> </a>
        <p> 分销中心 </p>
      </li>
                  <li class="flex_in"> <a href="ectouch.php?act=contact" title="联系我们"> <div class="CarouselImg"><img src="data/item_pic/1443586300343329180.png" /></div> </a>
        <p> 联系我们 </p>
      </li>
                  <li class="flex_in"> <a href="exchange.php" title="积分商城"> <div class="CarouselImg"><img src="data/item_pic/1443586061863736586.png" /></div> </a>
        <p> 积分商城 </p>
      </li>
                </ul>
  </div>
  
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=1">
        生鲜食品<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    		  <div class="cat_ad"><a href="category.php?id=1" target="_blank"><img src="data/afficheimg/13.jpg" ></a></div>
        <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=7">
            蔬菜        </A>
                <A href="category.php?id=8">
            水果        </A>
                <A href="category.php?id=9">
            鲜肉/禽/蛋        </A>
                <A href="category.php?id=10">
            豆制品        </A>
                <A href="category.php?id=11">
            冷冻冷藏        </A>
                <A href="category.php?id=12">
            熟食系列        </A>
                <A href="category.php?id=13">
            海鲜／水产        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=2">
        粮油副食<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    		  <div class="cat_ad"><a href="category.php?id=2" target="_blank"><img src="data/afficheimg/16.jpg" ></a></div>
        <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=14">
            食用油        </A>
                <A href="category.php?id=15">
            米面／杂粮        </A>
                <A href="category.php?id=16">
            南北干货        </A>
                <A href="category.php?id=17">
            调料/佐料        </A>
                <A href="category.php?id=18">
            罐头/腌菜        </A>
                <A href="category.php?id=19">
            方便速食        </A>
                <A href="category.php?id=20">
            婴幼食品        </A>
                <A href="category.php?id=21">
            冲调谷物        </A>
                <A href="category.php?id=22">
            茶叶/咖啡        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=3">
        休闲零食<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    		  <div class="cat_ad"><a href="category.php?id=3" target="_blank"><img src="data/afficheimg/12.jpg" ></a></div>
        <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=23">
            休闲零食        </A>
                <A href="category.php?id=24">
            饼干糕点        </A>
                <A href="category.php?id=25">
            地方特产        </A>
                <A href="category.php?id=26">
            干果蜜饯        </A>
                <A href="category.php?id=27">
            糖果巧克力        </A>
                <A href="category.php?id=28">
            散装休闲食品        </A>
                <A href="category.php?id=29">
            保健/礼品        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=4">
        酒水茶饮<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
        <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=32">
            啤酒/果酒        </A>
                <A href="category.php?id=33">
            滋补酒        </A>
                <A href="category.php?id=34">
            洋酒        </A>
                <A href="category.php?id=35">
            饮料        </A>
                <A href="category.php?id=36">
            牛奶乳品        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=5">
        营养保健<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    		  <div class="cat_ad"><a href="category.php?id=5" target="_blank"><img src="data/afficheimg/14.jpg" ></a></div>
        <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=37">
            基础营养        </A>
                <A href="category.php?id=38">
            滋补养生        </A>
                    </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=6">
        精选优品<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    		  <div class="cat_ad"><a href="category.php?id=6" target="_blank"><img src="data/afficheimg/11.jpg" ></a></div>
        <div class="flex flex-f-row">
            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=39">
            肉蛋速食        </A>
                <A href="category.php?id=40">
            助兴酒水        </A>
                <A href="category.php?id=41">
            家居清洁类        </A>
                <A href="category.php?id=42">
            礼品专区        </A>
                <A href="category.php?id=43">
            聚会零食        </A>
                <A href="category.php?id=44">
            柴米油盐        </A>
                <A href="category.php?id=45">
            新鲜水果        </A>
                <A href="category.php?id=46">
            冲调饮品        </A>
                <A href="category.php?id=47">
            南北干货        </A>
                    </div>
</section>
</div>
<div class="blank2"></div>
<div class="mainCon">
	<div class="bottom_ad">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"11";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
	</div>
</div>
 
<div id="content" class="footer mr-t20">
  
    <p class="region">&copy; 2012-2018 丽花农产品 版权所有，并保留所有权利。 </p>
    <p class="region"> 
    	</p>
<div style="height:5em"></div>
</div>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link global-nav__nav-cur">
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
</script> 
<nav id="menu">
  <ul>
        <li> <a href="category.php?id=5"> 营养保健 </a>
      <ul>
                <li> <a href="category.php?id=37"> 基础营养 </a>
          <ul>
                        <li> <a href="category.php?id=269"> 维生素 </a> </li>
                        <li> <a href="category.php?id=270"> 钙/铁/锌/硒/铬 </a> </li>
                        <li> <a href="category.php?id=271"> 卵磷脂/鱼油 </a> </li>
                        <li> <a href="category.php?id=272"> 膳食纤维 </a> </li>
                        <li> <a href="category.php?id=273"> 螺旋藻 </a> </li>
                        <li> <a href="category.php?id=274"> 蛋白粉 </a> </li>
                        <li> <a href="category.php?id=275"> 植物精华 </a> </li>
                        <li> <a href="category.php?id=276"> 左旋肉碱 </a> </li>
                        <li> <a href="category.php?id=277"> 胶原蛋白 </a> </li>
                        <li> <a href="category.php?id=278"> 葡萄籽 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=38"> 滋补养生 </a>
          <ul>
                        <li> <a href="category.php?id=279"> 保健食品 </a> </li>
                        <li> <a href="category.php?id=280"> 阿胶 </a> </li>
                        <li> <a href="category.php?id=281"> 参类 </a> </li>
                        <li> <a href="category.php?id=282"> 冬虫夏草 </a> </li>
                        <li> <a href="category.php?id=283"> 更多滋补 </a> </li>
                        <li> <a href="category.php?id=284"> 健康礼盒 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
      </ul>
</nav>
<div id="main-search" class="main-search">
<div class="hd"> <span class="ico_08 close"> 关闭 </span> </div>
<div class="bd">
  <div class="search_box">
    <form action="search.php" method="post" id="searchForm" name="searchForm">
      <div class="content">
        <input class="text" type="search" name="keywords" id="keywordBox" autofocus />
        <button class="ico_07" type="submit" value="搜 索" onclick="return check('keywordBox')"></button>
      </div>
    </form>
  </div>
</div>
</div>
<script type="text/javascript">
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})
});
</script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
  wx.config({
    debug: false,
    appId: '',
    timestamp: 1542340104,
    nonceStr: '10T2PpoV9OxWvdsQ',
    signature: 'cfe94ba2b8d731e837e4b2c5260becc7f57af3c4',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage' 
    ]
  });
 wx.ready(function () {
	//青蜂网络监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '丽花农产品',
      desc: '丽花农产品',
      link: '',
      imgUrl: '/mobile/home.jpg',
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
      title: '丽花农产品',
      link: '',
      imgUrl: '/mobile/home.jpg',
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
<script type="text/javascript" src="themes/shengxian/js/jquery.json.js"></script>
<script type="text/javascript" src="themes/shengxian/js/function.js"></script>
<script type="text/javascript" src="themes/shengxian/js/transport.js"></script>
<script type="text/javascript">
var select_spe = "请选择商品属性";
var btn_buy = "购买";
var is_cancel = "取消";
</script>
</body>
</html>