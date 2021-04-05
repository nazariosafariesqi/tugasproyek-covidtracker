@extends('layouts.header')
@section('stylebody')
<body class="main-layout inner_page">
@endsection
@section('content')
     <div class="contact">
         <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <div class="titlepage text_align_left">
                        <h2>Hubungi Kami</h2>
                     </div>
                  </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nama Lengkap" type="type" name=" Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="No Telfon" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Pesan" type="type" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Kirim</button>
                        </div>
                     </div>
                  </form>
               </div>
                <div class="col-md-6">
                  <div class="map-responsive">
                     <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Malang+Jawa+Timur+Indonesia" width="600" height="540" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
@endsection