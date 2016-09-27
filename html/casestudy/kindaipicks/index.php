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
				<dd><h2>近畿大学 Kindai Picks</h2></dd>
				</dl>
				<figure class="main"><img src="img/main.png" alt=""></figure>
			</div>
			
			<article>
				<h3>導入背景</h3>
				<p>「<a href="http://kindaipicks.com/">Kindai Picks</a>」は、受験生・保護者・学生など、全てのステークホルダーに対し、インターネット上に散逸している情報を収集・再発信するキュレーションサイトです。大学自らがメディアとなり「社会から見た近大の姿」を発信することで、近大の魅力の再認知と新たな価値の創造をめざします。</p>
				<br>
				<br>
				<p>この近畿大学様の情報発信の中心となる、「<a href="http://kindaipicks.com/">Kindai Picks</a>」向けに安定性、可用性に加え、負荷耐性に優れた環境をご提供する必要がありました。</p>
                <br>
                <p>本システムの開発・運営支援の受託元である「<a href="http://www.on-sight.biz/">株式会社オンサイト</a>」様、近畿大学様と十分に協議を重ね、サイト特性に合わせた安定・堅牢な現インフラ環境の提供に至りました。</p><br><br>
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
                <p>3層構成のメリットはそれぞれを独立してスケールアップ、スケールアウトが可能なことです。AWSのロードバランサー「ELB」は負荷に応じて自動で無停止スケールアウトを行います。そのLB配下のWebサーバは冗長構成の為、片系ずつのスケールアップまたはサーバ追加してスケールアウト可能。DBはRDSのマルチAZ構成の利点である、自動フェールオーバー機能を利用することで方系ずつ、ほぼ無停止でスケールアップが可能です。</p>
                <p>オンプレミス時代から実績のある構成とAWSのクラウドサービスの利点をフルに生かすことで、安定したサービス提供を実現しております。</p>
                <br>
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
