@extends('layouts.master')@section('title') ระบบสัตว์เลี้ยง @stop
@section('content')
<div class="container">
    <h1>รายการสัตว์เลี้ยง</h1>
    <div class="panel panel-default"></div>    
    <div class="panel-heading">
        <div class="panel_title"><strong>รายการ</strong></div>
        
    </div>
    <form action="{{ URL::to('pet/search')}}" method="POST" class="form-inline">
        {{ csrf_field() }}
        <input type="text" name="q" class="form-control" placeholder="พิมพ์รหัสหรือชื่อเพื่อค้นหา">
        <a href="{{ URL::to('pet/edit')}}" class="btn btn-success pull-right">เพิ่มสัตว์เลี้ยง</a>
        <button type="submit" class="btn btn-primary">ค้นหา</button>
    </form>
    <div class="panel-body"></div>
    <table class="table table-bordered bs_table">
        <thead>
            <tr>
                <th>รูปสัตว์เลี้ยง</th>
                <th>รหัส</th>
                <th>ชื่อ</th>
                <th>ประเภท</th>
                <th>การทำงาน</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pet as $p)
            <tr>
                <td><img src="/{{ $p->image_url }}" alt="" width="100px"></td>
                <td>{{ $p->id }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->type->name }}</td>
                <td class="bs-center">
                    <a href="{{ URL::to('pet/edit/'.$p->id) }}" class="btn btn-info"><i class="fa fa-edit"></i>แก้ไข</a>
                    <a href="#" class="btn btn-danger btn-delete" id-delete="{{ $p->id }}"><i class="fa fa-trash"></i>ลบ</a>
                </td>
            </tr>@endforeach
        </tbody>
    </table>
    <div class="panel-footer">
        <span>แสดงข้อมูลจำนวน {{ count($pet)}} รายการ</span>
    </div>
    <div class="container">
        {{ $pet->links()}}
    </div>
    <script>
        $('.btn-delete').on('click',function() {if (confirm("คุณต้องการลบข้อมูลสัตว์เลี้ยงใช่หรือไม่")){var url = "{{URL::to('pet/remove')}}" + '/' + $(this).attr('id-delete'); window.location.href = url;
        }});
    </script>
@endsection
