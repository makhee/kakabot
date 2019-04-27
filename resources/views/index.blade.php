<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>makhee.im</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="{{ asset('js/ie/html5shiv.js') }}"></script><![endif]-->
		<link rel="stylesheet" href="{{ asset('css/main.css?23') }}" />
		<!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('css/ie9.css') }}" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('css/ie8.css') }}" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<div class="cycle-logo-wrapper">
						<img src="{{ asset('img/IMG_0002.JPG') }}" class="cycle-logo"/>
					</div>
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Sample</a></li>
							<li><a href="#two">Tech</a></li>
							<li><a href="#three">Talk</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>MAKHEE</h1>
							<p>권막히, MAKHEE 로 활동하고 있는 개발자입니다.<br/>
							개발을 좋아하는 서른남이에요! 아래는 간략하게 저를 소개할 수 있는 내용입니다.</p>
							<!-- <ul class="actions">
								<li><a href="#one" class="button scrolly">Learn more</a></li>
							</ul> -->
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="#" class="image"><img src="{{ asset('img/qr_todo.png') }}" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>TODO LIST</h2>
									<p>React TODO LIST</p>
									<ul class="actions">
										<li>
											<a href="{{ url('/todo') }}" class="button">PC로 확인하기</a>
											<h5 style="text-align:center; margin-top:5px;">QR코드를 이용해 모바일에서도 확인해 보세요!</h5>
										</li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="{{ asset('img/qr_Index.png') }}" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Sample Code 제목이 들어갈 자리</h2>
									<p>React 를 이용한 샘플코드 설명이 들어갈 자리</p>
									<ul class="actions">
										<li>
											<a href="{{ url('/') }}" class="button">작업중</a>
											<h5 style="text-align:center; margin-top:5px;">QR코드를 이용해 모바일에서도 확인해 보세요!</h5>
										</li>	
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="#" class="image"><img src="{{ asset('img/qr_Index.png') }}" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Sample Code 제목이 들어갈 자리</h2>
									<p>React 를 이용한 샘플코드 설명이 들어갈 자리</p>									
									<ul class="actions">
										<li>
											<a href="{{ url('/') }}" class="button">작업중</a>
											<h5 style="text-align:center; margin-top:5px;">QR코드를 이용해 모바일에서도 확인해 보세요!</h5>
										</li>	
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>보유 기술</h2>
							<!-- <p>사용 가능한 기술</p> -->
							<div class="features">
								<section>
									<span class="icon major fa-code"></span>
									<h3>PHP</h3>
									<p>CI, Laravel</p>
								</section>
								<section>
									<span class="icon major fa-code"></span>
									<h3>SCRIPT</h3>
									<p>Vanilla JS, Jquery, Vue JS, React JS</p>
								</section>
								<section>
									<span class="icon major fa-code"></span>
									<h3>SQL</h3>
									<p>약간의 조인!!!</p>
								</section>
								<section>
									<span class="icon major fa-cog"></span>
									<h3>인프라구축</h3>
									<p>AWS를 이용한 운영환경, Docker, Vagrant를 이용한 개발환경 세팅</p>
								</section>
								<section>
									<span class="icon major fa-css3"></span>
									<h3>CSS</h3>
									<p>반응형, 약간의 애니메이션!!!</p>
								</section>
								<section>
									<span class="icon major fa-photo"></span>
									<h3>DESIGN</h3>
									<p>약간의 포토샵!!!</p>
								</section>
							</div>
							<ul class="actions">
								<li><a href="{{ url('/generic') }}" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>소통해요!</h2>
							<p>소통을 원하시면 아래 내용을 작성하여 저에게 보내주세요.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#" onsubmit="return false">
										<div class="field half first">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="5"></textarea>
										</div>
										<ul class="actions">
											<li><a href="#" onClick="alert('준비중입니다.');" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>경기도 광주에서 지내고 있어요!</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">fzl7808777@gmail.com</a>
										</li>
										<!-- <li>
											<h3>Phone</h3>
											<span>(010) 2852-3976</span>
										</li> -->
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://github.com/makhee" target="blink" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>MAKHEE.IM All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('js/skel.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<!--[if lte IE 8]><script src="{{ asset('ie/respond.min.js') }}"></script><![endif]-->
			<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>