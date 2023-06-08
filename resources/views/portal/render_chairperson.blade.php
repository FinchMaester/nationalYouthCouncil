@php
   $chairperson = App\Models\Message::whereType('chairperson')->latest()->get()->take(1);
@endphp

@extends('portal.layouts.master')

@section('content')


<section class="message_head wid_mar">
    <div class="container">
        <h3 class="sec_title">
            {{ __($page_title) }}
        </h3>
        <div class="row">

            {{-- @foreach ($message as $ad ) --}}
            
            <div class="col-md-5">
                <img src="{{ asset("uploads/message/" . $message->image) ?? ''}}" class="chairman_card_image" alt="..."></a>

            </div>

            <div class="col-md-7 message_para">
               
                <?php
                $strippedcontent = preg_replace('/<(?!p\b)[^>]*>/', '',$message->description)
                ?>
                {!! $strippedcontent !!}
                <br>
                <span style="color: #0b1f6d; font-weight:800; font-size:20px">"{{ $message->name }}"</span>
           
            </div>
           
            
                
       
         
          

            {{-- @endforeach --}}
        </div>
    </div>
</section>

@endsection