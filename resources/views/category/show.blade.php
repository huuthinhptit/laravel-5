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
                        <h3 class="box-title"><i class="fa fa-home"></i>Chi tiết #<?=$category->title?></h3>

                    </div>
                    <div class="box-body">
                        <table class="table table-striped table-bordered table-hover">
                            <tr>
                                <td>ID: </td>
                                <td>{{$category->id}}</td>
                            </tr>
                            <tr>
                                <td>Title: </td>
                                <td>{{$category->title}}</td>
                            </tr>
                            <tr>
                                <td>Status: </td>
                                <td>{{$category->status}}</td>
                            </tr>
                            <tr>
                                <td>Created At: </td>
                                <td>{{$category->created_at}}</td>
                            </tr>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
@endsection
