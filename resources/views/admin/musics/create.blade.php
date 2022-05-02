@extends('admin.layouts.master')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="p-5">
                    <div class="text">
                        <h1 class="h4 text-gray-900 mb-4">Create an Music</h1>
                    </div>
                    <form class="user" action="{{ route('musics.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" id=""
                                placeholder="Enter music title...">
                        </div>

                        <div class="form-group">
                            <select name="artist_id" id="" class="form-control">
                                <option>Select one...</option>
                                @foreach ($artists as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">music image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>

                        <div class="form-group">
                            <label for="">music file</label>
                            <input type="file" name="file" class="form-control" >
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="content" placeholder="enter content"></textarea>
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
