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
				AWS EC2/RDS/Elasticache/DynamoDB..etcなど多彩な組み合わせに対応<br></p>
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
                <br><br>
                <p>安心・安定の3wayシステム(Web/App/DB)を手堅く運用したい
			</article>
			
			<article class="plan server">
				<h3>ご利用料金</h3>
				<div class="plan-detail">
					<dl>
						<dt>サービス内容</dt>
						<dd>
                          <p>AWSコンサル・設計(冗長化支援)<br>
                          <p>フルマネージドサービス
                             <ul class="mark" >
                              <li>完全運用代行
                              <li>セキュリティパッチ
                              <li>24/365監視/自動復旧
                              <li>自動バックアップシステム
                              <li>etc..ご要望に応じて
                             </ul>
                          </p>
                        </dd>
					</dl>
					
					<dl>
						<dt>価格</dt>
						<dd>
						<dl>
							<dt>初期費用</dt>
							<dd><span><em>¥100,000〜</em></span></dd>
						</dl> 
						<dl>
							<dt>月額費用</dt>
							<dd><span><em>¥30,000〜</em></span></dd>
                            <br><b>※ AWS利用費用は別途</b>
                            <br><b>※ 台数毎の費用ではなくシステム・サービス毎の費用</b>
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
