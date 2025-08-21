@extends('foxsun::master')
@section('content')
    @include('foxsun::pages.dashboard-header', ['subtitle' => 'Список'])
    @foreach($models as $model)
        @foreach($model->toArray() as $modelPropName => $modelPropValue)
{{--            {{ $modelPropName }} - {{ $modelPropValue }}--}}
        @endforeach
    @endforeach
    @include('foxsun::components.table')
    @include('foxsun::pages.dashboard-footer')
@endsection
