<?php include("./include/func.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<title>Proud Colud | Proudit Inc.</title>
<meta name="description" content="AWSをベースにした「次世代」のクラウドインフラ環境を、導入から運用までトータルサポートします。">
<meta name="keywords" content="AWS, サーバ運用サービス, プラウドクラウド, クラウドインフラ環境, Amazon Web Service Partner Network">
<script>
window.LAYOUT_MODE = "<?php echo $layout_mode; ?>";
</script>
<script src="js/jquery.min.js"></script>
<script src="js/vivus.min.js"></script>
<script src="js/top.js"></script>
<script src="js/google.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-custum.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<?php
if($layout_mode == "pc") {
?>
<link rel="stylesheet" href="css/top_pc.css">
<?php
}
else {
?>
<link rel="stylesheet" href="css/top_sp.css">
<?php
}
?>
</head>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >サイトメニュー</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >トップ</a>
            </li>
            <li>
                <a href="#feature" onclick = $("#menu-close").click(); >特徴</a>
            </li>
            <li>
                <a href="#ourplan" onclick = $("#menu-close").click(); >プラン</a>
			</li>
            <li>
                <a href="#option" onclick = $("#menu-close").click(); >オプション</a>
            </li>
            <li>
                <a href="#casestudy" onclick = $("#menu-close").click(); >事例</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >お問い合わせ</a>
            </li>
        </ul>
    </nav>

<div id="wrap">

<section id="top">
</section>

	<header>
		<div class="logo"><a href="https://www.proudit.jp/"><img src="img/logo.svg" alt="Proudit Inc."></a></div>
		<div class="budge"><img src="img/budge_aws.png" alt="Amazon Web Service Partner Network | CONSULTING PARTNER"></div>
		
		<div id="visual">
			<h1>Proud Cloud</h1>
			<h2>AWSサーバ運用サービス - プラウドクラウド</h2>
			<div class="lead">
			AWSをベースにしたを導入から運用までトータルサポートします。
			</div>

<?php
if($layout_mode == "pc") {
?>	
			<div id="visual-aws" class="motion ready">
			<?php include("./img/main_aws.svg"); ?>
			</div>
			<div id="visual-caption" class="motion ready">
			<?php include("./img/main_caption.svg"); ?>
			</div>
			<div id="visual-caption-text" class="motion">
			<?php include("./img/main_caption_text.svg"); ?>
			</div>
			<div id="visual-lead-text" class="motion ready">
			<?php include("./img/main_lead_text.svg"); ?>
			</div>
<?php
}
?>
		</div>
	</header>


<?php
if($layout_mode == "pc") {
?>		
<script>
$(window).on("load",function(){
	var header = $("#wrap > header")[0];
	var visual = document.getElementById("visual");
	var firstSection = $("#wrap > section")[0];
	
	align();
	$(window).on("resize", function(){ align(); });
	
	function align() {
		var w = Math.max(1200, $(window).width());
		//w = Math.min(1800, w);
		header.style.height = h + "px";
		visual.style.height = h + "px";
		
		var margin = Math.min(0, ($(window).width() - w) / 2);
		visual.style.marginLeft = margin + "px";
		
		var _w = Math.min(1800, $(window).width());
		_w = Math.max(1200, _w);
		firstSection.style.marginTop = -280 * (_w / 1800) + "px";
	}
});


(function(){
	var MOTION = [
		{ name:"typo",  duration:14, transition:null, type:"scenario-sync", start:"manual", callback:function(){}},
		{ name:"line1", duration:90, transition:Vivus.EASE, type:"async", start:"manual", callback:function(){}},
		{ name:"line2", duration:90, transition:Vivus.EASE, type:"async", start:"manual", callback:function(){}},
		{ name:"line3", duration:90, transition:Vivus.EASE, type:"oneByOne", start:"manual", callback:function(){}},
		{ name:"line4", duration:90, transition:Vivus.EASE, type:"oneByOne", start:"manual", callback:function(){}},
		{ name:"line5", duration:90, transition:Vivus.EASE, type:"oneByOne", start:"manual", callback:function(){}},
		{ name:"line6", duration:200, transition:Vivus.EASE, type:"delayed", start:"manual", callback:function(){}},
		{ name:"line7", duration:150, transition:Vivus.EASE, type:"scenario-sync", start:"manual", callback:function(){}},
		{ name:"lead",  duration:45,  transition:Vivus.EASE, type:"oneByOne", start:"manual", callback:function(){}}
	];
	var motions = {};
	
	for(var i=0; i<MOTION.length; i++) {
		var div = document.createElement("div");
		var key = "visual-" + MOTION[i].name;
		div.id = key;
		div.className = "motion";
		document.getElementById("visual").appendChild(div);
	
		var m = new Vivus(key, {
			duration: MOTION[i].duration,
			file: "img/main_" + MOTION[i].name + ".svg",
			animTimingFunction: MOTION[i].transition,
			type: MOTION[i].type,
			start:MOTION[i].start
		}, MOTION[i].callback);
		motions[MOTION[i].name] = m;
	}
	
	
	setTimeout(function() {
		motions.typo.play();
	}, 500);
	
	
	setTimeout(function() {
		var hex = document.getElementById("svg-hex");
		hex.beginElement();
		setTimeout(function(){
			$(document.getElementById("visual-aws")).removeClass("ready");
		}, 40);
	}, 1800);
	
	setTimeout(function() {
		var poly = document.getElementById("svg-poly");
		poly.beginElement();
		setTimeout(function(){
			$(document.getElementById("visual-caption")).removeClass("ready");
		}, 40);
		
		for(var i=1; i<=5; i++) {
			document.getElementById("svg-circle" + i).beginElement();
		}
		
		motions.line7.play();
	}, 2000);
	
	
	setTimeout(function() {
		motions.line1.play();
		motions.line6.play();
	}, 2400);
	
	setTimeout(function() {
		motions.line2.play();
		motions.lead.play();
	}, 2600);
	
	setTimeout(function() {
		var mask = document.getElementById("svg-mask");
		mask.beginElement();
		
		setTimeout(function(){
			$(document.getElementById("visual-lead-text")).removeClass("ready");
		}, 10);
	}, 2800);
	
	setTimeout(function() {
		motions.line3.play();
		motions.line4.play();
		motions.line5.play();
	}, 3000);
	
})();
</script>	
<?php
}
?>


	
	<section id="feature">
		<div id="feature-motion"></div>
		<div class="bg"></div>
		<script>
		(function() {
			var vivus = new Vivus("feature-motion", {
				duration: 40,
				file: "img/motion_feature.svg",
				animTimingFunction: Vivus.EASE_OUT,
				type: "scenario-sync",
				start: "manual"
			});
			
			$(window).on("scroll", function(){
				if(vivus.getStatus() != "end") {
					if($(window).scrollTop() > $("#feature-title").offset().top - $(window).height() * 0.25) {
						vivus.play();
					}
				}
			});
		})();
		</script>
	
		<h2 id="feature-title"><span>Feature</span></h2>
		<script>
		(function() {
			var vivus = new Vivus("feature-title", {
				duration: 200,
				file: "img/feature.svg",
				animTimingFunction: null,
				type: "oneByOne",
				start: "manual"
			});
			
			
			$(window).on("scroll", function(){
				if(vivus.getStatus() != "end") {
					if($(window).scrollTop() > $("#feature-title").offset().top - $(window).height() * 0.25) {
						vivus.play();
					}
				}
			});
		})();
		</script>
		<h3>プラウドクラウドの特徴</h3>
		<ul>
			<li class="feature1"><a><h4>AWS+αの提案</h4><strong>AWSだからできること、AWSだから出てくる悩み。私たちはAWSの枠に縛られず、他のパブリッククラウドやオンプレミスのメリットを活かした「マルチクラウド/ハイブリッド構成」をご提案いたします。</strong><i></i></a></li>
			<li class="feature2"><a><h4>先進的な技術への取り組み</h4><strong>私たちはDevOpsに力を入れています。常に発展し続ける技術を積極的に取り入れ、「少ない運用でパワフルな開発」を実現するための環境構築や導入支援をさせていただきます。</strong><i></i></a></li>
			<li class="feature3"><a><h4>柔軟な契約形態</h4><strong>私お客様のご要望に合わせたサポート。ドル・クレジットカード支払が導入ネックである方の決済代行やお客様自身で契約をしたAWSサーバの運用代行など、柔軟なサポートをご提供いたします。</strong><i></i></a></li>
		</ul>
		
		<ol>
			<li>Technology</li>
			<li>Multicloud</li>
			<li>Support</li>
		</ol>
		
		<span id="feature-map"><img src="img/space.png" alt="" usemap="#fmap"></span>
		<map name="fmap">
<?php
if($layout_mode == "pc") {
?>
			<area shape="poly" coords="253,5,131,75,131,220,253,290,378,220,378,75" rel="1">
			<area shape="poly" coords="128,225,6,295,6,440,128,510,253,440,253,295" rel="2">
			<area shape="poly" coords="382,225,260,295,260,440,382,510,507,440,507,295" rel="3">
<?php
}
else {
?>
			<area shape="poly" coords="110,5, 13,63, 13,180, 110,235, 210,180, 210,63" href="javascript:void(0);" rel="1">
			<area shape="poly" coords="209,180,109,236,109,350,209,406,309,350,309,236" href="javascript:void(0);" rel="2">
			<area shape="poly" coords="110,352, 13,406, 13,522, 110,578, 210,522, 210,406" href="javascript:void(0);" rel="3">
<?php
}
?>
		</map>
	</section>
	
	
	<section id="ourplan">
		<div id="ourplan-motion"></div>
		<div class="bg"></div>
		<script>
		(function() {
			new Vivus("ourplan-motion", {
				duration: 120,
				file: "img/motion_ourplan.svg",
				animTimingFunction: Vivus.EASE_OUT,
				type: "async"
			});
		})();
		</script>
		
		<h2 id="ourplan-title"><span>Ourplan</span></h2>
		<script>
		(function() {
			new Vivus("ourplan-title", {
				duration: 200,
				file: "img/ourplan.svg",
				animTimingFunction: null,
				type: "oneByOne"
			});
		})();
		</script>
		<h3>用途に合わせて選べる3つのプラン</h3>
		<ul>
			<li class="serverless"><a href="plan/serverless/"><h4>サーバレスプラン</h4><strong>AWSLambda等をフルに利用した業界最先端な完全サーバーレスサービスプラン。</strong><i></i></a></li>
			<li class="container"><a href="plan/container/"><h4>コンテナプラン</h4><strong>Dockerコンテナ管理サービスAWS ECSを利用。</strong><i></i></a></li>
			<li class="server"><a href="plan/server/"><h4>サーバプラン</h4><strong>AWS EC2をベースとして利用した仮想サーバプラン。</strong><i></i></a></li>
		</ul>
	</section>
	
	
	
	
	<section id="option">
		<div id="option-motion"></div>
		<div class="bg"></div>
		<script>
		(function() {
			new Vivus("option-motion", {
				duration: 100,
				file: "img/motion_option.svg",
				animTimingFunction: Vivus.EASE,
				type: "oneByOne"
			});
		})();
		</script>
		
		<h2 id="option-title"><span>Option Service</span></h2>
		<script>
		(function() {
			new Vivus("option-title", {
				duration: 200,
				file: "img/option.svg",
				animTimingFunction: null,
				type: "oneByOne"
			});
		})();
		</script>
		<h3>オプションとサービス内容の紹介</h3>
		<ul>
			<li class="option1"><h4>ドメインSSL取得代行</h4><i></i><a rel="1"></a></li>
			<li class="option2"><h4>24時365日監視システム</h4><i></i><a rel="2"></a></li>
			<li class="option3"><h4>ハイブリットクラウド</h4><i></i><a rel="3"></a></li>
			<li class="option4"><h4>移設サポート</h4><i></i><a rel="4"></a></li>
			<li class="option5"><h4>負荷テストサービス</h4><i></i><a rel="5"></a></li>
			<li class="option6"><h4>運用オートメーション</h4><i></i><a rel="6"></a></li>
		</ul>
		
		
		<h4 class="service">各プランに追加可能なオプションと連携サービス内容</h4>
		<h4 class="tool">連携可能ツールのご紹介</h4>
		<span class="tool"></span>
	</section>
	
	
	
	
	<section id="casestudy">
		<div id="casestudy-motion"></div>
		<div class="bg"></div>
		<script>
		(function() {
			var dir = window.LAYOUT_MODE == "sp" ? "img/sp/" : "img/";
			new Vivus("casestudy-motion", {
				duration: 150,
				file: dir + "motion_casestudy.svg",
				animTimingFunction: Vivus.EASE,
				type: "oneByOne"
			});
		})();
		</script>
		
		<h2 id="casestudy-title"><span>Casestudy</span></h2>
		<script>
		(function() {
			new Vivus("casestudy-title", {
				duration: 200,
				file: "img/casestudy.svg",
				animTimingFunction: null,
				type: "oneByOne"
			});
		})();
		</script>
		<h3>公開事例のご紹介</h3>
		<ul>
			<li class="casestudy1">
				<a href="casestudy/safie/">
					<h4>セーフィー株式会社</h4>
					<span class="server"></span>
					<strong><img src="img/logo/safie.png" alt="セーフィ株式会社"></strong>
					<i></i>
				</a>
			</li>
			<li class="casestudy2">
				<a href="casestudy/proudblog/">
					<h4>プラウディット<br>株式会社</h4>
					<span class="serverless"></span>
					<strong><img src="img/logo/proudblog.png" alt="ProudBlog"></strong>
					<i></i>
				</a>
			</li>
			<li class="casestudy3">
				<a href="casestudy/proudcloud/">
					<h4>プラウディット<br>株式会社</h4>
					<span class="container"></span>
					<strong><img src="img/logo/proudcloud.png" alt="Proudcloudサービスページ"></strong>
					<i></i>
				</a>
			</li>
			<li class="casestudy4">
				<a href="casestudy/kindaipicks/">
					<h4>近畿大学</h4>
					<span class="server"></span>
					<strong><img src="img/logo/kindai.png" alt="近畿大学様「Kindai Picks」"></strong>
					<i></i>
				</a>
			</li>
			
		</ul>
	</section>
	
	


	<section id="contact">
		<div id="contact-motion"></div>
		<div class="bg"></div>
		<script>
		(function() {
			var dir = window.LAYOUT_MODE == "sp" ? "img/sp/" : "img/";
			new Vivus("contact-motion", {
				duration: 40,
				file: dir + "motion_contact.svg",
				animTimingFunction: Vivus.EASE_OUT,
				type: "scenario-sync"
			});
		})();
		</script>

		<h2 id="contact-title"><span>Contact</span></h2>
		<script>
		(function() {
			var dir = window.LAYOUT_MODE == "sp" ? "img/sp/" : "img/";
			new Vivus("contact-title", {
				duration: 200,
				file: dir + "contact.svg",
				animTimingFunction: null,
				type: "oneByOne"
			});
		})();
		</script>
		<h3>お問い合わせ</h3>
		<p>まずはご相談ください！</p>
		<a class="tel"  href="tel:0363806571">03-6380-6571</a>
		<a class="form" href="contact/">お問い合わせフォーム</a>
		<span class="chara"></span>
	</section>

	<footer>
		<a href="https://www.proudit.jp/" class="logo"><img src="img/logo.svg" alt="Proudit Inc."></a>	
		<p>&copy; Copyright Proudit Inc. All Rights Reserved.</p>
	</footer>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>
</html>
