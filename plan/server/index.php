<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | サーバプラン</title>
<meta name="description" content="AWSをベースにした「次世代」のクラウドインフラ環境を、導入から運用までトータルサポートします。">
<meta name="keywords" content="AWS, サーバ運用サービス, プラウドクラウド, クラウドインフラ環境, Amazon Web Service Partner Network">
<script>
window.LAYOUT_MODE = "<?php echo $layout_mode; ?>";
</script>
<script src="../../js/jquery.min.js"></script>
<link rel="stylesheet" href="../../css/content.css">
</head>

<body class="ourplan">
<div id="wrap">

	<header>
		<div class="logo"><a href="https://www.proudit.jp/"><img src="../../img/logo.svg" alt="Proudit Inc."></a></div>
		<div class="budge"><img src="../../img/budge_aws.png" alt="Amazon Web Service Partner Network | CONSULTING PARTNER"></div>
		
		<div id="visual">
			<h1><a href="../../">Proud Cloud</a></h1>
			<h2>AWSサーバ運用サービス - プラウドクラウド</h2>
			<div class="lead">
			AWSをベースにしたを導入から運用までトータルサポートします。
			</div>
		</div>
	</header>


	<div id="content">
		<h1>Casestudy</h1>
	
		<section>
			<nav class="return"><a href="../../">TOP PAGE</a></nav>
			
			<div class="plan-name server">
				<dl>
				<dt><img src="../../img/smallicon_server.svg" alt="Server Plan"></dt>
				<dd><h2>サーバープラン</h2></dd>
				</dl>
				<p>EC2をベースとして<br class="soft">利用した仮想サーバプラン。<br>
				AWS EC2RDS/Elasticache<br class="soft">/DynamoDB..etc.短時間で<br class="soft">	スペック変更が行えるため、<br>
				サービスの成長に合わせた<br class="soft">スケールアップが可能です。</p>
				<figure class="fig">
<?php if($layout_mode == "pc") { ?>
				<img src="img/fig_pc.svg" alt="" width="550" height="370">
<?php } else { ?>
				<img src="img/fig_sp.svg" alt="">
<?php } ?>		
				</figure>
			</div>
		
			<article class="feature">
				<h3>特性</h3>
				<ul class="mark">
					<li>弾力性のあるウェブスケール</li>
					<li>完全なインスタンス制御</li>
					<li>柔軟なホスティング</li>
					<li>高い可用性</li>
					<li>堅牢なネットワーキング</li>
					<li>利用の手軽さ</li>
				</ul>
			</article>
			
			<article class="scene">
				<h3>利用シーン</h3>
				<p>オンプレミスからの移行、 社内システムとのVPC接続、スモールスタートシステム</p>
			</article>
			
			<article class="plan server">
				<h3>ご利用料金</h3>
				<div class="plan-detail">
					<dl>
						<dt>サービス内容</dt>
						<dd><p>フルマネージドサービス<br>(完全運用代行、24/365監視/1次復旧あり)付き</p></dd>
					</dl>
					
					<dl>
						<dt>価格</dt>
						<dd>
						<dl>
							<dt>初期費用</dt>
							<dd><span><em>¥30,000</em></span></dd>
						</dl> 
						<dl>
							<dt>月額</dt>
							<dd><span><em>¥20,000</em></span></dd>
						</dl> 
						</dd>
					</dl>
				</div>
			</article>
		</section>
		
	</div>




	<footer>
		<a href="https://www.proudit.jp/" class="logo"><img src="../../img/logo.svg" alt="Proudit Inc."></a>	
		<p>&copy; Copyright Proudit Inc. All Rights Reserved.</p>
	</footer>
</div>
</body>
</html>
