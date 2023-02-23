@extends('frontend.master')
@section('contact')
    <div class="container col-sm-12 col-xs-12 col-md-12">
    <div class="row d-flex justify-content-center my-5">
    <div class="col-md d-flex justify-content-center">
        <div class="header-text"><span style="color: black;  font-size: 34px; font-weight: 900;">Contact</span> Us</div>
    </div>
    </div>
    </div>
  <div class="container-fluid">
      <div class="row">
            <div class="col-md-6 col-md-offset-1 col-sm-7 col-xs-12">

        <div class="widget">
            <h3 class="widget-title style5">Contact Info</h3>
            {{--            <p>Morbi rutrum massa eget mi gravida, sit amet mollis magna gravida. Morbi sodales, ligula quis ornare bibendum, magna erat convallis ipsum, id posuere ligula massa vitae leo.</p>--}}
            <ul class="clearfix">
                <li>
                    <p><span class="fa fa-envelope-o"></span>Email: <a
                            href="mailto:info@cadtbd.org">{{$contacts_and_footers[0]->email}}</a></p>
                </li>
                <li>
                    <p><span class="fa fa-phone"></span>Phone: +88 {{$contacts_and_footers[0]->phone}}</p>
                </li>
                <li>
                    <p><span class="fa fa-fax"></span>Fax: (+84) {{$contacts_and_footers[0]->email}}</p>
                </li>
                <li>
                    <p><span class="fa fa-map-marker"></span>Address: {{$contacts_and_footers[0]->address}}</p>
                </li>
            </ul>
        </div>
        <!-- widget -->

    </div>

    <div class="contact-form-full col-md-4 col-sm-4 col-xs-11">

        <div class="inner contact">
            <!-- Form Area -->
            <div class="contact-form">
                <!-- Form -->
                <form id="contact-us" method="POST" action="api/email">
                    <!-- Left Inputs -->
                    @csrf
                    <div class="col-xs-12 wow animated slideInLeft" data-wow-delay=".5s">
                        <!-- Name -->
                        <input type="text" name="name" id="name" required="required" class="form" placeholder="Name"/>
                        <!-- Email -->
                        <input type="email" name="email" id="mail" required="required" class="form"
                               placeholder="Email"/>

                    </div><!-- End Left Inputs -->
                    <!-- Right Inputs -->
                    <div class="col-xs-12 wow animated slideInRight" data-wow-delay=".5s">
                        <!-- Message -->
                        <textarea name="message" id="message" class="form textarea" placeholder="Message"></textarea>
                    </div><!-- End Right Inputs -->
                    <!-- Bottom Submit -->
                    <div class="relative fullwidth col-xs-12">
                        <!-- Send Button -->
                        <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
                    </div><!-- End Bottom Submit -->
                    <!-- Clear -->
                    <div class="clear"></div>
                </form>

                <!-- Your Mail Message -->
                <div class="mail-message-area">
                    <!-- Message -->
                    <div class="alert gray-bg mail-message not-visible-message">
                        <strong>Thank You !</strong> Your email has been delivered.
                    </div>
                </div>
                @if (Session::has('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                            <i class="fa fa-times"></i>
                        </button>
                        <strong>Success !</strong> {{ session('success') }}
                    </div>
                @endif


            </div><!-- End Contact Form Area -->
        </div><!-- End Inner -->
    </div>
      </div>
  </div>

    <!-- col-md-7 -->

    <!-- wrapper -->
    </section>
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2825.211958629328!2d91.83379900000003!3d24.909438007883935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505558dd0be6a1%3A0x65c7e47c94b6dc45!2sTechnext!5e1!3m2!1sen!2s!4v1425297675833"
            width="100%" height="450" frameborder="0" style="border:0">
        </iframe>
    </section>

@endsection()
<style>
    #contact {
        padding: 10px 0 10px;
    }

    .fa-envelope-o, .fa-phone, .fa-fax, .fa-map-marker {
        padding-right: 13px;
    }

    .contact-text {
        margin: 45px auto;
    }

    .mail-message-area {
        width: 100%;
        padding: 0 15px;
    }

    .mail-message {
        width: 100%;
        background: rgba(255, 255, 255, 0.8) !important;
        -webkit-transition: all 0.7s;
        -moz-transition: all 0.7s;
        transition: all 0.7s;
        margin: 0 auto;
        border-radius: 0;
    }

    .not-visible-message {
        height: 0px;
        opacity: 0;
    }

    .visible-message {
        height: auto;
        opacity: 1;
        margin: 25px auto 0;
    }

    /* Input Styles */

    .form {
        width: 100%;
        padding: 15px;
        background: transparent;
        border: 1px solid rgba(104, 171, 187, 1);
        margin-bottom: 25px;
        color: #68ABBB !important;
        font-size: 13px;
        -webkit-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .form:hover {
        border: 1px solid #8BC3A3;
    }

    .form:focus {
        color: white;
        outline: none;
        border: 1px solid #8BC3A3;
    }

    .textarea {
        height: 120px;
        max-height: 120px;
        max-width: 100%;
    }
</style>

<script>
    @if(Session::has('success'))
    toastr.success("{{ session('success') }}");
    @endif
</script>
