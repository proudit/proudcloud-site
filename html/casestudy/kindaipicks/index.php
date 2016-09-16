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
				<dd><h2>近畿大学様</h2></dd>
				</dl>
				<figure class="main"><img src="img/main.png" alt=""></figure>
			</div>
			
			<article>
				<h3>導入背景</h3>
                <p>（以下は仮で記載。別途提供頂く紹介文面を記載します）</p>
                <p>近畿大学様ニュースキュレーションサイト「Kindai Picks」は「近畿大学」の教職員が、学生をはじめ社会に対し「選りすぐりの情報（Picks）」を提供します。</p>
                <p>主なステークホルダーと目的</p>
                <p>受験生とその保護者      …受験媒体や偏差値にとらわれない「社会から見た近大の姿」を伝える<br>
                   在学生・卒業生・保護者  …自身の大学や母校の活躍を知ってもらうことで、愛校心を高める<br>
                   教職員    …近大の姿を再確認し、帰属意識とモチベーションを向上させる<br>
                   一般の方    …専門家の解説により、日々の出来事について新たな視点や気づきを提供する<br>
                   （参考）一般入試志願者数：約11万人（延べ）,在学生数：約3万人,卒業生数：約50万人,教職員数：約1万人（いずれも平成27年度）</p>

				<p>近畿大学様の情報発信の中心となる、「Kindai Picks」向けに安定性、可用性に加え、負荷耐性に優れた環境をご提供する必要がありました。</p>
			</article>
          </section>

          <section>
			<article>
				<h3>構成ポイント</h3>
			</article>

			<article>
                <h4>Web/DBには、t2系インスタンスタイプを採用。</h4>
                <p>t2インスタンスはバーストパフォーマンスインスタンスという特性を持ち、高負荷状態に遷移すると一時的に割り当て以上のCPUパワーを利用することできるという大きなメリットが得られます。</p>
                <p>Webサーバ、特にSNS連携されるサイトには特に効果を発揮するインスタンスタイプです。</p>
                <p>Web(EC2)はt2インスタンスを2台配置、さらにDB(PostgreSQL)もRDSのt2系インスタンスタイプを利用することで構成全体でパフォーマンス要件を満たしました。</p>
			</article>

			<article>
				<h4>安定した稼働実績、柔軟性を誇るLB/Web/DBの3層、冗長構成</h4>
                <p>3層構成のメリットはそれぞれを独立してスケールアップ、スケールアウトが可能なことです。AWSのロードバランサー「ELB」は負荷に応じて自動で無停止スケールアウトを行います。そのLB配下のWebサーバは冗長構成の為、方系ずつのスケールアップまたはサーバ追加してスケールアウト可能。DBはRDSのマルチAZ構成の利点である、自動フェールオーバー機能を利用することで方系ずつ、ほぼ無停止でスケールアップが可能です。</p>
                <p>オンプレミス時代から実績のある構成とAWSのクラウドサービスの利点をフルに生かすことで、安定したサービス提供を実現しております。</p>
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
					<dd><a  href="http://kindaipicks.com/"> Kindai Picks</a></dd>
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
						<li><i class="icon route53"></i>Route53</li>
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
