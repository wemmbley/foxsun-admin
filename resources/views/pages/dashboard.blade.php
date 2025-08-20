@extends('foxsun::master')
@section('content')
    <div class="page">
        @include('foxsun::sidebar')
        <div class="page-wrapper">
            <div class="page-header d-print-none" aria-label="Page header">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <div class="page-pretitle">Overview</div>
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                        @include('foxsun::pages.dashboard-toolbar')
                    </div>
                </div>
            </div>
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-deck row-cards">
                        <div class="col-lg-6">
                            <div class="row row-cards">
                                <div class="col-12">
                                    @include('foxsun::components.widgets.memory-usage')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('foxsun::pages.dashboard-footer')
        </div>
    </div>
@endsection
