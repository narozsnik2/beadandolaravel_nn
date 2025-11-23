@extends('frontend.master')

@section('title', 'Kapcsolat')

@section('content')
      
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="contact_main">
               <h1 class="contact_taital">Contact Us</h1>

               {{-- KAPCSOLAT FELVÉTELI ŰRLAP --}}
               <form action="{{ route('kapcsolat.send') }}" method="POST">
                  @csrf

                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="name" required>
                  </div>

                  <div class="form-group">
                     <input type="email" class="email-bt" placeholder="Email" name="email" required>
                  </div>

                  <div class="form-group">
                  <input type="text" id="phone" class="email-bt" placeholder="Phone Number" name="phone">

<script>
document.getElementById('phone').addEventListener('input', function () {
   
    this.value = this.value.replace(/[^0-9+]/g, '');
});
</script>
                  </div>

                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Message" rows="5" name="message" required></textarea>
                  </div>

                  <button type="submit" class="main_bt" style="border:none; width:100%; text-align:center;">
                     SEND
                  </button>
               </form>
            </div>
         </div>

         <div class="col-md-8">
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#">
                     <span class="padding_left_10 active"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                     Making this the first true
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>
                     Call : +01 1234567890
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                     Email : demo@gmail.com
                     </a>
                  </li>
               </ul>
            </div>

            <div class="mail_main">
               <h3 class="newsletter_text">Newsletter</h3>
               <div class="form-group">
                  <textarea class="update_mail" placeholder="Enter Your Email" rows="5"></textarea>
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
               </div>
            </div>

            <div class="footer_social_icon">
               <ul>
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection