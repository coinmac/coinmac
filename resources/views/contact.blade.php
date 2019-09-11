@extends('master')
@section('content')
<style>
    .h4b,.headerText2{
        color:darkblue;
        font-weight: bold;
    } 
</style>
<section class="flat-row bg-theme pd-top-100 contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    
                        <div class="form-contact-title">
                                <h6 class="h1">CONTACT INFORMATION</h6><hr>
                                <p>
                                        <p class="text1"><span class="h4b">NIGERIA (ABUJA):</span><span class="headerText2"> <br />
                                        </span>2nd Floor, Balyelsa House, Plot 1038, Shehu Shagari Way,<br />
                                  Opp. Federal Ministry of Justice Maitama Abuja, Nigeria.</p>
                                        <p class="text1"><span class="h4b">NIGERIA (IBADAN):</span> <br />
                                          142, Fajuyi Road, Opp Alafia Hospital, Adamasingba, U.I. P. O. Box 22474, Ibadan,<br />
                                    Oyo State, Nigeria.</p>
                                    <p class="text1"><span class="h4b">NIGERIA (BAUCHI):</span> <br />
                                        Bauchi Hotels Ltd, (Zaranda Hotel), Jos Road, Bauchi,<br />
                                  Bauchi State, Nigeria.</p>
                                        <p class="text1"><span class="h4b">LONDON:</span> <br />
                                          Suite 2, Caxton Street Studios 16, Caxton Street, Canning Town, London, E167/L</p>
                                        <p class="text1"><span class="h4b">USA:</span> 7707, Romero Drive, <br />
                                  Arlington, Tennessee, 38002, USA</p>
                                        <p class="text1"><span class="h4b">(global affiliations with institutions in)</span> Ghana, Canada,    U.S.A,     United Kingdom,   United Arab Emirate<br />
                                          <span class="headerText2">Tel:</span>     +234  8038437312, +234 8023262908.<br />
                                          <span class="headerText2">Email:</span> training(at)coinmac.org,coinmac(at)coinsultant.com,  coinmacltd(at)gmail.com<br />
                                          <span class="headerText2">Website:</span> www.coinmac.org   Bulk Sms Portal: www.coinmac.net<br />
                                          <br />
                                    </p>
                                </p>
                             </div>

                        
                </div>
                <div class="col-md-4 col-sm-12">
                    <form id="formcontact" class="form-contact" method="post" action="{{route('contactmail')}}">
                        @csrf
                         <div class="form-contact-title">
                            <h6 class="contact-title">FEEDBACK FORM</h6>
                            <p>Send us instant feedback with the form below</p>
                         </div>
                         <div class="info-contact">
                             <p class="wrap-input-name">
                                 <input type="text" id="name" name="name" value="" tabindex="1" required="required" placeholder="Full Name">
                             </p>
                             <p class="wrap-input-phone">
                                 <input type="text" id="phone" name="phone" value="" tabindex="2" required="required" placeholder="Phone number">
                             </p>
                             <p class="wrap-input-email">
                                 <input type="text" id="email" name="email" value="" tabindex="3" required="required" placeholder="Email-address">
                             </p>
                             <p class="wrap-input-messages">
                                 <textarea id="messages-contact" name="messages" tabindex="4" placeholder="Messages" required></textarea>
                             </p>
                             <div class="wrap-btn">
                                 <button class="flat-btn bg-color">SUBMIT FORM</button>
                             </div>
                         </div> 
                    </form>                    
                </div>
            </div>
            <div class="row">
                    <div class="col-md-6">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.9727886661913!2d7.4948327142766935!3d9.066243290902094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0bb379c330dd%3A0xee9ea1a31aabf062!2sCOINMAC+INTERNATIONAL+INC!5e0!3m2!1sen!2sng!4v1556996770946!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15826.394849598502!2d3.88885!3d7.39878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb348d186e5145701!2sCoinmac+Int&#39;l+Ltd!5e0!3m2!1sen!2sng!4v1521728849786" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                          var js, fjs = d.getElementsByTagName(s)[0];
                          if (d.getElementById(id)) return;
                          js = d.createElement(s); js.id = id;
                          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                          fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like-box" data-href="https://www.facebook.com/coinmacinc" data-width="auto" data-height="200" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div>
                </div>
            </div>
        </div>
    </section>
@endsection