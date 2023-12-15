@extends('layout.app')

@section('content')
    {{-- Index page content  --}}

    <!--- Home Section Start ---->
    <section class="home" id="home">

<div class="swiper home-slider">
    <div class="swiper-wrapper wrapper">
        <div class="swiper-slide slide">
            <div class="content">
                <span>Món Ăn Của Chúng Tôi</span>
                <h3>Cơm Tấm</h3>
                <p>Cơm tấm, món ăn gần gũi với người Việt, với hương vị đa dạng từ cơm nếp, thịt heo, trứng và nước mắm. Mỗi đĩa cơm tấm không chỉ là bữa ăn, mà còn là tinh hoa của hương vị và tình thân.</p>
                <a href="#" class="btn">order now</a>
            </div>
            <div class="image">
                <img src="{{asset('images/backgrounds/comtam.png')}}" alt="" style="width: 500px;">
            </div>
        </div>

        <div class="swiper-slide slide">
             <div class="content">
                 <span>Món Ăn Của Chúng Tôi</span>
                 <h3>Phở</h3>
                 <p>Phở, hương thơm của hành, gừng và hạt tiêu, hòa quyện với gân bò mềm mại và sợi phở mềm tan. Một nét văn hóa ẩm thực Việt, đậm chất gia đình và kỷ niệm, mỗi tô phở là một chuyến hành trình đầy cảm xúc qua hương vị.</p>
                 <a href="#" class="btn">order now</a>
             </div>
             <div class="image">
                 <img src="{{asset('images/backgrounds/pho.jpg')}}" alt="" style="width: 500px;">
             </div>
         </div>

         <div class="swiper-slide slide">
             <div class="content">
                 <span>Món Ăn Của Chúng Tôi</span>
                 <h3>Bánh Xèo</h3>
                 <p>Bánh xèo - vị giòn của vỏ bánh, hòa quyện với nhân thơm của tôm, thịt, và rau sống. Món ẩm thực đậm đà miền Nam, khiến hương vị lan tỏa từ gia đình đến bàn ăn. Mỗi lần nếm, là chuyến phiêu lưu qua vị ngọt, mặn, cay của miền quê Việt.</p>
                 <a href="#" class="btn">order now</a>
             </div>
             <div class="image">
                 <img src="{{asset('images/backgrounds/banhxeo.jpg')}}" alt="" style="width: 500px;">
             </div>
         </div>
    </div>

    <div class="swiper-pagination"></div>

</div>
</section>


<!--- Home Section End --->

@if ($propmenus !== 0)
<!-- Dish section Strat  --->
<section class="dishes" id="dishes">
<h3 class="sub-heading">Món Ăn Của Chúng Tôi</h3>
<h1 class="heading">Những Món Ăn Phổ Biến</h1>
<div class="box-container">
   @foreach ($propmenus as $propmenu)
   <div class="box">
       <form action="{{route('Jador.store')}}" method="POST">
           @csrf
           @if (auth()->user())
               <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
               <input type="hidden" name="menu_id" value="{{$propmenu->id}}">
           @endif
         <button type="submit"> <i class="fas fa-heart"></i></button>
         {{--<a href="#" class="fas fa-eye"></a>--}}
       </form>
       <img src="{{asset('images/menu/'.$propmenu->image)}}" alt="">
       <h3>{{$propmenu->title}}</h3>

       <span>{{$propmenu->pric}} VND</span>
       <form action="{{route('cart.add',$propmenu->id)}}" method="POST">

         <input type="hidden" name="quantity"  value="1">
         @csrf
         <button
          type="submit"
          class="btn">add to cart</button>
     </form>

   </div>
   @endforeach
</div>
</section>
<!-- Dish section End  --->
@endif


