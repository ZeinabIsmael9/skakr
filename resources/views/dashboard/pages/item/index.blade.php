@extends('dashboard.layouts.master')

@section('content')
    <x-dashboard.table title="admin table" createRoute="{{route('dashboard.items.create')}}">
        {{ $dataTable->table() }}
    </x-dashboard.table>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
