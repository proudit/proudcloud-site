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

<!-- ▼モーダルウィンドウ -->
<script src="../js/remodal.js"></script>

<!-- ▼バリデーション -->
<script src="../js/jquery.validationEngine.js"></script>
<script src="../js/jquery.validationEngine-ja.js"></script>

<script>
      $(function(s){
        jQuery("#content").validationEngine();
      });
    </script>
    
<link rel="stylesheet" href="../css/content.css">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/validationEngine.jquery.css">
<link rel="stylesheet" href="css/remodal.css">
<link rel="stylesheet" href="css/remodal-default-theme.css">
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
						<dd><input name="name" value="" class="validate[required] short"></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>電話番号</dt>
						<dd><input name="tel" value="" class="validate[required,custom[phone]] short"></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>メールアドレス</dt>
						<dd><input name="email" value="" class="validate[required,custom[email]] long"></dd>
					</dl>
					
					<dl>
						<dt><em>*</em>お問い合わせ内容</dt>
						<dd>
						<select name="type">
							<option value="選択なし" selected>選択してください</option>
							<option value="金額について">金額について</option>
							<option value="サポートについて">サポートについて</option>
							<option value="その他">その他</option>
						</select>
						</dd>
					</dl>
					
					<dl>
						<dt><em>*</em>ご質問内容</dt>
						<dd><textarea name="question" class="validate[required]"></textarea></dd>
					</dl>					
					<dl>
						<dt><em>*</em>個人情報の取り扱い</dt>    
						<dd>             
						<input type="checkbox" class="validate[required]" name="agree" id="agree">                               
						<!-- 呼び出し用ボタン -->
						<a href="#modal" class="btn btn-default">利用規約に同意する</a>
						<!-- Modal本体 -->
  						<!-- ボタンが押されると呼び出される -->
  						<div class="remodal" data-remodal-id="modal">
  						<!-- クローズボタン -->
  						<button data-remodal-action="close" class="remodal-close"></button>
    						<h1>個人情報保護方針</h1>
    						
    						<!-- 個人情報保護方針全文 -->
    						<div Align="left">
    						<br>
    						<h2>1.個人情報の収集と利用</h2>
    						<p>
    						当社は、お客様に対する円滑なサービスの提供を行うために、必要な範囲内で以下の目的にて個人情報を収集させて頂いております。
    						なお、個人情報はお客様自身の意志で提供して頂きますので、ご提供頂いた個人情報は当社の個人情報保護方針に則って、当社が個人情報を利用することに承諾いただたものとして取り扱います。
    						また、適法かつ公正な手段によってのみ情報を収集致します。

    						  <li>・主な個人情報</li>
    						  お客様の住所、氏名、生年月日、電話番号、勤務先、メールアドレス等のご連絡先等
    						 </p>
                                                <br>
    						<h2>2.個人情報の利用目的</h2>
    						<p>
    						お客さまからお預かりした個人情報は、当社からのご連絡やご質問に対する回答として利用いたします。
    						また、取得した個人情報の目的外利用をしないよう処置を講じます。

    						  ・主な利用目的
    						 <li> (1)各種サービス提供のためのご連絡</li>
     						 <li>(2)当社の新商品やサービスなどのご紹介</li>
    						 <li>(3)重要なお知らせやメンテナンス等のご案内</li>
    						 <li>(4)お客様からのお問い合わせへの対応</li>
    						</p>
    						<br>
    						<h2>3.個人情報の第三者への開示・提供</h2>
    						<p>
    						当社は、お客さまよりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第三者に開示いたしません。

    						・開示条件
    						  <li>(1)お客さまの同意がある場合</li>
    						  <li>(2)当社が秘密保持契約を締結している業務の委託先および提携先への開示</li>
    						  <li>(3)法令に基づき開示することが必要である場合</li>
    						</p>
                                               <br>
    						<h2>4.個人情報の管理</h2>
    						<p>
    						当社は、お客さまの個人情報を正確かつ最新の状態に保ち、個人情報を保有するシステムへの不正アクセス・紛失・破損・改ざん・漏洩などを防止するため、セキュリティの維持・管理体制の整備・社員教育の徹底等の必要な措置を講じ、定期的な見直しを行い、個人情報保護マネジメントシステムの継続的な改善に努め、安全対策を実施し個人情報の厳重な管理を行ないます。 また、問題が発生した場合は適切な是正措置を講じます。
    						</p>
                                               <br>
    						<h2>5.法令、規範の遵守と見直し</h2>
    						<p>
    						当社は「個人情報の保護に関する法律」をはじめとしたお客様の個人情報の取り扱いについて定めている法令や「電気通信事業法」及びそれらに基づく総務省の「電気通信事業における個人情報保護に関するガイドライン」、国が定める指針その他の規範等を遵守し、 本ポリシーの内容を適宜見直し、その改善に努めます。
    						</p>
                                                <br>
    						<h2>6.ご本人からの請求等</h2>
    						<p>
    						ご本人から個人情報の照会・修正・削除及び苦情相談などをご希望される場合には、当社所定の手続きにてご本人であることを確認の上、対応させていただきます。
    						</p>
    						<br>
    						<h2>7.お問い合せ</h2>
    						<p>
    						株式会社プラウディット<br>
    						TEL ： 03-6380-6571<br>
    						Mail ： info@proudit.jp<br>
    						株式会社プラウディット<br>
    						代表取締役 小熊健<br>
    						</p>
    						</div>
    						</p>
    						
   <script> 
$('#agree').change(function() {
    // チェックが入っていたら有効化
    if ( $(this).is(':checked') ){ 
        // ボタンを有効化
        $('#form-submit').prop('disabled', false);
    } else { 
        // ボタンを無効化
        $('#form-submit').prop('disabled', true); 
    }
});
   </script>

      						<!-- サブミットボタン -->
    						<button data-remodal-action="confirm" class="remodal-confirm">OK</button>
						</dd>					        
					</dl>　
					</div>
				<div class="submission">
					<input type="submit">
				    <button id="form-submit" disabled="disabled">内容を確認する</button>
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
