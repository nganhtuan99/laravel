@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">@if(isset($luotChoi)) Cập Nhật @else Thêm mới @endif Lượt</h4>
                  @if(isset($luotChoi))
                 <form action="{{ route('luot-choi.xl-cap-nhat',['id'=>$luotChoi->id]) }}" method="POST">
                  @else
                 <form action="{{ route('luot-choi.xl-them-moi') }}" method="POST">
                    @endif
              
                    @csrf
                  @if(!isset($luotChoi))
                    <div class="form-group">
                        <label for="nguoi_choi_id">nguoi_choi_id</label>
                        <select id="nguoi_choi_id" name="nguoi_choi_id" class="form-control">
                            <option>Chọn người chơi</option>
                            @foreach($dsNguoiChoi as $nguoiChoi)
                            <option value="{{ $nguoiChoi->id }}">{{ $nguoiChoi->ten_dang_nhap }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="so_cau">so_cau</label>
                        <input type="text" class="form-control" id="so_cau" name="so_cau"
                        @if(isset($luotChoi)) value="{{$luotChoi->so_cau}}" @endif
                        >
                    </div>
                    <div class="form-group">
                        <label for="diem">diem</label>
                        <input type="text" class="form-control" id="diem" name="diem"
                        @if(isset($luotChoi)) value="{{$luotChoi->diem}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="ngay_gio">ngay_gio</label>
                        <input type="text" class="form-control" id="ngay_gio" name="ngay_gio"@if(isset($luotChoi)) value="{{$luotChoi->ngay_gio}}" @endif>
                    </div>
                    
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

</div>
@endsection