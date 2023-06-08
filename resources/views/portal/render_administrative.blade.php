@php
   $administrative = App\Models\Message::whereType('administrativehead')->latest()->get()->take(1);
@endphp

@extends('portal.layouts.master')

@section('content')


<section class="latest_blog wid_mar">
    <div class="container">
        <h3 class="sec_title">
            {{ __($page_title) }}
        </h3>
        <div class="row">

            @foreach ($administrative as $ad )
            

            <?php
            $strippedcontent = preg_replace('/<(?!p\b)[^>]*>/', '',$ad->description)
            ?>

            <div class="col-md-5">
                <img src="{{ asset("uploads/message/" . $ad->image) ?? ''}}" class="chairman_card_image"  alt="..."></a>

            </div>

            <div class="col-md-7 message_para">
               
                {!!$strippedcontent!!}
                <br>
                <span style="color: #0b1f6d; font-weight:800; font-size:20px">"{{ $ad->name }}"</span>
            
            
            </div>
                
       
      
          

            @endforeach
        </div>
    </div>
</section>

@endsection