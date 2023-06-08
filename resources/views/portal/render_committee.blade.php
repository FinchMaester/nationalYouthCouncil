


@extends('portal.layouts.master')


@section('content')

<div class="container">

    <h3 class="sec_title">{{ __($page_title) }}</h3>

    <div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">{{ __("S.N.") }}</th>
            <th scope="col">{{ __("State") }}</th>
            <th scope="col">{{ __("District") }}</th>
            <th scope="col">{{ __("Executive Name")}}</th>
            
            <th scope="col">{{ __("Phone No.") }}</th>
            <th scope="col">{{ __("Email") }}</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($committee as $cd)
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $cd->address }}</td>
                        <td>{{ $cd->district ?? '' }}</td>
                        
                        <td>{{ $cd->name ?? '' }}</td>
                        
                        <td>{{ $cd->phone ?? '' }}</td>
                        <td>{{ $cd->email ?? '' }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection