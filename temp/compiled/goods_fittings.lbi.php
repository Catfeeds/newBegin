<?php if ($this->_var['fittings']): ?>
<div class="taocan_box">
  <div class="taocan_bd">
   <div class="itemtaocan" id="taocan_tabs">
      <ul class="itemtaocanContent">
      <?php $_from = $this->_var['fittings_tab_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'tab_item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['tab_item']):
?>
          <li <?php if ($this->_var['key'] == 0): ?>class="itemtaocanContentFocus"<?php endif; ?>><a href="javascript:void(0);">套餐<?php echo $this->_var['comboTab'][$this->_var['key']]; ?></a></li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
   </div>
    <div class="taocan_panels" id="taocan_panels"> 
      
      <?php $_from = $this->_var['fittings_tab_index']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'tab_item');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['tab_item']):
        $this->_foreach['foo']['iteration']++;
?>
      <div class="panel" <?php if ($this->_foreach['foo']['iteration'] == 1): ?>style="display: block;"<?php endif; ?>>
        <form name="m_goods_<?php echo $this->_var['key']; ?>" method="post" action="" onSubmit="return false;">
          <h4></h4>
          <ul class="cle">
            <div style="float:left;"><li><a target="_blank" class="pic" href="<?php echo $this->_var['goods']['url']; ?>"> <img alt="<?php echo $this->_var['goods']['goods_name']; ?>" data-original="<?php echo $this->_var['goods']['goods_thumb']; ?>" src="themes/shengxian/images/spacer.gif" class="loading"></a>
              <p class="name"> <a target="_blank" href="<?php echo $this->_var['goods']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?></a> </p>
              <p class="price">
                <input type="checkbox" value="<?php echo $this->_var['goods']['goods_id']; ?>" data="<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?> " spare="0" stock="0" class="m_goods_body m_goods_<?php echo $this->_var['key']; ?>" item="m_goods_<?php echo $this->_var['key']; ?>">
                <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price_formated']; ?><?php endif; ?></p>
            	</li>
            </div>
            <div id="fittingBox" class="fittingitem">
              <ul> 
                <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_list');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['goods_list']):
        $this->_foreach['foo2']['iteration']++;
?> 
                <?php if ($this->_var['goods_list']['group_id'] == $this->_var['key']): ?>
                
                <li class="plus"></li>
                <li> <a target="_blank" class="pic" href="<?php echo $this->_var['goods_list']['url']; ?>"> <img alt="<?php echo $this->_var['goods_list']['goods_name']; ?>" data-original="<?php echo $this->_var['goods_list']['goods_thumb']; ?>" src="themes/shengxian/images/spacer.gif" class="loading"></a>
                  <p class="name"> <a target="_blank" href="<?php echo $this->_var['goods_list']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_list']['goods_name']); ?></a> </p>
                  <p class="price">
                    <input class="m_goods_list m_goods_<?php echo $this->_var['key']; ?>" item="m_goods_<?php echo $this->_var['key']; ?>" type="checkbox" value="<?php echo $this->_var['goods_list']['goods_id']; ?>" data="<?php echo $this->_var['goods_list']['fittings_price_ori']; ?>" spare="<?php echo $this->_var['goods_list']['spare_price_ori']; ?>" stock="0">
                    ￥<?php echo $this->_var['goods_list']['fittings_price_ori']; ?></p>
                </li>
                
                <?php endif; ?> 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
              </ul>
            </div>
            <li class="equal"></li>
            <li class="price_info submit_<?php echo $this->_var['key']; ?>">
              <p class="count"> <b>0</b> 件商品，套餐购买立省 <span class="red tip_spare">0.00 元</span> </p>
              <p>原&nbsp;价：<span class="res-totalprice totalprice">¥0.00</span></p>
              <p>套餐价：<span class="red res-totalprice combo_price">¥0.00 </span></p>
              <p class="buy"><a href="javascript:addMultiToCart('m_goods_<?php echo $this->_var['key']; ?>', '<?php echo $this->_var['goods']['goods_id']; ?>')" class="btn">购买套餐</a></p>
              <input type="hidden" name="m_goods_<?php echo $this->_var['key']; ?>_number" value="1" />
            </li>
          </ul>
        </form>
      </div>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      
    </div>
  </div>
</div>
<?php endif; ?>


<script type="text/javascript">
var btn_buy = "确定";
var is_cancel = "取消";
var select_spe = "请选择商品属性";
var select_base = '请选择套餐基本件';
var select_shop = '请选择套餐商品';
var data_not_complete = '数据格式不完整';
var understock = '库存不足，请选择其他商品';

