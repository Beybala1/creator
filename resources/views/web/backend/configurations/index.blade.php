@extends('web.backend.layouts.app')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>@lang("Name")</th>
                        <th>@lang('Actions')</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0" data-role="table-list">
                   
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('scripts')
    <script src="{{ asset('js/configurations/index.js') }}"></script>
@endpush
@endsection
