<section class="topnav">
    <div class="container main_nav">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 mainlogo">

                <img src="{{ asset($sitesetting->main_logo)}}" class="top_nav_mainlogo">

            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 top_nav_topic">
                <h4 style="color: black"> नेपाल सरकार </h4>
                <h5>युवा तथा खेलकुद मन्त्रालय</h5>
                <h6>राष्ट्रिय युवा परिषद्</h6>
                <h7>
                    सानोठिमी, भक्तपुर
                </h7>

            </div>
            <div class="col-md-3 col-lg-3 col-sm-12 flag_container">

                <img class="top_nav_flag" src="{{ asset('img/nepal_flag.gif') }}" alt="nyc flag logo">

            </div>

        </div>

    </div>
    <div class="button" style="height:20px;width=5px">
    @foreach (config('app.languages') as $langLocale => $langName)
        <a href="{{ url()->current() }}?change_language={{ $langLocale }}"
            class="u-active-palette-4-dark-1 u-border-none u-btn u-button-style u-palette-4-light-1 u-btn-4">
            {{ strtoupper($langLocale) }}
        </a>
        @endforeach
    </div>
</section>




<header class=" u-clearfix u-header u-section-row-container" id="sec-05f6">
    {{-- <div class="u-section-rows">
        <div class="u-align-center u-palette-4-dark-2 u-section-row" id="sec-b03b">
            <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
                <div class="u-social-icons u-social-icons-1">
                    <img src="{{ asset($sitesetting->main_logo)}}" class="top_image_nav" data-image-width="100">



                </div>

                        <div class="top-info">
                        <h4 style="color: black"> नेपाल सरकार </h4>
                        <h5>युवा तथा खेलकुद मन्त्रालय</h5>
                        <h6>राष्ट्रिय युवा परिषद्</h6>
                        <h7>
                            सानोठिमी, भक्तपुर
                        </h7>
                    </div>

                @foreach (config('app.languages') as $langLocale => $langName)
                <a href="{{ url()->current() }}?change_language={{ $langLocale }}"
                    class="u-active-palette-4-dark-1 u-border-none u-btn u-button-style u-palette-4-light-1 u-btn-4">
                    {{ strtoupper($langLocale) }}
                </a>
                @endforeach

                <img class="flag_image" src="{{ asset('img/nepal_flag.gif') }}" alt="">
            </div>


        </div>
    </div> --}}



    <div class="u-align-center-xs u-palette-4-dark-1 u-section-row u-sticky navigation_media" id="sec-71fa">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-valign-middle-xs mainlogo_container_media">
            <a href="{{ route('home') }}" class="u-image u-logo u-image-1" data-image-width="3000"
                data-image-height="2984">
                <img src="{{ asset($sitesetting->main_logo)}}" class="u-logo-image u-logo-image-1"
                    data-image-width="80">

            </a>
            <nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1 hamburger_media">
                <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                    <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link"
                        href="#" style="padding: 6px 0px; font-size: calc(1em + 12px);">
                        <svg class="u-svg-link" viewBox="0 0 24 24">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger">
                            </use>
                        </svg>
                        <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px"
                            y="0px" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="{{ route('home') }}" style="padding: 10px 16px;">{{ __("Home") }}</a>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="#" style="padding: 10px 16px;">{{ __("About Us") }}</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                                    <li class="u-nav-item"><a href="{{ route('render_about') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Introduction") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_team') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{__("Employee
                                            Details")}}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_committee') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{__("District
                                            Committees")}}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_executive_members') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Council Members")}}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_administrative') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Message from the Administrative Head")}}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ 'render_chairperson' }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Message from Vice Chairperson")}}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="#" style="padding: 10px 16px;">{{ __("Documents") }}</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                                    <li class="u-nav-item"><a href="{{ route('render_notice') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Notice") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_publication') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Publication") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_tender') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Tender") }}</a>
                                    </li>
                                    {{-- added jankari --}}
                                    <li class="u-nav-item"><a href="{{ route('render_rules') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Acts & Regulations") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_directot') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Directory") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_press') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Press Release") }}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="#" style="padding: 10px 16px;">जानकरी</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                                    <li class="u-nav-item"><a href="{{ route('render_rules') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">ऐन
                                            तथा नियमावली</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_directot') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">निर्देशिका</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_press') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">प्रेश
                                            विज्ञप्ती</a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="#" style="padding: 10px 16px;">{{ __("Downloads") }}</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5">
                                    <li class="u-nav-item"><a href="{{ route('render_news') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("News") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_other') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Others") }}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="#" style="padding: 10px 16px;">{{ __("Gallery") }}</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6">
                                    <li class="u-nav-item"><a href="{{ route('render_images') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Photo Gallery") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_videos') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Video Gallery")}}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="{{ route('render_all_posts') }}" style="padding: 10px 16px;">{{ __("Blog")
                                }}</a>

                        </li>

                        <li class="u-nav-item"><a
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                href="#" style="padding: 10px 16px;">{{ __("Youth") }}</a>
                            <div class="u-nav-popup">
                                <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5">
                                    <li class="u-nav-item"><a href=""
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Youth Activity") }}</a>
                                    </li>
                                    <li class="u-nav-item"><a href="{{ route('render_other') }}"
                                            class="u-active-palette-4-light-1 u-button-style u-nav-link u-white">{{
                                            __("Youth Statistics") }}</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="u-nav-item"><a href="{{ route('contact_page') }}"
                                class="u-active-white u-button-style u-hover-white u-nav-link u-text-active-palette-4-dark-1 u-text-body-alt-color u-text-hover-palette-4-base"
                                style="padding: 10px 18px 10px 16px;">{{ __("Contact") }}</a>
                        </li>




                    </ul>
                </div>


                <div class="u-custom-menu u-nav-container-collapse">
                    <div
                        class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-7">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="{{ route('home') }}">गृहपृष्ठ</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="#">हाम्रोबारे</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8">
                                            <li class="u-nav-item"><a href="{{ route('render_about') }}"
                                                    class="u-button-style u-nav-link">कार्यलयको परिचय</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_team') }}"
                                                    class="u-button-style u-nav-link">कर्मचारी विवरण</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_committee') }}"
                                                    class="u-button-style u-nav-link">जिल्ला
                                                    समितिहरु</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    href="{{ route('render_executive_members') }}"
                                                    class="u-button-style u-nav-link">परिषद
                                                    साधस्यहारु</a>
                                            </li>
                                            <li class="u-nav-item"><a
                                                    href="{{ route('render_administrative') }}"
                                                    class="u-button-style u-nav-link">प्रशासकिय प्रमुख को
                                                    सन्देश</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_chairperson') }}"
                                                    class="u-button-style u-nav-link">अध्यक्षको सन्देश</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="#l">दस्तावेज</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-9">
                                            <li class="u-nav-item"><a href="{{ route('render_news') }}"
                                                    class="u-button-style u-nav-link">सुचना</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_publication') }}"
                                                    class="u-button-style u-nav-link">प्रकाशन</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_tender') }}"
                                                    class="u-button-style u-nav-link">बोलपत्र</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="about.html">जानकरी</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-10">
                                            <li class="u-nav-item"><a href="{{ route('render_rules') }}"
                                                    class="u-button-style u-nav-link">ऐन तथा
                                                    नियमावली</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_directot') }}"
                                                    class="u-button-style u-nav-link">निर्देशिका</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_press') }}"
                                                    class="u-button-style u-nav-link">प्रेश
                                                    विज्ञप्ती</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">अन्य
                                        डाउनलोड</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-11">
                                            <li class="u-nav-item"><a href="{{ route('render_news') }}"
                                                    class="u-button-style u-nav-link">समाचार</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_other') }}"
                                                    class="u-button-style u-nav-link">अन्य</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                        href="#">ग्यालेरी</a>
                                    <div class="u-nav-popup">
                                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-12">
                                            <li class="u-nav-item"><a href="{{ route('render_images') }}"
                                                    class="u-button-style u-nav-link">फाेटाे
                                                    ग्यालेरी</a>
                                            </li>
                                            <li class="u-nav-item"><a href="{{ route('render_videos') }}"
                                                    class="u-button-style u-nav-link">भिडियो
                                                    ग्यालेरी</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a href="{{ route('contact_page') }}"
                                        class="u-button-style u-nav-link">सम्पर्क</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>


    </div>
