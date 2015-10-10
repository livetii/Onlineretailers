<?php
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();
  	$user = $_SESSION['username'];
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Online retailers</title>
<link type="text/css" rel="stylesheet" href="style/reset.css">
<link type="text/css" rel="stylesheet" href="style/main.css">
<script src="jquery-1.11.3.js"></script>
<script src="script.js"></script>
</head>

<body>
<div class="headerBar">
	<div class="topBar">
		<div class="comWidth">
			<div class="leftArea">
				<a href="#" class="collection">收藏网站</a>
			</div>
			
			<div class="rightArea ">
				<form role="form" method="post" action="login.php" id="loginform">
					<div>
						<label for="username">账号：</label>
						<input type="text" id="username" name="username" placeholder="请输入账号..">
					</div>
					<div>
						<label for="password">密码：</label>
						<input type="password" id="password" name="password" placeholder="请输入密码..">
					</div>
					<div id="captcha-box">
						<label for="captcha">验证码：</label>
						<input type="text" id="captcha" name="authcode" placeholder="请输入验证码..">
						<a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='./captcha.php?r='+Math.random()">
							<img id="captcha_img" border="1" src="./captcha.php?r=<?php echo rand();?>" width="50px" height="30px">
						</a>
					</div>
					<button type="submit" name="login" id="loginbtn" class="divcommon">登录</button>
				</form>
				<span id="welcome">欢迎来到网上商城！<a><?php echo $user ?></a></span>
			</div>
		</div>
	</div>

	<div class="logoBar">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#">
					<img src="images/logo.gif" alt="慕课网"></a>
			</div>

			<div class="search_box fl">
				<input type="text" class="search_text fl">
				<input type="button" value="搜 索" class="search_btn fr"></div>
			<div class="shopCar fr">
				<span class="shopText fl">购物车</span>
				<span class="shopNum fl">0</span>
			</div>
		</div>
	</div>

	<div class="navBox">
		<div class="comWidth clearfix">

			<div class="shopClass fl">
				<h3>
					全部商品分类 <i class="shopClass_icon"></i>
				</h3>
				<div class="shopClass_show">
					<dl class="shopClass_item">
						<dt>
							<a href="#" class="b">手机</a>
							<a href="#" class="b">数码</a>
							<a href="#" class="aLink">合约机</a>
						</dt>
						<dd>
							<a href="#">荣耀3X</a>
							<a href="#">单反</a>
							<a href="#">智能设备</a>
						</dd>
					</dl>
					<dl class="shopClass_item" id="shoptwo">
						<dt>
							<a href="#" class="b">电脑</a>
							<a href="#" class="b">硬件外设</a>
							<a class="aLink" href="#">装机宝</a>
						</dt>
						<dd>
							<a href="#">笔记本</a>
							<a href="#">台式机</a>
							<a href="#">超极本备</a>
							<a href="#">平板</a>
						</dd>
					</dl>
					<dl class="shopClass_item">
						<dt>
							<a href="#" class="b">大家电</a>
						</dt>
						<dd>
							<a href="#">电视</a>
							<a href="#">空调</a>
							<a href="#">冰箱</a>
							<a href="#">洗衣机</a>
						</dd>
					</dl>
					<dl class="shopClass_item">
						<dt>
							<a href="#" class="b">厨房电器</a>
							<a href="#" class="b">生活电器</a>
						</dt>
						<dd>
							<a href="#">空气净化器</a>
							<a href="#">微波炉</a>
							<a href="#">取暖设备</a>
						</dd>
					</dl>
					<dl class="shopClass_item">
						<dt>
							<a href="#" class="b">食品/</a>
							<a href="#" class="b">饮料/</a>
							<a href="#" class="b">生鲜</a>
							<a class="aLink" id="linkid" href="#">粮油</a>
						</dt>
						<dd>
							<a href="#">进口</a>
							<a href="#">方便面</a>
							<a href="#">零食</a>
							<a href="#">保健</a>
						</dd>
					</dl>
				</div>
			</div>

			<div class="field banner">
				<div id="tabs" class="comWidth clearfix">
					<ul class="nav fl" id="notice-tit">
						<li class="select">
							<a href="#">数码城</a>
						</li>
						<li>
							<a href="#">天黑黑</a>
						</li>
						<li>
							<a href="#">团购</a>
						</li>
						<li>
							<a href="#">发现</a>
						</li>
						<li>
							<a href="#">二手特卖</a>
						</li>
						<li>
							<a href="#">名品会</a>
						</li>
					</ul>

					<div class="banner_bar banner_big" id="notice-con">
						<div class="imgBox" style="display:block">
							<li>
								<a href="#">
									<img src="images/banner/banner_01.png" alt="banner"/>
								</a>
							</li>
						</div>
						<div class="imgBox" style="display:none">
							<li>
								<a href="#">
									<img src="images/banner/banner_02.png" alt="banner"/>
								</a>
							</li>
						</div>
						<div class="imgBox" style="display:none">
							<li>
								<a href="#">
									<img src="images/banner/banner_03.png" alt="banner"/>
								</a>
							</li>
						</div>
						<div class="imgBox" style="display:none">
							<li>
								<a href="#">
									<img src="images/banner/banner_01.png" alt="banner"/>
								</a>
							</li>
						</div>
						<div class="imgBox" style="display:none">
							<li>
								<a href="#">
									<img src="images/banner/banner_02.png" alt="banner"/>
								</a>
							</li>
						</div>
						<div class="imgBox" style="display:none">
							<li>
								<a href="#">
									<img src="images/banner/banner_03.png" alt="banner"/>
								</a>
							</li>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<div class="space"></div>

