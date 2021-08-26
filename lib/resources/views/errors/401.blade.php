<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<base href="{{asset('public/asset/backend')}}/">
	<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
	<meta name="apple-mobile-web-app-title" content="CodePen">

	<link rel="apple-touch-icon" sizes="76x76" href="public/asset/backend/img/apple-icon.png">
	<link rel="icon" type="image/png" href="img/favicon.png">

	<link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />

	<link rel="stylesheet" media="screen" href="https://cpwebassets.codepen.io/assets/fullpage/fullpage-4de243a40619a967c0bf13b95e1ac6f8de89d943b7fc8710de33f681fe287604.css" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<meta charset="utf-8">
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>404 Page</title>

	<script>
		if (document.location.search.match(/type=embed/gi)) {
			window.parent.postMessage("resize", "*");
		}
	</script>

	<style>
		html { font-size: 15px; }
		html, body { margin: 0; padding: 0; min-height: 100%; }
		body { height:100%; display: flex; flex-direction: column; }
	</style>
</head>

<body class="">
	<div id="result-iframe-wrap" role="main">
		<iframe
		id="result"
		srcdoc="
		<!DOCTYPE html>
		<html lang=&quot;en&quot; >
		<head>
			<meta charset=&quot;UTF-8&quot;>
			<style>
				@import url(&quot;https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900&quot;);
				body, html {
				margin: 0;
				padding: 0;
				font-size: 16px;
				-webkit-font-smoothing: antialiased;
				background-color: #09334f;
				position: relative;
			}

			#yetiSVG {
			width: 600px;
			height: 470px;
			position: absolute;
			top: 0;
			left: 0;
			overflow: hidden;
		}

		#lightSVG {
		width: 600px;
		height: 470px;
		position: absolute;
		top: 0;
		left: 0;
		overflow: visible;
	}

	.content {
	padding: 5rem 3rem 0 25rem;
	position: relative;
	z-index: 10;
	font-family: &quot;Source Sans Pro&quot;, sans-serif;
	color: #FFF;
}
.content h3 {
margin: 0 0 0.8rem;
font-size: 2.625rem;
font-weight: 900;
line-height: 120%;
}
.content p {
font-size: 1.25rem;
font-weight: normal;
line-height: 150%;
color: #d1e2ed;
}
.content p span {
text-decoration: line-through;
}
</style>

<script>
	window.console = window.console || function(t) {};
</script>



<script>
	if (document.location.search.match(/type=embed/gi)) {
	window.parent.postMessage(&quot;resize&quot;, &quot;*&quot;);
}
</script>


</head>

