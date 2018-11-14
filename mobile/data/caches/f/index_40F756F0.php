<?php exit;?>a:3:{s:8:"template";a:10:{i:0;s:61:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/index.dwt";i:1;s:75:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/ad_position.lbi";i:2;s:76:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/new_articles.lbi";i:3;s:83:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/recommend_promotion.lbi";i:4;s:73:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/group_buy.lbi";i:5;s:78:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/recommend_best.lbi";i:6;s:77:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/recommend_new.lbi";i:7;s:77:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/recommend_hot.lbi";i:8;s:73:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/cat_goods.lbi";i:9;s:75:"D:/wamp/wamp/www/fxmsc_v2.0/mobile/themes/shengxian/library/page_footer.lbi";}s:7:"expires";i:1542207717;s:8:"maketime";i:1542205917;}<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>生鲜超市</title>
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
    <h1> 生鲜超市 </h1>
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
            <li class="flex_in"> <a href="cat_all.php" title="全部分类"> <div class="CarouselImg"><img src="data/item_pic/1443584338752549142.png" /></div> </a>
        <p> 全部分类 </p>
      </li>
                  <li class="flex_in"> <a href="pre_sale.php" title="预售活动"> <div class="CarouselImg"><img src="data/item_pic/1448075935109557161.png" /></div> </a>
        <p> 预售活动 </p>
      </li>
                  <li class="flex_in"> <a href="user.php" title="个人中心"> <div class="CarouselImg"><img src="data/item_pic/1443584373727011961.png" /></div> </a>
        <p> 个人中心 </p>
      </li>
                  <li class="flex_in"> <a href="distribute.php" title="分销中心"> <div class="CarouselImg"><img src="data/item_pic/1443586488909704319.png" /></div> </a>
        <p> 分销中心 </p>
      </li>
            </ul><ul class="flex flex-f-row">
                  <li class="flex_in"> <a href="ectouch.php?act=contact" title="联系我们"> <div class="CarouselImg"><img src="data/item_pic/1443586300343329180.png" /></div> </a>
        <p> 联系我们 </p>
      </li>
                  <li class="flex_in"> <a href="group_buy.php" title="精品团购"> <div class="CarouselImg"><img src="data/item_pic/1443585779204202237.png" /></div> </a>
        <p> 精品团购 </p>
      </li>
                  <li class="flex_in"> <a href="exchange.php" title="积分商城"> <div class="CarouselImg"><img src="data/item_pic/1443586061863736586.png" /></div> </a>
        <p> 积分商城 </p>
      </li>
                  <li class="flex_in"> <a href="pre_spike.php" title="限时秒杀"> <div class="CarouselImg"><img src="data/item_pic/1443584408064043342.png" /></div> </a>
        <p> 限时秒杀 </p>
      </li>
                </ul>
  </div>
  
<div class="hao-gd-body fixed-Width">
    <div class="component-typehao-img-con">
        <img class="component-typehao-img" src="themes/shengxian/images/rd_w.png" height="40" width="auto">
    </div>
    <div class="rollTextMenus">
    <ul>
    	 <li><a href="article.php?id=143">广西环江毛南族自治县砂糖橘喜获丰...</a></li>
    	 <li><a href="article.php?id=142">重庆梁平曲水镇：柑橘丰收果农乐</a></li>
    	 <li><a href="article.php?id=141">广西融安金桔农超对接助农增收</a></li>
    	 <li><a href="article.php?id=140">草莓成熟季带旺农家乐</a></li>
    	 <li><a href="article.php?id=139">美国艺术家用蔬菜打造微型景观</a></li>
    	 <li><a href="article.php?id=138">生鲜电商的九大逻辑</a></li>
    	 <li><a href="article.php?id=137">电商年货盘点网购生鲜增幅猛</a></li>
    	 <li><a href="article.php?id=136">消费体验难提高，细数生鲜电商三大...</a></li>
        </ul>
    </div>
</div>
<script type="text/javascript">
  $(".hao-gd-body").slide({mainCell:".rollTextMenus ul" , effect:"top", autoPlay:true, vis:1 , autoPage:true});
</script>
  
  
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
     <dt class="wholePoint surper clearfix">
        <span class="san fl">特色市场</span>
     </dt>
     <dd>
     <div class="superBan clearfix">
       <div class="featurBan1 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
       <div class="featurBan2 fl">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"3";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
       </div>
     </div>        
     </dd>
  </dl>
</div>
<div class="blank2"></div>
<div class="mainCon">
  <dl class="wholeTime">
    <dt class="wholePoint surper clearfix">
      <span class="san fl">热门市场</span>
    </dt>
    <dd>
      <div class="superBan brandWallBan clearfix">
         
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"4";s:3:"num";s:1:"9";}554fcae493e564ee0dc75bdf2ebf94ca
      </div>
    </dd>
  </dl>
</div>
<div class="blank2"></div>
<section class="item_show_box1 box1 region" id="JS_limit_table">
    <h3>
      <a target="_top" href="search.php?intro=promotion">
        特价促销<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=102">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/102_thumb_G_1499030381370.jpg" alt="新鲜猪扒肉" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>30.0</span> <a href="javascript:;" onclick="categoryaddToCart2(102)" class="catbuybtn"></a></span> 
								<p class="goods_tit">新鲜猪扒肉</p>
            </div>
            <div class="timedjs">
	    <div class="JS_leaveTime" data-timeline="1751702400"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=4">
                <img src="/fxmsc_v2.0/data/images/201707/thumb_img/4_thumb_G_1498959094209.jpg" alt="通菜（通心菜、空心菜、竹叶菜）" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>5.5</span> <a href="javascript:;" onclick="categoryaddToCart2(4)" class="catbuybtn"></a></span> 
								<p class="goods_tit">通菜（通心菜、空心菜、竹...</p>
            </div>
            <div class="timedjs">
	    <div class="JS_leaveTime" data-timeline="1751702400"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=71">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/71_thumb_G_1498970104133.jpg" alt="鲁花5S一级花生油" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>198.8</span> <a href="javascript:;" onclick="categoryaddToCart2(71)" class="catbuybtn"></a></span> 
								<p class="goods_tit">鲁花5S一级花生油</p>
            </div>
            <div class="timedjs">
	    <div class="JS_leaveTime" data-timeline="1846656000"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=75">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/75_thumb_G_1498970514133.jpg" alt="新疆Q枣量贩装1000g大包" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>42.8</span> <a href="javascript:;" onclick="categoryaddToCart2(75)" class="catbuybtn"></a></span> 
								<p class="goods_tit">新疆Q枣量贩装1000g...</p>
            </div>
            <div class="timedjs">
	    <div class="JS_leaveTime" data-timeline="1910160000"><em>00</em>天<em>00</em>时<em>00</em>分<em>00</em>秒</div>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<div class="item_show_box2 box1 region" style="overflow:hidden">
    <h3>
      <a target="_top" href="group_buy.php">
        精品团购<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div id="picScrol5" class="picScrol5">
        <div class="bd">
            <ul>
                                <li><div class="groupimg"><a href="group_buy.php?act=view&amp;id=7"><img src="/fxmsc_v2.0/images/201707/thumb_img/74_thumb_G_1498970415695.jpg" /></a></div>
		<div class="grouptit">真空板栗肉（250克/份...</div>
		<div class="groupprice"><span class="last_price">￥<span>10.0</span></span><span class="zhekou">8.5折</span></div>
                </li>
                                                <li><div class="groupimg"><a href="group_buy.php?act=view&amp;id=6"><img src="/fxmsc_v2.0/images/201707/thumb_img/66_thumb_G_1498969633814.jpg" /></a></div>
		<div class="grouptit">鲁花5S一级花生油4L ...</div>
		<div class="groupprice"><span class="last_price">￥<span>20.0</span></span><span class="zhekou">1.5折</span></div>
                </li>
                </ul><ul>                                <li><div class="groupimg"><a href="group_buy.php?act=view&amp;id=5"><img src="/fxmsc_v2.0/images/201707/thumb_img/17_thumb_G_1498963505323.jpg" /></a></div>
		<div class="grouptit">一点红冬枣</div>
		<div class="groupprice"><span class="last_price">￥<span>8.0</span></span><span class="zhekou">4.8折</span></div>
                </li>
                                                <li><div class="groupimg"><a href="group_buy.php?act=view&amp;id=4"><img src="/fxmsc_v2.0/images/201707/thumb_img/20_thumb_G_1498963910237.jpg" /></a></div>
		<div class="grouptit">国产黑布林</div>
		<div class="groupprice"><span class="last_price">￥<span>20.0</span></span><span class="zhekou">11.1折</span></div>
                </li>
                                        </div>
    </div>
</div>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=best">
        精品推荐<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=102">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/102_thumb_G_1499030381370.jpg" alt="新鲜猪扒肉" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>30.0</span> <a href="javascript:;" onclick="categoryaddToCart2(102)" class="catbuybtn"></a></span> 
								<p class="goods_tit">新鲜猪扒肉</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=4">
                <img src="/fxmsc_v2.0/data/images/201707/thumb_img/4_thumb_G_1498959094209.jpg" alt="通菜（通心菜、空心菜、竹叶菜）" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>5.5</span> <a href="javascript:;" onclick="categoryaddToCart2(4)" class="catbuybtn"></a></span> 
								<p class="goods_tit">通菜（通心菜、空心菜、竹...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=73">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/73_thumb_G_1498970320832.jpg" alt="Aji酵母减盐味苏打饼干472.5g/袋早餐牛奶休闲零食" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>9.9</span> <a href="javascript:;" onclick="categoryaddToCart2(73)" class="catbuybtn"></a></span> 
								<p class="goods_tit">Aji酵母减盐味苏打饼干...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=78">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/78_thumb_G_1498970798201.jpg" alt="姚太太 九制半梅160g 蜜饯果干话梅子 休闲零食小吃" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>10.9</span> <a href="javascript:;" onclick="categoryaddToCart2(78)" class="catbuybtn"></a></span> 
								<p class="goods_tit">姚太太 九制半梅160g...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=new">
        新品上市<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=10">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/10_thumb_G_1498962481532.jpg" alt="小葱" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>0.9</span> <a href="javascript:;" onclick="categoryaddToCart2(10)" class="catbuybtn"></a></span> 
								<p class="goods_tit">小葱</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=14">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/14_thumb_G_1498962975550.jpg" alt="烟台红富士5斤礼盒装" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>39.8</span> <a href="javascript:;" onclick="categoryaddToCart2(14)" class="catbuybtn"></a></span> 
								<p class="goods_tit">烟台红富士5斤礼盒装</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=18">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/18_thumb_G_1498963636615.jpg" alt="江西脐橙" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>17.6</span> <a href="javascript:;" onclick="categoryaddToCart2(18)" class="catbuybtn"></a></span> 
								<p class="goods_tit">江西脐橙</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=66">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/66_thumb_G_1498969633814.jpg" alt="鲁花5S一级花生油4L 物理压榨 食用油 健康 调味" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>109.9</span> <a href="javascript:;" onclick="categoryaddToCart2(66)" class="catbuybtn"></a></span> 
								<p class="goods_tit">鲁花5S一级花生油4L ...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="search.php?intro=hot">
        热卖商品<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=5">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/5_thumb_G_1498959171675.jpg" alt="小白菜" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>2.6</span> <a href="javascript:;" onclick="categoryaddToCart2(5)" class="catbuybtn"></a></span> 
								<p class="goods_tit">小白菜</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=11">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/11_thumb_G_1498962539331.jpg" alt="生姜" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>2.4</span> <a href="javascript:;" onclick="categoryaddToCart2(11)" class="catbuybtn"></a></span> 
								<p class="goods_tit">生姜</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=67">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/67_thumb_G_1498969691344.jpg" alt="金龙鱼 葵花食用调和油5L+花生浓香食用调和油5L" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>98.6</span> <a href="javascript:;" onclick="categoryaddToCart2(67)" class="catbuybtn"></a></span> 
								<p class="goods_tit">金龙鱼 葵花食用调和油5...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=75">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/75_thumb_G_1498970514133.jpg" alt="新疆Q枣量贩装1000g大包" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>42.8</span> <a href="javascript:;" onclick="categoryaddToCart2(75)" class="catbuybtn"></a></span> 
								<p class="goods_tit">新疆Q枣量贩装1000g...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
</section>
<div class="blank2"></div>
<section class="item_show_box1 box1 region">
    <h3>
      <a target="_top" href="category.php?id=1">
        生鲜食品<span class="titmore"><i class="ico_16"></i></span>
      </a>
    </h3>
    		  <div class="cat_ad"><a href="category.php?id=1" target="_blank"><img src="data/afficheimg/13.jpg" ></a></div>
        <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=20">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/20_thumb_G_1498963910237.jpg" alt="国产黑布林" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>15.0</span> <a href="javascript:;" onclick="categoryaddToCart2(20)" class="catbuybtn"></a></span> 
								<p class="goods_tit">国产黑布林</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=19">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/19_thumb_G_1498963709612.jpg" alt="福建蜜柚" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>10.7</span> <a href="javascript:;" onclick="categoryaddToCart2(19)" class="catbuybtn"></a></span> 
								<p class="goods_tit">福建蜜柚</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=18">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/18_thumb_G_1498963636615.jpg" alt="江西脐橙" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>17.6</span> <a href="javascript:;" onclick="categoryaddToCart2(18)" class="catbuybtn"></a></span> 
								<p class="goods_tit">江西脐橙</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=17">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/17_thumb_G_1498963505323.jpg" alt="一点红冬枣" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>13.8</span> <a href="javascript:;" onclick="categoryaddToCart2(17)" class="catbuybtn"></a></span> 
								<p class="goods_tit">一点红冬枣</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
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
                <div class="goodsItem flex_in">
            <a href="goods.php?id=71">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/71_thumb_G_1498970104133.jpg" alt="鲁花5S一级花生油" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>198.8</span> <a href="javascript:;" onclick="categoryaddToCart2(71)" class="catbuybtn"></a></span> 
								<p class="goods_tit">鲁花5S一级花生油</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=70">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/70_thumb_G_1498969987562.jpg" alt="融氏/Rongs 玉米油5L 食用油 粮油批发 烹饪 非转基因 绿色认证" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>36.0</span> <a href="javascript:;" onclick="categoryaddToCart2(70)" class="catbuybtn"></a></span> 
								<p class="goods_tit">融氏/Rongs 玉米油...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=69">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/69_thumb_G_1498969877383.jpg" alt="欧丽薇兰 纯正橄榄油1.6L/桶 食用油 原油进口" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>108.0</span> <a href="javascript:;" onclick="categoryaddToCart2(69)" class="catbuybtn"></a></span> 
								<p class="goods_tit">欧丽薇兰 纯正橄榄油1....</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=68">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/68_thumb_G_1498969806412.jpg" alt="鲁花 非转基因 特香菜籽油5L 物理压榨 食用油 食品" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>85.9</span> <a href="javascript:;" onclick="categoryaddToCart2(68)" class="catbuybtn"></a></span> 
								<p class="goods_tit">鲁花 非转基因 特香菜籽...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
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
                <div class="goodsItem flex_in">
            <a href="goods.php?id=81">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/81_thumb_G_1498971165827.jpg" alt="佳宝加应子500g话梅 李子干梅子" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>20.0</span> <a href="javascript:;" onclick="categoryaddToCart2(81)" class="catbuybtn"></a></span> 
								<p class="goods_tit">佳宝加应子500g话梅 ...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=80">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/80_thumb_G_1498971100525.jpg" alt="大白兔原味奶糖227g/包 原味奶糖" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>13.9</span> <a href="javascript:;" onclick="categoryaddToCart2(80)" class="catbuybtn"></a></span> 
								<p class="goods_tit">大白兔原味奶糖227g/...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=79">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/79_thumb_G_1498970940118.jpg" alt="固本堂阿胶红糖姜茶200g 速溶颗粒老姜母茶 共20袋" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>29.0</span> <a href="javascript:;" onclick="categoryaddToCart2(79)" class="catbuybtn"></a></span> 
								<p class="goods_tit">固本堂阿胶红糖姜茶200...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=78">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/78_thumb_G_1498970798201.jpg" alt="姚太太 九制半梅160g 蜜饯果干话梅子 休闲零食小吃" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>10.9</span> <a href="javascript:;" onclick="categoryaddToCart2(78)" class="catbuybtn"></a></span> 
								<p class="goods_tit">姚太太 九制半梅160g...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
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
    		  <div class="cat_ad"><a href="category.php?id=4" target="_blank"><img src="data/afficheimg/15.jpg" ></a></div>
        <div class="flex flex-f-row">
                <div class="goodsItem flex_in">
            <a href="goods.php?id=91">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/91_thumb_G_1498971858713.jpg" alt="君叶红BIN208西拉红葡萄酒750ml" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>48.0</span> <a href="javascript:;" onclick="categoryaddToCart2(91)" class="catbuybtn"></a></span> 
								<p class="goods_tit">君叶红BIN208西拉红...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=90">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/90_thumb_G_1498971765946.jpg" alt="长白山精选全汁山葡萄酒1.48L" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>27.2</span> <a href="javascript:;" onclick="categoryaddToCart2(90)" class="catbuybtn"></a></span> 
								<p class="goods_tit">长白山精选全汁山葡萄酒1...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=89">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/89_thumb_G_1498971715645.jpg" alt="进口王朝朗格多克红葡萄酒750ml" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>168.0</span> <a href="javascript:;" onclick="categoryaddToCart2(89)" class="catbuybtn"></a></span> 
								<p class="goods_tit">进口王朝朗格多克红葡萄酒...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=88">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/88_thumb_G_1498971627257.jpg" alt="怡宝纯净水555ML" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>1.6</span> <a href="javascript:;" onclick="categoryaddToCart2(88)" class="catbuybtn"></a></span> 
								<p class="goods_tit">怡宝纯净水555ML</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
    <div class="item_tags clearfix">
                        <A href="category.php?id=30">
            白酒        </A>
                <A href="category.php?id=31">
            红/白葡萄酒        </A>
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
                <div class="goodsItem flex_in">
            <a href="goods.php?id=101">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/101_thumb_G_1499029918294.jpg" alt="柯邑堂云南文山春三七粉12头正品野生田七头破壁正宗超细粉" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>39.9</span> <a href="javascript:;" onclick="categoryaddToCart2(101)" class="catbuybtn"></a></span> 
								<p class="goods_tit">柯邑堂云南文山春三七粉1...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=100">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/100_thumb_G_1498973347370.jpg" alt="新款高档野生海参包装盒 俄文海参礼盒 至尊版海参皮盒" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>298.0</span> <a href="javascript:;" onclick="categoryaddToCart2(100)" class="catbuybtn"></a></span> 
								<p class="goods_tit">新款高档野生海参包装盒 ...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=99">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/99_thumb_G_1498973150054.jpg" alt="新鲜冬虫夏草10根玉树野生虫草正品0.5克1根" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>398.0</span> <a href="javascript:;" onclick="categoryaddToCart2(99)" class="catbuybtn"></a></span> 
								<p class="goods_tit">新鲜冬虫夏草10根玉树野...</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=98">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/98_thumb_G_1498973066165.jpg" alt="山参 长白山野生人参 东北野山参 人参 林下参 38元一支15克以上" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>38.0</span> <a href="javascript:;" onclick="categoryaddToCart2(98)" class="catbuybtn"></a></span> 
								<p class="goods_tit">山参 长白山野生人参 东...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
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
                <div class="goodsItem flex_in">
            <a href="goods.php?id=111">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/111_thumb_G_1499031717433.jpg" alt="测试" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>0.0</span> <a href="javascript:;" onclick="categoryaddToCart2(111)" class="catbuybtn"></a></span> 
								<p class="goods_tit">测试</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=110">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/110_thumb_G_1499031432821.jpg" alt="泰国榴莲3000g" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>94.8</span> <a href="javascript:;" onclick="categoryaddToCart2(110)" class="catbuybtn"></a></span> 
								<p class="goods_tit">泰国榴莲3000g</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">                <div class="goodsItem flex_in">
            <a href="goods.php?id=109">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/109_thumb_G_1499031314808.jpg" alt="粤盐加碘低钠盐250g" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>2.1</span> <a href="javascript:;" onclick="categoryaddToCart2(109)" class="catbuybtn"></a></span> 
								<p class="goods_tit">粤盐加碘低钠盐250g</p>
            </div>
        </div>
                         <div class="goodsItem flex_in">
            <a href="goods.php?id=108">
                <img src="/fxmsc_v2.0/images/201707/thumb_img/108_thumb_G_1499031216410.jpg" alt="苏泊尔火红点煎锅.炫彩系列26CM-PJ26E1" />
            </a>
            <div class="goods_center">
				 
				<span class="price_s"> ￥<span>79.9</span> <a href="javascript:;" onclick="categoryaddToCart2(108)" class="catbuybtn"></a></span> 
								<p class="goods_tit">苏泊尔火红点煎锅.炫彩系...</p>
            </div>
        </div>
         </div><div class="flex flex-f-row">            </div>
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
  
    <p class="region">&copy; 2012-2018 生鲜超市 版权所有，并保留所有权利。 </p>
    <p class="region"> 
     
    ICP备案证书号: <a href="http://www.miibeian.gov.cn/" target="_blank"> 粤ICP备12061602号 </a> 
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
        <li> <a href="category.php?id=1"> 生鲜食品 </a>
      <ul>
                <li> <a href="category.php?id=7"> 蔬菜 </a>
          <ul>
                        <li> <a href="category.php?id=48"> 叶菜类 </a> </li>
                        <li> <a href="category.php?id=49"> 根茎类 </a> </li>
                        <li> <a href="category.php?id=50"> 瓜果类 </a> </li>
                        <li> <a href="category.php?id=51"> 菇菌类 </a> </li>
                        <li> <a href="category.php?id=52"> 调味类 </a> </li>
                        <li> <a href="category.php?id=53"> 有机蔬菜 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=8"> 水果 </a>
          <ul>
                        <li> <a href="category.php?id=54"> 苹果类 </a> </li>
                        <li> <a href="category.php?id=55"> 梨类 </a> </li>
                        <li> <a href="category.php?id=56"> 枣类 </a> </li>
                        <li> <a href="category.php?id=57"> 柑橘柚类 </a> </li>
                        <li> <a href="category.php?id=58"> 桃/李/杏类 </a> </li>
                        <li> <a href="category.php?id=59"> 瓜果类 </a> </li>
                        <li> <a href="category.php?id=60"> 热带水果 </a> </li>
                        <li> <a href="category.php?id=61"> 葡萄类 </a> </li>
                        <li> <a href="category.php?id=62"> 其它水果 </a> </li>
                        <li> <a href="category.php?id=63"> 进口水果 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=9"> 鲜肉/禽/蛋 </a>
          <ul>
                        <li> <a href="category.php?id=64"> 鲜猪肉 </a> </li>
                        <li> <a href="category.php?id=65"> 双汇猪肉 </a> </li>
                        <li> <a href="category.php?id=66"> 雨润猪肉 </a> </li>
                        <li> <a href="category.php?id=67"> 壹号土猪肉 </a> </li>
                        <li> <a href="category.php?id=68"> 牛/羊肉类 </a> </li>
                        <li> <a href="category.php?id=69"> 鲜禽类 </a> </li>
                        <li> <a href="category.php?id=70"> 鸽子类 </a> </li>
                        <li> <a href="category.php?id=71"> 兔子类 </a> </li>
                        <li> <a href="category.php?id=72"> 其它禽类 </a> </li>
                        <li> <a href="category.php?id=73"> 鲜蛋 </a> </li>
                        <li> <a href="category.php?id=74"> 皮蛋/松花蛋 </a> </li>
                        <li> <a href="category.php?id=75"> 咸蛋 </a> </li>
                        <li> <a href="category.php?id=76"> 蛋品礼盒 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=10"> 豆制品 </a>
          <ul>
                        <li> <a href="category.php?id=77"> 豆腐 </a> </li>
                        <li> <a href="category.php?id=78"> 豆干 </a> </li>
                        <li> <a href="category.php?id=79"> 豆皮 </a> </li>
                        <li> <a href="category.php?id=80"> 豆浆 </a> </li>
                        <li> <a href="category.php?id=81"> 其它豆制品 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=11"> 冷冻冷藏 </a>
          <ul>
                        <li> <a href="category.php?id=82"> 水产冻品 </a> </li>
                        <li> <a href="category.php?id=83"> 肉类冻品 </a> </li>
                        <li> <a href="category.php?id=84"> 鱼/肉丸类 </a> </li>
                        <li> <a href="category.php?id=85"> 面点 </a> </li>
                        <li> <a href="category.php?id=86"> 年糕 </a> </li>
                        <li> <a href="category.php?id=87"> 低温奶制品 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=12"> 熟食系列 </a>
          <ul>
                        <li> <a href="category.php?id=88"> 熟食 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=13"> 海鲜／水产 </a>
          <ul>
                        <li> <a href="category.php?id=89"> 鲜鱼类 </a> </li>
                        <li> <a href="category.php?id=90"> 虾蟹类 </a> </li>
                        <li> <a href="category.php?id=91"> 贝类 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=2"> 粮油副食 </a>
      <ul>
                <li> <a href="category.php?id=14"> 食用油 </a>
          <ul>
                        <li> <a href="category.php?id=92"> 大豆油 </a> </li>
                        <li> <a href="category.php?id=93"> 调和油 </a> </li>
                        <li> <a href="category.php?id=94"> 玉米油 </a> </li>
                        <li> <a href="category.php?id=95"> 菜籽油 </a> </li>
                        <li> <a href="category.php?id=96"> 花生油 </a> </li>
                        <li> <a href="category.php?id=97"> 葵花籽油 </a> </li>
                        <li> <a href="category.php?id=98"> 茶籽油 </a> </li>
                        <li> <a href="category.php?id=99"> 橄榄油 </a> </li>
                        <li> <a href="category.php?id=100"> 进口食用油 </a> </li>
                        <li> <a href="category.php?id=101"> 其它食用油 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=15"> 米面／杂粮 </a>
          <ul>
                        <li> <a href="category.php?id=102"> 散装大米 </a> </li>
                        <li> <a href="category.php?id=103"> 精品大米 </a> </li>
                        <li> <a href="category.php?id=104"> 进口米面 </a> </li>
                        <li> <a href="category.php?id=105"> 面条／粉丝 </a> </li>
                        <li> <a href="category.php?id=106"> 面粉 </a> </li>
                        <li> <a href="category.php?id=107"> 养生杂粮 </a> </li>
                        <li> <a href="category.php?id=108"> 杂粮营养礼盒 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=16"> 南北干货 </a>
          <ul>
                        <li> <a href="category.php?id=109"> 干果／炒货 </a> </li>
                        <li> <a href="category.php?id=110"> 莲子/枣子 </a> </li>
                        <li> <a href="category.php?id=111"> 菌菇类 </a> </li>
                        <li> <a href="category.php?id=112"> 腌/腊制品类 </a> </li>
                        <li> <a href="category.php?id=113"> 干菜类 </a> </li>
                        <li> <a href="category.php?id=114"> 水产干货类 </a> </li>
                        <li> <a href="category.php?id=115"> 煲汤干货 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=17"> 调料/佐料 </a>
          <ul>
                        <li> <a href="category.php?id=116"> 鸡精／味精 </a> </li>
                        <li> <a href="category.php?id=117"> 食用盐 </a> </li>
                        <li> <a href="category.php?id=118"> 糖 </a> </li>
                        <li> <a href="category.php?id=119"> 香料 </a> </li>
                        <li> <a href="category.php?id=120"> 汤料 </a> </li>
                        <li> <a href="category.php?id=121"> 生粉 </a> </li>
                        <li> <a href="category.php?id=122"> 酱油 </a> </li>
                        <li> <a href="category.php?id=123"> 料酒/黄酒 </a> </li>
                        <li> <a href="category.php?id=124"> 调味汁 </a> </li>
                        <li> <a href="category.php?id=125"> 调味粉 </a> </li>
                        <li> <a href="category.php?id=126"> 醋 </a> </li>
                        <li> <a href="category.php?id=127"> 火锅料 </a> </li>
                        <li> <a href="category.php?id=128"> 调味油 </a> </li>
                        <li> <a href="category.php?id=129"> 调味酱 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=18"> 罐头/腌菜 </a>
          <ul>
                        <li> <a href="category.php?id=130"> 水产罐头 </a> </li>
                        <li> <a href="category.php?id=131"> 肉罐头 </a> </li>
                        <li> <a href="category.php?id=132"> 水果蔬菜罐头 </a> </li>
                        <li> <a href="category.php?id=133"> 酱腌菜系列 </a> </li>
                        <li> <a href="category.php?id=134"> 进口罐头 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=19"> 方便速食 </a>
          <ul>
                        <li> <a href="category.php?id=135"> 方便面／粉 </a> </li>
                        <li> <a href="category.php?id=136"> 火腿肠 </a> </li>
                        <li> <a href="category.php?id=137"> 速食粥/汤 </a> </li>
                        <li> <a href="category.php?id=138"> 其它方便食品 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=20"> 婴幼食品 </a>
          <ul>
                        <li> <a href="category.php?id=139"> 婴儿食品 </a> </li>
                        <li> <a href="category.php?id=140"> 婴幼奶粉 </a> </li>
                        <li> <a href="category.php?id=141"> 儿童奶粉 </a> </li>
                        <li> <a href="category.php?id=142"> 妈咪奶粉 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=21"> 冲调谷物 </a>
          <ul>
                        <li> <a href="category.php?id=143"> 成人奶粉 </a> </li>
                        <li> <a href="category.php?id=144"> 麦片谷物 </a> </li>
                        <li> <a href="category.php?id=145"> 蜂蜜 </a> </li>
                        <li> <a href="category.php?id=146"> 果味冲调 </a> </li>
                        <li> <a href="category.php?id=147"> 藕粉 </a> </li>
                        <li> <a href="category.php?id=148"> 可可 </a> </li>
                        <li> <a href="category.php?id=149"> 芝麻粉 </a> </li>
                        <li> <a href="category.php?id=150"> 核桃粉 </a> </li>
                        <li> <a href="category.php?id=151"> 豆奶粉 </a> </li>
                        <li> <a href="category.php?id=152"> 早餐冲饮 </a> </li>
                        <li> <a href="category.php?id=153"> 中老年冲饮 </a> </li>
                        <li> <a href="category.php?id=154"> 其他冲饮品 </a> </li>
                        <li> <a href="category.php?id=155"> 进口冲调谷物 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=22"> 茶叶/咖啡 </a>
          <ul>
                        <li> <a href="category.php?id=156"> 茶叶 </a> </li>
                        <li> <a href="category.php?id=157"> 功能性茶 </a> </li>
                        <li> <a href="category.php?id=158"> 茶叶礼盒 </a> </li>
                        <li> <a href="category.php?id=159"> 袋装茶 </a> </li>
                        <li> <a href="category.php?id=160"> 咖啡豆粉 </a> </li>
                        <li> <a href="category.php?id=161"> 速溶咖啡 </a> </li>
                        <li> <a href="category.php?id=162"> 白咖啡 </a> </li>
                        <li> <a href="category.php?id=163"> 黑咖啡 </a> </li>
                        <li> <a href="category.php?id=164"> 咖啡伴侣 </a> </li>
                        <li> <a href="category.php?id=165"> 卡布奇诺 </a> </li>
                        <li> <a href="category.php?id=166"> 拿铁 </a> </li>
                        <li> <a href="category.php?id=167"> 雀巢 </a> </li>
                        <li> <a href="category.php?id=168"> 麦斯威尔 </a> </li>
                        <li> <a href="category.php?id=169"> 咖啡方糖 </a> </li>
                        <li> <a href="category.php?id=170"> 进口茶叶／咖啡 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=3"> 休闲零食 </a>
      <ul>
                <li> <a href="category.php?id=23"> 休闲零食 </a>
          <ul>
                        <li> <a href="category.php?id=171"> 膨化/薯片 </a> </li>
                        <li> <a href="category.php?id=172"> 海苔 </a> </li>
                        <li> <a href="category.php?id=173"> 鸡鸭制品 </a> </li>
                        <li> <a href="category.php?id=174"> 肉／鱼干系列 </a> </li>
                        <li> <a href="category.php?id=175"> 豆制零食 </a> </li>
                        <li> <a href="category.php?id=176"> 鱼片 </a> </li>
                        <li> <a href="category.php?id=177"> 果冻布丁 </a> </li>
                        <li> <a href="category.php?id=178"> 爆米花 </a> </li>
                        <li> <a href="category.php?id=179"> 进口休闲零食 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=24"> 饼干糕点 </a>
          <ul>
                        <li> <a href="category.php?id=180"> 饼干 </a> </li>
                        <li> <a href="category.php?id=181"> 威化 </a> </li>
                        <li> <a href="category.php?id=182"> 沙琪玛 </a> </li>
                        <li> <a href="category.php?id=183"> 米果米饼 </a> </li>
                        <li> <a href="category.php?id=184"> 煎饼蛋卷 </a> </li>
                        <li> <a href="category.php?id=185"> 曲奇 </a> </li>
                        <li> <a href="category.php?id=186"> 蛋黄派/巧克力派 </a> </li>
                        <li> <a href="category.php?id=187"> 蛋糕 </a> </li>
                        <li> <a href="category.php?id=188"> 糕点/面包 </a> </li>
                        <li> <a href="category.php?id=189"> 各种酥类 </a> </li>
                        <li> <a href="category.php?id=190"> 小食 </a> </li>
                        <li> <a href="category.php?id=191"> 进口饼干糕点 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=25"> 地方特产 </a>
          <ul>
                        <li> <a href="category.php?id=192"> 新疆特产 </a> </li>
                        <li> <a href="category.php?id=193"> 东北特产 </a> </li>
                        <li> <a href="category.php?id=194"> 华北特产 </a> </li>
                        <li> <a href="category.php?id=195"> 云贵川特产 </a> </li>
                        <li> <a href="category.php?id=196"> 其它特产 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=26"> 干果蜜饯 </a>
          <ul>
                        <li> <a href="category.php?id=197"> 瓜子 </a> </li>
                        <li> <a href="category.php?id=198"> 花生 </a> </li>
                        <li> <a href="category.php?id=199"> 豆类 </a> </li>
                        <li> <a href="category.php?id=200"> 腰果 </a> </li>
                        <li> <a href="category.php?id=201"> 开心果 </a> </li>
                        <li> <a href="category.php?id=202"> 核桃 </a> </li>
                        <li> <a href="category.php?id=203"> 松子 </a> </li>
                        <li> <a href="category.php?id=204"> 榛子 </a> </li>
                        <li> <a href="category.php?id=205"> 其它坚果 </a> </li>
                        <li> <a href="category.php?id=206"> 果脯蜜饯 </a> </li>
                        <li> <a href="category.php?id=207"> 简装干果蜜饯 </a> </li>
                        <li> <a href="category.php?id=208"> 枣类 </a> </li>
                        <li> <a href="category.php?id=209"> 话梅 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=27"> 糖果巧克力 </a>
          <ul>
                        <li> <a href="category.php?id=210"> 巧克力 </a> </li>
                        <li> <a href="category.php?id=211"> 奶糖 </a> </li>
                        <li> <a href="category.php?id=212"> 软糖 </a> </li>
                        <li> <a href="category.php?id=213"> 硬糖 </a> </li>
                        <li> <a href="category.php?id=214"> 棒棒糖 </a> </li>
                        <li> <a href="category.php?id=215"> 润喉糖/薄荷糖 </a> </li>
                        <li> <a href="category.php?id=216"> 口香糖 </a> </li>
                        <li> <a href="category.php?id=217"> 棉花糖 </a> </li>
                        <li> <a href="category.php?id=218"> 进口糖果巧克力 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=28"> 散装休闲食品 </a>
          <ul>
                        <li> <a href="category.php?id=219"> 散装干果蜜饯 </a> </li>
                        <li> <a href="category.php?id=220"> 散装糖果糕点 </a> </li>
                        <li> <a href="category.php?id=221"> 散装休闲小吃 </a> </li>
                        <li> <a href="category.php?id=222"> 散装果冻 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=29"> 保健/礼品 </a>
          <ul>
                        <li> <a href="category.php?id=223"> 维生素/钙 </a> </li>
                        <li> <a href="category.php?id=224"> 蛋白粉 </a> </li>
                        <li> <a href="category.php?id=225"> 螺旋藻 </a> </li>
                        <li> <a href="category.php?id=226"> 阿胶 </a> </li>
                        <li> <a href="category.php?id=227"> 灵芝 </a> </li>
                        <li> <a href="category.php?id=228"> 燕窝 </a> </li>
                        <li> <a href="category.php?id=229"> 石斛 </a> </li>
                        <li> <a href="category.php?id=230"> 基础营养 </a> </li>
                        <li> <a href="category.php?id=231"> 关爱女性 </a> </li>
                        <li> <a href="category.php?id=232"> 人/洋参 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=4"> 酒水茶饮 </a>
      <ul>
                <li> <a href="category.php?id=30"> 白酒 </a>
          <ul>
                        <li> <a href="category.php?id=233"> 普通白酒 </a> </li>
                        <li> <a href="category.php?id=234"> 著名白酒 </a> </li>
                        <li> <a href="category.php?id=235"> 小瓶装 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=31"> 红/白葡萄酒 </a>
          <ul>
                        <li> <a href="category.php?id=236"> 国产红酒 </a> </li>
                        <li> <a href="category.php?id=237"> 进口红酒 </a> </li>
                        <li> <a href="category.php?id=238"> 红酒礼盒 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=32"> 啤酒/果酒 </a>
          <ul>
                        <li> <a href="category.php?id=239"> 瓶装啤酒 </a> </li>
                        <li> <a href="category.php?id=240"> 罐装啤酒 </a> </li>
                        <li> <a href="category.php?id=241"> 预调酒 </a> </li>
                        <li> <a href="category.php?id=242"> 进口啤酒／果酒 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=33"> 滋补酒 </a>
          <ul>
                        <li> <a href="category.php?id=243"> 滋补药酒 </a> </li>
                        <li> <a href="category.php?id=244"> 黄酒米酒 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=34"> 洋酒 </a>
          <ul>
                        <li> <a href="category.php?id=245"> 洋酒 </a> </li>
                        <li> <a href="category.php?id=246"> 洋酒礼盒 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=35"> 饮料 </a>
          <ul>
                        <li> <a href="category.php?id=247"> 饮用水系列 </a> </li>
                        <li> <a href="category.php?id=248"> 果蔬饮料 </a> </li>
                        <li> <a href="category.php?id=249"> 碳酸饮料 </a> </li>
                        <li> <a href="category.php?id=250"> 茶饮料 </a> </li>
                        <li> <a href="category.php?id=251"> 功能饮料 </a> </li>
                        <li> <a href="category.php?id=252"> 咖啡饮料 </a> </li>
                        <li> <a href="category.php?id=253"> 奶茶 </a> </li>
                        <li> <a href="category.php?id=254"> 醋酸饮料 </a> </li>
                        <li> <a href="category.php?id=255"> 碱性饮料 </a> </li>
                        <li> <a href="category.php?id=256"> 乳品饮料 </a> </li>
                        <li> <a href="category.php?id=257"> 植物蛋白饮料 </a> </li>
                        <li> <a href="category.php?id=258"> 进口饮料 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=36"> 牛奶乳品 </a>
          <ul>
                        <li> <a href="category.php?id=259"> 纯牛奶 </a> </li>
                        <li> <a href="category.php?id=260"> 羊奶 </a> </li>
                        <li> <a href="category.php?id=261"> 风味奶 </a> </li>
                        <li> <a href="category.php?id=262"> 功能奶 </a> </li>
                        <li> <a href="category.php?id=263"> 儿童奶 </a> </li>
                        <li> <a href="category.php?id=264"> 豆奶 </a> </li>
                        <li> <a href="category.php?id=265"> 椰奶 </a> </li>
                        <li> <a href="category.php?id=266"> 乳酸菌奶 </a> </li>
                        <li> <a href="category.php?id=267"> 有机牛奶 </a> </li>
                        <li> <a href="category.php?id=268"> 进口奶制品 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
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
        <li> <a href="category.php?id=6"> 精选优品 </a>
      <ul>
                <li> <a href="category.php?id=39"> 肉蛋速食 </a>
          <ul>
                        <li> <a href="category.php?id=285"> 猪肉 </a> </li>
                        <li> <a href="category.php?id=286"> 牛羊肉 </a> </li>
                        <li> <a href="category.php?id=287"> 家禽肉/禽鸟肉 </a> </li>
                        <li> <a href="category.php?id=288"> 鱼丸/肉丸/牛肉丸 </a> </li>
                        <li> <a href="category.php?id=289"> 海鲜类/水产类 </a> </li>
                        <li> <a href="category.php?id=290"> 速冻食品 </a> </li>
                        <li> <a href="category.php?id=291"> 鸡蛋/鸭蛋 </a> </li>
                        <li> <a href="category.php?id=292"> 咸蛋/皮蛋/松花蛋 </a> </li>
                        <li> <a href="category.php?id=293"> 火腿肠 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=40"> 助兴酒水 </a>
          <ul>
                        <li> <a href="category.php?id=294"> 白酒 </a> </li>
                        <li> <a href="category.php?id=295"> 洋酒 </a> </li>
                        <li> <a href="category.php?id=296"> 啤酒 </a> </li>
                        <li> <a href="category.php?id=297"> 葡萄酒 </a> </li>
                        <li> <a href="category.php?id=298"> 药酒/黄酒/米酒 </a> </li>
                        <li> <a href="category.php?id=299"> 饮用水 </a> </li>
                        <li> <a href="category.php?id=300"> 茶饮料 </a> </li>
                        <li> <a href="category.php?id=301"> 碳酸饮料 </a> </li>
                        <li> <a href="category.php?id=302"> 功能饮料 </a> </li>
                        <li> <a href="category.php?id=303"> 牛奶饮料 </a> </li>
                        <li> <a href="category.php?id=304"> 果蔬汁/植物饮料 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=41"> 家居清洁类 </a>
          <ul>
                        <li> <a href="category.php?id=305"> 洗衣粉/洗衣液 </a> </li>
                        <li> <a href="category.php?id=306"> 洗洁精/油污净 </a> </li>
                        <li> <a href="category.php?id=307"> 清洁工具类 </a> </li>
                        <li> <a href="category.php?id=308"> 抽纸/卷纸/纸巾 </a> </li>
                        <li> <a href="category.php?id=309"> 厨具类 </a> </li>
                        <li> <a href="category.php?id=310"> 家纺类 </a> </li>
                        <li> <a href="category.php?id=311"> 洗发护发 </a> </li>
                        <li> <a href="category.php?id=312"> 沐浴护理 </a> </li>
                        <li> <a href="category.php?id=313"> 一次性用品 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=42"> 礼品专区 </a>
          <ul>
                        <li> <a href="category.php?id=314"> 养生保健类 </a> </li>
                        <li> <a href="category.php?id=315"> 酒水礼盒类 </a> </li>
                        <li> <a href="category.php?id=316"> 干货礼包 </a> </li>
                        <li> <a href="category.php?id=317"> 零食礼包 </a> </li>
                        <li> <a href="category.php?id=318"> 调料礼包 </a> </li>
                        <li> <a href="category.php?id=319"> 送长辈 </a> </li>
                        <li> <a href="category.php?id=320"> 送父母 </a> </li>
                        <li> <a href="category.php?id=321"> 送爱人 </a> </li>
                        <li> <a href="category.php?id=322"> 送小孩 </a> </li>
                        <li> <a href="category.php?id=323"> 送朋友 </a> </li>
                        <li> <a href="category.php?id=324"> 送同事 </a> </li>
                        <li> <a href="category.php?id=325"> 粮油礼包 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=43"> 聚会零食 </a>
          <ul>
                        <li> <a href="category.php?id=326"> 糖果类 </a> </li>
                        <li> <a href="category.php?id=327"> `巧克力 </a> </li>
                        <li> <a href="category.php?id=328"> 坚果类 </a> </li>
                        <li> <a href="category.php?id=329"> 蜜饯 </a> </li>
                        <li> <a href="category.php?id=330"> 饼干/糕点 </a> </li>
                        <li> <a href="category.php?id=331"> 膨化/薯片/海苔 </a> </li>
                        <li> <a href="category.php?id=332"> 肉干肉脯 </a> </li>
                        <li> <a href="category.php?id=333"> 果冻/布丁 </a> </li>
                        <li> <a href="category.php?id=334"> 豆干/凤爪/鸭脖 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=44"> 柴米油盐 </a>
          <ul>
                        <li> <a href="category.php?id=335"> 大米 </a> </li>
                        <li> <a href="category.php?id=336"> 食用油类 </a> </li>
                        <li> <a href="category.php?id=337"> 面条/粉丝/面粉 </a> </li>
                        <li> <a href="category.php?id=338"> 酱油/醋/糖/盐 </a> </li>
                        <li> <a href="category.php?id=339"> 调味汁/调味酱/调味粉/料酒 </a> </li>
                        <li> <a href="category.php?id=340"> 火锅料/汤料 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=45"> 新鲜水果 </a>
          <ul>
                        <li> <a href="category.php?id=341"> 苹果 </a> </li>
                        <li> <a href="category.php?id=342"> 梨子 </a> </li>
                        <li> <a href="category.php?id=343"> 柑橘类/褚橙 </a> </li>
                        <li> <a href="category.php?id=344"> 葡萄/香蕉/奇异果 </a> </li>
                        <li> <a href="category.php?id=345"> 进口水果 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=46"> 冲调饮品 </a>
          <ul>
                        <li> <a href="category.php?id=346"> 茶叶/咖啡/果味冲饮 </a> </li>
                        <li> <a href="category.php?id=347"> 麦片谷物/芝麻糊/藕粉 </a> </li>
                        <li> <a href="category.php?id=348"> 豆奶/奶茶 </a> </li>
                      </ul>
        </li>
                <li> <a href="category.php?id=47"> 南北干货 </a>
          <ul>
                        <li> <a href="category.php?id=349"> 菌菇类 </a> </li>
                        <li> <a href="category.php?id=350"> 干果类 </a> </li>
                        <li> <a href="category.php?id=351"> 腌干水产品 </a> </li>
                        <li> <a href="category.php?id=352"> 海带/笋干/紫菜 </a> </li>
                        <li> <a href="category.php?id=353"> 腊肉腊肠/香肠 </a> </li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=354"> 测试 </a>
      <ul>
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
    timestamp: 1542205928,
    nonceStr: 'olYFDQqDWphExCLU',
    signature: '10bd9294bf79cce4ed19ae9efc83fdde957dd586',
    jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage' 
    ]
  });
 wx.ready(function () {
	//青蜂网络监听“分享给朋友”
    wx.onMenuShareAppMessage({
      title: '生鲜超市',
      desc: '生鲜超市',
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
      title: '生鲜超市',
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