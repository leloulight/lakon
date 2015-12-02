@extends('member.layout')
@section('style')
<style>
    .ui-datepicker-calendar{
        display: none;
    }
</style>
@stop
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Work Experience
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" action="{{ URL::to('experience') }}" method="POST">
                            <div class="form-group col-lg-6">
                                <label>Job Title</label>
                                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                                <input class="form-control" name='job_title'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Company Name</label>
                                <input class="form-control" placeholder="Enter text" name='company_name'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Start Date</label>
                                <input class="jobdatepicker form-control" placeholder="Enter text" name='start_date'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>End Date</label>
                                <input class="jobdatepicker form-control" placeholder="Enter text" name='end_date'>
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Other Information</label>
                                <textarea class='form-control' name="address" rows="5" name='other_information'></textarea>
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
@section('js')
<script>
    $(function () {
        $('.jobdatepicker').datepicker(
                {
                    dateFormat: "M yy",
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true,
                    onClose: function (dateText, inst) {


                        function isDonePressed() {
                            return ($('#ui-datepicker-div').html().indexOf('ui-datepicker-close ui-state-default ui-priority-primary ui-corner-all ui-state-hover') > -1);
                        }

                        if (isDonePressed()) {
                            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                            $(this).datepicker('setDate', new Date(year, month, 1)).trigger('change');

                            $('.date-picker').focusout()//Added to remove focus from datepicker input box on selecting date
                        }
                    },
                    beforeShow: function (input, inst) {

                        inst.dpDiv.addClass('month_year_datepicker')

                        if ((datestr = $(this).val()).length > 0) {
                            year = datestr.substring(datestr.length - 4, datestr.length);
                            month = datestr.substring(0, 2);
                            $(this).datepicker('option', 'defaultDate', new Date(year, month - 1, 1));
                            $(this).datepicker('setDate', new Date(year, month - 1, 1));
                            $(".ui-datepicker-calendar").hide();
                        }
                    }
                })
    });
</script>
@stop