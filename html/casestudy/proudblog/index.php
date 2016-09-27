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
<script src="../../js/google.js"></script>
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
				<figure class="main"><img src="img/main.jpg" alt=""></figure>
			</div>
			
			<article>
				<h3>導入背景</h3>
				<p>ProudBlogとは株式会社プラウディットが運営しているブログサイトです。社員が普段の業務を通じて経験した技術や出来事を主に発信しています。</p>
			</article>
			
			<article>
				<h4>サーバーレスで運用負荷を大幅ダウン</h4>
				<p>コンテンツの配置場所としては、安全で耐久性がありスケーラビリティに優れたS3を利用しています。サーバーではなくクラウドストレージを利用することで今まで行っていたサーバーに対するping(死活監視)やapacheなどのプロセス監視が不要となりました。また、サーバーを利用していると、どこかで発生するOSやミドルウェアのバージョンアップやセキュリティ脆弱性対応などの作業からも解放されるため、運用負荷が大幅に減りました。</p>
			</article>
			
			<article>
				<h4>GitHubでソース管理、CircleCIで自動デプロイ</h4>
				<p>GitHubでソースのバージョン管理を行うこと複数の人が並行して記事の投稿/修正ができるようになりました。また、GitHubと親和性の高いCircleCIを利用することでコンテンツの自動デプロイが可能となり、GitHubへコミットするだけで記事の投稿〜公開ができるようになりました。</p>
				<p>また、リポジトリ内で本番用とステージング用のブランチを分けることで、「ステージングで校正チェック→本番用へマージして公開」という方法を行っています。</p>
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
					<dd>ProudBlog</dd>
				</dl>
				<dl>
					<dt>使用プラン</dt>
					<dd><a href="../../plan/serverless/">サーバレスプラン</a></dd>
				</dl>
				<dl>
					<dt>AWSプロダクト</dt>
					<dd>
					<ul class="functions">
						<li><i class="icon s3"></i>S3</li>
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
