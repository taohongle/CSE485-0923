<!-- Kế thừa trang base -->
@extends('layouts.base') 

<!-- trien khai title -->
@section ('title','Artwork')

<!-- nd -->
@section('main')
    <h4 class="text-center text-uppercase">Danh sách nghệ sĩ</h4>
    <a href="{{route('artworks.create') }}" class="btn btn-primary">Thêm nghệ sĩ</a>
    <div class="mt-3">
        @if (Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
        @endif
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <th>ID</th>
            <th>Tên nghệ sĩ</th>
            <th>Mô tả</th>
            <th>Thể loại</th>
            <th>Liên kết</th>
            <th>Hình ảnh</th>
            <th>Sửa </th>
            <th>Xoá</th>
        </thead>
        <tbody>
            @foreach ($artworks as $artwork)
                <tr>
                    <td>{{$artwork->id}}</td>
                    <td>{{$artwork->artist_name}}</td>
                    <td>{{$artwork->description}}</td>
                    <td>{{$artwork->art_type}}</td>
                    <td>{{$artwork->media_link}}</td>
                    <td> {{$artwork->cover_image}}</td>
                    <td>
                        <a href="{{ route('artworks.edit', $artwork->id) }}" class="btn btn-info">Sửa</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $artwork->id }}">Xoá</button>
                    </td>
                    <!-- Modal xác nhận xoá -->
                    <div class="modal fade" id="deleteModal-{{ $artwork->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Xác nhận xoá</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Bạn chắc chắn muốn xoá tác giả có id là: {{ $artwork->id }}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                    <form action="{{ route('artworks.destroy', $artwork->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xoá</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
