@extends('layouts.master') @section('title') ระบบสัตว์เลี้ยง @stop
@section('content')
@if($errors->any())
<div class="alert alert-danger"></div>
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
@endif
{!! Form::open(array('action' => 'App\Http\Controllers\PetController@insert','method'=>'post','enctype'=>'multipart/form-data' )) !!}

<div class="container">
    <h1>เพิ่มสัตว์เลี้ยง</h1>
    <ul class="breadcrumb">
        <li><a href="URL::to('pet')">หน้าแรก</a></li>
    </ul>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <strong>ข้อมูลสัตว์เลี้ยง</strong>
            </div>
        </div>
        <div class="panel-body">
        <table>

            <tr>
                <td>{{ Form::label('name','ชื่อสัตว์เลี้ยง')}}</td>
                <td>{{ Form::text('name', Request::old('name'),['class' => 'form-control']) }}</td>
            </tr>
            <tr>
                <td>{{ Form::label('type_id','ประเภทสัตว์เลี้ยง')}}</td>
                <td>{{ Form::select('type_id', $type, Request::old('type_id'), ['class' => 'form-control'])}}</td>
            </tr>
            <tr>
                <td>{{ Form::label('image','เลือกรูปภาพสัตว์เลี้ยง')}}</td>
                <td>{{ Form::file('image')}}</td>
            </tr>
        </table>
        <div class="panel-footer">
            <button type="reset" class="btn btn-danger">ยกเลิก</button>
            <button type="submit" class="btn btn-primary" ><i class="fa fa-save"></i>บันทึก</button>
        </div>
    </div>
    </div>
</div>
@endsection