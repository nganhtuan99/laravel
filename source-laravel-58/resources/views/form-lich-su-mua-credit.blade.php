@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title">Thêm mới Lịch sử cre</h4>

                <form action="{{ route('lich-su-mua-credit.xl-them-moi') }}" method="POST">
                    @csrf
                  
                    <div class="form-group">
                        <label for="nguoi_choi_id">nguoi_choi_id</label>
                        <select id="nguoi_choi_id" name="nguoi_choi_id" class="form-control">
                            <option>Chọn người chơi</option>
                            @foreach($dsNguoiChoi as $nguoiChoi)
                            <option value="{{ $nguoiChoi->id }}">{{ $nguoiChoi->ten_dang_nhap }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                     <div class="form-group">
                        <label for="goi_credit_id">goi_credit_id</label>
                        <select id="goi_credit_id" name="goi_credit_id" class="form-control">
                            <option>Chọn tên gói</option>
                            @foreach($dsGoiCredit as $goiCredit)
                            <option value="{{ $goiCredit->id }}">{{ $goiCredit->ten_goi }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                      <div class="form-group">
                        <label for="credit">credit</label>
                        <select id="credit" name="credit" class="form-control">
                            <option>Chọn credit</option>
                            @foreach($dsGoiCredit as $goiCredit)
                            <option value="{{ $goiCredit->credit }}">{{ $goiCredit->credit }}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="so_tien">so_tien</label>
                        <select id="so_tien" name="so_tien" class="form-control">
                            <option>Chọn so_tien</option>
                            @foreach($dsGoiCredit as $goiCredit)
                            <option value="{{ $goiCredit->so_tien }}">{{ $goiCredit->so_tien }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

</div>
@endsection