<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Site Links</h2>
                    <ul class="useful-links">

                        @if($pageheading->faqstatus ==0)
                        <li>
                            <a href="{{ route('faq') }}">{{ $pageheading->faqheading }}</a>
                        </li>
                        @endif

                        @if($pageheading->roomstatus ==0)
                        <li><a href="{{ route('room_all') }}">{{ $pageheading->roomheading }}</a></li>
                        @endif

                        @if($pageheading->photostatus ==0)
																									<li>
																										<a href="{{ route('photo') }}">{{ $pageheading->photoheading }}</a>
																				     </li>
																							 @endif

                        @if($pageheading->faqstatus ==0)
                        <li>
                            <a href="{{ route('post') }}">{{ $pageheading->blogheading }}</a>
                        </li>
                        @endif

                        <li>
                            <a href="{{ route('contect') }}">Contact</a>
                        </li>
																								
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Useful Links</h2>
                    <ul class="useful-links">
                        <li><a href="index.html">Home</a></li>
                        @if($term_page->status==0)
                        <li><a href="{{ route('term') }}">{{ $term_page->heading }}</a></li>
                        @endif



                        @if($privacy_page->status==0)
                        <li><a href="{{ route('privacy') }}">{{ $privacy_page->heading }}</a></li>
                        @endif


                        <li><a href="disclaimer.html">Disclaimer</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Contact</h2>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="right">
                            34 Antiger Lane,<br>
                            PK Lane, USA, 12937
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-volume-control-phone"></i>
                        </div>
                        <div class="right">
                            contact@arefindev.com
                        </div>
                    </div>
                    <div class="list-item">
                        <div class="left">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="right">
                            122-222-1212
                        </div>
                    </div>
                    <ul class="social">
                        <li><a href=""><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="item">
                    <h2 class="heading">Newsletter</h2>
                    <p>
                        In order to get the latest news and other great items, please subscribe us here:
                    </p>
                    <form action="{{ route('subscriber_send_email') }}" method="post" class="form_subscribe_ajax">
                     @csrf
                        <div class="form-group">
                            <input type="text" name="email" class="form-control">
                            <span class="text-danger error-text email_error"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Subscribe Now">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="loader"></div>

<div class="copyright">
    Copyright 2022, ArefinDev. All Rights Reserved.
</div>



<script>
 (function($){
   $(".form_subscribe_ajax").on('submit', function(e){
     e.preventDefault();
     $('#loader').show();
     var form = this;
     $.ajax({
             url:$(form).attr('action'),
             method:$(form).attr('method'),
             data:new FormData(form),
             processData:false,
             dataType:'json',
             contentType:false,
             beforeSend:function(){
              $(form).find('span.error-text').text('');
             },
             success:function(data)
             {
                 $('#loader').hide();
                 if(data.code == 0)
                 {
                     $.each(data.error_message, function(prefix, val) {
                         $(form).find('span.'+prefix+'_error').text(val[0]);
                     });
                 }
                 else if(data.code == 1)
                 {
                     $(form)[0].reset();
                     iziToast.success({
                         title: '',
                         position: 'topRight',
                         message: data.success_message,
                     });
                 }

             }
         });
     });
 })(jQuery);
</script>

