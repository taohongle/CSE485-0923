@extends('layouts.base')

@section('title','Add Artwork')

@section('main')
        <h3 class="text-uppercase text-center">Thêm nghệ sĩ</h3>
    <form action="{{route('artworks.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text">Tên nghệ sĩ</span>
            <input type="text" class="form-control" name="artist_name">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Mô tả</span>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="input-group mb-3">
            <span for="" class="input-group-text">Thể loại</span>
            <select name="art_type" class="form-select">
                <option value="Hội hoạ">Văn học</option>
                <option value="Nghệ thuật">Hội hoạ</option>
                <option value="Múa hát">Âm nhạc</option>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text">Liên kết</span>
            <input type="text" class="form-control" name="media_link">
        </div>
        <div class="form-group mb-3">
            <label>Hình ảnh:</label>
            <input type="file" class="form-control" name="cover_image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection