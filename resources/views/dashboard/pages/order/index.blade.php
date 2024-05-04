@extends('dashboard.layouts.master')

@section('content')
    <x-dashboard.table title="order table" >
        {{ $dataTable->table() }}
    </x-dashboard.table>

@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
