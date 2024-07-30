@extends("web.backend.layouts.app")

@section("content")

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Table Basic</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>@lang("Name")</th>
                        <th>@lang("Actions")</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0" data-role="table-list">
                    <form action="{{ route("configurations.update") }}"  method="GET">
                        @csrf
                        @method("PUT")
                        <tr>
                            <td>@lang("Header")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_header" data-role="configurations" class="form-check-input" type="checkbox" 
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang("Slider")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_slider" data-role="configurations" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang("Services")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_service" data-role="configurations" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang("Brands")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_brand" data-role="configurations" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang("Blogs")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_blog" data-role="configurations" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang("About")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_about" data-role="configurations" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang("Contact us")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_contact_us" data-role="configurations" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>@lang("Footer")</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input name="is_footer" data-role="configurations" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>

@push("scripts")
<script src="{{ asset("backend/assets/js/configurations/index.js") }}"></script>
@endpush
@endsection
