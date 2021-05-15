@extends('admin.layout')

@section('content')
    
    <div class="container" id="vechungtoi">
        <div class="col-xs-12 col-sm-12 col-md-12" id="gioithieu">Về Chúng Tôi</div>
        <div id="clear"></div>
        <div class="col-xs-12 col-sm-12 col-md-12" id="what">SHIPPER TRÀ VINH là gì?</div>

        <div class="col-xs-12 col-sm-12 col-md-12" id="whatnoidung">
            <div class="col-xs-12 col-sm-6 col-md-4"><img width="320"src="{{ asset('img/011.png') }}"></div>
            <div class="col-xs-12 col-sm-6 col-md-8" style="text-align: justify; font-family: 'Times New Roman'">Chúng tôi là một dịch vụ vận chuyển hàng hóa, là trung gian giữa người mua hàng và nhà cung cấp. Chúng tôi hỗ trợ một số dịch vụ sau:
                <div>
                <div id="onetwothree" class="col-xs-12 col-sm-12 col-md-11 col-md-offset-1">
                    <img width="50" src="{{ asset('img/017.png') }}" >
                    Mua hàng theo yêu cầu (đồ ăn, thức uống,...) trong nội ô thành phố Trà Vinh và giao hàng tận nơi.
                    
                    
                    </div>
                <div id="onetwothree" class="col-xs-12 col-sm-12 col-md-11 col-md-offset-1">
                    <img width="50" src="{{ asset('img/016.png') }}" >
                    Hỗ trợ các SHOP ONLINE giao sản phẩm đến tay khách hàng theo yêu cầu. Nhận vận chuyển hàng hóa từ shop đến bưu điện hoặc chành xe và ngược lại.
                    
                    
                    </div>
                <div id="onetwothree" class="col-xs-12 col-sm-12 col-md-11 col-md-offset-1">
                    <img width="50" src="{{ asset('img/018.png') }}" >
                    Nhận chở người, hàng hóa cồng kềnh theo yêu cầu.
                    
                    
                </div>
                </div>
            </div>
        </div>
        
    </div><!-- het phan gioi thieu -->

    <div class="container" id="banner">
        <div class="col-xs-12 col-sm-12 col-md-12" id="bannerwhat">Bạn bận rộn và đang cần một người giao hàng?</div>

        <div class="col-xs-12 col-sm-12 col-md-12" id="bannerwhatnoidung" style="text-align: justify">Hãy đến với chúng tôi. Nơi cung cấp dịch vụ uy tín - an toàn – nhanh chống - tiện lợi. Niềm tin và uy tín sẽ thu hẹp khoảng cách giữa tôi và bạn. Tránh được rủi ro và nhiều gói ưu đãi đang chờ bạn! Còn chần chờ gì nữa hãy liên hệ ngay cho chúng tôi.</div>
        <div class="col-xs-6 col-sm-4 col-md-4 col-xs-offset-3 col-sm-offset-4 col-md-offset-4" id="bannerbutton">Liên hệ ngay bên dưới</div>
    </div> <!-- het phan banner -->


    <div class="container" id="footer">
        <div class="col-xs-12 col-sm-12 col-md-3" id="footerwhat">Liên hệ với chúng tôi:</div>
        <div class="col-xs-12 col-sm-5 col-md-3" id="footerbnnerwhatnoidung">
            <img width="auto" height="50" src="{{ asset('img/02.png') }}">  <a href="tel:0372802928">037 280 2928<a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4" id="footerbnnerwhatnoidung">
            <img width="auto" height="50" src="{{ asset('img/03.png') }}"> 
             <a href="https://www.facebook.com/ShipperTV/">facebook.com/shipper.info.travinh</a>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-2" id="footerbnnerwhatnoidung">
            <img width="auto" height="50" src="{{ asset('img/04.png') }}">
            <a href="">037 280 2928</a>
            
        </div>
        
    </div><!-- het phan lien he -->
@endsection