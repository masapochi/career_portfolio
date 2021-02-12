<!DOCTYPE html>
<html lang="ja">

<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			background-color: #f1f1f1;
			color: #333;
		}

		.mail-wrap {
			width: 100%;
			max-width: 980px;
			background-color: #fff;
			padding: 5%;
			margin: 5% auto;
		}

		.logo {
			text-align: center;
			border-bottom: 1px solid #dcdcdc;
			padding-bottom: 2.5%;
			margin-bottom: 2.5%;
		}

		.logo a {
			text-decoration: none;
			color: #333;
		}

		.logo img {
			width: 48px;
			height: 48px;
			margin-right: 8px;
			vertical-align: middle;
		}

		.block {
			margin-bottom: 5%;
		}

		.large {
			font-size: 130%;
		}

		.bold {
			font-weight: bold;
		}

		backquote {
			display: block;
			padding: 2.5%;
			background-color: #f5f5f5;
			color: #666;
			width: 100%;
		}

		.footer {
			padding-top: 2.5%;
			border-top: 1px solid #dcdcdc;
		}

		.footer a {
			color: cadetblue;
		}

	</style>
</head>

<body>
	<div class="mail-wrap">
		<div class="logo">
			<a href="https://masapochi.me" target="_blank">
				<img src="{{ asset('icon.png') }}" alt="Masapochi.me">
				<span>Masapochi.me</span>
			</a>
		</div>

		<p class="bold large">Dear, {{ $data['name'] }}</p>

		<div class="block">
			<p>
				Thank you for your message!!<br>
				I will check it and reply to you soon.
			</p>
		</div>

		<div class="block">
			<p class="bold">Your Message :</p>
			<backquote>{{ $data['message'] }}</backquote>
		</div>

		<div class="block">
			<p>Yours truly,</p>

			<p>Masapochi</p>
		</div>

		<div class="footer">
			<p>WEB: <a href="https://masapochi.me" target="_blank">https://masapochi.me</a></p>
			<p>Twitter: <a href="https://twitter.com/__masapochi__" target="_blank">@@__masapochi__</a></p>
		</div>
	</div>
</body>

</html>
