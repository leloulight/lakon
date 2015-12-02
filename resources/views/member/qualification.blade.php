@extends('member.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               Qualification
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="{{ URL::to('qualification') }}" method="POST">
                            <div class="form-group col-lg-6">
                                <label>Kualifikasi</label>
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input class="form-control" name='qualification'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>File Pendukung</label>
                                <input class="form-control" placeholder="Enter text" type="file" name='picture'>
                            </div>
                            <div class="form-group col-lg-8">
                                <label>Keterangan Tambahan</label>
                                <textarea class='form-control' name="address" rows="5" name='information'></textarea>
                            </div>
                             
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                           
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
@stop