$(function(){
	
	$(".fittingitem").each(function(i, e) {
        var a = $(this).find(".plus");
		var b = a.size();
		var c = $(this).find("li:not(.plus)");
		var d = c.size();
		$(this).find("ul").width(b*40+d*170);
    });
	

	//组合套餐tab切换
	var _tab = $('#cn_b h2');
	var _con = $('#cn_h blockquote');
	var _index = 0;
	_con.eq(0).show().siblings('blockquote').hide();
	_tab.css('cursor','pointer');
	_tab.click(function(){
		_index = _tab.index(this);
		_tab.eq(_index).removeClass('h2bg').siblings('h2').addClass('h2bg');
		_con.eq(_index).show().siblings('blockquote').hide();
	})
	//选择基本件
	$('.m_goods_body').click(function(){
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), <?php echo $this->_var['goods']['goods_id']; ?>); //基本件(组,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), <?php echo $this->_var['goods']['goods_id']; ?>); //删除基本件(组,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//变更选购的配件
	$('.m_goods_list').click(function(){
		//是否选择主件
		if(!$(this).parents('form').find('.m_goods_body').prop('checked')){
			alert(select_base);
			return false;
		}
		if($(this).prop('checked')){
			ec_group_addToCart($(this).attr('item'), $(this).val(),<?php echo $this->_var['goods']['goods_id']; ?>); //新增配件(组,配件,主件)
		}else{
			ec_group_delInCart($(this).attr('item'), $(this).val(),<?php echo $this->_var['goods']['goods_id']; ?>); //删除基本件(组,配件,主件)
			display_Price($(this).attr('item'),$(this).attr('item').charAt($(this).attr('item').length-1));
		}
	})
	//可以购买套餐的最大数量
	$(".combo_stock").keyup(function(){
		var group = $(this).parents('form').attr('name');
		getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	});
})

//允许购买套餐的最大数量
function getMaxStock(group){
	var obj = $('input[name="'+group+'_number"]');
	var original = parseInt(Number(obj.val()));
	var stock = $("."+group).eq(0).attr('stock');
	//是否是数字
	if(isNaN(original)){
		original = 1;
		obj.val(original);
	}
	$("."+group).each(function(index){
		if($("."+group).eq(index).prop('checked')){
			var item_stock = parseInt($("."+group).eq(index).attr('stock'));
			stock = (stock > item_stock)?item_stock:stock;//取最小值
		}
	});
	//更新
	original = (original < 1)?1:original;
	stock = (stock < 1)?1:stock;
	if(original > stock){
		obj.val(stock);
	}
}
function accAdd(arg1, arg2) {
    var r1, r2, m, c;
    try {
        r1 = arg1.toString().split(".")[1].length;
    }
    catch (e) {
        r1 = 0;
    }
    try {
        r2 = arg2.toString().split(".")[1].length;
    }
    catch (e) {
        r2 = 0;
    }
    c = Math.abs(r1 - r2);
    m = Math.pow(10, Math.max(r1, r2));
    if (c > 0) {
        var cm = Math.pow(10, c);
        if (r1 > r2) {
            arg1 = Number(arg1.toString().replace(".", ""));
            arg2 = Number(arg2.toString().replace(".", "")) * cm;
        } else {
            arg1 = Number(arg1.toString().replace(".", "")) * cm;
            arg2 = Number(arg2.toString().replace(".", ""));
        }
    } else {
        arg1 = Number(arg1.toString().replace(".", ""));
        arg2 = Number(arg2.toString().replace(".", ""));
    }
    return (arg1 + arg2) / m;
}

//统计套餐价格
function display_Price(_item,indexTab){
	var _size = $('.'+_item).size();
	var _amount_shop_price = 0;
	var _amount_spare_price = 0;
	indexTab = indexTab - 1;
	var fitting_num = 0;
	for(i=0; i<_size; i++){
		obj = $('.'+_item).eq(i);
		if(obj.prop('checked')){
			_amount_shop_price = accAdd(_amount_shop_price,parseFloat(obj.attr('data'))); //原件合计
			_amount_spare_price = accAdd(_amount_spare_price,parseFloat(obj.attr('spare'))); //优惠合计
			fitting_num++;
		}
	}

	$('.price_info:eq('+indexTab+') .count b').text(fitting_num);//配件数量
		
	var tip_spare = $('.tip_spare:eq('+indexTab+')');//节省文本

	tip_spare.text(_amount_spare_price+"元");//省钱显示提示信息
	
	//显示总价
	$('.combo_price:eq('+indexTab+')').text("¥"+_amount_shop_price);
	
	//显示参考价
	$('.totalprice:eq('+indexTab+')').text("¥"+(parseInt(_amount_shop_price)+_amount_spare_price));
}

//处理添加商品到购物车
function ec_group_addToCart(group,goodsId,parentId){
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var quick		   = 0;
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名

  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}

//处理添加商品到购物车的反馈信息
function ec_group_addToCartResponse(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      alert(understock);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
    // 没选规格，弹出属性选择框
    else if (result.error == 6)
    {
      ec_group_openSpeDiv(result.message, result.group, result.goods_id, result.parent);
    }
    else
    {
      alert(result.message);
	  cancel_checkboxed(result.group, result.goods_id);//取消checkbox
    }
  }
  else
  {
	//处理Ajax数据
	var group = result.group.substr(0,result.group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==result.goods_id){
			//主件显示价格、配件显示基本件+属性价
			var goods_price = (result.parent > 0) ? (parseFloat(result.fittings_price)+parseFloat(result.spec_price)):result.goods_price;
			$("."+group).eq(index).attr('data',goods_price);//赋值到文本框data参数
			$("."+group).eq(index).attr('stock',result.stock);//赋值到文本框stock参数
			$('.'+group+'_display').eq(index).text(goods_price);//前台显示
		}
	});
	getMaxStock(group);//根据套餐获取该套餐允许购买的最大数
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
  }
}

//处理删除购物车中的商品
function ec_group_delInCart(group,goodsId,parentId){
  var goods        = new Object();
  var group_item   = (typeof(parentId) == "undefined") ? goodsId : parseInt(parentId);

  goods.goods_id = goodsId;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group = group + '_' + group_item;//组名

  Ajax.call('flow.php?step=del_in_cart_combo', 'goods=' + $.toJSON(goods), ec_group_delInCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}

//处理删除购物车中的商品的反馈信息
function ec_group_delInCartResponse(result)
{
	var group = result.group;
	if (result.error > 0){
		alert(data_not_complete);
	}else if(result.parent == 0){
		$('.'+group).attr("checked",false);
	}
	display_Price(group,group.charAt(group.length-1));//显示套餐价格
}

//生成属性选择层
function ec_group_openSpeDiv(message, group, goods_id, parent) 
{
	var _id = "speDiv";
	var m = "mask";
	if (docEle(_id))
		document.removeChild(docEle(_id));
	if (docEle(m))
		document.removeChild(docEle(m));
	// 计算上卷元素值
	var scrollPos;
	if (typeof window.pageYOffset != 'undefined') {
		scrollPos = window.pageYOffset;
	} else if (typeof document.compatMode != 'undefined' && document.compatMode != 'BackCompat') {
		scrollPos = document.documentElement.scrollTop;
	} else if (typeof document.body != 'undefined') {
		scrollPos = document.body.scrollTop;
	}

	var i = 0;
	var sel_obj = document.getElementsByTagName('select');
	while (sel_obj[i]) {
		sel_obj[i].style.visibility = "hidden";
		i++;
	}

	// 新激活图层
	var newDiv = document.createElement("div");
	var speAttr = document.createElement("div");
	newDiv.id = _id;
	speAttr.className = 'attr-list';
	// 生成层内内容
	newDiv.innerHTML = '<div class="pop-header"><span>' + select_spe + '</span><a href="javascript:void(0);" onclick="javascript:cancel_div()" title="关闭"  class="spe-close"></a></div>';
	for (var spec = 0; spec < message.length; spec++) {
		speAttr.innerHTML += '<div class="dt">' + message[spec]['name'] + '：</div>';
		
		if (message[spec]['attr_type'] == 1) {
			var speDD = document.createElement("div");
			speDD.className ='dd radio-dd';
			for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++) {
				if (val_arr == 0) {
					speDD.innerHTML += "<span class='attr-radio curr'><label for='gt_spec_value_"+message[spec]['values'][val_arr]['id']+"'><input type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='gt_spec_value_" + message[spec]['values'][val_arr]['id'] + "' checked />&nbsp;<font>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font></label></span>';
				} else {
					speDD.innerHTML += "<span class='attr-radio'><label for='gt_spec_value_"+message[spec]['values'][val_arr]['id']+"'><input type='radio' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='gt_spec_value_" + message[spec]['values'][val_arr]['id'] + "' />&nbsp;<font>" + message[spec]['values'][val_arr]['label'] + '</font> [' + message[spec]['values'][val_arr]['format_price'] + ']</font></label></span>';
				}
			}
			speDD.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
		} else {
			var speDD = document.createElement("div");
			speDD.className = 'dd checkbox-dd';
			for (var val_arr = 0; val_arr < message[spec]['values'].length; val_arr++) {
				speDD.innerHTML += "<span class='attr-radio'><label for='gt_spec_value_"+message[spec]['values'][val_arr]['id']+"'><input type='checkbox' name='spec_" + message[spec]['attr_id'] + "' value='" + message[spec]['values'][val_arr]['id'] + "' id='gt_spec_value_" + message[spec]['values'][val_arr]['id'] + "' />&nbsp;<font>" + message[spec]['values'][val_arr]['label'] + ' [' + message[spec]['values'][val_arr]['format_price'] + ']</font></label></span>';
			}
			
			speDD.innerHTML += "<input type='hidden' name='spec_list' value='" + val_arr + "' />";
		}
		speAttr.appendChild(speDD);
		speAttr.innerHTML+="<div class='blank10'></div>"
	}
	newDiv.appendChild(speAttr);
  newDiv.innerHTML += "<div class='spe-btn'><a href='javascript:ec_group_submit_div(\"" + group + "\"," + goods_id + "," + parent + ")' class='sure-btn' >" + btn_buy + "</a><a href='javascript:ec_group_cancel_div(\"" + group + "\"," + goods_id + ")' class='cancel-btn'>" + is_cancel + "</a></div>";

  document.body.appendChild(newDiv);


	$('#speDiv').css('top',($(window).height()-$('#speDiv').height())/2);
	// mask图层
	var newMask = document.createElement("div");
	newMask.id = m;
	newMask.style.position = "fixed";
	newMask.style.zIndex = "9999";
	newMask.style.width = document.body.scrollWidth + "px";
	newMask.style.height = document.body.scrollHeight + "px";
	newMask.style.top = "0px";
	newMask.style.left = "0px";
	newMask.style.background = "#000";
	newMask.style.filter = "alpha(opacity=15)";
	newMask.style.opacity = "0.15";
	document.body.appendChild(newMask);
	$('#speDiv .radio-dd').on('click','.attr-radio',function(){
		$(this).addClass('curr').siblings('.attr-radio').removeClass('curr');
	});
	$('#speDiv .checkbox-dd').on('click','.attr-radio',function(){
		$(this).toggleClass('curr');
	});
}

