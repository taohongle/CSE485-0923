@extends('layouts.base')

@section('title','Edit Artwork')

@section('main')
        <h3 class="text-uppercase text-center">Thêm nghệ sĩ</h3>
    <form action="{{route('artworks.update',$artwork->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group mb-3">
            <span class="input-group-text">Mã nghệ sĩ</span>
            <input type="text" class="form-control" name="id" value="{{$artwork->id}}" readonly>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Tên nghệ sĩ</span>
            <input type="text" class="form-control" name="artist_name" value="{{$artwork->artist_name}}">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Mô tả</span>
            <input type="text" class="form-control" name="description" value="{{$artwork->description}}">
        </div>
        <div class="input-group mb-3">
            <span for="" class="input-group-text">Thể loại</span>
            <select name="art_type" class="form-select">
                <option value="{{$artwork->id}}" selected>{{$artwork->art_type}}</option>
                {{-- @foreach ($artworkOptions as $artwork)
                    <option value="{{$artwork->id}}">{{$artwork->art_type}}</option>
                @endforeach --}}
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Liên kết</span>
            <input type="text" class="form-control" name="media_link" value="{{$artwork->media_link}}">
        </div>
        <div class="form-group mb-3">
            <label>Hình ảnh:</label>
            <input type="file" class="form-control" name="cover_image" value="{{$artwork->cover_image}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection