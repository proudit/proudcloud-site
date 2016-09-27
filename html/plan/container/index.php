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
<script src="../../js/google.js"></script>
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
				<p>AWS ECSをベースにしたDockerコンテナフルマネージド運用サービス<br>
                <br>
                <p><font size="6" color="#778899">DevOps環境の設計〜運用までトータルサポート</font></p><br>
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
				<p>Docker基盤構築、運用でお困りの方</p>
				<p>DevOpsフロー構築まで含めた統合サポートご希望の方</p>
				<p>アプリ開発、ビジネスタスクに集中したい方</p>
			</article>

			<article class="plan container">
				<h3>基本構成</h3>
					<dl>
						<dt>システム例</dt>
						<dd>
						<ul class="mark">
							<li>Web/Appコンテナ x 4 (php/perl/RoR/Go など)</li>
							<li>ECSホスト(t2.medium) x 2</li>
							<li>ELB/ALB x 1</li>
							<li>ElastiCache(t2.small) x 1</li>
							<li>RDS(t2.small) mAZ x 1</li>
							<li>リソース監視(CloudWatch)</li>
							<li>ログ保存(Fluentd+S3)</li>
							<li>転送量200GB</li>
						</ul>
						</dd>
					</dl>
                            <br><b>※ 上記基本構成の場合、AWS利用費用は 約$400〜450</b>
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
						</ul>
						</dd>
					</dl>
					
					<dl>
						<dt>価格</dt>
						<dd>
						<dl>
							<dt>初期費用</dt>
							<dd><span><em>¥120,000〜</em></span></dd>
						</dl> 
						<dl>
							<dt>月額費用</dt>
							<dd><span><em>¥98,000/system</em></span></dd>
                            <br><b>※ AWS利用費用は別途</b>
						</dl> 
						</dd>
					</dl>
				</div>
<br>
<br>
<br>
<h3><a href="/contact/" >お申し込みはこちら</a></h3>
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
