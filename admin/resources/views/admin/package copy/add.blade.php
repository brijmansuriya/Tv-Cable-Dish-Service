@extends('layouts.app')
@section('breadcrumb') 
<?php $pagename="Package"; ?>
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
  
    $save = url('package/save');
    $val_package_name = '';
    $val_price='';
    $val_cat_id='';
    $addedit='Add';
    if ($id != '') {
        $val_package_name = $data->package_name;
        $val_price = $data->price;
        $val_cat_id = $data->cat_id;
        $addedit='Edit';
        $nid=$id;
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
                        {{ editbox('4', 'Package Name', 'package_name', 'Enter Package Name', $val_package_name) }}
                        {{ editbox('4', 'Price', 'price', 'Enter Price ', $val_price) }}
                        {{ uplode('4','Package Image','images[]','') }}

                        <div class="col-md-12">
                            <fieldset class="form-group">
                                <label class="form-label semibold">Expense Category <b class="text-danger">*</b></label>
                                {{-- select2-single --}}
                                <select class="form-control select2-single" name="cat_id"  id="cat_id">
                                    <option value="">--- Select Category ---</option>
                                    @foreach($Categoryname as $item)
                                    <option value="{{$item->id}}" @if($val_cat_id==$item->id) selected @endif>{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                    </div>
                    <?php if(!empty($imgdata)){ ?>
                            <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th style="width: 90%">Name</th>
                                        <th>Action</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
        
                                    @php
                                    $i = 0;
                                @endphp
                                @foreach ($imgdata as $list)
                                    @php
                                        $i++;
                                    @endphp
                                    <tr>
                                        <td >{{ $i }}</td>
                                        <td > <a href="{{ asset('uploads/'.$list->img.'') }}"  target="_blank"><img src="{{ asset('90/'.$list->img.'') }}" class="wt100" alt=""></a></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('package/imageedit/'.$nid.'') }}/{{ $list->id }}" class="btn btn-warning btn-xs">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="btn-group">
                                                <a href="{{ url('package/deleteimg/'.$nid.'/'.$list->id.'')}}"><button type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
        
                                
                                </tbody>
                            </table>
                    <?php } ?>

                    <div class="panel-footer">
                        <input type="submit" value="Save" class="btn btn-primary btn-sm">
                        <a class="btn btn-danger btn-sm" href="javascript:history.back()">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- end: .tray-center -->
      
     
@endsection
