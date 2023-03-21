@extends('portal.layouts.master')

@section('content')
<div class="container">

    <div class="row mt-3">
        <h1 class="sec_title">{{ __("Post") }}</h1>


        <div class="col-md-4">
            <div class="card team_card mt-2 mb-2">
                <h4>{{ $post->title }}</h4>
                <img src=" {{ asset('uploads/posts/' . $post->image ?? '')   }}">
                <div class="card-body">
                    <span class="postpage_p">{!! $post->content !!} </span>

                </div>
            </div>
        </div>

    </div>



</div>



@endsection
