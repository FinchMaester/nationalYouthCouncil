@extends('portal.layouts.master')

@section('content')
    <div class="container">

        <div class="row mt-3">
            <h3 class="sec_title">{{ __("Programs & Budget") }}</h3>
           
            @foreach ($budgets as $budget ) 
           <div class="col-md-4">
                <iframe src="{{ asset('uploads/documents/file/' .$budget->file) }}" width="100%" height="300px">
                </iframe>
                <p class="oth_title"><span class="events_i"><i class="fa fa-download" aria-hidden="true"></i></span> {{ $budget->title }} </p>
               <p class="events_cal"><i class="fa fa-calendar" aria-hidden="true"></i> {{date('F jS,Y', strtotime($budget->created_at)) }}</p> 
               <hr>
              
                
            </div>
            @endforeach

        </div>




    </div>



@endsection