</header>



{{-- @if (count(config('app.languages')) > 1)
<section class="top_nav">
    <div class="container this-container">
        <div class="lang-container">
            @foreach (config('app.languages') as $langLocale => $langName)
            <a class="lang-link" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{
                strtoupper($langLocale) }}
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif



<section class="top_nav">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center nav-objs">
            <div class="p-2 main-logo-container">
                <img src="{{ asset($sitesetting->main_logo) }}" class="top_image image_one" alt="logo">
            </div>

            <div class="p-2 text-center">
                <p class="top_ntitle">
                    <span class="title_on">
                        {{ __($sitesetting->govn_name) }}
                    </span><br>
                    <span class="title_tw">
                        {{ __($sitesetting->ministry_name) }}
                    </span><br>

                    <span class="title_fo">
                        {{ __($sitesetting->office_name) }}
                    </span><br>

                    <span class="title_fi">
                        {{ __($sitesetting->office_address) }}
                    </span>

                </p>
            </div>

            <div class="p-2 other-logo-container side-logo-container">
                <img src="{{ asset($sitesetting->side_logo) }}" class="top_image image_two" alt="logo">
            </div>
            <div class="p-2 other-logo-container flag-container">
                <img src="{{ asset($sitesetting->flag_logo) }}" class="top_image image_flag" alt="logo">
            </div>
        </div>

    </div>
</section>


<section class="navigation">
    <div class="nav-container">

        <nav>
            <div class="nav-mobile">
                <a id="nav-toggle" href="#!"><span></span></a>
            </div>

            <ul class="nav-list">
                <li><a href="{{ url('/') }}">{{ __('Home') }}</a></li>
                <li><a href="#">{{ __('About Us') }}</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{ route('render_about') }}">{{ __('Introduction') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_team') }}">{{ __('Employee Details') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_committee') }}">{{ __('District Committees') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_executive_members') }}">{{ __('Council Members') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_administrative') }}">{{ __('Message from the Administrative Head')
                                }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_chairperson') }}">{{ __('Message from Chairperson') }}</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">{{ __('Documents') }}</a>
                    <ul class="nav-dropdown">
                        <li><a href="{{ route('render_notice') }}">{{ __('Notice') }}</a></li>
                        <li><a href="{{ route('render_publication') }}">{{ __('Publication') }}</a></li>
                        <li><a href="{{ route('render_tender') }}">{{ __('Tender') }}</a></li>

                    </ul>
                </li>
                <li><a href="#">{{ __('Information') }}</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{ route('render_rules') }}">{{ __('Acts & Regulations') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_directot') }}">{{ __('Directory') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_press') }}">{{ __('Press Release') }}</a>
                        </li>
                    </ul>
                </li>
                <li><a href="#">{{ __('Downloads') }}</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{ route('render_news') }}">{{ __('News') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_other') }}">{{ __('Others') }}</a>
                        </li>

                    </ul>
                </li>
                <li><a href="#">{{ __('Gallery') }}</a>
                    <ul class="nav-dropdown">
                        <li>
                            <a href="{{ route('render_images') }}">{{ __('Photo Gallery') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('render_videos') }}">{{ __('Video Gallery') }}</a>
                        </li>
                    </ul>
                </li>



                <li>
                    <a href="{{ route('contact_page') }}">{{ __('Contact') }}</a>
                </li>

            </ul>
        </nav>
    </div>

</section>
</section>
--}}
