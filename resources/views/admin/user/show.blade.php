@extends('admin.layout.master')
@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">Show</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a href="{{route('blog.index')}}" type="button" class="btn btn-inverse-primary btn-icon-text">
                    <i class="btn-icon-prepend" data-feather="list"></i>
                    Blog List
                  </a>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                   {{$user->name}}
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Email
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="my-4">
                    <a href="{{route('user.edit', $user->id)}}" type="button" class="btn btn-inverse-success btn-icon-text">
                        <i class="btn-icon-prepend" data-feather="check-square"></i>
                       Edit
                      </a>
                      <form action="{{route('user.destroy', $user->id)}}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Sure ! Delete user ?')"class="btn btn-inverse-danger btn-icon-text">
                            <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                        </button>
                    </form>
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
        , title: 'Blog has been created Successfully!'
    })
</script>
@endif
@endpush
