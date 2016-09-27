<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | CASESTUDY - セーフィー株式会社</title>
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
				<dd><h2>セーフィー株式会社</h2></dd>
				</dl>
				<figure class="main"><img src="img/main.jpg" alt=""></figure>
			</div>
			
			<article>
				<h3>導入背景</h3>
				<p>セーフィーはクラウド型の防犯カメラサービスです。<br>撮影映像はセーフィークラウドに保存され、ユーザーは自分のPC・スマホからアクセスし、ライブ映像、録画映像をいつでもどこでも見ることができます。</p>
				<p>従来の防犯カメラは決してユーザーに優しいシステムではありません。<br>SD画質・静止画並みの低fps 動画での保存、セキュリティーの対策はエンドユーザー任せなど、様々な問題がありながら、導入コストは何十万円もかかります。<br>セーフィーはこれらの問題を解決し、ユーザーが安心、簡単に利用できるよう設計されています。</p>
			</article>
			
			<article>
				<h4>1. 大容量、高画質データの保存・視聴が可能に</h4>
				<p>クラウド保存により、録画機の記録容量を気にすることなく、HDの高画質・30fpsの動画を保存・閲覧できるようになりました。従来の監視カメラと比較して約50倍もの画質・音声で鮮明に記録できます。</p>
			</article>
			
			<article>
				<h4>2. オンラインバンク並みのセキュリティシステム</h4>
				<p>従来のネットワークカメラは、リモートから直接アクセスするために、セキュリティレベルを下げる必要があったり、暗号化がされていないために、第三者によって映像が覗き見られる恐れがありました。<br>
				セーフィークラウドは最新の暗号化技術によって安全に保存。データを送る通信経路も暗号化されているため動画の漏洩、改ざんや覗き見の心配がありません。</p>
			</article>
			
			<article>
				<h4>3. クラウド一括管理により、ランニングコストが６分の１までダウン</h4>
				<p>クラウドで一括管理できるため専用のサーバー・録画機の設置・保守が不要に。<br>
				従来の約６分の１のコストで運用できるようになりました。防犯だけじゃない。様々なシーンで導入がはじまっています。<br>
				低コストで安心できるホームセキュリティとして、遠隔からマンションを監視管理できる便利なツールとして、個人・企業の皆さまに導入が広がってきました。また全国のチェーン店を一度に見渡すことのできる業務改善ツールとしてなど、防犯の枠組みを超えた様々なニーズを解決できるソリューションとしても利用されています。</p>
			</article>
			
			<article>
				<h4>コンセプトはSMART VISION</h4>
				<p>現在私たちは人数カウント機能、顔認識、画像解析などデータ解析や他サービスとの連携に関する開発に力を入れています。誰もが安心・便利につかえるサービスを追及し、動画を最大限活用できるクラウドプラットフォームとして成長していきます。</p>
			</article>
		</section>
		
		
		<section>
			<article>
				<h3>構築・設計のポイント</h3>
				<h5>ポイント</h5>
				<ul class="box">
					<li>リリース後の運用は開発メンバーにて行いたい</li>
					<li>インフラ構築・設定変更も出来る限り自動化・反自動化し運用工数を下げたい</li> 
				</ul>
			</article>
			
			<article>
				<p>そこで私たちはコードによるインフラ構築（Infrastructure as Code）を提案させていただきました。今回の導入にはインフラ設計段階で、「AWS環境、OS設定〜アプリデプロイ」までのすべてをコード管理し、それらを実装するためのツールとして、AWSCloudformation、Ansbile、GitHub、を採用しました。このことにより、<br>
				<em>“コードをGitHubプライベートリポジトリにて、お客様とセキュアかつシームレスに共有。”</em><br>
				<em>“AWS Cloudformationにより、ベースとなるAWSインフラ環境（VPC、EC2、RDS、Redisなど）を一括管理。”</em><br>
				が可能となり、ステージング環境やプロダクト環境といった複数環境を構築する際の工数を劇的に削減することに成功しました。 また、EC2デプロイ、OS設定、ミドルウェアインストール、設定、アプリデプロイ、監視追加をAnsibleにて実装する上で、インフラエンジニア、ミドルウェアエンジニア、アプリエンジニアがコードを互いにレビューし合い、それぞれが技術補完することで、 「全体として見通しの良いインフラ管理」が可能となりました。</p>
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
					<dd>セーフィークラウド</dd>
				</dl>
				<dl>
					<dt>クライアント</dt>
					<dd>セーフィー株式会社</dd>
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
						<li><i class="icon s3"></i>S3</li>
						<li><i class="icon route53"></i>Route53</li>
						<li><i class="icon elb"></i>ELB</li>
						<li><i class="icon scaling"></i>Autoscaling</li>
						<li><i class="icon cache"></i>ElactiCache</li>
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
