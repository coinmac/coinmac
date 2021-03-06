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
                                        Bauchi Hotels Ltd, (Zaranda Hotel), Jos Road, Bauchi,
                                  Bauchi State, Nigeria.</p>
                                        <p class="text1"><span class="h4b">LONDON:</span> <br />
                                            The Elevation Point 3, Herringham Road, Off Westmoor Road, thames Wharf Barrier, Charlton, London, SE7 8NJ</p>
                                        <p class="text1"><span class="h4b">USA:</span> 7707, Romero Drive,  Arlington, Tennessee, 38002, USA</p>
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
                    <div class="col-md-8">
                        <h3>Abuja Office (MAP)</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.9727886661913!2d7.4948327142766935!3d9.066243290902094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0bb379c330dd%3A0xee9ea1a31aabf062!2sCOINMAC+INTERNATIONAL+INC!5e0!3m2!1sen!2sng!4v1556996770946!5m2!1sen!2sng" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-4">
                        <h3>Follow us on Facebook</h3>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCoinmac-International-Inc-111254940259836&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=429238987655355" width="100%" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
            </div>

            <div class="row">
                    <div class="col-md-6">
                        <h3>Ibadan Office (MAP)</h3>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15826.394849598502!2d3.88885!3d7.39878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb348d186e5145701!2sCoinmac+Int&#39;l+Ltd!5e0!3m2!1sen!2sng!4v1521728849786" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                 <div class="col-md-6">
                    <h3>Bauchi Office (MAP)</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.71318951993!2d9.79852281402032!3d10.284677470891532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1054da0f51f45ca5%3A0x637cd8edceb728ec!2sZaranda%20Hotel!5e0!3m2!1sen!2sng!4v1568216561708!5m2!1sen!2sng" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                
            </div>
        </div>
    </section>
@endsection