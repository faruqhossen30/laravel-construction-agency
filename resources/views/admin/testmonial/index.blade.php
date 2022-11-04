@extends('admin.layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Category</a></li>
        <li class="breadcrumb-item active" aria-current="page">List</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('testmonial.create')}}" type="button" class="btn btn-inverse-primary btn-icon-text">
                    <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                    Create
                </a>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th scope="col" style="max-width: 20%">
                                    #
                                </th>
                                <th scope="col" style="max-width: 20%">
                                    Client Name
                                </th>
                                <th scope="col" style="max-width: 20%">
                                    Text
                                </th>
                                <th scope="col" style="max-width: 20%">
                                    Create at
                                </th>
                                <th scope="col" style="max-width: 20%">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testmonials as $testmonial)
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>
                                    {{$testmonial->client_name}}
                                </td>
                                <td>
                                    {{$testmonial->text}}
                                </td>
                                <td>
                                    {{$testmonial->created_at->format('d M Y')}}
                                </td>
                                <td>
                                    <form action="{{route('testmonial.destroy', $testmonial->id)}}" method="post" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Sure ! Delete category ?')" class="btn btn-danger btn-xs btn-icon">
                                            <i data-feather="trash"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('testmonial.edit', $testmonial->id)}}" type="button" class="btn btn-warning btn-xs btn-icon">
                                        <i data-feather="check-square"></i>
                                    </a>
                                    <a href="{{route('testmonial.show', $testmonial->id)}}" type="button" class="btn btn-success btn-xs btn-icon">
                                        <i data-feather="eye"></i>
                                    </a>

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

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
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success'
        , title: 'Category has been created!'
    })

</script>
@endif
@if (Session::has('update'))
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'success'
        , title: 'Category has been updated !'
    })

</script>
@endif
@if (Session::has('delete'))
<script>
    const Toast = Swal.mixin({
        toast: true
        , position: 'top-end'
        , showConfirmButton: false
        , timer: 3000
        , timerProgressBar: true
        , didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    })
    Toast.fire({
        icon: 'warning'
        , title: 'Category has been deleted !'
    })

</script>
@endif
@endpush
