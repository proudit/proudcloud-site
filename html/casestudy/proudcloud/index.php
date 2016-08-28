<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | CASESTUDY - 株式会社プラウディット</title>
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
				<dd><h2>株式会社プラウディット</h2></dd>
				</dl>
				<figure class="main"><img src="img/main.png" alt=""></figure>
			</div>
			
			<article>
				<h3>導入背景</h3>
				<p>本サービス(プラウドクラウド）サイト。</p>
				<p>端末振り分け、アニメーションコントロールなどをphpをで制御。動的サイトのDevOps化が課題</p>
			</article>

			<article>
				<h4>Dockerコンテナ運用にAWS ECSを採用</h4>
				<p>「<a href="https://aws.amazon.com/jp/ecs/">AWS ECS</a>」のデプロイ機構は、ホストリソース計算、新コンテナ配置、LB登録、旧コンテナ廃棄が全自動。</p>
				<p>AWSの新LB機能「<a href="https://aws.amazon.com/jp/elasticloadbalancing/applicationloadbalancer/">ALB</a>」のダイナミックポート機能で最小1台ホストに複数のコンテナ配置が可能になったことで、省コスト&無停止デプロイが実現、また最新プロトコルHTTP/2にも対応したことで通信速度の向上も図れた。</p>
			</article>
			
			<article>
				<h4>コンテナ(Docker)+Github+CircleCIでDevOpsを実現</h4>
				<p>同社ブログサイト同様、「GitHub+CircleCIで自動デプロイ」化することで、運用フローを統一し、全体運用コストを下げることに成功。</p>
				<p>いわゆる「DevOps」構成により、サイト更新・機能追加・事例追加など、ビジネスタスクに集中することが出来るようになった。</p>
			</article>
		</section>
		
		
	
	
	
		<section>
			<article>
				<h3>構成図</h3>
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
					<dd>ProudCloud</dd>
				</dl>
				<dl>
					<dt>使用プラン</dt>
					<dd><a href="../../plan/container/">コンテナプラン</a></dd>
				</dl>
				<dl>
					<dt>AWSプロダクト</dt>
					<dd>
					<ul class="functions">
						<li><i class="icon ecs"></i>ECS</li>
						<li><i class="icon alb"></i>ALB</li>
						<li><i class="icon acm"></i>ACM</li>
						<li><i class="icon route53"></i>Route53</li>
						<li><i class="icon iam"></i>IAM</li>
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
