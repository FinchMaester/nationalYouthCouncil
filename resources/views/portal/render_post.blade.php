@extends('portal.layouts.master')

@section('content')
{{-- <div class="container">

    <div class="row mt-3">
       <h4 style="text-align: center;">{{ $post->title }}</h4>


        <div class="">
            <div class="">

                <img src=" {{ asset('uploads/posts/' . $post->image ?? '')   }}" style="height:100px;">
                <div class="card-body">
                   {!! $post->content !!}

                </div>
            </div>
        </div>
        <div class="col-md-8 other_posts">
            <div class="other_posts">
                <h5 class="title_card">Other Posts</h5>

                @foreach ($postslist as $list)
                <a class="card-wel-title" href="{{ route('render_posts', $list->slug) }}">
                    <div class="list_title">
                        <li>{{ $list->title }}
                    </li>
                </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>



</div> --}}


    <div class="container py-5">
        <div class="row mb-12">
            <div class="col-lg-12">
                <h4>{{ $post->title }}</h4>
            </div>
        </div>

        <div class="single-post-container">
            <div class="row ">

                <div class="col-md-offset-1 col-sm-12 col-md-12 col-md-10 ">

                    <div class="post-list">

                        <div class="row ">
                            <div class="col-sm-6 col-md-8 col-md-8 ">
                                <div class="post" style="visibility: visible;">
                                    <div class="text-block">
                                        <img class="mt-3 service-img" src="{{ asset('uploads/posts/' . $post->image ?? '') }}" style="width: 50%;"
                                            alt="">
                                        <div class="post-text mt-5">{!! $post->content !!} </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--
            <div class="other_posts my-4 py-4">
                <h5>Other Posts</h5>
                <ul class="list_title">
                    @foreach ($postslist as $list )
                    <li>
                        <a href="{{ route('render_posts', $list->slug) }}">{{ $list->title }}</a>
                    </li>
                    @endforeach

                </ul>
            </div> --}}

            <div class="col-md-3">
                <div class="card-wel">
                <h5 class="title_card">Other Services</h5>
                @foreach ($postslist as $list )
                        <a class="card-wel-title" href="{{ route('render_posts', $list->slug) }}">
                            <li>{{ $list->title }}</li>
                        </a>
                    @endforeach

                </div>
            </div>

        </div>
    </div>







@endsection
