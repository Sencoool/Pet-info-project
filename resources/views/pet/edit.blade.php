@extends('layouts.master') @section('title') ระบบสัตว์เลี้ยง @stop
@section('content')
@if($errors->any())
<div class="alert alert-danger"></div>
@foreach ($errors->all() as $error)
<div>{{ $error }}</div>
@endforeach
@endif

<div class="container">
    <h1>แก้ไขสัตว์เลี้ยง</h1>
    <ul class="breadcrumb">
        <li><a href="URL::to('pet')">หน้าแรก</a></li>
    </ul>
    {!! Form::model($pet,array('action' => 'App\Http\Controllers\PetController@update','method'=>'post','enctype'=>'multipart/form-data' )) !!}
    <input type="hidden" name='id' value="{{ $pet->id }}">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <strong>ข้อมูลสัตว์เลี้ยง</strong>
            </div>
        </div>
        <div class="panel-body">
        <table>
            {!! Form::model($pet, array('method' => 'post', 'enctype' => 'multipart/form-data')) !!}
            <input type="hidden" name="id" value={{ $pet->id }}>

            <tr>
                <td>{{ Form::label('name','ชื่อสัตว์เลี้ยง')}}</td>
                <td>{{ Form::text('name', $pet->name,['class' => 'form-control']) }}</td>
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

    {!! Form::close() !!}

    {!! Form::close() !!}
</div>
@endsection