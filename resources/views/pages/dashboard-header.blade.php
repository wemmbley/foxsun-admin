@php
    $overview = $subtitle ?? __('foxsun::dashboard.overview');
    $subtitle = $subtitle ?? __('foxsun::dashboard.dashboard');
@endphp
<div class="page">
    @include('foxsun::sidebar')
    <div class="page-wrapper">
        <div class="page-header d-print-none" aria-label="Page header">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <div class="page-pretitle">{{ $overview  }}</div>
                        <h2 class="page-title">{{ $subtitle }}</h2>
                    </div>
                    @include('foxsun::pages.dashboard-toolbar')
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
