@extends('layouts.app')
@section('breadcrumb')
    <?php $pagename = 'Package'; ?>
    <div class="topbar-left">
        <ol class="breadcrumb">
            <span class="glyphicon glyphicon-globe mr10" style="font-size: 14px;"></span>
            <li class="crumb-active">
                <a href="{{ url('package/') }}">
                    <span><?= $pagename ?></span>
                </a>
            </li>
        </ol>
    </div>
@endsection
@section('content')
    @php
    $save = url('package/save');
    $val_package_name = '';
    $val_price = '';
    $val_cat_id = '';
    $addedit = 'Add';
    if ($id != '') {
        $val_package_name = $data->package_name;
        $val_price = $data->price;
        $val_cat_id = $data->cat_id;
        $addedit = 'Edit';
        $nid = $id;
    }
    @endphp
    <!-- begin: .tray-center -->
    <div class="tray tray-center">
        <form role="form" action="{{ $save }}" enctype="multipart/form-data" method="POST">
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
                        {{ $addedit }} {{ $pagename }}
                    </span>
                </div>
                <div class="panel-body">
                    <input type="hidden" name='id' value='{{ $id }}'>
                    {{ editbox('4', 'Package Name', 'package_name', 'Enter Package Name', $val_package_name) }}
                    {{ editbox('4', 'Price', 'price', 'Enter Price ', $val_price) }}
                    {{ uplode('4', 'Package Image', 'images[]', '') }}
                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <label class="form-label semibold">Expense Category <b class="text-danger">*</b></label>
                            {{-- select2-single --}}
                            <select class="form-control select2-single" name="cat_id" id="cat_id">
                                <option value="">--- Select Category ---</option>
                                @foreach ($Categoryname as $item)
                                    <option value="{{ $item->id }}" @if ($val_cat_id == $item->id) selected @endif>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </fieldset>
                    </div>
                </div>
                <table class="table table-bordered table-striped text-center" style="width: 90%; margin: 0 auto;">
                    <thead>
                        <!-- <th>Product Details</th> -->
                        <th>upload</th>
                        <!-- <th>Amount</th> -->
                    </thead>
                    <tbody id="addtarget">
                        <?php
                     $cloop = 0;
                     $c=0;
                     $deletePage="";
                     if ($id != "") {
                    foreach ($imgdata as $row) {
                       $c++;
                       $cloop = $cloop + 1;
                       $subid = $row->id;
                       $c_name = $row->c_name;
                       ?>
                        <tr>
                            <td>
                                <input type="hidden" value="<?= $subid ?>" name="subid_<?php echo $cloop; ?>">

                                {{ uplodes('4', 'Image', 'FileName_' . $cloop, 'Upload File', 'application/*', $cloop) }}
                                {{ editbox('4', 'Channel Name', 'c_name_' . $cloop, 'Enter Channel Name', $c_name) }}
                                <div style="margin-top: 2px;"></div>
                                {{ checkbox('1','payed','is_payd','') }}

                                <a href="{{ URL::to('/') }}/uploads/{{ $row->img }}" target="_blank">
                                    <img src="{{ URL::to('/') }}/100/{{ $row->img }}" class="mw100">
                                </a>

                                <div class="col-md-1 admin-form">
                                    <a href="{{ url('package/deleteimg/' . $nid . '/' . $row->id . '') }}"
                                        style="margin-top:18px;" class="btn btn-danger btn-xs cancel">
                                        <span class="fa fa-trash "></span>
                                    </a>
                                </div>

                            </td>
                        </tr>
                        <?php
                  }
                  } else {
                      $count = 1;
                      $cloop = 0;
                      while ($count > $cloop) {
                     $cloop = $cloop + 1;
                    
                     ?>
                        <tr>
                            <td>
                                {{ uplodes('4', 'Image', 'FileName_' . $cloop, 'Upload File', 'application/*', $cloop) }}
                                {{ editbox('4', 'Channel Name', 'c_name_' . $cloop, 'Enter Channel Name', '') }}
                            </td>
                        </tr>
                        <?php
                  }
                  }
                  ?>
                    </tbody>
                </table>
                <input type="hidden" name="cloop" id="cloop" value="<?php echo $cloop; ?>">
                <div class="clearfix" style="margin-bottom: 30px;"></div>
                <div class="form-group" style="float:left; margin:0px 50px 20px 50px;">
                    <button type="button" class="addpro btn btn-inline btn-primary">Add
                        Data</button>
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

@section('js')
    <script>
        $(".addpro").click(function() {
            var count = $('#cloop').val();
            // alert(count);
            count++;
            $('#cloop').val(count);
            $.get('{{ url('package/cloop') }}/' + count, null, function(result) {
                $("#addtarget").append(result); // Or whatever you need to insert the result
            }, 'html');

        });
    </script>
@endsection
