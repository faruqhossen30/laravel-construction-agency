@extends('layouts.app')
@section('content')
    <div class="container" style="height: 80vh">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="card">
                    <form method="POST" action="{{route('login')}}" class="card-body">
                        @csrf
                        <div class="title-row text-center">
                            <h2 class="section-title">Admin Login</h2>
                        </div>

                        <div class="material__form-group form-group">
                            <input type="text" name="email" id="email" class="form-input material__input" required="">
                            <label for="email" class="material__label">Email
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            <span class="material__underline"></span>
                        </div>

                        <div class="material__form-group form-group">
                            <input type="password" name="password" id="password" class="form-input material__input" required="">
                            <label for="password" class="material__label">Password
                                <abbr title="required" class="required">*</abbr>
                            </label>
                            <span class="material__underline"></span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
