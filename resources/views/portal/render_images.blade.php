@extends('portal.layouts.master')

@section('content')
<div class="container">

    <section class="u-align-center u-clearfix mb-3" id="carousel_f852">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
            <h3 class="u-text u-text-default u-text-1">
                <h3 class="sec_title">{{ __("Photo Gallery") }}</h3> <span style="font-weight: 700;"></span>
            </h3>
            <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-show-text-on-hover u-gallery-1">
                <div class="u-gallery-inner u-gallery-inner-1">   
                    @foreach ($images as $img)
                    @foreach ($img->img as $imgUrl)
                    <div class="u-effect-fade u-gallery-item" style="height:300px">
                        <div class="u-back-slide" data-image-width="513" data-image-height="500">
                            <img class="u-back-image u-expanded u-back-image-1"
                                src="{{ asset($imgUrl) }}" style="object-fit: cover">
                        </div>
                        <div class="u-over-slide u-shading u-over-slide-1">
                            <h3 class="u-gallery-heading">  {{ $img->img_desc }}</h3>
                            <p class="u-gallery-text">
                              
                            </p>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>

   
</div>

@endsection
