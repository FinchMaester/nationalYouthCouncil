@extends('admin.master')


@section('content')

<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="container bootstrap snippets bootdey">
  <div class="row">
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading dark-blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content dark-blue">
          <div class="circle-tile-description text-faded"> Notice Count</div>
          <div class="circle-tile-number text-faded ">{{ $totalDocument }}</div>
          <a class="circle-tile-footer" href="{{ url('admin/documents/index') }}">More Info<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div>
     
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content red">
          <div class="circle-tile-description text-faded"> Team Members </div>
          <div class="circle-tile-number text-faded ">{{ $totalTeam }}</div>
          <a class="circle-tile-footer" href="{{ url('admin/team/index') }}">More Info<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
     
        
    <div class="col-lg-2 col-sm-6">
      <div class="circle-tile ">
        <a href="#"><div class="circle-tile-heading orange"><i class="fa fa-comments fa-fw fa-3x"></i></div></a>
        <div class="circle-tile-content orange">
          <div class="circle-tile-description text-faded"> Website Visitors </div>
          <div class="circle-tile-number text-faded ">10</div>
          <a class="circle-tile-footer" href="#">More Info<i class="fa fa-chevron-circle-right"></i></a>
        </div>
      </div>
    </div> 
  </div> 
</div>  
@endsection