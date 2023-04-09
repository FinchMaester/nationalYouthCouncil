

    {{-- For Form Section --}}
    <section class="contact_form wid_mar">
        <div class="container">
            <h1 class="sec_title">
               {{ __("Contact") }}
            </h1>
            <div class="row">
                <div class="col-md-6 cform_left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.110886592172!2d85.37060381501485!3d27.682967482802056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1bcb8584a51f%3A0x306902437b9fd83a!2sNational%20Youth%20Council%20(NYC)!5e0!3m2!1sen!2snp!4v1679309550445!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-6 cform_right">
                    <form id="quick_contact" class="form-horizontal" method="POST" role="form" action="{{ route('admin.contactus.store') }}">
                        @csrf
                        <div class="form-group">

                            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value=""
                                required>

                        </div>

                        <div class="form-group">

                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email"
                                value="" required>

                        </div>

                        <div class="form-group">


                            <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone No."
                                required>


                        </div>

                        <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message"
                            required></textarea>

                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>



                 
                        <button class="btn send-button g-recaptcha" id="submit" type="submit" value="SEND" data-sitekey="{{ config('services.recaptcha.site_key') }}" 
                        data-callback='onSubmit' 
                        data-action='submit'>
                            <div class="alt-send-button">
                                <i class="fa fa-paper-plane"></i><span class="send-text">Let's Connect</span>
                            </div>

                        </button>

                      
                        

                    </form>
                    <script>
                        function onSubmit(token) {
                          document.getElementById("quick_contact").submit();
                        }
                      </script>
                </div>
            </div>
        </div>
    </section>
