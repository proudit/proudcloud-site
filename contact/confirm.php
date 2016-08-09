<?php include("../../include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc. | Contact</title>
<meta name="description" content="AWSをベースにした「次世代」のクラウドインフラ環境を、導入から運用までトータルサポートします。">
<meta name="keywords" content="AWS, サーバ運用サービス, プラウドクラウド, クラウドインフラ環境, Amazon Web Service Partner Network">
<script>
window.LAYOUT_MODE = "<?php echo $layout_mode; ?>";
</script>
<script src="../js/jquery.min.js"></script>
<link rel="stylesheet" href="../css/content.css">
<link rel="stylesheet" href="css/form.css">
</head>

<body class="contact confirm">
<div id="wrap">

	<header>
		<div class="logo"><a href="https://www.proudit.jp/"><img src="../img/logo.svg" alt="Proudit Inc."></a></div>
		<div class="budge"><img src="../img/budge_aws.png" alt="Amazon Web Service Partner Network | CONSULTING PARTNER"></div>
		
		<div id="visual">
			<h1><a href="../">Proud Cloud</a></h1>
			<h2>AWSサーバ運用サービス - プラウドクラウド</h2>
			<div class="lead">
			AWSをベースにしたを導入から運用までトータルサポートします。
			</div>
		</div>
	</header>


	<div id="content">
		<h1>Contact</h1>
	
		<section>
			<nav class="return"><a href="../">TOP PAGE</a></nav>
			
			<article class="notice">
				<p>以下の内容で送信します。<br>よろしければ「送信する」をクリックしてください。</p>
			</article>
			
			<div class="form">
				<form method="post" action="./complete.php" id="contact-form">
				<div class="inner">
					<dl>
						<dt>会社名</dt>
						<dd><div class="preview">プラウディット株式会社</div></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>お名前</dt>
						<dd><div class="preview">山田太郎</div></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>電話番号</dt>
						<dd><div class="preview">03-1234-5678</div></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>メールアドレス</dt>
						<dd><div class="preview">foo@example.com</div></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>お問い合わせ内容</dt>
						<dd><div class="preview">サポートについて</div></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>ご質問内容</dt>
						<dd>
						<div class="preview">
						はじめまして。<br>
						サーバレスプランについて検討しております。
						詳しい料金体系をお聞きしたいのですが、どうすればよいでしょうか。
						</div>
						</dd>
					</dl>
				</div>
				<div class="submission">
					<input type="submit">
					<a href="javascript:void(0)" onclick="history.back();">戻る</a>
					<a href="javascript:void(0)" onclick="document.getElementById('contact-form').submit();">送信する</a>
				</div>
				</form>
			</div>
		</section>
		
		
	
	
	</div>




	<footer>
		<a href="https://www.proudit.jp/" class="logo"><img src="../img/logo.svg" alt="Proudit Inc."></a>	
		<p>&copy; Copyright Proudit Inc. All Rights Reserved.</p>
	</footer>
</div>
</body>
</html>
