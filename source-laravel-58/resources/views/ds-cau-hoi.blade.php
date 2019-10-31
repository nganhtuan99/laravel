@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Danh sách câu hỏi</h4>
                
                <table id="table-cau-hoi" class="table dt-responsive nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nội dung</th>
                            <th>Lĩnh vực</th>
                            <th>Phương án A</th>
                            <th>Phương án B</th>
                            <th>Phương án C</th>
                            <th>Phương án D</th>
                            <th>Đáp án</th>
                            <th></th>
                        </tr>
                    </thead>
                
                
                    <tbody>
                    	@foreach($dsCauHoi as $cauHoi)
                        <tr>
                            <td>{{ $cauHoi->id }}</td>
                            <td>{{ $cauHoi->noi_dung }}</td>
                            <td>{{ $cauHoi->linhVuc->ten_linh_vuc }}</td>
                            <td>{{ $cauHoi->phuong_an_a }}</td>
                            <td>{{ $cauHoi->phuong_an_b }}</td>
                            <td>{{ $cauHoi->phuong_an_c }}</td>
                            <td>{{ $cauHoi->phuong_an_d }}</td>
                            <td>{{ $cauHoi->dap_an }}</td>
                            <td>
                                <a href="{{route('cau-hoi.cap-nhat',['id'=>$cauHoi->id])}}" class="btn btn-success waves-effect waves-light btn-info btn-xs" ><i class="mdi md-grease-pencil"> Sửa</i></a>
                                <a href="{{route('cau-hoi.xoa',['id'=>$cauHoi->id])}}" class="btn btn-danger waves-effect waves-light btn-info btn-xs" ><i class="mdi md-trash-can-outline">Xóa</i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection

@section('css')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
<!-- third party css end -->

<!-- Jquery Toast css -->
<link href="{{ asset('assets/libs/jquery-toast/jquery.toast.min.css') }}" rel="stylesheet" type="text/css" />

<!-- Sweet Alert-->
<link href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<!-- third party js -->
<script src="{{ asset('assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/vfs_fonts.js') }}"></script>

<!-- Tost-->
<script src="{{ asset('assets/libs/jquery-toast/jquery.toast.min.js') }}"></script>

<!-- Sweet Alerts js -->
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#table-cau-hoi").DataTable({
			language:{
				paginate:{
					previous:"<i class='mdi mdi-chevron-left'>",
					next:"<i class='mdi mdi-chevron-right'>"
				}
			},
			drawCallback:function(){
				$(".dataTables_paginate > .pagination").addClass("pagination-rounded")
			}
		});
	});
</script>

<script type="text/javascript">
!function(p){
    "use strict";
    var t=function(){};
    t.prototype.send=function(t,i,o,e,n,a,s,r){
        a||(a=3e3),s||(s=1);
        var c={
            heading:t,
            text:i,
            position:o,
            loaderBg:e,
            icon:n,
            hideAfter:a,
            stack:s
        };
        r&&(c.showHideTransition=r),
        console.log(c),
        p.toast().reset("all"),
        p.toast(c)
    },
    p.NotificationApp=new t,
    p.NotificationApp.Constructor=t
}(window.jQuery),
function(i){
    "use strict";
    i.NotificationApp.send("Well Done!","You successfully read this important alert message","top-right","#5ba035","success")
}(window.jQuery);

!function(t){
    "use strict";
    var e=function(){};
    e.prototype.init=function(){
        t("#sa-warning").click(function(){
            Swal.fire({
                title:"Are you sure?",
                text:"You won't be able to revert this!",
                type:"warning",
                showCancelButton:!0,
                confirmButtonColor:"#3085d6",
                cancelButtonColor:"#d33",
                confirmButtonText:"Yes, delete it!"}).then(function(t){
                    t.value&&Swal.fire("Deleted!","Your file has been deleted.","success")
                })
            })
    },
    t.SweetAlert=new e,
    t.SweetAlert.Constructor=e
}(window.jQuery),
function(t){
    "use strict";
    window.jQuery.SweetAlert.init()
}();
</script>
<!-- third party js ends -->
@endsection