//获取选择属性后，再次提交到购物车
function ec_group_submit_div(group, goods_id, parentId) 
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var input_arr      = document.getElementById('speDiv').getElementsByTagName('input'); //by mike
  var quick		   = 1;

  var spec_arr = new Array();
  var j = 0;

  for (i = 0; i < input_arr.length; i ++ )
  {
    var prefix = input_arr[i].name.substr(0, 5);

    if (prefix == 'spec_' && (
      ((input_arr[i].type == 'radio' || input_arr[i].type == 'checkbox') && input_arr[i].checked)))
    {
      spec_arr[j] = input_arr[i].value;
      j++ ;
    }
  }

  goods.quick    = quick;
  goods.spec     = spec_arr;
  goods.goods_id = goods_id;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.group    = group;//组名

  Ajax.call('flow.php?step=add_to_cart_combo', 'goods=' + $.toJSON(goods), ec_group_addToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike

  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }

}

//关闭mask和新图层的同时取消选择
function ec_group_cancel_div(group, goods_id){
  document.body.removeChild(docEle('speDiv'));
  document.body.removeChild(docEle('mask'));

  var i = 0;
  var sel_obj = document.getElementsByTagName('select');
  while (sel_obj[i])
  {
    sel_obj[i].style.visibility = "";
    i++;
  }
  cancel_checkboxed(group, goods_id);//取消checkbox
}

/*
*套餐提交到购物车 by mike
*/
function addMultiToCart(group,goodsId){
	var goods     = new Object();
	var number    = $('input[name="'+group+'_number"]').val();
	
	goods.group = group;
	goods.goods_id = goodsId;
	goods.number = (number < 1) ? 1:number;
	
	//判断是否勾选套餐
	if(!$("."+group).is(':checked')){
		alert(select_shop);
		return;	
	}
	//alert(goodsId);
	Ajax.call('flow.php?step=add_to_cart_group', 'goods=' + $.toJSON(goods), addMultiToCartResponse, 'POST', 'JSON'); //兼容jQuery by mike
}

//回调
function addMultiToCartResponse(result){
	if(result.error > 0){
		alert(result.message);
	}else{
		window.location.href = 'flow.php';
	}
}

//取消选项
function cancel_checkboxed(group, goods_id){
	//取消选择
	group = group.substr(0,group.lastIndexOf("_"));
	$("."+group).each(function(index){
		if($("."+group).eq(index).val()==goods_id){
			$("."+group).eq(index).attr("checked",false);			  
		}
	});
}

/*
//sleep
function sleep(d){
	for(var t = Date.now();Date.now() - t <= d;);
}
*/
</script>