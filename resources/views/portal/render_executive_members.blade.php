@php
    $executivedetail = App\Models\ExecutiveDetail::all();
@endphp

@extends('portal.layouts.master')

@section('content')
    <div class="container">

        <div class="row mt-3">
            <h3 class="sec_title">{{ __('Council Members') }}</h3>

            @foreach ($executivedetail as $ex)
                <div class="col-md-3">
                    <div class="card team_card mt-2 mb-2">

                        @if (isset($ex->image))
                        <img src="{{ asset('uploads/executivedetail/' . $ex->image) }}" class="card-img-top image">                        
                        @else
                            <img src="{{ url('img/logo.png') }}" class="card-img-top image">
                        @endif
                       
                        <div class="card-body">

                            <span class="team_name">{{ $ex->name }}</span><br>
                            <span class="team_position">{{ $ex->position }}</span><br>
                            <span class="team_email">{{ $ex->email }}</span><br>
                            <span class="team_contact">{{ $ex->phone }}</span>


                        </div>
                    </div>
                </div>
            @endforeach

        </div>




    </div>
@endsection
