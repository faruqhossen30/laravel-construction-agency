@extends('admin.layout.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Show</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5 col-md-3 pe-0">
                            <div class="nav nav-tabs nav-tabs-vertical" id="v-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link" id="v-profile-tab" data-bs-toggle="tab" href="#v-profile" role="tab"
                                    aria-controls="v-profile" aria-selected="false">Social Media</a>
                                <a class="nav-link" id="v-settings-tab" data-bs-toggle="tab" href="#v-settings"
                                    role="tab" aria-controls="v-settings" aria-selected="false">Contact</a>
                            </div>
                        </div>

                        <div class="col-7 col-md-9 ps-0">

                            <div class="tab-content tab-content-vertical border p-3" id="v-tabContent">
                                <form action="{{ route('setting.Information') }}" method="POST">
                                    @csrf
                                    <div class="tab-pane fade" id="v-profile" role="tabpanel"
                                        aria-labelledby="v-profile-tab">
                                        <h6 class="mb-1">Social Media</h6>
                                        @include('admin.settings.inc.social-media')
                                    </div>
                                    <div class="tab-pane fade" id="v-settings" role="tabpanel"
                                        aria-labelledby="v-settings-tab">
                                        <h6 class="mb-1">Address</h6>
                                        @include('admin.settings.inc.contact')

                                    </div>
                                    <div class="text-start">
                                        <button type="submit" onclick="return confirm('Are you sure update informarion ?')"
                                            class="btn btn-primary waves-effect waves-light mt-2"><i
                                                class="mdi mdi-content-save"></i> Update </button>

                                    </div>
                                </form>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>



    @push('plugin-styles')
        <!-- Plugin css import here -->
    @endpush

    @push('plugin-scripts')
        <!-- Plugin js import here -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush

    @push('custom-scripts')
        <!-- Custom js here -->
        @if (Session::has('create'))
            <script>
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })
                Toast.fire({
                    icon: 'success',
                    title: 'Blog has been created Successfully!'
                })
            </script>
        @endif
    @endpush
@endsection

@push('plugin-styles')
    <!-- Plugin css import here -->
@endpush

@push('plugin-scripts')
    <!-- Plugin js import here -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

@push('custom-scripts')
    <!-- Custom js here -->
    @if (Session::has('create'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: 'Blog has been created Successfully!'
            })
        </script>
    @endif
@endpush
