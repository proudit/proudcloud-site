<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | サーバレスプラン</title>
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
			
			<div class="plan-name serverless">
				<dl>
				<dt><img src="../../img/smallicon_serverless.svg" alt="Serverless Plan"></dt>
				<dd><h2>サーバレスプラン</h2></dd>
				</dl>
				<p>AWS S3/AWS<br class="soft">CloudFront/AWS Lambdaを<br>フルに利用した業界最先端な<br class="soft">完全サーバレスサービスプラン。</p>
				<figure class="fig">
<?php if($layout_mode == "pc") { ?>
				<img src="img/fig_pc.svg" alt="" width="920" height="320">
<?php } else { ?>
				<img src="img/fig_sp.svg" alt="">
<?php } ?>		
				</figure>
			</div>
			
			<article class="feature">
				<h3>特性</h3>
				<ul class="mark">
					<li>独自ドメイン</li>
					<li>SSLサイト</li>
					<li>CDNによる高負荷対応</li>
					<li>高い安定性</li>
					<li>問い合わせ・アンケートフォーム機能あり</li>
				</ul>
			</article>
			
			<article class="scene">
				<h3>利用シーン</h3>
				<p>コーポレートサイト、一時的なキャンペーンサイト、その他静的コンテンツと問い合わせフォーム、申し込みフォームで構成されたサイト。</p>
			</article>
			
			<article class="plan serverless">
				<h3>ご利用料金</h3>
				<h4>サーバレスパック</h4>
				<div class="plan-detail">
					<dl>
						<dt>サービス内容</dt>
						<dd>
						<ul class="mark">
							<li>導入サポート(メール＋TEL）</li>
							<li>24/365サービス監視設定</li>
							<li>ドメイン取得代行</li>
							<li>SSL取得代行</li>
						</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>価格</dt>
						<dd>
						<dl>
							<dt>初期費用</dt>
							<dd><span><em>¥98,000</em></span></dd>
						</dl> 
						<dl>
							<dt>月額</dt>
							<dd><span><em>¥5,000</em></span></dd>
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
