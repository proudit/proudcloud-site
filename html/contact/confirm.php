<?php include("../include/func.php"); ?>

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
<script src="../js/google.js"></script>

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
				<form method="post" action="https://q901y0691e.execute-api.ap-northeast-1.amazonaws.com/dev/formapi" id="contact-form">
				<div class="inner">
					<dl>
						<dt>会社名</dt>
						<dd><div class="preview"><?php printf(htmlspecialchars($_POST['company'])); ?></div></dd>
						<input type="hidden" name="company" value="<?php printf(htmlspecialchars($_POST['company'])); ?>">
					</dl>
					
					<dl>
						<dt><em>*</em>お名前</dt>
						<dd><div class="preview"><?php printf(htmlspecialchars($_POST['name'])); ?></div></dd>
						<input type="hidden" name="name" value="<?php printf(htmlspecialchars($_POST['name'])); ?>">
					</dl>
					
					<dl>
						<dt><em>*</em>電話番号</dt>
						<dd><div class="preview"><?php printf(htmlspecialchars($_POST['tel'])); ?></div></dd>
						<input type="hidden" name="tel" value="<?php printf(htmlspecialchars($_POST['tel'])); ?>">
					</dl>
					
					<dl>
						<dt><em>*</em>メールアドレス</dt>
						<dd><div class="preview"><?php printf(htmlspecialchars($_POST['email'])); ?></div></dd>
						<input type="hidden" name="email" value="<?php printf(htmlspecialchars($_POST['email'])); ?>">
					</dl>
					
					<dl>
						<dt><em>*</em>お問い合わせ内容</dt>
						<dd><div class="preview"><?php printf(htmlspecialchars($_POST['type'])); ?></div></dd>
						<input type="hidden" name="type" value="<?php printf(htmlspecialchars($_POST['type'])); ?>">
					</dl>
					
					<dl>
						<dt><em>*</em>ご質問内容</dt>
						<dd>
						<div class="preview">
						<?php printf(nl2br(htmlspecialchars($_POST['question'])))    ; ?>
						</div>
						</dd>
						<input type="hidden" name="question" value="<?php printf(htmlspecialchars($_POST['question'])); ?>">
					</dl>
				</div>
				<div class="submission">
					<input type="submit">
					<a href="javascript:void(0)" onclick="history.back();">戻る</a>
					<a href="javascript:void(0)" id="send" onclick="document.getElementById('contact-form')    .submit();">送信する</a>
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
