@extends('admin.layouts.master')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="p-5">
                    <div class="text">
                        <h1 class="h4 text-gray-900 mb-4">Create an Artist!</h1>
                    </div>
                    <form class="user" action="{{ route('artists.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id=""
                                placeholder="Enter Artist Name...">
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control" >
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="bio" placeholder="Enter Bio"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
