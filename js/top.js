$(function(){
	
	var OPTION_SERVICE = [
		"各種ドメインやSSLの新規取得や更新手続きを代行致します。",
		"24時間365日サーバの監視を行い、障害発生時には可能な限り早い復旧対応を致します。",
		"お客様のご希望にあわせ、AWSとパブリッククラウドのような柔軟な環境構築に対応します。",
		"AWS新規導入に伴う、他環境からの移行支援をトータルサポート。",
		"お客様のサイトがどれくらいの負荷に耐えることができるかテストいたします。",
		"AnsibleやJenkinsといったツールを導入し、運用負荷軽減のお手伝いをいたします。"
	];
	
	
	
	
	var ua = navigator.userAgent;
	var isSP = Boolean( ua.match(/iPhone|iPod|Android/) );
	var isLockedTouchMove = false;
	
	
	initButtons();
	
	
	
	window.addEventListener("touchmove", function(e){
		if(isLockedTouchMove) {
			e.preventDefault();
			e.stopPropagation();
		}
	});
	
	
	
	
	
	
	function initButtons() {
		if(isSP) {
			$("#feature area").on("click", function(){
				var key = Number(this.getAttribute("rel")) - 1;
				var nodes = $("#feature ul a");
				var len = nodes.length;
				for(var i=0; i<len; i++) {
					if(i === key) {
						if(nodes[i].className == "active") {
							nodes[i].className = "";
						}
						else {
							nodes[i].className = "active";
						}
					}
					else {
						nodes[i].className = "";
					}
				}
			});
		}
		else {
		
			$("#feature area").on("mouseover", function(){
				var key = Number(this.getAttribute("rel")) - 1;
				var nodes = $("#feature ul a");
				var len = nodes.length;
				for(var i=0; i<len; i++) {
					nodes[i].className = (i === key) ? "active" : "";
				}
			});
			$("#feature area").on("mouseout", function(){
				var nodes = $("#feature ul a");
				var len = nodes.length;
				for(var i=0; i<len; i++) {
					nodes[i].className = "";
				}
			});
			
			
			
			$("#contact a.form").on("mouseenter", function(){
				$("#contact span.chara").addClass("active");
			});
			$("#contact a.form").on("mouseleave", function(){
				$("#contact span.chara").removeClass("active");
			});
		}


		$("#option li a").on("click", function(){
			var key = Number(this.getAttribute("rel")) - 1;
			var desc = OPTION_SERVICE[key];
			
			var overlay = document.createElement("div");
			overlay.id = "overlay-option";
			
			var popup = document.createElement("div");
			popup.id = "popup-option";
			
			var close = document.createElement("a");
			
			var dl = document.createElement("dl");
			var dt = document.createElement("dt");
			var dd = document.createElement("dd");
			
			var ttl = new Image();
			ttl.src = "img/label_popup_" + (key + 1) + ".svg";
			
			
			$(overlay).on("click", function(){ closePopup(); });
			$(close  ).on("click", function(){ closePopup(); });
			
			dt.appendChild(ttl);
			dd.innerHTML = desc;
			
			
			
			setTimeout(function() {
				if(popup && popup.parentNode) {
					popup.className = "active";
				}
			}, 100);
			
			dl.appendChild(dt);
			dl.appendChild(dd);
			popup.appendChild(dl);
			popup.appendChild(close);
			document.body.appendChild(overlay);
			document.body.appendChild(popup);
			
			popup.style.top = $(document.body).scrollTop() + (($(window).height() - $(dl).height()) / 2) + "px";
			
			
			
			$(document.getElementsByTagName("html")[0]).addClass("overlay");
			isLockedTouchMove = true;
		});
		
		
		function closePopup() {
			var overlay = document.getElementById("overlay-option");
			if(overlay) {
				document.body.removeChild(overlay);
			}
			
			var popup = document.getElementById("popup-option");
			if(popup) {
				document.body.removeChild(popup);
				popup = null;
			}
			
			$(document.getElementsByTagName("html")[0]).removeClass("overlay");
			isLockedTouchMove = false;
		}
	}
	
	
	
	
	
	
	
	
	
});