@extends('member.layout')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="{{ URL::to('basic') }}" method="POST">
                            <div class="form-group col-lg-6">
                                <label>Full Name</label>
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input class="form-control" name='fullname'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Email Address</label>
                                <input class="form-control" placeholder="Enter text" name='email'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Phone Numbers</label>
                                <input class="form-control" placeholder="Enter text" name='phone'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Website</label>
                                <input class="form-control" placeholder="Enter text" name='website'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Address</label>
                                <textarea class='form-control' name="address" rows="5" name='address'></textarea>
                            </div>
                             <div class="form-group col-lg-6">
                                <label>Photo</label>
                                <input class="form-control" placeholder="Enter text" type="file" name='photo'>
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