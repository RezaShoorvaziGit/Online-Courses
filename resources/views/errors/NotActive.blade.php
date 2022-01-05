<x-header title="عدم تایید" />
	<link type="text/css" rel="stylesheet" href="{{ asset("errors/css/style.css") }}" />

<body style="background-color: rgb(236, 232, 232)">
	
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>متاسفم‌</h1>
			</div>
			<h2>عدم تایید اطلاعات</h2>
			<p>مدیر مربوط به تایید اطلاعات کاربران هنوز اطلاعات شما را تایید نکرده است اگر بیش از دو روز کاری گذشته است به ما گزارش بدهید</p>
			<a href="{{ route('welcome') }}">گزارش میدهم</a>
		</div>
	</div>
</body>

<x-footer/>