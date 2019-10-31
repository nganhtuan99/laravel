@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-3 header-title"> @if(isset($goiCredit)) Cập Nhật @else Thêm mới @endif credit</h4>
 @if(isset($goiCredit))
                 <form action="{{ route('goi-credit.xl-cap-nhat',['id'=>$goiCredit->id]) }}" method="POST">
                  @else
                <form action="{{ route('goi-credit.xl-them-moi') }}" method="POST">
                    @endif
                    @csrf
                  
                
                    <div class="form-group">
                        <label for="ten_goi">ten_goi</label>
                        <input type="text" class="form-control" id="ten_goi" name="ten_goi"
                         @if(isset($goiCredit)) value="{{$goiCredit->ten_goi}}" @endif
                        >
                    </div>
                    <div class="form-group">
                        <label for="credit">credit</label>
                        <input type="text" class="form-control" id="credit" name="credit" @if(isset($goiCredit)) value="{{$goiCredit->credit}}" @endif>
                    </div>
                    <div class="form-group">
                        <label for="so_tien">so_tien</label>
                        <input type="text" class="form-control" id="so_tien" name="so_tien"
                         @if(isset($goiCredit)) value="{{$goiCredit->so_tien}}" @endif>
                    </div>
                    
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Lưu</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <!-- end col -->

</div>
@endsection