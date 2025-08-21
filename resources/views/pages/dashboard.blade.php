@extends('foxsun::master')
@section('content')
@include('foxsun::pages.dashboard-header')
    <div class="col-lg-6">
        <div class="row row-cards">
            <div class="col-12">
                <livewire:memory-usage-widget />
            </div>
        </div>
    </div>
@include('foxsun::pages.dashboard-footer')
@endsection
