<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | CASESTUDY - 某クリーナー販売企業 日本法人</title>
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
				<dd><h2>某クリーナー販売企業 日本法人</h2></dd>
				</dl>
				<figure class="main"><img src="img/main.png" alt=""></figure>
			</div>
			<article>
				<h3>導入背景</h3>

				<p>海外クリーナーメーカーの日本進出に向けた、日本顧客向けの製品登録、製品サポートサイトの立ち上げをサポートしました。<br><br>ご依頼から、初回リリースページのローンチが２週間と、タイトなスケジュールの中、海外本社から指定のセキュリティ/可用性の要件をクリアしつつ設計・構築を行う必要がありました。<br><br>

				弊社のPloudCloudにて運用実績のあるモデルを随所に取り入れることで設計・構築期間を大幅に短縮しつつ、お客様のご要望に沿ったサイトを期間内にローンチすることが出来ました。</p>
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
			<h3>構成ポイント</h3>
			</article>

			<article>
				<h4>セキュリティ対策</h4>
                <p>公開経路からの通信は全て暗号化(SSL/TSL)にて行い、EBS/EFSのコンテンツも暗号化保存にて対応</p>
				<p>マネージドWAFを採用し、公開経路からの脅威(クラック/DoS)に対策</p>
				<p>NATゲートウェイ方式を採用し、外部API連携の為の固定IP制限に対応</p>
				<br>
				<br>

				<h4>スケーラビリティ</h4>
				<p>画像、javascript、cssなどは常にCloudfrontを利用</p>
				<p>常時4台、ピーク時最大20台で分散可能。<br>
				    	リリース時や、媒体広告露出時はタイムスケジュールで事前に最大スケール、突発的な負荷は通常のオートスケールにて対応。</p>
				<br>
				<br>

				<h4>運用自動化・省力化</h4>
				<p>インスタンスの自動バックアップ管理はCloudWatch/Lambdaを採用</p>
				<p>ログ解析はAWSのサービスをフルに活用し、構築・管理工数共に省力化を実現。<br>
					EC2 -> Amazon Kinesis Firehouse -> Amazon ElasiticSearch Searvice -> Kibana (Cognitoによるユーザ認証あり)</p>
			</article>
			
			<article>
				<h3>概要</h3>
				<div class="table">
				<dl>
					<dt>サイト名</dt>
					<dd>製品登録、製品サポートサイト</dd>
				</dl>
				<dl>
					<dt>クライアント</dt>
					<dd>某クリーナー販売企業 日本法人</dd>
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
