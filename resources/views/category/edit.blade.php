<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 4/16/2017
 * Time: 2:19 PM
 */
use App\BaseModel;
?>
@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.category') }}
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-16">

                <!-- Default box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-home"></i>Update category #<?=$category->title?></h3>

                    </div>
                    <div class="box-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif

                        {!! Form::open([
                            'url' => array('category/update', $category->id),
                            'method' => 'PUT',
                        ]) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Title(*)', ['class' => 'control-label']) !!}
                            {!! Form::text('title', $category->title,
                                            array('required',
                                                  'class'=>'form-control',
                                                  'placeholder'=>'Title...')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('status', 'Status', ['class' => 'control-label']) !!}
                            {!! Form::select('status', BaseModel::getStatusList(),  $category->status, ['class' => 'form-control', 'style'=>'width:300px']) !!}
                        </div>

                        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