<body translate=&quot;no&quot; >
	<svg id=&quot;yetiSVG&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot; viewBox=&quot;0 0 600 470&quot;>
		<linearGradient id=&quot;flashlightGrad&quot; x1=&quot;126.5842&quot; x2=&quot;90.5842&quot; y1=&quot;176.5625&quot; y2=&quot;213.5625&quot; gradientUnits=&quot;userSpaceOnUse&quot;>
			<stop offset=&quot;0&quot; stop-color=&quot;#333&quot;/>
			<stop offset=&quot;.076&quot; stop-color=&quot;#414141&quot;/>
			<stop offset=&quot;.2213&quot; stop-color=&quot;#555&quot;/>
			<stop offset=&quot;.3651&quot; stop-color=&quot;#626262&quot;/>
			<stop offset=&quot;.5043&quot; stop-color=&quot;#666&quot;/>
			<stop offset=&quot;.6323&quot; stop-color=&quot;#606060&quot;/>
			<stop offset=&quot;.8063&quot; stop-color=&quot;#4e4e4e&quot;/>
			<stop offset=&quot;1&quot; stop-color=&quot;#333&quot;/>
		</linearGradient>
		<path fill=&quot;#24658F&quot; d=&quot;M0 0h600v470H0z&quot;/>
		<g id=&quot;pillow&quot;>
			<path fill=&quot;#09334F&quot; d=&quot;M241.3 124.6c-52.9 28.6-112.6 48-181.8 54.4-40.9 6.8-64.6-82.3-31.9-106.6C84 43.8 144.8 26.2 209.4 18c32.8 13 48.5 75.3 31.9 106.6z&quot;/>
			<path fill=&quot;none&quot; stroke=&quot;#001726&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M52.8 91.3c10 7.4 25.4 50.7 16.1 65.8M241.3 124.6c-52.9 28.6-112.6 48-181.8 54.4-40.9 6.8-64.6-82.3-31.9-106.6C84 43.8 144.8 26.2 209.4 18c32.8 13 48.5 75.3 31.9 106.6z&quot;/>
			<path fill=&quot;#09334F&quot; stroke=&quot;#001726&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M201.9 21.9c4.9-8 14.1-11.3 20.6-7.3s7.7 13.7 2.8 21.7&quot;/>
			<path fill=&quot;#09334F&quot; stroke=&quot;#001726&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M242.1 103.1c1.8.3 3.6.9 5.3 1.8 8.4 4.1 12.6 13 9.3 19.8s-12.9 9-21.3 4.9c-1.9-.9-3.6-2.1-5-3.4&quot;/>
			<path fill=&quot;#09334F&quot; stroke=&quot;#001726&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M70.3 172c.2 1.4.2 2.8.1 4.3-.8 9.4-8.3 16.4-16.7 15.6S39.2 183 40 173.7c.1-1.6.5-3.1 1-4.5&quot;/>
			<path fill=&quot;#09334F&quot; stroke=&quot;#001726&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M20.9 85.1c-4.1-5-5.1-11.6-2.1-16.9 4.1-7.2 14-9.2 22.1-4.6 3.7 2.1 6.4 5.2 7.9 8.6&quot;/>
		</g>
		<g id=&quot;yeti&quot;>
			<path id=&quot;bodyBG&quot; fill=&quot;#67B1E0&quot; d=&quot;M80.9 291.4l-17.1-72.8c-6.3-27 10.4-54 37.4-60.3l93.1-29.6c26.5-8.1 54.6 6.8 62.7 33.3l21.9 71.5&quot;/>
			<path class=&quot;hlFur&quot; id=&quot;hlBody&quot; fill=&quot;#FFF&quot; d=&quot;M67.1 232.7c15.6-8.7 27.7-23.7 38-38.7 5.5-8 10.9-16.4 18.3-22.7 13.1-11.2 31.3-14.8 48.6-15 4.9 0 9.9.1 14.5-1.7 3.6-1.5 6.5-4.1 9.3-6.9 6.5-6.5 12-14 18-21-6.4-.6-12.9 0-19.4 2l-93.1 29.6c-27 6.3-43.7 33.4-37.4 60.3l3.2 14.1z&quot;/>
			<path id=&quot;bodyOutline&quot; fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M80.9 291.4l-17.1-72.8c-6.3-27 10.4-54 37.4-60.3l93.1-29.6c26.5-8.1 54.6 6.8 62.7 33.3l21.9 71.5&quot;/>
			<path fill=&quot;#67B1E0&quot; d=&quot;M197.5 132.4l-11.2-47.9c-6.3-26.7-32.7-44.1-59.5-38.2-27.4 6-44.5 33.1-38.1 60.3l13.6 56.2&quot;/>
			<path class=&quot;hlFur&quot; id=&quot;hlHead&quot; fill=&quot;#FFF&quot; d=&quot;M100.4 132.3l7.4 29.8 89.7-28.8-11.4-48.9c-1.6-6.8-4.5-12.9-8.4-18.3-9.6-7.9-28.5-12.9-46.9-8.5-24.9 5.9-34.5 23.6-38.1 37.9-.8.8-3.8 3-5.1 5.4.2 1.9.5 3.7 1 5.6l7 28.8 4.8-3z&quot;/>
			<path fill=&quot;#67B1E0&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M182.1 71.6c3.8 3.6 7 7.7 9.5 12-1.8.4-3.6.9-5.3 1.6 3.2 2.9 5.7 6.3 7.6 9.9-1.1.3-2.2.7-3.3 1.1 2.5 3.5 4.3 7.4 5.4 11.5-.8-.5-2.2-.8-3.3-1&quot;/>
			<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M197.5 132.4l-11.2-47.9c-6.3-26.7-32.7-44.1-59.5-38.2-27.4 6-44.5 33.1-38.1 60.3l13.6 56.2&quot;/>
			<g>
				<ellipse cx=&quot;85.8&quot; cy=&quot;120.4&quot; fill=&quot;#88C9F2&quot; rx=&quot;11.5&quot; ry=&quot;11.5&quot; transform=&quot;rotate(-66.265 85.7992 120.4318)&quot;/>
				<path class=&quot;hlSkin&quot; id=&quot;hlEar&quot; fill=&quot;#DDF1FA&quot; d=&quot;M80.4 122.2c-1.3-5.5 1.6-11.1 6.6-13.2-1.3-.1-2.6-.1-3.9.3-6.2 1.5-10 7.7-8.5 13.9s7.7 10 13.9 8.5c.7-.2 1.3-.4 1.9-.6-4.7-.6-8.9-4-10-8.9z&quot;/>
				<path fill=&quot;#88C9F2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M84.2 116.6c-2.2.5-3.6 2.8-3 5 .5 2.2 2.8 3.6 5 3&quot;/>
				<ellipse cx=&quot;85.8&quot; cy=&quot;120.4&quot; fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-width=&quot;2.5&quot; rx=&quot;11.5&quot; ry=&quot;11.5&quot; transform=&quot;rotate(-66.265 85.7992 120.4318)&quot;/>
				<path class=&quot;hlFur&quot; fill=&quot;#FFF&quot; d=&quot;M106 130.3l-12 3.6 1.2-11.4-6.3-.1 6-12h-5.4l9.6-8.4z&quot;/>
				<path class=&quot;hlFur&quot; fill=&quot;#FFF&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M92.1 96.4c-5.1 5.9-8.4 11.7-10 17 4.2-1.2 8.5-2.2 12.8-3-4.2 4.8-6.7 9.5-7.6 13.8 2.7-.7 5.4-1.3 8-1.7-2.3 4.8-2.8 9.2-1.7 13.3 1.4-1 4-2.4 6.1-3.4&quot;/>
			</g>
			<path class=&quot;hlSkin&quot; id=&quot;face&quot; fill=&quot;#DDF1FA&quot; d=&quot;M169.1 70.4l7.3 23.4c9.4 26.8-1.8 45-20 50.7s-37.8-5.1-45.8-30.1L103.3 91&quot;/>
			<path id=&quot;chin&quot; fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M152.4 147.5c3.8 1 8 1.4 12.3 1.1-.5-1.4-1-2.9-1.6-4.3 3.8.6 7.9.7 12.1.1l-3.3-4.8c3.1-.6 6.3-1.6 9.5-3.1-1.4-1.6-2.8-3.1-4.2-4.6&quot;/>
			<path class=&quot;hlFur&quot; id=&quot;eyebrow&quot; fill=&quot;#FFF&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M100.9 89.8c7.6 3.5 15.9 6.1 24.7 7.7 1.1-3.3 2.1-6.6 3-9.9 5.5 2.3 11.3 4.1 17.5 5.4.2-3.3.4-6.5.4-9.7 4.5.7 9.2 1.1 14 1.1-.5-3.4-1.1-6.7-1.7-10 4.5-1.9 9-4.2 13.3-6.9&quot;/>
			<g id=&quot;eyeL&quot;>
				<circle cx=&quot;135.9&quot; cy=&quot;105.3&quot; r=&quot;3.5&quot; fill=&quot;#265D85&quot;/>
				<circle cx=&quot;133.7&quot; cy=&quot;103.5&quot; r=&quot;1&quot; fill=&quot;#FFF&quot;/>
			</g>
			<g id=&quot;eyeR&quot;>
				<circle cx=&quot;163.2&quot; cy=&quot;96.3&quot; r=&quot;3.5&quot; fill=&quot;#265D85&quot;/>
				<circle cx=&quot;160.9&quot; cy=&quot;94.5&quot; r=&quot;1&quot; fill=&quot;#FFF&quot;/>
			</g>
			<path id=&quot;nose&quot; fill=&quot;#265D85&quot; d=&quot;M149.3 101.2l4.4-1.6c1.8-.6 3.6 1 3.1 2.9l-1.1 3.9c-.4 1.6-2.3 2.2-3.6 1.3l-3.3-2.3c-1.7-1.1-1.3-3.5.5-4.2z&quot;/>
			<path fill=&quot;#67B1E0&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M112.4 55.9c.9-4.3 3.8-9.2 8.8-13.7 1.4 2.3 2.8 4.7 4.1 7.1 2.3-4.8 6.9-9.8 13.8-14.1-.1 3.4-.3 6.8-.6 10.1 4.4-3 10.2-5.7 17.3-7.6-1.7 3.6-3.7 7.2-5.9 10.8&quot;/>
			<g id=&quot;mouth&quot;>
				<path id=&quot;mouthBG&quot; fill=&quot;#265D85&quot; d=&quot;M149 115.7c-4.6 3.7-6.6 9.8-5 15.6.1.5.3 1.1.5 1.6.6 1.5 2.4 2.3 3.9 1.7l11.2-4.4 11.2-4.4c1.5-.6 2.3-2.4 1.7-3.9-.2-.5-.4-1-.7-1.5-2.8-5.2-8.4-8.3-14.1-7.9-3.7.2-5.9 1.1-8.7 3.2z&quot;/>
				<g>
					<defs>
						<path id=&quot;mouthPath&quot; d=&quot;M149 115.7c-4.6 3.7-6.6 9.8-5 15.6.1.5.3 1.1.5 1.6.6 1.5 2.4 2.3 3.9 1.7l11.2-4.4 11.2-4.4c1.5-.6 2.3-2.4 1.7-3.9-.2-.5-.4-1-.7-1.5-2.8-5.2-8.4-8.3-14.1-7.9-3.7.2-5.9 1.1-8.7 3.2z&quot;/>
					</defs>
					<clipPath id=&quot;mouthClipPath&quot;>
						<use overflow=&quot;visible&quot; xlink:href=&quot;#mouthPath&quot;/>
					</clipPath>
					<g clip-path=&quot;url(#mouthClipPath)&quot;>
						<ellipse cx=&quot;160.8&quot; cy=&quot;133.2&quot; fill=&quot;#CC4A6C&quot; rx=&quot;13&quot; ry=&quot;8&quot; transform=&quot;rotate(-21.685 160.775 133.1613)&quot;/>
						<ellipse cx=&quot;158.4&quot; cy=&quot;127.1&quot; fill=&quot;#FFF&quot; opacity=&quot;.1&quot; rx=&quot;5&quot; ry=&quot;1.5&quot; transform=&quot;rotate(-21.685 158.3808 127.126)&quot;/>
						<path id=&quot;tooth1&quot; fill=&quot;#FFF&quot; d=&quot;M161.5 116.1l-3.7 1.5c-1 .4-2.2-.1-2.6-1.1l-1.5-3.7 7.4-3 1.5 3.7c.5 1 0 2.2-1.1 2.6z&quot;/>
						<path id=&quot;tooth2&quot; fill=&quot;#FFF&quot; d=&quot;M151.8 128.9l-1.9.7c-1 .4-1.5 1.6-1.1 2.6l1.1 2.8 5.6-2.2-1.1-2.8c-.5-1-1.6-1.5-2.6-1.1z&quot;/>
						<path id=&quot;tooth3&quot; fill=&quot;#FFF&quot; d=&quot;M158.3 126.3l-1.9.7c-1 .4-1.5 1.6-1.1 2.6l1.1 2.8 5.6-2.2-1.1-2.8c-.5-1-1.6-1.5-2.6-1.1z&quot;/>
					</g>
				</g>
				<path id=&quot;mouthOutline&quot; fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M149 115.7c-4.6 3.7-6.6 9.8-5 15.6.1.5.3 1.1.5 1.6.6 1.5 2.4 2.3 3.9 1.7l11.2-4.4 11.2-4.4c1.5-.6 2.3-2.4 1.7-3.9-.2-.5-.4-1-.7-1.5-2.8-5.2-8.4-8.3-14.1-7.9-3.7.2-5.9 1.1-8.7 3.2z&quot;/>
			</g>
			<g id=&quot;armR&quot;>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; d=&quot;M158.4 116.9l-.7.3c-3.7 1.5-5.5 5.7-4.1 9.4l1.2 2.9c1.7 4.4 6.7 6.5 11.1 4.8l1.4-.5&quot;/>
				<path fill=&quot;#A9DDF3&quot; d=&quot;M154.8 129.1l.7 1.8c1 2.5 5.4 3.1 5.4 3.1l-2-5.1c-.3-.7-1.1-1.1-1.8-.8l-2.3 1z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M158.4 116.9l-.7.3c-3.7 1.5-5.5 5.7-4.1 9.4l1.2 2.9c1.7 4.4 6.7 6.5 11.1 4.8l1.4-.5&quot;/>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; stroke=&quot;#265D85&quot; stroke-width=&quot;2.5&quot; d=&quot;M167.7 113.2l-.7.3c-3.7 1.5-5.5 5.7-4.1 9.4l1.2 2.9c1.7 4.4 6.7 6.5 11.1 4.8l1.4-.5&quot;/>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; stroke=&quot;#265D85&quot; stroke-width=&quot;2.5&quot; d=&quot;M177 109.4l-.7.3c-3.7 1.5-5.5 5.7-4.1 9.4l1.2 2.9c1.7 4.4 6.7 6.5 11.1 4.8l1.4-.5&quot;/>
				<path fill=&quot;#88C9F2&quot; d=&quot;M162.3 128.6l18.6 46.7 37.2-14.8-17.9-44.8&quot;/>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; d=&quot;M206.5 130.7l-5.9-15.1-37.9 13 6.4 17.4c10 1.6 34.6-6.3 37.4-15.3z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M162.3 128.6l18.6 46.7 37.2-14.8-15.3-38.3&quot;/>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; d=&quot;M190.8 119l-1.5-3.7c-2-5.1-7.9-7.6-13-5.6l5.2 12.9&quot;/>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; d=&quot;M203.5 123.8l-1.5-3.7c-2-5.1-7.9-7.6-13-5.6l5.2 12.9&quot;/>
				<path fill=&quot;#A9DDF3&quot; d=&quot;M200.4 119.4l-.7-1.8c-1-2.5-5.4-3.1-5.4-3.1l1.9 4.8c.3.8 1.3 1.3 2.1.9l2.1-.8z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M203.5 123.8l-1.5-3.7c-2-5.1-7.9-7.6-13-5.6&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M193.7 126.4l-4.4-11.1c-2-5.1-7.9-7.6-13-5.6&quot;/>
				<path fill=&quot;#67B1E0&quot; d=&quot;M219.6 160.1c-1.5-6.2-3.2-13.2-5.1-21.1-2.8 2.1-5.6 4.5-8.3 7.4-2-1.8-4.1-3.7-6.2-5.7-2.4 3.6-4.6 7.7-6.7 12.1-3-1.9-6-3.9-9.2-6-1.4 2.9-2.7 6-4 9.2-4.7-.6-9.4-1.1-14.2-1.7 5.4 8 10.3 15.2 14.7 21.5&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M219.6 160.1c-1.5-6.2-3.2-13.2-5.1-21.1-2.8 2.1-5.6 4.5-8.3 7.4-2-1.8-4.1-3.7-6.2-5.7-2.4 3.6-4.6 7.7-6.7 12.1-3-1.9-6-3.9-9.2-6-1.4 2.9-2.7 6-4 9.2-4.7-.6-9.4-1.1-14.2-1.7 5.4 8 10.3 15.2 14.7 21.5&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#3A5E77&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M160.9 125l2 5.1&quot;/>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; d=&quot;M172.2 126.4l-1.5-3.7c-2-5.1-7.9-7.6-13-5.6l5.2 12.9&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M160.5 124l2.4 6.1&quot;/>
				<path class=&quot;hlSkin&quot; fill=&quot;#DDF1FA&quot; d=&quot;M181.5 122.7L180 119c-2-5.1-7.9-7.6-13-5.6l5.2 12.9&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M181.5 122.7L180 119c-2-5.1-7.9-7.6-13-5.6&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M172.2 126.4l-1.5-3.7c-2-5.1-7.9-7.6-13-5.6&quot;/>
			</g>
			<g id=&quot;armL&quot;>
				<path fill=&quot;#67B1E0&quot; d=&quot;M50.9 156.7c-12 35.8-7.8 69.6 8.3 101.9 12.1 22.7 37 14.1 39.5-11.8v-65l-47.8-25.1z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M50.9 156.7c-12 35.8-7.8 69.6 8.3 101.9 10 22.3 37.3 15.1 39.5-11.8v-65l-47.8-25.1z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#262626&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;20&quot; d=&quot;M59.3 143.8l34.3 33.9&quot;/>
				<path fill=&quot;#4D4D4D&quot; d=&quot;M58.4 133.9l15.9 15.9-.9.9-16.5-16.5c.5-.2 1-.3 1.5-.3z&quot;/>
				<path fill=&quot;#1A1A1A&quot; d=&quot;M71.2 169.6l-20.1-20c-2.4-3.7-2.5-8.1.1-11.7l23.1 22.2&quot;/>
				<path fill=&quot;#4D4D4D&quot; d=&quot;M80.5 156.4l16 15.9-.9.9-16.5-16.5c.5-.1 1-.2 1.4-.3z&quot;/>
				<path fill=&quot;#1A1A1A&quot; d=&quot;M74.2 160.1L86 171.4l-2 11-10.2-10.1c-2.4-4.4-2.5-8.5.4-12.2z&quot;/>
				<path fill=&quot;#88C9F2&quot; d=&quot;M65.9 164.8c-1.9-5.5.8-11.8 6.1-14.1 4.9-2.2 10.4-.6 13.5 3.4 1.3 1.6 3.5 2.1 5.4 1.4 3-1.2 3.9-4.9 1.9-7.4-5.8-7.2-16.1-9.9-25-5.7-9.4 4.4-14.1 15.3-10.9 25.2&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M67.9 168.3c-1.1-1.2-2-3.6-2-3.6-1.9-5.5.8-11.8 6.1-14.1 4.9-2.2 10.4-.6 13.5 3.4 1.3 1.6 3.5 2.1 5.4 1.4 3-1.2 3.9-4.9 1.9-7.4-5.8-7.2-16.1-9.9-25-5.7-9.4 4.4-14.1 15.3-10.9 25.2&quot;/>
				<path fill=&quot;#88C9F2&quot; d=&quot;M69.9 168.7c-1.9-5.5.8-11.8 6.1-14.1 4.9-2.2 10.4-.6 13.5 3.4 1.3 1.6 3.5 2.1 5.4 1.4 3-1.2 3.9-4.9 1.9-7.4-5.8-7.2-16.1-9.9-25-5.7-9.4 4.4-14.1 15.3-10.9 25.2&quot;/>
				<path fill=&quot;#67B1E0&quot; d=&quot;M49.9 155l2.7 12.7.2 11.8 5 8.6 9.5-1.8 2-8.7-6.9.6 1.7-11.7-6.6 2.8 1-13.8-4.6 2.9z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M71.9 172.3c-1.1-1.2-2-3.6-2-3.6-1.9-5.5.8-11.8 6.1-14.1 4.9-2.2 10.4-.6 13.5 3.4 1.3 1.6 3.5 2.1 5.4 1.4 3-1.2 3.9-4.9 1.9-7.4-5.8-7.2-16.1-9.9-25-5.7&quot;/>
				<path class=&quot;hlSkin&quot; id=&quot;hlHandL&quot; fill=&quot;#DDF1FA&quot; d=&quot;M101.7 156.9c-5.8-7.2-16.1-9.9-25-5.7-5.9 2.8-9.9 8.1-11.3 14.1l-1-.9-6.2 4.2c5.5 18.1 19.3 25.4 30.4 21l1.2-9.1c-6 2.4-12.7-.7-14.9-6.8-1.9-5.5.8-11.8 6.1-14.1 4.9-2.2 10.4-.6 13.5 3.4 1.3 1.6 3.5 2.1 5.4 1.4 2.9-1.3 3.8-5 1.8-7.5z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M89.7 180.5c-6 2.4-12.7-.7-14.9-6.8&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M76.9 177.3c-1.1-1.2-2-3.6-2-3.6-1.9-5.5.8-11.8 6.1-14.1 4.9-2.2 10.4-.6 13.5 3.4 1.3 1.6 3.5 2.1 5.4 1.4 3-1.2 3.9-4.9 1.9-7.4-5.8-7.2-16.1-9.9-25-5.7&quot;/>
				<path class=&quot;hlFur&quot; id=&quot;hlArmL&quot; fill=&quot;#FFF&quot; d=&quot;M98.8 202.8l-1.4-8.7-5.2.7-7.2-11.5-6.8 9-3.9-9.3-7.5 4.8 3.5-11.4-7.1 1.9 2.7-13.5-7.8 4.9c-11.7 26.5-3.6 52.5 1.7 66.6 15.5-6.4 30.3-21.9 39-33.5z&quot;/>
				<path fill=&quot;#A9DDF3&quot; d=&quot;M101 161.2l-2.4-2.2c.2-1.6-.2-2.7-.8-3.9l2.6 2.5c.8.8 1 2.2.6 3.6z&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M66.9 187.8l3.5-11.4-7.2 1.9 2.6-13.9-7.5 4.5 1.2-15.5-5.5 4.2&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M54 157.6l-5.6-5.6 2.7 14.7&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M67.1 188l7.3-5 3.8 9.3&quot;/>
				<path fill=&quot;none&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-width=&quot;2.5&quot; d=&quot;M78.2 192.3l6.8-9 7.1 11.5&quot;/>
			</g>
		</g>
		<g id=&quot;fingersBackL&quot; style=&quot;visibility: hidden;&quot; fill=&quot;#88C9F2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot;>
			<path d=&quot;M149.2 177.5l-5.6-23.3c-.6-2.7 1-5.4 3.7-6 2.7-.6 5.4 1 6 3.7l4.4 18.4c.6 2.7-1 5.4-3.7 6l-4.8 1.2M139.4 179.8l-5.6-23.3c-.6-2.7 1-5.4 3.7-6 2.7-.6 5.4 1 6 3.7l5.6 23.3-9.7 2.3z&quot;/>
			<path d=&quot;M128.6 177.3l-4.4-18.4c-.6-2.7 1-5.4 3.7-6 2.7-.6 5.4 1 6 3.7l5.6 23.3-4.9 1.2c-2.7.5-5.4-1.2-6-3.8z&quot;/>
		</g>
		<g id=&quot;fingersBackR&quot; style=&quot;visibility: hidden;&quot; fill=&quot;#88c9f2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot;>
			<path d=&quot;M215.5 152l-15.9-17.9c-1.8-2.1-1.6-5.2.4-7.1 2.1-1.8 5.2-1.6 7.1.4l12.6 14.2c1.8 2.1 1.6 5.2-.4 7l-3.8 3.4&quot;/>
			<path d=&quot;M208 158.6l-15.9-17.9c-1.8-2.1-1.6-5.2.4-7.1 2.1-1.8 5.2-1.6 7.1.4l15.9 17.9-7.5 6.7z&quot;/>
			<path d=&quot;M197.2 161.5l-12.6-14.2c-1.8-2.1-1.6-5.2.4-7.1 2.1-1.8 5.2-1.6 7.1.4l15.9 17.9-3.7 3.3c-2.1 2-5.2 1.8-7.1-.3z&quot;/>
		</g>
		<g id=&quot;blanket&quot;>
			<path d=&quot;M1.2 271.4C6.6 262 13 253.1 22.4 248c10.3-5.5 22.5-5.5 33.7-8.8 21.8-6.5 37.5-25.2 50.3-43.9 5.5-8 10.9-16.4 18.3-22.7 13.1-11.2 31.3-14.8 48.6-15 4.9 0 9.9.1 14.5-1.7 3.6-1.5 6.5-4.1 9.3-6.9 10.1-10.2 17.9-22.8 29-32 7.9-6.6 18.7-14.7 29.5-13.7 13.9 1.2 25 5.8 38.5-1.5 28.1-15.2 27.8-60.6 56.2-75.1 16.2-8.3 36.9-3.6 52.6-12.7 5.4-3.2 9.8-7.7 13.9-12.5h128.5l-350.8 209L1.3 363l-.1-91.6z&quot; opacity=&quot;.1&quot;/>
			<path fill=&quot;#09334F&quot; d=&quot;M0 281.6c5.3-9.2 11.5-17.9 20.7-22.8 10.3-5.5 22.5-5.5 33.7-8.8 21.8-6.5 37.5-25.2 50.3-43.9 5.5-8 10.9-16.4 18.3-22.7 13.1-11.2 31.3-14.8 48.6-15 4.9 0 9.9.1 14.5-1.7 3.6-1.5 6.5-4.1 9.3-6.9 10.1-10.2 17.9-22.8 29-32 7.9-6.6 18.7-14.7 29.5-13.7 13.9 1.2 25 5.8 38.5-1.5 28.1-15.2 27.8-60.6 56.2-75.1 16.2-8.3 36.9-3.6 52.6-12.7C411 19.1 417.1 8.4 424.9.3H700v570H0V281.6z&quot;/>
			<path fill=&quot;#072A40&quot; d=&quot;M0 281.6c5.3-9.2 11.6-17.9 20.8-22.8 10.3-5.5 22.5-5.5 33.7-8.8 21.8-6.5 37.5-25.2 50.3-43.9 5.5-8 10.9-16.4 18.3-22.7 13.1-11.2 31.3-14.8 48.6-15 4.9 0 9.9.1 14.5-1.7 3.6-1.5 6.5-4.1 9.3-6.9 10.1-10.2 17.9-22.8 29-32 7.9-6.6 18.7-14.7 29.5-13.7 13.9 1.2 25 5.8 38.5-1.5 28.1-15.2 27.8-60.6 56.2-75.1 16.2-8.3 36.9-3.6 52.6-12.7 9.8-5.7 15.9-16.4 23.7-24.6h100.4c-3.5 2.8-7.3 5.3-11.4 7.2-11.6 5.4-23 6.6-34.9 1.9-10.5-4.2-22.3 2.4-30.1 10.6-7.8 8.2-14 18.3-23.7 24-15.7 9.1-36.4 4.4-52.6 12.7-28.4 14.6-28.2 60-56.2 75.1-13.5 7.3-24.6 2.8-38.5 1.5-10.8-1-21.5 7.1-29.5 13.7-11.2 9.2-18.9 21.8-29 32-2.7 2.7-5.7 5.4-9.3 6.9-4.5 1.9-9.6 1.7-14.5 1.7-17.3.2-35.4 3.8-48.6 15-7.4 6.3-12.8 14.7-18.3 22.7-12.9 18.7-28.6 37.4-50.3 43.9-11.2 3.4-23.4 3.3-33.7 8.8-11.9 6.4-18.9 19-25.2 31-8.2 15.3-11.6 30-19.6 44.7v-72z&quot;/>
			<path fill=&quot;none&quot; stroke=&quot;#001726&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M1.2 283c5.3-9.3 11.8-18 21.1-23 10.3-5.5 22.5-5.5 33.7-8.8 21.8-6.5 37.5-25.2 50.3-43.9 5.5-8 10.9-16.4 18.3-22.7 13.1-11.2 31.3-14.8 48.6-15 4.9 0 9.9.1 14.5-1.7 3.6-1.5 6.5-4.1 9.3-6.9 10.1-10.2 17.9-22.8 29-32 7.9-6.6 18.7-14.7 29.5-13.7 13.9 1.2 25 5.8 38.5-1.5 28.1-15.2 27.8-60.6 56.2-75.1 16.2-8.3 36.9-3.6 52.6-12.7 9.8-5.7 15.9-16.4 23.7-24.5&quot;/>
			<path fill=&quot;none&quot; stroke=&quot;#001726&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M1.2 355c8-14.7 11.7-29.4 19.9-44.9 6.3-11.9 13.3-24.6 25.2-31 10.3-5.5 22.5-5.5 33.7-8.8 21.8-6.5 37.5-25.2 50.3-43.9 5.5-8 10.9-16.4 18.3-22.7 13.1-11.2 31.3-14.8 48.6-15 4.9 0 9.9.1 14.5-1.7 3.6-1.5 6.5-4.1 9.3-6.9 10.1-10.2 17.9-22.8 29-32 7.9-6.6 18.7-14.7 29.5-13.7 13.9 1.2 25 5.8 38.5-1.5 28.1-15.2 27.8-60.6 56.2-75.1 16.2-8.3 36.9-3.6 52.6-12.7 9.8-5.7 15.9-15.8 23.7-24s19.6-14.8 30.1-10.6c11.9 4.8 23.2 3.5 34.9-1.9 4-1.9 7.7-4.4 11.2-7.1&quot;/>
			<path d=&quot;M111.2 197.2s50.7 23.9 90.8 43.1c14.2 6.8 18 25.4 7.5 37.2-7.6 8.5-20.2 10.4-30 4.5l-89.9-54.7 21.6-30.1z&quot; opacity=&quot;.03&quot;/>
			<path d=&quot;M12.1 266s53.5 64.8 94.7 114c11.7 13.9 1.8 35.1-16.4 35.1-7.1 0-13.8-3.6-17.8-9.5L0 296.5v-13.2L12.1 266z&quot; opacity=&quot;.03&quot;/>
			<path d=&quot;M155.7 170.1s111.4 46.9 171.1 69c3.5 1.3 7.4 0 9.4-3.2 2.7-4.2.9-9.9-3.8-11.7-33.5-12.8-147.3-56-147.3-56l-29.4 1.9z&quot; opacity=&quot;.03&quot;/>
			<path d=&quot;M255.9 114.7S349 145.6 412 176c2.1 1 4.6.6 6.2-1 2.8-2.7 1.9-7.5-1.7-9-23.3-9.6-94.3-38.6-131.1-50.4-.1.1-10.2 1.9-29.5-.9z&quot; opacity=&quot;.03&quot;/>
			<path d=&quot;M356.6 34.9l152.1 49.3c2.2.7 4.5.6 6.7-.2 8.7-3.4 8.2-15.9-.7-18.6l-121-36.8-37.1 6.3z&quot; opacity=&quot;.03&quot;/>
		</g>
		<g id=&quot;fingersFrontL&quot; style=&quot;visibility: hidden;&quot;>
			<path fill=&quot;#88C9F2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M146.2 165.1l2.8 11.6c.6 2.7 3.3 4.3 6 3.7 2.7-.6 4.3-3.3 3.7-6l-1.6-6.8c-.6-2.7-3.3-4.3-6-3.7l-4.9 1.2&quot;/>
			<path fill=&quot;#A9DDF3&quot; d=&quot;M151.4 173.8l.5 2.2c.3 1.1 1.3 1.7 2.4 1.5 1.1-.3 1.7-1.3 1.5-2.4l-.5-2.2-3.9.9z&quot;/>
			<path fill=&quot;#88C9F2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M136.5 167.4l2.8 11.6c.6 2.7 3.3 4.3 6 3.7 2.7-.6 4.3-3.3 3.7-6l-2.8-11.6-9.7 2.3z&quot;/>
			<path fill=&quot;#A9DDF3&quot; d=&quot;M141.7 176.2l.5 2.2c.3 1.1 1.3 1.7 2.4 1.5 1.1-.3 1.7-1.3 1.5-2.4l-.5-2.2-3.9.9z&quot;/>
			<path fill=&quot;#88C9F2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M127.9 174.6l1.6 6.8c.6 2.7 3.3 4.3 6 3.7 2.7-.6 4.3-3.3 3.7-6l-2.8-11.6-4.9 1.2c-2.6.5-4.2 3.2-3.6 5.9z&quot;/>
			<path fill=&quot;#A9DDF3&quot; d=&quot;M131.9 178.5l.5 2.2c.3 1.1 1.3 1.7 2.4 1.5 1.1-.3 1.7-1.3 1.5-2.4l-.5-2.2-3.9.9z&quot;/>
		</g>
		<g id=&quot;fingersFrontR&quot; style=&quot;visibility: hidden;&quot;>
			<path fill=&quot;#88c9f2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M207.1 142.5l7.9 8.9c1.8 2.1 5 2.3 7.1.4 2.1-1.8 2.3-5 .4-7.1l-4.6-5.2c-1.8-2.1-5-2.2-7-.4l-3.8 3.4&quot;/>
			<path fill=&quot;#A9DDF3&quot; d=&quot;M215.8 147.7l1.5 1.7c.7.8 2 .9 2.8.2.8-.7.9-2 .2-2.8l-1.5-1.7-3 2.6z&quot;/>
			<path fill=&quot;#88c9f2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M199.6 149.1l7.9 8.9c1.8 2.1 5 2.3 7.1.4 2.1-1.8 2.3-5 .4-7.1l-7.9-8.9-7.5 6.7z&quot;/>
			<path fill=&quot;#A9DDF3&quot; d=&quot;M208.3 154.4l1.5 1.7c.7.8 2 .9 2.8.2.8-.7.9-2 .2-2.8l-1.5-1.7-3 2.6z&quot;/>
			<path fill=&quot;#88c9f2&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; d=&quot;M195.4 159.5l4.6 5.2c1.8 2.1 5 2.3 7.1.4 2.1-1.8 2.3-5 .4-7.1l-7.9-8.9-3.7 3.3c-2.1 1.9-2.3 5-.5 7.1z&quot;/>
			<path fill=&quot;#A9DDF3&quot; d=&quot;M200.8 161l1.5 1.7c.7.8 2 .9 2.8.2.8-.7.9-2 .2-2.8l-1.5-1.7-3 2.6z&quot;/>
		</g>
		<g id=&quot;flashlightFront&quot;>
			<path fill=&quot;#1A1A1A&quot; d=&quot;M83.9 181.4l4.6 26.4 34.6-33.6-24.5-6.2c-8.9-2.6-16.6 3.9-14.7 13.4z&quot;/>
			<path fill=&quot;#333&quot; d=&quot;M91.9 167.8l20.5 7.4-.5 1.2-21.4-8.2c.5-.2 1-.3 1.4-.4z&quot;/>
			<path d=&quot;M86 171.4c-2 2.5-3 6-2.2 10l4.6 26.4 11.4-11.1L86 171.4z&quot;/>
			<path fill=&quot;url(#flashlightGrad)&quot; d=&quot;M99.1 183.7c-10.6 9.4-13.4 21.4-9 28.5 4.3 6.8 18 3 28.6-6.4s14.9-23.7 8.8-29c-6.9-6.1-17.8-2.6-28.4 6.9z&quot;/>
			<path fill=&quot;#B3B3B3&quot; d=&quot;M101.6 185.7c-8.2 7.3-11.9 18.2-8.8 23.1 2.6 4.1 13.6-1.1 21.8-8.4s13.6-18.1 9.9-21.6c-4.4-4.2-14.7-.4-22.9 6.9z&quot;/>
		</g>
	</svg>

	<svg id=&quot;lightSVG&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot; viewBox=&quot;0 0 600 470&quot;>
		<filter id=&quot;white-glow&quot;>
			<feFlood result=&quot;flood&quot; flood-color=&quot;#ffffff&quot; flood-opacity=&quot;.6&quot;></feFlood>
			<feComposite in=&quot;flood&quot; result=&quot;mask&quot; in2=&quot;SourceGraphic&quot; operator=&quot;in&quot;></feComposite>
			<feMorphology in=&quot;mask&quot; result=&quot;dilated&quot; operator=&quot;dilate&quot; radius=&quot;3&quot;></feMorphology>
			<feGaussianBlur in=&quot;dilated&quot; result=&quot;blurred&quot; stdDeviation=&quot;8&quot;></feGaussianBlur>
			<feMerge>
				<feMergeNode in=&quot;blurred&quot;></feMergeNode>
				<feMergeNode in=&quot;SourceGraphic&quot;></feMergeNode>
			</feMerge>
		</filter>
		<g id=&quot;light&quot; style=&quot;visibility: hidden;&quot;>
			<path filter=&quot;url(#white-glow)&quot; fill=&quot;#F8FFE8&quot; d=&quot;M122.2 177.4c-5.2-1.6-13.6 2.1-20.6 8.3-7.7 6.8-11.4 16.8-9.3 22.1L421 1683h1534V733L122.2 177.4z&quot;/>
			<path opacity=&quot;0.7&quot; fill=&quot;#FFFFFF&quot; d=&quot;M101.6,185.7c-8.2,7.3-11.9,18.2-8.8,23.1c2.6,4.1,13.6-1.1,21.8-8.4s13.6-18.1,9.9-21.6 C120.1,174.6,109.8,178.4,101.6,185.7z&quot;/>
		</g>
		<g id=&quot;four04&quot;>
			<!--
				<g opacity=&quot;.2&quot; id=&quot;lettersShadow&quot;>
					<path d=&quot;M171.2 309.9l18 27.4-30.7 27.2 13.2 15.2 74 22.3 26.7-11-26.9-30.7 7.1-10.8-14.9-18.2-15.5-3.8-16.3-22.3z&quot;/>
					<path d=&quot;M227.8 344.8s37 79.2 104.2 53.5c52.2-20-41-64-50.3-68.9-9.3-4.9-45.4 4.1-45.4 4.1l-8.5 11.3z&quot;/>
					<path d=&quot;M313.7 372.9l18.2 25.4-12.1 29.9 13.1 15.2 96.2 16.1 28.6-14.5-35.7-25.2 11.3-7.1-22.7-22.2-19.1.4-42.6-18z&quot;/>
				</g>
				<path class=&quot;lettersSide&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#3A7199&quot; d=&quot;M192.4 255.2l-10.6 3.5 9.1.5 11.4-3.8zM163.5 287.7l7.4 22.3 8.3 4.4-7.9-24zM160 255.9c-.1-.5-.3-.9-.5-1.4-.2-.5-.3-1-.5-1.5s-.3-1-.5-1.6-.3-1.1-.5-1.6-.3-1.1-.5-1.7c-.2-.6-.3-1.1-.5-1.7-.2-.6-.3-1.1-.5-1.7-.2-.6-.3-1.2-.5-1.7-.2-.6-.3-1.2-.5-1.7-.2-.6-.3-1.2-.5-1.7-.2-.6-.3-1.1-.5-1.7-.2-.6-.3-1.1-.5-1.7s-.3-1.1-.5-1.7c-.1-.5-.3-1.1-.4-1.6-.1-.5-.3-1-.4-1.5-.1-.5-.3-1-.4-1.4l-6.4 1.6c.1.4.2.9.4 1.3.1.5.2.9.4 1.4.1.5.3 1 .4 1.5s.3 1 .4 1.5c.1.5.3 1.1.4 1.6s.3 1.1.4 1.6c.1.5.3 1.1.4 1.6.1.5.3 1.1.4 1.6.1.5.3 1.1.4 1.6.1.5.3 1.1.5 1.6s.3 1.1.5 1.6.3 1 .5 1.6c.2.5.3 1 .5 1.5s.3 1 .4 1.4.3.9.4 1.4c.1.4.3.9.4 1.3l3.7 11.4-17 5.7 5.9 1.6 18.3-6.2-3.6-12.3zM129.4 212.3L114.6 283l6.3 19.1 4.5 3.9-6.8-20.6 15.9-76.2z&quot;/>
				<path class=&quot;lettersFront&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#67B1E0&quot; d=&quot;M190.9 259.2l11.4-3.8 7.1 22-11.3 3.9 7.8 24-26.8 9.2-7.9-24.1-45.8 15.6-6.8-20.6 15.9-76.2 36.4-11.8 20 61.8zm-36.6-23.1c-.2-.6-.3-1.1-.5-1.7-.1-.5-.3-1.1-.4-1.6-.1-.5-.3-1-.4-1.5-.1-.5-.3-1-.4-1.4l-.7.2c-.1.9-.1 1.9-.2 2.8-.1.9-.2 1.9-.2 2.8-.1.9-.2 1.9-.3 2.8-.1.9-.2 1.9-.3 2.8-.1.9-.2 1.8-.3 2.8-.1.9-.2 1.9-.3 2.8-.1.9-.2 1.9-.4 2.8-.1 1-.2 1.9-.4 2.9l-3.8 21.8 18.3-6.2-4-12.3c-.1-.5-.3-.9-.5-1.4-.2-.5-.3-1-.5-1.5s-.3-1-.5-1.6c-.2-.5-.3-1.1-.5-1.6-.2-.6-.3-1.1-.5-1.7-.2-.6-.3-1.1-.5-1.7-.2-.6-.3-1.1-.5-1.7-.2-.6-.3-1.2-.5-1.7-.2-.6-.3-1.2-.5-1.7-.2-.6-.3-1.2-.5-1.7-.2-.6-.3-1.1-.5-1.7.1-.6-.1-1.2-.2-1.8&quot;/>
				<path class=&quot;lettersSide&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#3A7199&quot; d=&quot;M263.9 273.7l-.3-3.3c-.1-1-.2-2-.4-2.9-.2-.9-.3-1.7-.5-2.5s-.4-1.5-.6-2.2c-.2-.7-.5-1.3-.8-1.8l-.9-1.5c-.3-.4-.6-.8-1-1.2-.3-.3-.7-.6-1.1-.9l-1.2-.6c-.4-.2-.8-.3-1.2-.5s-.8-.3-1.3-.3c-.4-.1-.9-.2-1.3-.2h-8.5 1.2c.4 0 .8.1 1.2.2l1.2.3c.4.1.8.3 1.1.5.4.2.7.4 1.1.6.4.2.7.5 1 .8.3.3.6.7.9 1.1.3.4.6.9.8 1.4.3.5.5 1.1.7 1.7.2.6.4 1.3.6 2 .2.7.3 1.5.5 2.3.1.8.3 1.7.4 2.7.1 1 .2 2 .2 3 .1 1.1.1 2.2.1 3.5 0 1.2 0 2.6-.1 4s-.1 2.9-.2 4.5-.2 3.2-.4 5c-.2 1.7-.3 3.4-.5 5s-.4 3.1-.6 4.5c-.2 1.4-.4 2.7-.7 3.9-.2 1.2-.5 2.4-.8 3.4-.3 1.1-.5 2.1-.8 3s-.6 1.8-.9 2.6c-.3.8-.6 1.6-.9 2.3-.3.7-.6 1.3-1 1.9-.2.3-.3.5-.5.8-.1.1-.1.2-.2.2-.1.2-.2.3-.3.5-.1.1-.1.2-.2.3-.1.1-.2.3-.3.4-.1.1-.1.2-.2.3l-.3.3-.2.2-.3.3c-.1.1-.2.1-.2.2-.1.1-.2.2-.3.2-.1.1-.2.1-.2.2-.1.1-.2.1-.3.2-.1 0-.2.1-.2.1-.2.1-.3.2-.5.3-.4.2-.8.3-1.2.4-.4.1-.8.2-1.1.3h-.1c-.4.1-.8.1-1.1.1h-1.3c-.4 0-.8-.1-1.2-.2h-.1c-.4-.1-.7-.2-1.1-.3-.4-.1-.7-.3-1.1-.5-.4-.2-.7-.4-1.1-.6h-.1-.1-.1-.1l6.5 4.9h.4c.2.1.4.2.6.4l.6.3c.2.1.4.2.5.3.2.1.4.2.6.2.2.1.4.1.5.2.2.1.4.1.6.2.2 0 .3.1.5.1s.4.1.6.1H248.2c.2 0 .3 0 .5-.1h.4c.2 0 .3-.1.5-.1s.3-.1.5-.1h.1c.1 0 .1 0 .2-.1.1 0 .2-.1.4-.1s.2-.1.3-.1c.1 0 .2-.1.3-.2h.1s.1 0 .1-.1c0 0 .1 0 .1-.1 0 0 .1 0 .1-.1 0 0 .1 0 .1-.1.1 0 .2-.1.3-.2.1-.1.2-.1.3-.2l.1-.1.1-.1c.1 0 .1-.1.2-.1s.1-.1.2-.1c.1-.1.2-.1.2-.2l.3-.3c.1-.1.1-.1.2-.1l.1-.1.1-.1c.1-.1.1-.2.2-.3.1-.1.2-.2.2-.3.1-.1.2-.3.3-.4l.2-.2v-.1-.1c.1-.1.2-.3.3-.5.1-.1.1-.2.2-.3.2-.3.3-.6.5-.9.4-.6.7-1.3 1-2.1.3-.8.7-1.6 1-2.5.3-.9.6-1.8.9-2.9.3-1 .6-2.1.9-3.2s.6-2.4.8-3.7.5-2.7.7-4.3c.2-1.5.5-3.1.7-4.8.2-1.7.4-3.5.6-5.3.2-1.9.3-3.7.4-5.4.1-1.7.2-3.3.3-4.8.1-1.5.1-2.9.1-4.3.7-1.1.7-2.3.6-3.5zM225.7 242c.4-.4.8-.7 1.2-1.1.1-.1.2-.2.4-.3l1.5-1.2c.1-.1.2-.2.3-.2.4-.3.8-.6 1.3-.9.2-.1.3-.2.5-.3l1.5-.9c.1 0 .1-.1.2-.1.6-.3 1.1-.6 1.7-.9.1-.1.2-.1.3-.2.6-.3 1.1-.5 1.7-.8.1 0 .2-.1.2-.1.6-.3 1.2-.5 1.8-.7.3-.1.5-.2.8-.3.1 0 .1 0 .2-.1.2-.1.5-.2.7-.2h.1c.3-.1.6-.2.9-.2.3-.1.6-.2.9-.2l-6.6 1.6c-.1 0-.2 0-.3.1-.1 0-.2 0-.3.1-.1 0-.2 0-.3.1-.1 0-.1 0-.2.1-.2.1-.4.1-.6.2h-.1c-.1 0-.3.1-.4.1-.1 0-.1 0-.2.1h-.1-.1c-.1 0-.1 0-.2.1-.2.1-.4.1-.6.2-.3.1-.7.3-1 .4-.2.1-.4.2-.7.3-.1 0-.1.1-.2.1 0 0-.1 0-.1.1-.3.2-.7.3-1 .5-.1.1-.3.1-.4.2 0 0-.1 0-.1.1 0 0-.1 0-.1.1-.1.1-.2.1-.3.2-.4.2-.9.5-1.3.7-.1 0-.1.1-.2.1-.3.2-.7.4-1 .6-.1.1-.2.2-.3.2-.1 0-.1.1-.2.1-.1.1-.2.1-.2.2-.4.3-.8.6-1.2.8-.1.1-.2.2-.3.2l-.1.1c-.4.3-.9.7-1.3 1.1l-.1.1c-.1.1-.2.1-.2.2l-.6.6c-.2.1-.3.3-.4.4-.1.1-.3.2-.4.4-.5.4-.9.9-1.3 1.4-1 1-1.9 2.2-2.8 3.4-.9 1.2-1.7 2.5-2.6 3.8-.8 1.4-1.6 2.8-2.3 4.3-.7 1.5-1.4 3.1-2 4.8-.6 1.7-1.2 3.4-1.7 5.2-.5 1.8-1 3.7-1.4 5.7-.4 2-.8 4-1.1 6.1-.3 2.1-.6 4.3-.8 6.6-.2 2.3-.4 4.5-.4 6.6-.1 2.1-.1 4.2 0 6.2s.2 4 .3 5.9c.2 1.9.4 3.7.7 5.5.3 1.8.7 3.5 1.1 5.1.4 1.6.9 3.2 1.4 4.7.5 1.5 1.1 2.9 1.8 4.3s1.4 2.7 2.1 3.9c.3.4.5.8.8 1.2.3.4.5.8.8 1.2s.6.8.8 1.1c.3.4.6.7.9 1.1l4.9 5.8-.9-1.2-.9-1.2c-.3-.4-.6-.8-.9-1.3-.3-.4-.6-.9-.8-1.3-.8-1.3-1.6-2.7-2.3-4.2-.7-1.5-1.3-3-1.9-4.6-.6-1.6-1.1-3.3-1.6-5.1-.5-1.8-.9-3.6-1.2-5.5-.3-1.9-.6-3.9-.8-5.9-.2-2-.3-4.1-.4-6.3-.1-2.2 0-4.4 0-6.7.1-2.3.2-4.7.5-7.1.2-2.4.5-4.8.9-7.1.3-2.3.7-4.5 1.2-6.6.5-2.1 1-4.2 1.5-6.1.6-2 1.2-3.8 1.9-5.7.7-1.8 1.4-3.5 2.2-5.2.8-1.6 1.6-3.2 2.5-4.7.9-1.5 1.8-2.8 2.8-4.1 1-1.3 2-2.5 3-3.6.5-.5 1-1 1.4-1.5-.2-.5 0-.6.1-.7z&quot;/>
				<path class=&quot;lettersFront&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#67B1E0&quot; d=&quot;M291.2 268.9c.3 1.9.6 3.8.8 5.8.2 2 .3 4.1.3 6.2 0 2.1 0 4.3-.1 6.6s-.3 4.6-.5 7c-.2 2.4-.5 4.7-.9 7-.3 2.2-.7 4.4-1.2 6.5-.5 2.1-1 4.1-1.5 6-.6 1.9-1.2 3.8-1.9 5.6-.7 1.8-1.4 3.5-2.2 5.1-.8 1.6-1.6 3.2-2.4 4.7-.9 1.5-1.8 2.9-2.7 4.2-.9 1.3-1.9 2.6-3 3.7-1 1.2-2.1 2.3-3.2 3.3s-2.3 1.9-3.5 2.8c-1.2.9-2.4 1.6-3.7 2.3-1.3.7-2.6 1.3-3.9 1.8-1.3.5-2.7 1-4.1 1.4-1.4.4-2.8.7-4.2.9-1.4.2-2.9.3-4.4.4-1.5 0-3 0-4.5-.1-1.6-.1-3.1-.3-4.6-.6-1.5-.3-2.9-.6-4.3-1.1-1.4-.4-2.7-.9-4-1.5-1.3-.6-2.6-1.3-3.8-2-1.2-.7-2.4-1.6-3.5-2.4-1.1-.9-2.2-1.9-3.2-2.9s-2-2.1-2.9-3.3c-.9-1.2-1.8-2.4-2.6-3.8-.8-1.3-1.6-2.7-2.3-4.2-.7-1.5-1.3-3-1.9-4.6-.6-1.6-1.1-3.3-1.6-5.1-.5-1.8-.9-3.6-1.2-5.5-.3-1.9-.6-3.9-.8-5.9-.2-2-.3-4.1-.4-6.3-.1-2.2 0-4.4 0-6.7.1-2.3.2-4.7.5-7.1.2-2.4.5-4.8.9-7.1.3-2.3.7-4.5 1.2-6.6.5-2.1 1-4.2 1.5-6.1.6-2 1.2-3.8 1.9-5.7.7-1.8 1.4-3.5 2.2-5.2.8-1.6 1.6-3.2 2.5-4.7.9-1.5 1.8-2.8 2.8-4.1 1-1.3 2-2.5 3-3.6 1.1-1.1 2.2-2.2 3.3-3.1 1.1-1 2.3-1.9 3.5-2.7 1.2-.8 2.4-1.5 3.7-2.2 1.3-.6 2.6-1.2 3.9-1.7 1.3-.5 2.7-.9 4.1-1.2 1.4-.3 2.8-.6 4.3-.7 1.5-.2 2.9-.2 4.5-.2 1.5 0 3.1.1 4.6.2 1.5.2 3 .4 4.5.7 1.5.3 2.9.7 4.3 1.1 1.4.5 2.7 1 4 1.6 1.3.6 2.6 1.3 3.8 2 1.2.7 2.4 1.6 3.5 2.4 1.1.9 2.2 1.8 3.2 2.9 1 1 2 2.1 2.9 3.3.9 1.2 1.8 2.4 2.6 3.7.8 1.3 1.5 2.7 2.2 4.1.7 1.4 1.3 3 1.9 4.6.6 1.6 1.1 3.2 1.5 5 .4 1.5.7 3.3 1.1 5.1zM260.4 310c.3-1.1.6-2.4.8-3.7.3-1.3.5-2.7.7-4.3.2-1.5.5-3.1.7-4.8.2-1.7.4-3.5.6-5.3.2-1.9.3-3.7.4-5.4.1-1.7.2-3.3.3-4.8.1-1.5.1-2.9.1-4.3 0-1.3 0-2.6-.1-3.7l-.3-3.3c-.1-1-.2-2-.4-2.9-.2-.9-.3-1.7-.5-2.5s-.4-1.5-.6-2.2c-.2-.7-.5-1.3-.8-1.8l-.9-1.5c-.3-.4-.6-.8-1-1.2-.3-.3-.7-.6-1.1-.9l-1.2-.6c-.4-.2-.8-.3-1.2-.5-.4-.1-.8-.3-1.3-.3-.4-.1-.9-.2-1.3-.2s-.9-.1-1.3-.1-.9 0-1.3.1-.9.1-1.3.2-.8.2-1.3.4l-1.2.6c-.4.3-.8.6-1.2 1-.4.4-.8.8-1.1 1.3-.4.5-.7 1-1.1 1.6-.4.6-.7 1.3-1 2s-.7 1.5-1 2.4-.6 1.8-.9 2.8c-.3 1-.6 2-.9 3.2-.3 1.1-.6 2.3-.8 3.7-.3 1.3-.5 2.7-.7 4.2-.2 1.5-.5 3.1-.7 4.8-.2 1.7-.4 3.5-.6 5.4-.2 1.9-.3 3.7-.4 5.4-.1 1.7-.2 3.3-.3 4.9-.1 1.5-.1 3-.1 4.3 0 1.4 0 2.6.1 3.8.1 1.2.2 2.3.3 3.4.1 1.1.2 2 .4 3 .2.9.3 1.8.5 2.6s.4 1.5.6 2.2c.2.7.5 1.3.8 1.9.3.6.6 1.1.9 1.6.3.5.6.9 1 1.2.3.4.7.7 1.1.9.4.3.8.5 1.2.7.4.2.8.4 1.2.5.4.1.8.3 1.3.4.4.1.9.2 1.3.2h1.3c.4 0 .9-.1 1.3-.1.4-.1.9-.2 1.3-.3.4-.1.8-.3 1.3-.5.4-.2.8-.4 1.2-.7.4-.3.8-.7 1.2-1.1.4-.4.8-.9 1.1-1.4.4-.5.7-1.1 1.1-1.7.4-.6.7-1.3 1-2.1.3-.8.7-1.6 1-2.5s.6-1.8.9-2.9c.3-.9.6-2 .9-3.1&quot;/>
				<path class=&quot;lettersSide&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#3A7199&quot; d=&quot;M357.7 333.7l-11-1.6 7.9 4.5 11.8 1.7zM317.3 349.6l-3.6 23.3 5.4 7.7 3.8-25.1zM328.4 319.7c.1-.5.1-1 .2-1.5l.3-1.5c.1-.5.2-1.1.3-1.6.1-.5.2-1.1.3-1.7.1-.6.2-1.2.3-1.7.1-.6.2-1.2.3-1.7l.3-1.8c.1-.6.2-1.2.4-1.8.1-.6.2-1.2.4-1.8.1-.6.2-1.2.4-1.8.1-.6.2-1.2.4-1.7.1-.6.2-1.2.4-1.7s.2-1.1.3-1.7c.1-.5.2-1.1.3-1.6l.3-1.5.3-1.5-6.5-1.4c-.1.4-.2.9-.3 1.3-.1.5-.2.9-.3 1.4l-.3 1.5c-.1.5-.2 1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6-.1.5-.2 1.1-.3 1.6l-.3 1.5c-.1.5-.2 1-.2 1.4-.1.5-.1.9-.2 1.4l-1.8 11.9-17.8-2.6 4.6 4.1 19.1 2.8 1.8-12.7zM320.8 267l-45.1 56.4-3 19.9 2.3 5.5 3.2-21.5 48.6-60.8z&quot;/>
				<path class=&quot;lettersFront&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#67B1E0&quot; d=&quot;M354.6 336.6l11.9 1.7-3.6 22.9-11.9-1.7-3.9 24.9-28-3.8 3.8-25-48-6.8 3.2-21.4 48.6-60.8 37.8 5.9-9.9 64.1zm-22.3-37.1c.1-.6.2-1.1.3-1.7.1-.5.2-1.1.3-1.6l.3-1.5.3-1.5-.7-.1-1.5 2.4-1.5 2.4-1.5 2.4c-.5.8-1 1.6-1.5 2.3-.5.8-1 1.6-1.5 2.3s-1 1.6-1.6 2.4c-.5.8-1.1 1.6-1.6 2.4-.5.8-1.1 1.6-1.6 2.4l-13.2 17.7 19.1 2.8 2-12.8c.1-.5.1-1 .2-1.5l.3-1.5c.1-.5.2-1.1.3-1.6.1-.5.2-1.1.3-1.7s.2-1.2.3-1.7c.1-.6.2-1.2.3-1.7l.3-1.8c.1-.6.2-1.2.4-1.8.1-.6.2-1.2.4-1.8.1-.6.2-1.2.4-1.8.1-.6.2-1.2.4-1.7 0-.6.1-1.2.3-1.7&quot;/>
			-->
			<g opacity=&quot;.2&quot; id=&quot;lettersShadow&quot;>
				<path d=&quot;M233.2 408.6l30.6 46.3-51.9 46 22.2 25.8 125.2 37.6 45.1-18.7-45.5-51.9 12.1-18.1-25.3-30.8-26.2-6.5-27.5-37.7z&quot;/>
				<path d=&quot;M328.9 467.6S391.4 601.5 505 558c88.3-33.8-69.2-108.2-85-116.5-15.8-8.3-76.8 6.9-76.8 6.9l-14.3 19.2z&quot;/>
				<path d=&quot;M474.2 515.1L505 558l-20.6 50.6 22.3 25.8 162.5 27 48.4-24.3-60.2-42.7 19.1-12.1-38.4-37.4-32.3.6-72-30.3z&quot;/>
			</g>
			<path class=&quot;lettersSide&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#3A7199&quot; d=&quot;M269.2 316l-17.9 6 15.4.8 19.2-6.4zM220.3 371l12.4 37.8 14 7.4-13.3-40.7zM214.4 317.4c-.3-.8-.5-1.6-.8-2.4-.3-.8-.5-1.7-.8-2.5-.3-.9-.5-1.7-.8-2.6-.3-.9-.6-1.8-.8-2.8-.3-.9-.6-1.9-.8-2.9-.3-1-.6-1.9-.8-2.9-.3-1-.5-1.9-.8-2.9-.3-1-.5-1.9-.8-2.9-.3-1-.5-2-.8-2.9-.3-1-.5-1.9-.8-2.9-.3-1-.5-1.9-.8-2.9-.3-1-.5-1.9-.8-2.9-.3-1-.5-1.9-.8-2.8-.2-.9-.5-1.8-.7-2.7-.2-.9-.5-1.7-.7-2.6l-.6-2.4-10.9 2.8c.2.7.4 1.5.6 2.3l.6 2.4c.2.8.4 1.6.7 2.5s.5 1.7.7 2.6c.2.9.5 1.8.7 2.7.2.9.5 1.8.7 2.7.2.9.5 1.8.7 2.7.2.9.5 1.8.7 2.7.2.9.5 1.8.8 2.7.3.9.5 1.8.8 2.7.3.9.5 1.8.8 2.7.3.9.5 1.8.8 2.7.3.9.5 1.7.8 2.6.3.8.5 1.7.8 2.5.2.8.5 1.6.7 2.3.2.8.5 1.5.7 2.2l6.3 19.3-28.8 9.7 10 2.6 31-10.4-6.8-21zM162.6 243.7l-25 119.5 10.7 32.2 7.6 6.5-11.5-34.7 26.9-128.8z&quot;/>
			<path class=&quot;lettersFront&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#67B1E0&quot; d=&quot;M266.7 322.8l19.2-6.5 12.1 37.2-19.2 6.5 13.2 40.6-45.2 15.6-13.3-40.7-77.5 26.4-11.5-34.8 26.9-128.8 61.5-19.9 33.8 104.4zm-62-38.9c-.3-1-.5-1.9-.8-2.8-.2-.9-.5-1.8-.7-2.7-.2-.9-.5-1.7-.7-2.6l-.6-2.4-1.1.4c-.1 1.6-.2 3.2-.4 4.8-.1 1.6-.3 3.2-.4 4.7-.1 1.6-.3 3.1-.5 4.7s-.3 3.1-.5 4.7-.4 3.1-.5 4.7c-.2 1.6-.4 3.2-.6 4.7l-.6 4.8-.6 4.8-6.4 36.8 31-10.4-6.8-20.8c-.3-.8-.5-1.6-.8-2.4-.3-.8-.5-1.7-.8-2.5-.3-.9-.5-1.7-.8-2.6-.3-.9-.6-1.8-.8-2.8-.3-.9-.6-1.9-.8-2.9-.3-1-.6-1.9-.8-2.9-.3-1-.6-1.9-.8-2.9-.3-1-.5-1.9-.8-2.9-.3-1-.5-2-.8-2.9-.3-1-.5-1.9-.8-2.9-.3-1-.5-1.9-.8-2.9-.5-.9-.8-1.9-1-2.8&quot;/>
			<path class=&quot;lettersSide&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#3A7199&quot; d=&quot;M390 347.5c-.1-1.9-.3-3.8-.5-5.5-.2-1.7-.4-3.4-.7-4.9-.3-1.5-.5-2.9-.9-4.3-.3-1.3-.7-2.5-1.1-3.6-.4-1.1-.8-2.1-1.3-3.1-.5-.9-.9-1.8-1.5-2.5-.5-.8-1.1-1.4-1.7-2-.6-.6-1.2-1.1-1.8-1.5-.6-.4-1.3-.7-2-1.1-.7-.3-1.4-.6-2-.8l-2.1-.6c-.7-.2-1.5-.3-2.2-.3h-14.3 1.6l2.1.3c.7.1 1.3.3 2 .5.6.2 1.3.5 1.9.8.6.3 1.2.6 1.8 1 .6.4 1.2.8 1.7 1.3s1.1 1.1 1.5 1.8c.5.7.9 1.5 1.4 2.3.4.9.8 1.8 1.2 2.8.4 1 .7 2.2 1 3.4.3 1.2.6 2.5.8 4 .2 1.4.4 2.9.6 4.5.2 1.6.3 3.3.4 5.1.1 1.8.2 3.8.2 5.8 0 2.1 0 4.3-.1 6.7-.1 2.4-.2 4.9-.4 7.6-.2 2.7-.4 5.5-.7 8.4-.3 2.9-.6 5.7-.9 8.4-.3 2.7-.7 5.2-1 7.5-.4 2.4-.8 4.6-1.2 6.7-.4 2.1-.8 4-1.3 5.8-.5 1.8-.9 3.5-1.4 5.1s-1 3.1-1.5 4.5-1 2.7-1.6 3.9c-.5 1.2-1.1 2.3-1.6 3.3-.3.5-.5.9-.8 1.4-.1.1-.2.3-.3.4-.2.3-.4.6-.6.8-.1.2-.2.3-.3.5-.2.2-.3.5-.5.7-.1.1-.2.3-.4.4-.2.2-.3.4-.5.6l-.4.4-.5.5c-.1.1-.3.2-.4.3-.2.1-.3.3-.5.4-.1.1-.3.2-.4.3-.2.1-.3.2-.5.3-.1.1-.3.2-.4.2-.3.2-.5.3-.8.4-.6.3-1.3.5-2 .7h-.1c-.6.2-1.3.4-1.9.5h-.1c-.6.1-1.3.2-1.9.2H349c-.7-.1-1.3-.2-2-.3h-.1c-.6-.1-1.3-.3-1.9-.5h-.1c-.6-.2-1.2-.5-1.8-.8-.6-.3-1.2-.7-1.8-1.1 0 0-.1 0-.1-.1 0 0-.1 0-.1-.1 0 0-.1 0-.1-.1 0 0-.1 0-.1-.1l11 8.3.1.1.1.1s.1 0 .1.1c0 0 .1 0 .1.1.3.2.6.4 1 .6.3.2.6.4 1 .5.3.2.6.3.9.4.3.1.7.3 1 .4h.2l.9.3c.3.1.7.2 1.1.3h.2c.3.1.6.1.9.2.4.1.7.1 1.1.1H363c.3 0 .5 0 .8-.1.3 0 .5-.1.8-.1.1 0 .2 0 .3-.1h.2c.1 0 .2 0 .3-.1.3-.1.5-.1.8-.2.3-.1.5-.1.8-.2.1 0 .1 0 .2-.1.1 0 .2-.1.3-.1.2-.1.4-.1.6-.2.2-.1.4-.2.6-.2l.6-.3c.1 0 .1-.1.2-.1s.1-.1.2-.1.1-.1.2-.1.1-.1.2-.1.1-.1.2-.1c.1-.1.3-.2.4-.3.2-.1.4-.2.6-.4.1 0 .1-.1.2-.1.1-.1.2-.1.2-.2.1-.1.2-.1.3-.2.1-.1.2-.2.3-.2.1-.1.3-.2.4-.4.2-.2.4-.3.5-.5l.3-.3c.1-.1.1-.1.1-.2l.2-.2c.1-.1.2-.3.4-.4.1-.2.3-.3.4-.5.2-.2.4-.5.6-.7.1-.1.2-.2.3-.4 0 0 0-.1.1-.1l.1-.1c.2-.2.3-.5.5-.8.1-.2.2-.3.3-.5l.9-1.5c.6-1.1 1.2-2.2 1.8-3.5.6-1.3 1.1-2.7 1.7-4.2.5-1.5 1.1-3.1 1.6-4.8.5-1.7 1-3.5 1.5-5.5.5-1.9 1-4 1.4-6.3s.9-4.6 1.3-7.2c.4-2.6.8-5.3 1.1-8.1.4-2.9.7-5.9 1-9 .3-3.2.6-6.2.8-9 .2-2.9.3-5.6.4-8.1.1-2.6.1-5 .1-7.2.1-1.6 0-3.7-.1-5.6zM325.4 293.8c.7-.6 1.3-1.2 2-1.8.2-.2.4-.4.6-.5.8-.7 1.7-1.4 2.6-2.1.2-.1.4-.3.6-.4.7-.5 1.4-1.1 2.2-1.6.3-.2.5-.4.8-.5.8-.5 1.7-1.1 2.5-1.6.1-.1.2-.1.3-.2 1-.6 1.9-1.1 2.9-1.6.2-.1.3-.2.5-.3.9-.5 1.9-.9 2.9-1.3.1-.1.3-.1.4-.2 1-.4 2-.9 3.1-1.2.4-.2.9-.3 1.3-.5.1 0 .2-.1.4-.1.4-.1.8-.3 1.2-.4.1 0 .1 0 .2-.1.5-.1 1-.3 1.5-.4h.1c.5-.1 1-.3 1.5-.4l-11.1 2.7c-.1 0-.3.1-.4.1-.1 0-.3.1-.4.1-.1 0-.3.1-.4.1h-.1c-.1 0-.2.1-.3.1-.3.1-.7.2-1 .3h-.1-.1c-.2.1-.5.1-.7.2-.1 0-.2.1-.4.1-.1 0-.1 0-.2.1-.1 0-.1 0-.2.1-.1 0-.2.1-.3.1-.3.1-.6.2-1 .3-.6.2-1.2.4-1.8.7-.4.2-.7.3-1.1.5-.1.1-.2.1-.4.2-.1 0-.2.1-.3.1-.6.3-1.1.5-1.7.8-.2.1-.5.2-.7.4-.1 0-.2.1-.3.1-.1 0-.1.1-.2.1-.2.1-.3.2-.5.3-.7.4-1.5.8-2.2 1.2-.1.1-.2.1-.3.2-.6.4-1.2.7-1.8 1.1-.2.1-.4.3-.6.4-.1.1-.2.1-.3.2-.1.1-.3.2-.4.3-.7.5-1.3.9-2 1.4-.2.1-.4.3-.5.4-.1.1-.1.1-.2.1-.7.6-1.5 1.2-2.2 1.8-.1 0-.1.1-.2.1-.1.1-.3.2-.4.4-.4.3-.7.6-1.1 1-.3.2-.5.5-.8.7-.2.2-.4.4-.7.6-.8.7-1.5 1.5-2.3 2.3-1.7 1.8-3.2 3.7-4.8 5.7-1.5 2-3 4.2-4.3 6.5-1.4 2.3-2.7 4.7-3.9 7.3-1.2 2.6-2.4 5.3-3.4 8.1-1.1 2.8-2.1 5.8-3 8.9-.9 3.1-1.7 6.3-2.4 9.6s-1.3 6.8-1.9 10.4c-.5 3.6-1 7.3-1.3 11.1-.4 3.8-.6 7.5-.7 11.2-.1 3.6-.2 7.1-.1 10.5.1 3.4.3 6.7.6 9.9s.7 6.3 1.3 9.3c.5 3 1.2 5.9 1.9 8.6.7 2.8 1.5 5.4 2.4 8 .9 2.5 1.9 5 3 7.3s2.3 4.5 3.6 6.6c.4.7.9 1.4 1.3 2.1.4.7.9 1.3 1.4 2s.9 1.3 1.4 1.9l1.5 1.8 8.3 9.9c-.5-.6-1.1-1.3-1.6-2s-1-1.3-1.5-2l-1.5-2.1c-.5-.7-1-1.5-1.4-2.2-1.4-2.3-2.7-4.6-3.9-7.1-1.2-2.5-2.3-5.1-3.2-7.8-1-2.7-1.9-5.6-2.6-8.6-.8-3-1.4-6.1-2-9.3-.6-3.2-1-6.5-1.3-10-.3-3.4-.5-7-.6-10.7-.1-3.7-.1-7.5.1-11.3.1-3.9.4-7.9.8-12s.9-8.1 1.4-12c.6-3.9 1.3-7.6 2-11.2.8-3.6 1.6-7 2.6-10.4 1-3.3 2-6.5 3.2-9.6 1.2-3.1 2.4-6 3.7-8.7 1.3-2.8 2.7-5.4 4.2-7.9s3-4.8 4.7-7c1.6-2.2 3.3-4.2 5.1-6.1.8-.9 1.6-1.7 2.4-2.5.2-.3.4-.5.6-.7z&quot;/>
			<path class=&quot;lettersFront&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#67B1E0&quot; d=&quot;M436.1 339.3c.5 3.1 1 6.4 1.3 9.8.3 3.4.5 6.9.6 10.4.1 3.6 0 7.3-.1 11.1-.2 3.8-.4 7.8-.8 11.8-.4 4.1-.9 8-1.5 11.8-.6 3.8-1.3 7.5-2 11-.8 3.5-1.6 6.9-2.6 10.2-1 3.3-2 6.4-3.1 9.5-1.1 3-2.4 5.9-3.6 8.7-1.3 2.8-2.7 5.4-4.1 7.9-1.4 2.5-3 4.9-4.6 7.1-1.6 2.2-3.3 4.3-5 6.3-1.8 2-3.6 3.8-5.5 5.5-1.9 1.7-3.8 3.3-5.8 4.7-2 1.4-4.1 2.7-6.2 3.9-2.1 1.2-4.3 2.2-6.6 3.1-2.3.9-4.6 1.7-6.9 2.3-2.3.6-4.7 1.1-7.2 1.5-2.4.3-4.9.6-7.4.6-2.5.1-5.1 0-7.7-.2-2.6-.2-5.2-.5-7.7-1s-4.9-1.1-7.3-1.8c-2.4-.7-4.6-1.6-6.8-2.6s-4.3-2.1-6.4-3.4c-2.1-1.3-4-2.6-5.9-4.1-1.9-1.5-3.7-3.1-5.4-4.9-1.7-1.8-3.4-3.6-4.9-5.6-1.6-2-3-4.1-4.4-6.4-1.4-2.3-2.7-4.6-3.9-7.1-1.2-2.5-2.3-5.1-3.2-7.8-1-2.7-1.9-5.6-2.6-8.6-.8-3-1.4-6.1-2-9.3-.6-3.2-1-6.5-1.3-10-.3-3.4-.5-7-.6-10.7-.1-3.7-.1-7.5.1-11.3.1-3.9.4-7.9.8-12s.9-8.1 1.4-12c.6-3.9 1.3-7.6 2-11.2.8-3.6 1.6-7 2.6-10.4 1-3.3 2-6.5 3.2-9.6 1.2-3.1 2.4-6 3.7-8.7 1.3-2.8 2.7-5.4 4.2-7.9s3-4.8 4.7-7c1.6-2.2 3.3-4.2 5.1-6.1 1.8-1.9 3.6-3.7 5.5-5.3 1.9-1.6 3.9-3.1 5.9-4.5 2-1.4 4.1-2.6 6.3-3.7 2.1-1.1 4.4-2.1 6.6-2.9 2.3-.8 4.6-1.5 6.9-2.1 2.4-.5 4.8-1 7.2-1.2 2.5-.3 5-.4 7.5-.4 2.6 0 5.2.1 7.8.4 2.6.3 5.1.7 7.6 1.2s4.9 1.2 7.2 1.9c2.3.8 4.6 1.6 6.8 2.7 2.2 1 4.3 2.1 6.4 3.4 2.1 1.3 4 2.6 5.9 4.1 1.9 1.5 3.7 3.1 5.4 4.8 1.7 1.7 3.3 3.6 4.9 5.6 1.5 2 3 4.1 4.3 6.3 1.4 2.2 2.6 4.6 3.8 7 1.2 2.4 2.2 5 3.2 7.7.9 2.7 1.8 5.5 2.5 8.4.5 3 1.1 6 1.7 9.1zm-52 69.5c.5-1.9 1-4 1.4-6.3.4-2.2.9-4.6 1.3-7.2.4-2.6.8-5.3 1.1-8.1.4-2.9.7-5.9 1-9 .3-3.2.6-6.2.8-9 .2-2.9.3-5.6.4-8.1.1-2.6.1-5 .1-7.2 0-2.3-.1-4.3-.2-6.3-.1-1.9-.3-3.8-.5-5.5-.2-1.7-.4-3.4-.7-4.9-.3-1.5-.5-2.9-.9-4.3-.3-1.3-.7-2.5-1.1-3.6-.4-1.1-.8-2.1-1.3-3.1-.5-.9-.9-1.8-1.5-2.5-.5-.8-1.1-1.4-1.7-2-.6-.6-1.2-1.1-1.8-1.5-.6-.4-1.3-.7-2-1.1-.7-.3-1.4-.6-2-.8l-2.1-.6c-.7-.2-1.5-.3-2.2-.3-.8-.1-1.5-.1-2.2-.1-.7 0-1.5.1-2.2.2-.7.1-1.5.2-2.2.4-.7.2-1.4.4-2.1.7-.7.3-1.4.6-2.1 1.1-.7.5-1.4 1-2 1.6-.7.6-1.3 1.4-1.9 2.2-.6.8-1.2 1.7-1.8 2.8-.6 1-1.2 2.1-1.8 3.4-.6 1.2-1.1 2.6-1.7 4-.5 1.5-1.1 3-1.6 4.7-.5 1.7-1 3.5-1.5 5.4-.5 1.9-.9 4-1.4 6.2-.4 2.2-.9 4.6-1.2 7.1-.4 2.5-.8 5.2-1.1 8.1-.3 2.9-.7 5.9-1 9.1-.3 3.2-.6 6.2-.8 9.1-.2 2.9-.3 5.6-.4 8.2-.1 2.6-.1 5-.1 7.3s.1 4.4.2 6.4.3 3.9.4 5.7c.2 1.8.4 3.5.7 5 .3 1.6.5 3 .9 4.4.3 1.4.7 2.6 1.1 3.8.4 1.2.8 2.2 1.3 3.2s.9 1.9 1.5 2.6c.5.8 1.1 1.5 1.6 2.1.6.6 1.2 1.1 1.8 1.6.6.4 1.3.8 2 1.2.7.3 1.3.6 2 .9l2.1.6c.7.2 1.5.3 2.2.3.7.1 1.5.1 2.2 0 .7 0 1.5-.1 2.2-.2.7-.1 1.5-.3 2.2-.5.7-.2 1.4-.5 2.1-.8.7-.3 1.4-.7 2.1-1.2.7-.5 1.4-1.1 2-1.8.7-.7 1.3-1.5 1.9-2.4.6-.9 1.2-1.8 1.8-2.9.6-1.1 1.2-2.2 1.8-3.5.6-1.3 1.1-2.7 1.7-4.2.5-1.5 1.1-3.1 1.6-4.8.6-1.9 1.1-3.7 1.6-5.6&quot;/>
			<path class=&quot;lettersSide&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#3A7199&quot; d=&quot;M548.6 448.8l-18.7-2.8 13.4 7.7 20.1 2.9zM480.2 475.8l-6 39.3 9.2 13 6.4-42.4zM499.1 425.2c.1-.8.3-1.6.4-2.5.1-.8.3-1.7.4-2.6.1-.9.3-1.8.5-2.7.2-.9.3-1.9.5-2.9s.4-1.9.5-2.9c.2-1 .4-2 .6-2.9l.6-3 .6-3 .6-3 .6-3c.2-1 .4-2 .6-2.9.2-1 .4-2 .6-2.9.2-1 .4-1.9.6-2.8l.6-2.7c.2-.9.4-1.7.6-2.6.2-.8.4-1.7.5-2.5l-10.9-2.4c-.2.7-.3 1.5-.5 2.3-.2.8-.3 1.6-.5 2.4-.2.8-.3 1.7-.5 2.5-.2.9-.4 1.7-.5 2.6l-.6 2.7-.6 2.7-.6 2.7c-.2.9-.4 1.8-.6 2.8-.2.9-.4 1.8-.6 2.8-.2.9-.4 1.8-.5 2.8-.2.9-.3 1.8-.5 2.7-.2.9-.3 1.8-.5 2.7-.2.9-.3 1.8-.5 2.6-.1.9-.3 1.7-.4 2.5-.1.8-.3 1.6-.4 2.4-.1.8-.2 1.5-.4 2.3l-3.1 20.1-30-4.4 7.8 6.9 32.3 4.7 3.3-21.5zM486.2 336.1l-76.3 95.3-5 33.7 3.8 9.2 5.5-36.2 82.1-102.8z&quot;/>
			<path class=&quot;lettersFront&quot; stroke=&quot;#265D85&quot; stroke-linecap=&quot;round&quot; stroke-linejoin=&quot;round&quot; stroke-miterlimit=&quot;10&quot; stroke-width=&quot;2.5&quot; fill=&quot;#67B1E0&quot; d=&quot;M543.3 453.7l20.1 2.9-6 38.6-20-2.8-6.5 42.1-47.4-6.5 6.5-42.3-81.1-11.4 5.4-36.2 82.2-102.8 63.8 9.9-17 108.5zm-37.7-62.8c.2-1 .4-1.9.6-2.8l.6-2.7c.2-.9.4-1.7.6-2.6.2-.8.4-1.7.5-2.5l-1.2-.2c-.8 1.4-1.6 2.7-2.5 4.1s-1.7 2.7-2.5 4c-.8 1.3-1.7 2.7-2.5 4-.9 1.3-1.7 2.6-2.6 4-.9 1.3-1.7 2.6-2.6 3.9-.9 1.3-1.8 2.6-2.7 4s-1.8 2.7-2.7 4-1.8 2.7-2.7 4L463.6 442l32.3 4.7 3.3-21.6c.1-.8.3-1.6.4-2.5.1-.8.3-1.7.4-2.6.1-.9.3-1.8.5-2.7.2-.9.3-1.9.5-2.9s.4-1.9.5-2.9c.2-1 .4-2 .6-2.9l.6-3 .6-3 .6-3 .6-3c.2-1 .4-2 .6-2.9.1-.8.3-1.8.5-2.8&quot;/>
		</g>
	</svg>
	<div class=&quot;content&quot;>
		<h3>Bạn chưa được cấp quyền truy cập vào trang này</h3>
		<p>Vui lòng liên hệ quản trị viên để được cấp quyền nhé ^^</p>
	</div>
	<script src=&quot;https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js&quot;></script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js'></script>
	<script id=&quot;rendered-js&quot; >
		var
		yetiTL,chatterTL,
		furLightColor = &quot;#FFF&quot;,
		furDarkColor = &quot;#67b1e0&quot;,
		skinLightColor = &quot;#ddf1fa&quot;,
		skinDarkColor = &quot;#88c9f2&quot;,
		lettersSideLight = &quot;#3A7199&quot;,
		lettersSideDark = &quot;#051d2c&quot;,
		lettersFrontLight = &quot;#67B1E0&quot;,
		lettersFrontDark = &quot;#051d2c&quot;,
		lettersStrokeLight = &quot;#265D85&quot;,
		lettersStrokeDark = &quot;#031219&quot;,
		mouthShape1 = &quot;M149 115.7c-4.6 3.7-6.6 9.8-5 15.6.1.5.3 1.1.5 1.6.6 1.5 2.4 2.3 3.9 1.7l11.2-4.4 11.2-4.4c1.5-.6 2.3-2.4 1.7-3.9-.2-.5-.4-1-.7-1.5-2.8-5.2-8.4-8.3-14.1-7.9-3.7.2-5.9 1.1-8.7 3.2z&quot;,
		mouthShape2 = &quot;M161.2 118.9c0 2.2-1.8 4-4 4s-4-1.8-4-4c0-1 .4-2 1.1-2.7.7-.8 1.8-1.3 2.9-1.3 2.2 0 4 1.7 4 4z&quot;,
		mouthShape3 = &quot;M150.2 118.3c-4.6 3.7-7.5 6.4-6.3 12.3.1.5.1.6.3 1.1.6 1.5 2.4 2.3 3.9 1.7 0 0 7.9-4.3 10.7-5.5s11.6-3.3 11.6-3.3c1.5-.6 2.3-2.4 1.7-3.9-.2-.5-.2-.6-.4-1.1-2.8-5.2-7.1-4.9-12.9-4.6-3.7.4-6.3 1.5-8.6 3.3z&quot;,
		mouthShape4 = &quot;M149.2 116.7c-4.6 3.7-6.7 8.8-5.2 14.6.1.3.1.5.2.8.6 1.5 2.4 2.3 3.9 1.7l11.2-4.4 11.2-4.4c1.5-.6 2.3-2.4 1.7-3.9-.1-.3-.2-.5-.4-.7-2.8-5.2-8.2-7.2-14-6.9-3.6.2-5.9 1.1-8.6 3.2z&quot;;


		chatterTL = new TimelineMax({ paused: true, repeat: -1, yoyo: true });
		chatterTL.
		to(['#mouthBG', '#mouthPath', '#mouthOutline'], .1, { morphSVG: mouthShape4 }, &quot;0&quot;)
		//.to('#armR', .1, {x: 2, ease: Linear.easeNone}, &quot;0&quot;)
		.to('#chin', .1, { y: 1.5 }, &quot;0&quot;);


		yetiTL = new TimelineMax({ paused: true, repeat: -1, repeatDelay: 0, delay: 0 });
		yetiTL.
		addCallback(function () {
		chatterTL.play();
	}, &quot;0&quot;).

	to(['#armL', '#flashlightFront'], .075, { x: 7 }, &quot;2.5&quot;).
	to(['#armL', '#flashlightFront'], .075, { x: 0 }, &quot;2.575&quot;).
	to(['#armL', '#flashlightFront'], .075, { x: 7 }, &quot;2.65&quot;).
	to(['#armL', '#flashlightFront'], .075, { x: 0 }, &quot;2.725&quot;).
	to(['#armL', '#flashlightFront'], .075, { x: 7 }, &quot;2.8&quot;).
	to(['#armL', '#flashlightFront'], .075, { x: 0 }, &quot;2.875&quot;).

	addCallback(goLight, &quot;3.2&quot;).
	addCallback(goDark, &quot;3.3&quot;).
	addCallback(goLight, &quot;3.4&quot;).

	addCallback(function () {
	chatterTL.pause();
	TweenMax.to(['#mouthBG', '#mouthPath', '#mouthOutline'], .1, { morphSVG: mouthShape1 }, &quot;0&quot;);
}, &quot;3.2&quot;).

to(['#mouthBG', '#mouthPath', '#mouthOutline'], .25, { morphSVG: mouthShape2 }, &quot;5&quot;).
to('#tooth1', .1, { y: -5 }, &quot;5&quot;).
to('#armR', .5, { x: 10, y: 30, rotation: 10, transformOrigin: &quot;bottom center&quot;, ease: Quad.easeOut }, &quot;4&quot;).
to(['#eyeL', '#eyeR'], .25, { scaleX: 1.4, scaleY: 1.4, transformOrigin: &quot;center center&quot; }, &quot;5&quot;).

addCallback(goDark, &quot;8&quot;).
addCallback(goLight, &quot;8.1&quot;).
addCallback(goDark, &quot;8.3&quot;).
addCallback(goLight, &quot;8.4&quot;).
addCallback(goDark, &quot;8.6&quot;).

to(['#mouthBG', '#mouthPath', '#mouthOutline'], .25, { morphSVG: mouthShape1 }, &quot;9&quot;).
to('#tooth1', .1, { y: 0 }, &quot;9&quot;).
to('#armR', .5, { x: 0, y: 0, rotation: 0, transformOrigin: &quot;bottom center&quot;, ease: Quad.easeOut }, &quot;9&quot;).
to(['#eyeL', '#eyeR'], .25, { scaleX: 1, scaleY: 1, transformOrigin: &quot;center center&quot; }, &quot;9&quot;).
addCallback(function () {
chatterTL.play();
}, &quot;9.25&quot;).

to(['#armL', '#flashlightFront'], .075, { x: 7 }, &quot;11.5&quot;).
to(['#armL', '#flashlightFront'], .075, { x: 0 }, &quot;11.575&quot;).
to(['#armL', '#flashlightFront'], .075, { x: 7 }, &quot;11.65&quot;).
to(['#armL', '#flashlightFront'], .075, { x: 0 }, &quot;11.725&quot;).
to(['#armL', '#flashlightFront'], .075, { x: 7 }, &quot;11.8&quot;).
to(['#armL', '#flashlightFront'], .075, { x: 0 }, &quot;11.875&quot;);



function goDark() {
TweenMax.set('#light', { visibility: &quot;hidden&quot; });

TweenMax.set('.lettersSide', { fill: lettersSideDark, stroke: lettersStrokeDark });
TweenMax.set('.lettersFront', { fill: lettersFrontDark, stroke: lettersStrokeDark });
TweenMax.set('#lettersShadow', { opacity: .05 });

TweenMax.set('.hlFur', { fill: furDarkColor });
TweenMax.set('.hlSkin', { fill: skinDarkColor });
}

function goLight() {
TweenMax.set('#light', { visibility: &quot;visible&quot; });

TweenMax.set('.lettersSide', { fill: lettersSideLight, stroke: lettersStrokeLight });
TweenMax.set('.lettersFront', { fill: lettersFrontLight, stroke: lettersStrokeLight });
TweenMax.set('#lettersShadow', { opacity: .2 });

TweenMax.set('.hlFur', { fill: furLightColor });
TweenMax.set('.hlSkin', { fill: skinLightColor });
}

goDark();
yetiTL.play();
//# sourceURL=pen.js
</script>



</body>

</html>

"
sandbox="allow-downloads allow-forms allow-modals allow-pointer-lock allow-popups allow-presentation  allow-scripts allow-top-navigation-by-user-activation" allow="accelerometer; camera; encrypted-media; geolocation; gyroscope; microphone; midi; clipboard-read; clipboard-write" allowTransparency="true"
allowpaymentrequest="true" allowfullscreen="true" class="result-iframe">
</iframe>

</div>
</body>
</html>
