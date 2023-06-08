@extends('portal.layouts.master')

@section('content')
    <div class="container">

        <div class="row mt-3">
            <h3 class="sec_title">{{ __("Employee Details") }}</h3>
           
        @foreach ($teams as $team)
            <div class="col-md-3">
                <div class="card team_card mt-2 mb-2">
                    @if (isset($team->image))
                    <img src="{{ asset('uploads/team/' . $team->image) }}" class="card-img-top image">
                    @else
                        <img src="{{ url('img/logo.png') }}" class="card-img-top image">
                    @endif
                    <div class="card-body">
                  
                        <span class="team_name">{{ __($team->name) }}</span><br>
                        <span class="team_position">{{ __($team->position) }}</span><br>
                        <span class="team_email">{{ $team->email }}</span><br>
                        <span class="team_contact">{{ $team->contact_number }}</span>
                    
                    </div>
                </div>
            </div>
        @endforeach

        </div>




    </div>

    {{-- @include('portal.includes.all_in_one')
    @include('portal.includes.small_gallery')
   --}}

@endsection
