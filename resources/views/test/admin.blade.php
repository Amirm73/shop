<!DOCTYPE html>
<html lang="fa">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="veiwport" content="width=device-width, initial-scale=1">
		<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ url('css/bootstrap-rtl.min.css') }}" rel="stylesheet">
		<link href="{{ url('css/admin.css') }}" rel="stylesheet">

	</head>

	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-md-2 sidebar">
					<ul class="nav nav-sidebar" id="menu">
						<li id="li_1">
							<a> <span class="fa fa-shopping-cart"></span> <span>محصولات</span> </a>
							<ul>
								<li>
									<a href="">مدیریت محصولات</a>
								</li>
								<li>
									<a href="">محصول جدید</a>
								</li>
								<li>
									<a href="">مدیریت دسته ها</a>
								</li>
								<li>
									<a href="">دسته جدید</a>
								</li>
							</ul>
						</li>

						<li id="li_2">
							<a> <span class="fa fa-list"></span> <span>سفارشات</span> </a>
							<ul>
								<li>
									<a href="">مدیریت سفارشات</a>
								</li>
								<li>
									<a href="">کدهای تخفیف</a>
								</li>
							</ul>
						</li>

						<li id="li_3">
							<a href=""> <span class="fa fa-comment"></span> <span></span> </a>
						</li>

						<li id="li_6">
							<a href=""> <span class="fa fa-area-chart"></span> <span>آمار سایت</span> </a>
						</li>

						<li id="li_7">
							<a href=""> <span class="fa fa-user"></span> <span>مدیریت کاربران</span> </a>
						</li>

						<li id="li_4">
							<a href=""> <span class="fa fa-cogs"></span> <span>تنظیمات</span> </a>
						</li>

						<li id="li_5">

						</li>

					</ul>
				</div>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main"></div>
		</div>
	</body>
</html>