<div class="shopTit comWidth">
	<span class="icon"></span>
	<h3>电子产品</h3>
	<a href="#" class="more">更多&gt;&gt;</a>
</div>
<div class="shopList comWidth clearfix">
	<div class="leftArea">
		<div class="banner_bar banner_sm">
			<ul class="imgBox">
				<li>
					<a href="#">
						<img src="images/banner/banner_sm01.png" alt="banner"/>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/banner/banner_sm02.gif" alt="banner"/>
					</a>
				</li>
			</ul>
			<div class="imgNum">
				<a href="#" class="active"></a>
				<a href="#"></a>
				<a href="#"></a>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="shopList_top">
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image.png" alt=""/>
					</a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>1899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image.png" alt=""/>
					</a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>2888元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image.png" alt=""/>
					</a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>2899元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image.png" alt=""/>
					</a>
				</div>
				<h3>HTC新渴望8系列</h3>
				<p>2888元</p>
			</div>
		</div>
		<div class="shopList_sm clearfix">
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm_1.png" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>NFC技术一碰轻松配对！接触屏幕</p>
					<h3>¥149.00</h3>
				</div>
			</div>
			<div class="shopItem_sm shopItem1_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm_2.png" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>Samsung三星G ALAXY Grand2</p>
					<h3>¥2000.00</h3>
				</div>
			</div>
			<div class="shopItem_sm shopItem1_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm_3.png" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>全网低价 Apple 苹果iPad mini1</p>
					<h3>¥1888.00</h3>
				</div>
			</div>
			<div class="shopItem_sm shopItem1_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm_4.png" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>Apple苹果 全新 Retina屏MacBoo</p>
					<h3>¥20020.00</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="shopTit comWidth">
	<span class="icon"></span>
	<h3>食品酒水</h3>
	<a href="#" class="more">更多&gt;&gt;</a>
</div>
<div class="shopList comWidth clearfix">
	<div class="leftArea">
		<div class="banner_bar banner_sm">
			<ul class="imgBox">
				<li>
					<a href="#">
						<img src="images/banner/banner_sm02.gif" alt="banner"/>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/banner/banner_sm01.png" alt="banner"/>
					</a>
				</li>
			</ul>
			<div class="imgNum">
				<a href="#" class="active"></a>
				<a href="#"></a>
				<a href="#"></a>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="shopList_top">
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image1.png" alt=""/>
					</a>
				</div>
				<h3>三月美食狂享购</h3>
				<p>50元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image1.png" alt=""/>
					</a>
				</div>
				<h3>三月美食狂享购</h3>
				<p>40元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image1.png" alt=""/>
					</a>
				</div>
				<h3>三月美食狂享购</h3>
				<p>20元</p>
			</div>
			<div class="shop_item">
				<div class="shop_img">
					<a href="#">
						<img src="images/image1.png" alt=""/>
					</a>
				</div>
				<h3>三月美食狂享购</h3>
				<p>80元</p>
			</div>
		</div>
		<div class="shopList_sm clearfix">
			<div class="shopItem_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm1_1.gif" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>康比特 维他保咀嚼片 60片</p>
					<h3>¥600.00</h3>
				</div>
			</div>
			<div class="shopItem_sm shopItem1_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm1_1.gif" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>康比特 维他保咀嚼片 40片</p>
					<h3>¥400.00</h3>
				</div>
			</div>
			<div class="shopItem_sm shopItem1_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm1_1.gif" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>康比特 维他保咀嚼片 20片</p>
					<h3>¥200.00</h3>
				</div>
			</div>
			<div class="shopItem_sm shopItem1_sm">
				<div class="shopItem_smImg">
					<a href="#">
						<img src="images/shopsm1_1.gif" alt=""/>
					</a>
				</div>
				<div class="shopItem_text">
					<p>康比特 维他保咀嚼片 10片</p>
					<h3>¥100.00</h3>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer">
	<p>
		<a href="#">网站简介</a> <i>|</i>
		<a href="#">网站公告</a>
		<i>|</i>
		<a href="#">招纳贤士</a>
		<i>|</i>
		<a href="#">联系我们</a>
		<i>|</i>
		客服热线：012-345-6789
	</p>
	<p>
		Copyright &copy; 2007 - 2015 淘宝版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123
	</p>
	<p class="web">
		<a href="#">
			<img src="images/footerlogo.png" alt="logo"></a>
		<a href="#">
			<img src="images/footerlogo.png" alt="logo"></a>
		<a href="#">
			<img src="images/footerlogo.png" alt="logo"></a>
		<a href="#">
			<img src="images/footerlogo.png" alt="logo"></a>
	</p>
</div>
<script>
	var validate = '<?php echo empty($_SESSION["validate"])?'':$_SESSION["validate"] ?>';
	var login = '<?php echo empty($_SESSION["login"])?'':$_SESSION["login"] ?>';
	if(validate){
		document.getElementById("captcha-box").style.display = 'inline-block';
		document.getElementById("username").value = '<?php echo $_SESSION["username"] ?>';
		document.getElementById("password").value = '<?php echo $_SESSION["password"] ?>';
	}
	if(login) {
		document.getElementById('loginform').style.display = 'none';
		document.getElementById('welcome').style.display = 'block';
	}
</script>
</body>
</html>