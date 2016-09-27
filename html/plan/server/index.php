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
			AWSをベースにしたを導入から運用までトータルサポートします。<br>
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
				<dd><h2>サーバプラン</h2></dd>
				</dl>
				<p>EC2をベースとして<br class="soft">利用したサーバマネージドプラン。<br>
				AWS EC2/RDS/Elasticache/DynamoDB..etc、どんなサービスとの組み合わせにも対応<br></p>
                <br><br>
                <p><font size="6" color="#778899">10台以上、フル冗長構成で最大月額50%OFF！！</font></p>
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
					<li>弾力性のあるスケール構成化対応</li>
					<li>完全なインスタンス制御</li>
					<li>柔軟なマネージドサービス</li>
					<li>高い可用性、フル冗長構成へのコンサルティング</li>
					<li>豊富なセキュリティ対応、対策</li>
				</ul>
			</article>
			
			<article class="scene">
				<h3>利用シーン</h3>
				<p>オンプレミス、他社クラウドからの移行、大規模システム、社内基幹システム最適</p>
                <br><br>
                <p>安心・安定の3wayシステム(Web/App/DB)を手堅く運用
			</article>
			
			<article class="plan server">
				<h3>ご利用料金</h3>
				<div class="plan-detail">
					<dl>
						<dt>サービス内容</dt>
						<dd>
                          <p>AWSサポート・コンサルティングサービス<br>
                          <p>サーバフルマネージドサービス(Linux/Win)
                             <ul class="mark" >
                              <li>完全運用代行
                              <li>セキュリティ対応
                              <li>24/365監視/自動復旧/エスカレーション
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
							<dd><span><em>¥50,000〜</em></span></dd>
						</dl> 
						<dl>
							<dt>月額費用</dt>
							<dd><span><em>¥20,000/host</em></span></dd>
                            <br><b>※ AWS利用費用は別途</b>
                            <br><b>※ 10台以上月額費用20%OFF!!</b>
                            <br><b>※ フル冗長構成化対応後はさらに月額費用30%OFF!!</b>
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
