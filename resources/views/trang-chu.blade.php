@extends('master-layout')
@section('content')
	<section id="home-wrap">
		<div class="container">
			<div class="row">
				<div class="banner-area">
					<h3>KHU NGHỈ DƯỠNG CAO CẤP LDP</h3>
					<h1>LDP HỒ TÂY</h1>
					<p>Mô tả thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm dịch vụ của bạn.</p>
					<div class="btn btn-default book-room"><a href="#">book chỗ ngay!</a></div>
				</div> <!-- end banner-area -->
				<div style="clear: both;"></div>
			</div>
		</div>
	</section>
	<section class="box-1">
		<div class="container">
			<div class="row">
				<div class="text-center" style="width: 100%;">
					<div class="title-head">
						<h3 class="text-uppercase">KHU CĂN HỘ KHÁCH SẠN LDP</h3>
						<p>Định hình một phong cách sống an nhiên, vương giả hòa mình cùng thiên nhiên.</p>
					</div>
					<div class="content">
						<p>Mô tả thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm dịch vụ, giúp người xem dễ dàng tìm thấy nội dung của bạn trong kết quả tìm kiếm. Những mô tả được viết tốt kèm theo các từ khóa phù hợp có thể tăng lượt xem vì chúng giúp landingpage của bạn hiển thị tốt trong kết quả tìm kiếm.</p>	
						<p>Mô tả thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm dịch vụ, giúp người xem dễ dàng tìm thấy nội dung của bạn trong kết quả tìm kiếm</p>	
					</div>
	
				</div>

			</div>
		</div>
	</section>
	<section class="box-image">
		<div class="container">
			<div class="row">
				
					<div class="owl-carousel owl-theme">
						<div class="item">
							<img src="{{ asset('images/bds-1.jpg') }}" alt="" class="img-fluid">
						</div>
						<div class="item">
							<img src="{{ asset('images/bds-2.jpg') }}" alt="" class="img-fluid">
						</div>
						<div class="item">
							<img src="{{ asset('images/bds-3.jpg') }}" alt="" class="img-fluid">
						</div>
					</div>
				
			</div>
		</div>
	</section> <!-- end box-image -->
	<section class="box-contact">
		<div class="container">
			<div class="row">
				<div class="text-center" style="width: 100%;">
					<i class="far fa-envelope"></i>
					<p>Bạn cần đội ngũ tư vấn từ chúng tôi</p>
					<h3>Liên hệ ngay để được nhận ưu đãi</h3>
					<div class="form">
						<p>Điền nhanh thông tin của bạn dưới đây</p>
						<form action="">
							<input type="email" name="" class="form-control" placeholder="Nhập Email">
							<div class="btn btn-success">GỬI LIÊN HỆ CỦA BẠN</div>
						</form>
						
						<p>Get 50,000 mentions every month, free forever</p>
					</div>
				</div>
			</div>
	</div>
		
	</section> <!-- end box-contact -->
	<section class="box-map">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<img src="{{ asset('images/box-map.png') }}" alt="" class="img-fluid">
				</div>
				<div class="col-md-5">
					<h4 class="text-uppercase">sơ đồ mặt bằng</h4>
					<p>Mô tả chung về dự án, sản phẩm, dịch vụ của bạn</p>
					<div class="line"></div>
					<p style="font-size: 14px;">Mô tả thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm dịch vụ, giúp người xem dễ dàng tìm thấy nội dung của bạn trong kết quả tìm kiếm. Những mô tả được viết tốt kèm theo các từ khóa phù hợp có thể tăng lượt xem vì chúng giúp landingpage của bạn hiển thị tốt trong kết quả tìm kiếm.</p>
				</div>
			</div>
		</div>
	</section> <!-- end box-map -->
	<section class="box-bg-attch">
		
	</section>
	<section class="box-intro">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h3 class="text-uppercase">bể bơi ngoài trời</h3>
					<div class="line"></div>
					<p>Mô tả tóm tắt những thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm dịch vụ, giúp khách hàng dễ dàng tìm thấy sản phẩm/dịch vụ của bạn trong kết quả tìm kiếm. Những mô tả được viết tốt kèm theo các từ khóa phù hợp có thể tăng lượt xem vì chúng giúp landingpage của bạn có thể hiển thị tốt trong kết quả tìm kiếm.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="box-utilities">	
		<div class="row mr-0">			
			<div class="col-md-6 pd-left mr-0 pr-0">
				<h1>01</h1>
				<h4>Tiện ích xanh</h4>
				<span class="line1"></span>
				<p class="sub-title">Tiện ích xanh với 10 khu vườn độc đáo</p>
				<p class="content">Mô tả thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm dịch vụ, giúp người xem dễ dàng tìm thấy nội dung của bạn trong kết quả tìm kiếm. Những mô tả được viết tốt kèm theo các từ khóa phù hợp có thể tăng lượt xem vì chúng giúp landingpage của bạn hiển thị tốt trong kết quả tìm kiếm.</p>
			</div>
			<div class="col-md-6 pl-0 pr-0">
				<img src="{{ asset('images/tien-ich1.jpg') }}" alt="" class="img-fluid">
			</div>						
			<div class="col-md-6 pr-0">
				<img src="{{ asset('images/tien-ich2.jpg') }}" alt="" class="img-fluid" style="height: 63%;">
			</div>	
			<div class="col-md-6 pd-left">
				<h1>02</h1>
				<h4>Đẳng cấp dịch vụ</h4>
				<span class="line1"></span>
				<p class="sub-title">20 dịch vụ đạt tiêu chuẩn 5 sao</p>
				<p class="content">Mô tả thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm dịch vụ, giúp người xem dễ dàng tìm thấy nội dung của bạn trong kết quả tìm kiếm. Những mô tả được viết tốt kèm theo các từ khóa phù hợp có thể tăng lượt xem vì chúng giúp landingpage của bạn hiển thị tốt trong kết quả tìm kiếm.</p>
			</div>				
		</div>		
	</section>
	<section class="chinh-sach">
	<div class="container">
		<div class="row">
			<div class="text-center">
				<h2>CHÍNH SÁCH ƯU ĐÃI</h2>
				<p>Mô tả chung về điểm mạnh của Công ty/ Sản phẩm/ Dịch vụ</p>
				<div class="line"></div>
			</div>
			<div class="col-md-6"></div>
			<div class="col-md-6"></div>
			<div class="col-md-6"></div>
			<div class="col-md-6"></div>
		</div>
	</div>
		
	</section>
@endsection