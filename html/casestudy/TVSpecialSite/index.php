<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | CASESTUDY - 某メディア関連企業</title>
<meta name="description" content="AWSをベースにした「次世代」のクラウドインフラ環境を、導入から運用までトータルサポートします。">
<meta name="keywords" content="AWS, サーバ運用サービス, プラウドクラウド, クラウドインフラ環境, Amazon Web Service Partner Network">
<script>
window.LAYOUT_MODE = "<?php echo $layout_mode; ?>";
</script>
<script src="../../js/jquery.min.js"></script>
<link rel="stylesheet" href="../../css/content.css">
</head>

<body class="casestudy">
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
			
			<div class="company">
				<dl>
				<dt><img src="../img/label_company.svg" alt="Company"></dt>
				<dd><h2>某メディア関連企業</h2></dd>
				</dl>
				<figure class="main"><img src="img/main.png" alt=""></figure>
			</div>
			<p>某テレビ局のドラマ特設サイト</p>
			<article>
				<h3>導入背景</h3>
							</article>
			
			<article>
				<h4>ピーク時に台数を増やし負荷分散</h4>
				<p>・常時4台、ピーク時最大20台で分散想定となります。
リリース時や、番組後等はタイムスケジュールで事前に最大スケール、突発的な負荷は通常のオートスケールにて対応。</p>
			</article>
			
			<article>
				<h4>画像、javascript、cssなどは常にCloudfrontを利用</h4>
			</article>
			
		</section>
		
		
		<section>
			<article>
				<h3>システム構成図</h3>
				<figure class="fig">
<?php if($layout_mode == "pc") { ?>
				<img src="img/fig_pc.png" alt="">
<?php } else { ?>
				<img src="img/fig_sp.png" alt="">
<?php } ?>
				</figure>
			</article>
			
			<article>
				<h3>概要</h3>
				<div class="table">
				<dl>
					<dt>サイト名</dt>
					<dd>某テレビ局ドラマ特設サイト</dd>
				</dl>
				<dl>
					<dt>クライアント</dt>
					<dd>某メディア関連企業</dd>
				</dl>
				<dl>
					<dt>使用プラン</dt>
					<dd><a href="../../plan/server/">サーバプラン</a></dd>
				</dl>
				<dl>
					<dt>AWSプロダクト</dt>
					<dd>
					<ul class="functions">
						<li><i class="icon ec2"></i>EC2</li>
						<li><i class="icon rds"></i>RDS</li>
						<li><i class="icon route53"></i>CloudFront</li>
						<li><i class="icon elb"></i>ELB</li>
						<li><i class="icon scaling"></i>Autoscaling</li>
					</ul>
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
