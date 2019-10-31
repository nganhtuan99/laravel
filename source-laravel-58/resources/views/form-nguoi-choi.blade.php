@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title"> @if(isset($nguoiChoi)) Cập Nhật @else Thêm mới @endif Người chơi </h4>
 @if(isset($nguoiChoi))
                 <form action="{{ route('nguoi-choi.xl-cap-nhat',['id'=>$nguoiChoi->id]) }}" method="POST">
                  @else
                <form action="{{ route('nguoi-choi.xl-them-moi') }}" method="POST">
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="ten_dang_nhap">ten_dang_nhap</label>
                        <input type="text" class="form-control" id="ten_dang_nhap" name="ten_dang_nhap"
                        @if(isset($nguoiChoi)) value="{{$nguoiChoi->ten_dang_nhap}}" @endif>
                    </div>
                   
                    <div class="form-group">
                        <label for="mat_khau">mat_khau</label>
                        <input type="text" class="form-control" id="mat_khau" name="mat_khau"
                        @if(isset($nguoiChoi)) value="{{$nguoiChoi->mat_khau}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" name="email"
                        @if(isset($nguoiChoi)) value="{{$nguoiChoi->email}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="hinh_dai_dien">hinh_dai_dien</label>
                        <input type="text" class="form-control" id="hinh_dai_dien" name="hinh_dai_dien"
                        @if(isset($nguoiChoi)) value="{{$nguoiChoi->hinh_dai_dien}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="diem_cao_nhat">diem_cao_nhat</label>
                        <input type="text" class="form-control" id="diem_cao_nhat" name="diem_cao_nhat"
                        @if(isset($nguoiChoi)) value="{{$nguoiChoi->diem_cao_nhat}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="credit">credit</label>
                        <input type="text" class="form-control" id="credit" name="credit"
                        @if(isset($nguoiChoi)) value="{{$nguoiChoi->credit}}" @endif>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

</div>
@endsection