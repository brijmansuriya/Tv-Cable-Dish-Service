@extends('layouts.app')
@section('breadcrumb') 
<?php $pagename="Package Image"; ?>
<div class="topbar-left">
    <ol class="breadcrumb">
        <span class="glyphicon glyphicon-globe mr10" style="font-size: 14px;"></span>
        <li class="crumb-active">
            <a href="{{url('package/')}}">
                <span><?=$pagename?></span>
            </a>
        </li>
    </ol>
</div>
@endsection
@section('content')
    @php
    $save = url('package/saveimg');
    $val_package_name = '';
    $val_price='';
    $addedit='Add';
    if ($id != '') {
        $val_package_name = $data->package_name;
        $val_price = $data->price;
        $addedit='Edit';
    }
    @endphp
        <!-- begin: .tray-center -->
        <div class="tray tray-center">
            <form role="form" action="{{$save}}" enctype="multipart/form-data" method="POST">
                @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    @endif
                <!-- Input Fields -->
                <div class="panel">
                    <div class="panel-heading">
                        <span class="panel-title">
                            {{$addedit}}  {{$pagename}}
                        </span>
                    </div>

                    <div class="panel-body">
                        <input type="hidden" name='id' value='{{ $id }}'>
                        <input type="hidden" name='nid' value='{{ $nid }}'>
                        {{ uplodes('4','Package Image','images','') }}
                    </div>

                    <div class="panel-footer">
                        <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        <a class="btn btn-danger btn-sm" href="javascript:history.back()">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- end: .tray-center -->

     
@endsection
