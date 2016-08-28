<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | コンテナプラン</title>
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
			
			<div class="plan-name container">
				<dl>
				<dt><img src="../../img/smallicon_container.svg" alt="Container Plan"></dt>
				<dd><h2>コンテナプラン</h2></dd>
				</dl>
				<p>Dockerコンテナ管理サービスAWS ECSを利用。<br>
				仮想マシンと比べると<br class="soft">軽量で起動が早いためスケーラビリティに優れています。<br>
				In placeやBlue/Greenといったデプロイ方法を行う場合に適しています。</p>
				<figure class="fig">
<?php if($layout_mode == "pc") { ?>
				<img src="img/fig_pc.svg" alt="" width="390" height="390">
<?php } else { ?>
				<img src="img/fig_sp.svg" alt="">
<?php } ?>		
				</figure>
			</div>
	
			<article class="feature">
				<h3>特性</h3>
				<ul class="mark">
					<li>素早いスケーラビリティ</li>
					<li>柔軟なコンテナ配置</li>
					<li>高可用性</li>
					<li>少ないオーバーヘッド</li>
				</ul>
			</article>
			
			<article class="scene">
				<h3>利用シーン</h3>
				<p>Dockerによる開発・運用を前提としたシステム。</p>
				<p>ホスト構築〜目的のDevOpsフロー構築までを統合サポート</p>
			</article>

			<article class="plan container">
				<h3>基本構成 / AWS参考費用</h3>
					<dl>
						<dt>システム例</dt>
						<dd>
						<ul class="mark">
							<li>Appコンテナ x 4 (php/perl/RoR/Go など)</li>
							<li>ECSホスト(t2.medium) x 2</li>
							<li>ELB/ALB x 1</li>
							<li>ElastiCache(redis) x 1</li>
							<li>RDS(mysql) mAZ x 1</li>
							<li>リソース監視(CloudWatch)</li>
							<li>ログ保存(Fluentd+S3)</li>
						</ul>
						</dd>
					</dl>
			</article>
			
			<article class="plan container">
				<h3>ご利用料金</h3>
				<div class="plan-detail">
					<dl>
						<dt>サービス内容</dt>
						<dd>
						<ul class="mark">
							<li>AWS ECSホスト設計・構築</li>
							<li>DevOps環境構築コンサル・設計・構築</li>
							<li>フルマネージドサポート</li>
							<p><b>※ AWS利用費用は別途</b></p>
						</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>価格</dt>
						<dd>
						<dl>
							<dt>初期費用</dt>
							<dd><span><em>¥150,000</em></span></dd>
						</dl> 
						<dl>
							<dt>月額費用</dt>
							<dd><span><em>¥50,000</em></span></dd>
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
