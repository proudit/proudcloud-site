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

<body class="contact index">
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
				<p>サービスについてのご相談や、<br class="soft">お見積もりについて等 お気軽にお問い合わせください。</p>
			</article>
			
			<div class="form">
			
			<?php if($_SERVER['QUERY_STRING'] == "error") { ?>
			<div class="error">
				<ul>
					<li>お名前を入力してください。</li>
					<li>メールアドレスが正しくありません。</li>
				</ul>
			</div>
			<?php } ?>
			
			<p class="note"><em>*</em>は必須の項目です。</p>
				<form method="post" action="./confirm.php" id="contact-form">
				<div class="inner">
					<dl>
						<dt>会社名</dt>
						<dd><input name="company" value="" class="long"></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>お名前</dt>
						<dd><input name="name" value="" class="short"></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>電話番号</dt>
						<dd><input name="tel" value="" class="short"></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>メールアドレス</dt>
						<dd><input name="email" value="" class="long"></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>お問い合わせ内容</dt>
						<dd>
						<select name="type">
							<option value="0" selected>選択してください</option>
							<option value="1">金額について</option>
							<option value="2">サポートについて</option>
							<option value="3">その他</option>
						</select>
						</dd>
					</dl>
					
					<dl>
						<dt><em>*</em>ご質問内容</dt>
						<dd><textarea name="question"></textarea></dd>
					</dl>
				</div>
				<div class="submission">
					<input type="submit">
					<a href="javascript:void(0)" onclick="document.getElementById('contact-form').submit();">内容を確認する</a>
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
