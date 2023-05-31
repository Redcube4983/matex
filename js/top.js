/*---------------------------------------------
	Check User Agent
  ---------------------------------------------*/

  let nut = navigator.userAgent.toLowerCase();
  let _ua = {
	  ie	:nut.indexOf("msie") != -1 || nut.indexOf("trident") != -1,
	  ie6	:nut.indexOf("msie 6") != -1,
	  ie7	:nut.indexOf("msie 7") != -1,
	  ie8	:nut.indexOf("msie 8") != -1,
	  ie9	:nut.indexOf("msie 9") != -1,
	  ie10	:nut.indexOf("msie 10") != -1,
	  ie11	:nut.indexOf("trident") != -1,
	  edge	:nut.indexOf("edge") != -1,
	  ff	:nut.indexOf("firefox") != -1,
	  webkit	:nut.indexOf("webkit") != -1 && nut.indexOf("edge") == -1,
	  safari	:nut.indexOf("safari") != -1 && nut.indexOf("edge") == -1 && nut.indexOf("chrome") == -1,
	  chrome	:nut.indexOf("chrome") != -1 && nut.indexOf("edge") == -1,
	  opera	:nut.indexOf("opera") != -1,
	  iphone	:nut.indexOf("iphone") != -1,
	  ipad	:nut.indexOf("ipad") != -1,
	  ipod	:nut.indexOf("ipod") != -1,
	  android	:nut.indexOf("android") != -1,
	  xp	:nut.indexOf("nt 5.1") != -1,
	  win	:nut.indexOf ("windows") != -1,
	  win10	:nut.indexOf ("windows nt 10") != -1,
	  mac	:nut.indexOf ("macintosh") != -1,
	  ios	:nut.indexOf("iphone") != -1 || nut.indexOf("ipad") != -1 || nut.indexOf("ipod") != -1,
	  phone	:nut.indexOf("iphone") != -1 || (nut.indexOf("android") != -1 && nut.indexOf("mobile") != -1),
	  mobile	:typeof window.orientation != "undefined",
	  spWebkit:nut.indexOf("iphone") != -1 || nut.indexOf("ipad") != -1 || nut.indexOf("ipod") != -1 || (nut.indexOf("android") != -1 && nut.indexOf("mobile") != -1)
  };
  
  
  
  (function () {
  
  /*---------------------------------------------
	  Default Settings 
	---------------------------------------------*/
  
  $("html").addClass("js");
  if (_ua.mobile) $("html").addClass("sp");
  if (_ua.phone) $("html").addClass("phone");
  if (_ua.spWebkit) $("html").addClass("spWebkit");
  
  if (_ua.opera || _ua.ff || _ua.safari) {
	  window.onunload = function() {}
  }
  
  
  /*---------------------------------------------
	  Adjust Image
	---------------------------------------------*/
  
  if($(".mainvisual")[0]) {
  
	  let $mainImg = $(".main-bg img");
	  let  mainImgOriginalH = 1125 * .8;
	  let mainImgOriginalW = 1340;
	  let mainSvgOriginalH = document.getElementById("mask").getAttribute("viewBox").split(" ")[3];
	  let mainSvgOriginalW = (mainImgOriginalW / mainImgOriginalH) * mainSvgOriginalH;
	  let mainImgInSvgOriginalRate = mainSvgOriginalH / mainImgOriginalH;
  
	  const setBgImgSize = function() {
		  
		  let w = $(".main-bg").width();
		  let h = $(".main-bg").height();
			  
		  if (w < 320) w = 320;
			  
		  let bgW = w;
		  let bgH = w / mainImgOriginalW * mainImgOriginalH;
		  if (h >= bgH) {
			  bgH = h;
			  bgW = bgH / mainImgOriginalH * mainImgOriginalW;
		  }
			  
		  let bgL = (w - bgW) / 2;
		  let bgT = (h - bgH) / 2;
		  $mainImg.width(bgW).height(bgH * 1.25).css({left:bgL, top:bgT});
			  
		  let $mask = $("#mask");
		  let mainSvgH = $mask.height();
		  let mainSvgW = $mask.width();
			  
		  let maskX = $mask.offset().left;
		  if(_ua.ie) maskX += (w - (h * .94 - 200) * .7655068) / 2;
		  let maskY = $mask.offset().top;
			  
		  let mainImgInSvgRate = mainImgInSvgOriginalRate * mainImgOriginalH / mainSvgH;
		  let mainImgInSvgH = bgH * mainImgInSvgRate;
		  let mainImgInSvgW = bgW * mainImgInSvgRate;
		  let mainImgInSvgL = (bgL - maskX) * mainImgInSvgRate;
		  let mainImgInSvgT = (bgT - maskY) * mainImgInSvgRate;
			  
		  $(".mask image").attr("width", mainImgInSvgW).attr("height", mainImgInSvgH).attr("x", mainImgInSvgL).attr("y", mainImgInSvgT);
		  
	  }
  
	  const moveSVG = () => {
  
	  let onFlag = false;
	  let prevX = 0;
	  let currentX = 0;
	  let targetX = 0;
	  let mvW = $(".mainvisual").width();
	  $(window).on("load resize", () => { mvW = $(".mainvisual").width(); });
  
	  let prevPointerX = 0;
	  $(".mainvisual").on("mousemove", (e) => {
		  const pointerX = e.clientX;
		  targetX = (pointerX - mvW / 2);
	  }).on("touchstart", (e) => {
		  const pointerX = e.changedTouches[0].clientX;
		  prevPointerX = pointerX;
		  targetX = (pointerX - mvW / 2) * 1.5;
	  }).on("touchmove", (e) => {
		  const pointerX = e.changedTouches[0].clientX;
		  if (Math.abs(prevPointerX - pointerX) > 10) e.preventDefault();
		  prevPointerX = pointerX;
		  targetX = (pointerX - mvW / 2) * 1.5;
	  }).on("touchend", () => {
		  targetX = 0;
	  });
  
	  $(".mainvisual, header, #main-text-area").on("mouseenter", () => {
		  onFlag = true;
	  }).on("mouseleave", () => {
		  onFlag = false;
		  setTimeout(() => {
			  if (!onFlag) {
				  targetX = 0;
			  }
		  }, 0);
	  });
  
	  setInterval(() => {
		  if (prevX != targetX) {
			  let offsetX = (prevX - targetX) * (_ua.spWebkit ? .3 : .1);
			  if (Math.abs(offsetX) < .5) offsetX = 0;
			  currentX = prevX - offsetX;
			  prevX = currentX;
			  $(".mask-container").css({ transform: `translate3d(${currentX}px, 0, 0)` });
			  setBgImgSize();
		  }
	  }, 30);
  
	  };
  
	  setBgImgSize();
	$(window).on("resize", setBgImgSize);

	$(window).on("load", function() {
		$(".loading").fadeOut(300, function() {
			$(this).remove();
			$("#mask image").css({opacity: 1, transform: "scale(1)"});
			setBgImgSize();
			$(".mainvisual").addClass("loaded");
			setTimeout(function() {
				moveSVG();
			},800);
		});
	});
  
  }
  
  }());