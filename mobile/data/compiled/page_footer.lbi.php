<div id="content" class="footer mr-t20">

  
    <p class="region"><?php echo $this->_var['copyright']; ?> <?php if ($this->_var['stats_code']): ?><?php echo $this->_var['stats_code']; ?><?php endif; ?></p>
    <p class="region"> 
    <?php if ($this->_var['icp_number']): ?> 
    <?php echo $this->_var['lang']['icp_number']; ?>: <a href="http://www.miibeian.gov.cn/" target="_blank"> <?php echo $this->_var['icp_number']; ?> </a> 
    <?php endif; ?>
	</p>
<div style="height:5em"></div>
</div>


<?php if ($this->_var['script_name'] != "goods"): ?>
<div class="global-nav">
    <div class="global-nav__nav-wrap">
        <div class="global-nav__nav-item">
            <a href="./" class="global-nav__nav-link<?php if ($this->_var['script'] == "index"): ?> global-nav__nav-cur<?php endif; ?>">
                <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i>
                <span class="global-nav__nav-tit">首页</span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="cat_all.php" class="global-nav__nav-link<?php if ($this->_var['script'] == "category"): ?> global-nav__nav-cur<?php endif; ?>">
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
            <a href="flow.php?step=cart" class="global-nav__nav-link<?php if ($this->_var['script'] == "cart"): ?> global-nav__nav-cur<?php endif; ?>">
                <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i>
                <span class="global-nav__nav-tit">购物车</span>
                <span class="global-nav__nav-shop-cart-num" id="carId"><?php 
$k = array (
  'name' => 'cart_info_number',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span>
            </a>
        </div>
        <div class="global-nav__nav-item">
            <a href="user.php" class="global-nav__nav-link<?php if ($this->_var['script'] == "user"): ?> global-nav__nav-cur<?php endif; ?>">
                <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i>
                <span class="global-nav__nav-tit">会员中心</span>
            </a>
        </div>
    </div>
</div>
<?php endif; ?>


<div id="toTop" class="toTop">
  <img alt="" src="<?php echo $this->_var['ectouch_themes']; ?>/images/scropTop.png">
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

<script type="text/javascript" src="<?php echo $this->_var['ectouch_themes']; ?>/js/zepto.min.js"></script>
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