<!-- About Section Start -->
<section class="about" id="about">
<h3 class="sub-heading">Giới Thiệu</h3>
<h1 class="heading">Sự lựa chọn đáng tin cậy</h1>
<div class="row">
 <div class="image">
     <img src="{{asset('images/backgrounds/nhahangnuong.jpg')}}" alt="">
 </div>
 <div class="content">
     <h3>"Tận Hưởng Mọi Hương Vị Tuyệt Vời Tại Yummy!"</h3>
     <p>Yummy - một ẩn số đầy bất ngờ với hương vị đa dạng từ các món ăn truyền thống đến sáng tạo. Với không gian ấm cúng, dịch vụ tận tâm và đội ngũ đầu bếp tài năng, Yummy cam kết mang đến trải nghiệm ẩm thực tuyệt vời và gắn kết qua mỗi món ngon.</p>
     <p>
         Nhà hàng Yummy là nơi hội tụ của hương vị tinh tế và trải nghiệm ẩm thực đa dạng. Từ món ăn hấp dẫn đến đồ uống sáng tạo, Yummy cam kết mang đến trải nghiệm ẩm thực tuyệt vời nhất cho mọi khách hàng.






     </p>
     <div class="icons-container">
         <div class="icons">
             <i class="fas fa-shipping-fast"></i>
             <span>Giao Hàng Nhanh</span>
         </div>
         <div class="icons">
             <i class="fas fa-dollar-sign"></i>
             <span>Thanh Toán Dễ Dàng</span>
         </div>
         <div class="icons">
             <i class="fas fa-headset"></i>
             <span>Hỗ Trợ Khách Hàng 24/7</span>
         </div>
     </div>
 </div>
</div>
</section>

<!-- About Section End -->



<!-- menu Section start-->

<section class="menu" id="menu">
<h3 class="sub-heading">Thực Đơn Của Chúng Tôi</h3>
<h1 class="heading">Món Ăn Của Yummy</h1>
<div class="box-container">
 @foreach ($menus as $menu)
      <div class="box">
         <div class="image">
             <img src="{{asset('images/menu/'.$menu->image)}}" alt="">
             <form action="{{route('Jador.store')}}" method="POST">
                 @csrf
                 @if (auth()->user())
                     <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                     <input type="hidden" name="menu_id" value="{{$menu->id}}">
                 @endif
                 <button type="submit"> <i class="fas fa-heart"></i></button>
             </form>
         </div>
         <div class="content">

             <h3>{{$menu->title}}</h3>
             <p>
                 {{$menu->description}}
             </p>
             <span class="price">{{$menu->pric}} VND</span>
             <form action="{{route('cart.add',$menu->id)}}" method="POST">
                 {{--  nsift qte =1 f index  cart --}}
                 <input type="hidden" name="quantity"  value="1">
                 @csrf
                 <button
                 type="submit"
                 class="btn">add to cart</button>
             </form>

         </div>
     </div>
 @endforeach


</div>
</section>

<!-- menu section end -->

<!-- review section start -->
@if ($reviews->count())
<section class="review" id="review">
<h3 class="sub-heading">Các Trải Nghiệm Của Khách Hàng</h3>
<h1 class="heading">Họ đã nói gì?</h1>
 <div class="swiper-container review-slider ">
         <div class="swiper-wrapper">

 @foreach ($reviews as $review)
          @if ($review->status)
               <div class="swiper-slide slide">
                     <i class="fas fa-quote-right"></i>
                     <div class="userrev">
                         @if ($review->user->image === 'image')
                         <img src="{{asset('images/profile/userImage.png')}}" alt="user-image">
                         @else
                         <img src="{{asset('images/profile/'.$review->user->image)}}" alt="user-image">
                         @endif

                         <div class="user-info">
                             <h3>{{$review->user->name}}</h3>
                         </div>

                     </div>
                         <p>
                         {{$review->comment}}
                         </p>

                 </div>

          @endif


 @endforeach




</div>
</div>
</section>
@endif
<!-- review section end -->

<!-- Ordre Section start -->
<div class="review2" id="review2">
<h3 class="sub-heading">Trải nghiệm của khách hàng</h3>
<h1 class="heading">Hãy nói lên trải nghiệm của bạn với chúng tôi.</h1>
<form action="{{route('reviews.store')}}" method="POST">
 @csrf
 <div class="inputBox">
     <div class="input">
         <span>Trải nghiệm của bạn</span>
         <textarea name="comment" placeholder="Nhập trải nghiệm của bạn" id="" cols="30" rows="10"></textarea>
     </div>
 </div>

 <input type="submit" value="Đánh giá" class="btn">
</form>
</div>

<!-- Ordre Section end --->
@endsection
