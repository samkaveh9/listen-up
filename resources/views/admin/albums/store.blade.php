@extends('admin.layouts.master')
@section('content')
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="p-5">
                    <div class="text">
                        <h1 class="h4 text-gray-900 mb-4">Assign Music to an Album</h1>
                    </div>
                    @php
                        session()->put('album_id', request()->route('album')->id)
                    @endphp
                    <form class="user" action="{{ route('album-music.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="album_id" value="{{ session()->get('album_id') }}">
                        <div class="form-group">
                            <select name="music_id" id="" class="form-control">
                                <option>Select one...</option>
                                @foreach (\App\Models\Music::all() as $item)
                                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                                @endforeach
                            </select>
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
