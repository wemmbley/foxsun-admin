@extends('foxsun::master')
@section('content')
    @include('foxsun::pages.dashboard-header', ['subtitle' => $tableName])
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{ $tableName }}</h3>
        </div>
        <div class="table-responsive">
            <table class="table table-selectable card-table table-vcenter text-nowrap datatable">
                <thead>
                    <tr>
                        @foreach($titles as $title)
                            <th>{{ $title }}</th>
                        @endforeach
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($models as $model)
                        <tr>
                            @foreach($model->toArray() as $modelPropName => $modelPropValue)
                                <td>{{ $modelPropValue }}</td>
                            @endforeach
                            <td class="text-end">
                                <span class="dropdown">
                                    <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Действия</button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="/admin/{{ $modelName }}/edit/{{ $model->getKey() }}">Редактировать</a>
                                        <a class="dropdown-item" href="/admin/{{ $modelName }}/remove/{{ $model->getKey() }}">Удалить</a>
                                    </div>
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <div class="row g-2 justify-content-center justify-content-sm-between">
                {{ $models->links() }}
            </div>
        </div>
    </div>
    @include('foxsun::pages.dashboard-footer')
@endsection
