@extends('layouts.app')

@section('content')
<div class="dashboard_right_container">
        <h3 class="page_title">{{ __('Report Issue') }}</h3>

        <div class="panel-body">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
               
                <script language="javascript">
                    $(document).ready(function() {
                        $('#branch_list').DataTable({
                            "scrollX": true
                        });
                        
                        
                        var check = $('#reportissue').find('input[type=checkbox]:checked').length;
                        if(check==0){
                            //alert('Please select any Question!');                           
                        }else{
                            return false;
                        };

                        // $("select#catagory").change(function(){
                        //     var selectedCountry = $("#catagory option:selected").val();
                        //     alert("You have selected the catagory - " + selectedCountry);
                        // });
                           
                    });
                    function myFunction($e){
                            //alert($e);
                        if ($("#Chkbox"+$e).is(':checked')){
                            //alert('Checked');
                            $('#page_no'+$e).show();
                            $('#sl_no'+$e).show();
                            $('#description'+$e).show();
                            $("#page_no"+$e+" input[type='text']").prop('required',true);
                            $("#sl_no"+$e+" input[type='text']").prop('required',true);
                            $("#description"+$e+" input[type='text']").prop('required',true);
                            
                        }else{
                            //alert('Not Checked');
                            $('#page_no'+$e).hide();
                            $('#sl_no'+$e).hide();
                            $('#description'+$e).hide();
                            $('#page_no'+$e+" input[type='text']").val('');
                            $('#sl_no'+$e+" input[type='text']").val('');
                            $('#description'+$e+" input[type='text']").val('');
                            $("#page_no"+$e+" input[type='text']").prop('required',false);
                            $("#sl_no"+$e+" input[type='text']").prop('required',false);
                            $("#description"+$e+" input[type='text']").prop('required',false);
                        }
                        
                            
                    }
                    
                    function getQuestionByCat(){
                        //$("select#catagory").change(function(){
                            var selectedcatagory = $("#catagory option:selected").val();
                            //alert("You have selected the catagory - " + selectedcatagory);
                        //});
                        if(selectedcatagory !== "") {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type:'POST',
                                url:"{{ route('getQuesByCat') }}",                               
                                dataType: 'json',
                                data: { id:selectedcatagory },
                               
                                success:function(data){
                                    //console.log(data.msg);
                                    //alert(data.msg.length);
                                    var i;
                                    var makeQuesHTML ='';
                                if(data.msg.length > 0){
                                    for ( i=0; i < data.msg.length; i++){
                                        makeQuesHTML += '<a  class="list-group-item">';
                                        makeQuesHTML += '<div class="form-check">'
                                        makeQuesHTML += '<input type="checkbox" class="form-check-input" id="Chkbox'+data.msg[i]['ques_id']+'" name="quesChecked[]" value="'+data.msg[i]['ques_id']+'" onclick="myFunction('+data.msg[i]['ques_id']+')" >';
                                        makeQuesHTML += ' <label class="form-check-label" for="Chkbox'+data.msg[i]['ques_id']+'">';
                                        makeQuesHTML += '<h5 class="list-group-item-heading"></h5>';
                                        makeQuesHTML += '<p class="list-group-item-text"> '+data.msg[i]['question']+'</p></label>';
                                         //<!--page no-->
                                        makeQuesHTML +='<div class="form-group row" id="page_no'+data.msg[i]['ques_id']+'" style="display: none;">';
                                        makeQuesHTML+='<label for="page_no'+data.msg[i]['ques_id']+'" class="col-md-4 control-label"><b>Page No</b></label>';

                                        makeQuesHTML+= '<div class="col-md-6">';
                                        makeQuesHTML+= '<input id="page_no'+data.msg[i]['ques_id']+'" type="text" class="form-control" name="page_no'+data.msg[i]['ques_id']+'" value="" placeholder="Page No"  >';
                                        makeQuesHTML+='</div></div>';
                                        //<!--page no End-->
                                        //<!--SL no -->
                                        makeQuesHTML+= '<div class="form-group row" id="sl_no'+data.msg[i]['ques_id']+'" style="display: none;">';
                                        makeQuesHTML+= '<label for="sl_no'+data.msg[i]['ques_id']+'" class="col-md-4 control-label"><b>SL No</b></label>';

                                        makeQuesHTML+='<div class="col-md-6">';
                                        makeQuesHTML+= '<input id="sl_no'+data.msg[i]['ques_id']+'" type="text" class="form-control" name="sl_no'+data.msg[i]['ques_id']+'" value="" placeholder="SL No"  >';                                    
                                        makeQuesHTML+= '</div></div>';
                                        //<!--SL no End -->
                                        //<!---Description-->
                                        makeQuesHTML+='<div class="form-group row" id="description'+data.msg[i]['ques_id']+'" style="display: none;">';
                                        makeQuesHTML+='<label for="description" class="col-md-4 control-label"><b>Description</b></label>';

                                        makeQuesHTML+='<div class="col-md-6">';
                                        makeQuesHTML+='<textarea id="description'+data.msg[i]['ques_id']+'" class="form-control" name="description'+data.msg[i]['ques_id']+'" value="" placeholder="Description" ></textarea>';
                                        makeQuesHTML+='</div></div>';
                                        //<!--Description End-->

                                        makeQuesHTML += '</div></a>';
                                    }//end for
                                }else { makeQuesHTML += 'Question Not Found!'}  // end if    
                                
                              
                                    //data.msg[1]['question']
                                    $("#question").html(makeQuesHTML);
                                }
                            });
                        }
                    }
                          
                </script>
               
        <!--<div class="service">-->
            <div class="service_col service_col_stmt col-md-12 ">
                <h3 class="page_title">Input Form:</h3>
                <form class="form-horizontal" id="reportissue" method="POST" action="{{ route('report-issue') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('branchname') ? ' has-error' : '' }} row" >
                        <label for="branchname" class="col-md-4 control-label"><b>{{__('Branch Name')}}</b></label>

                        <div class="col-md-6">
                            <!-- <input id="branchname" type="text" class="form-control {{ $errors->has('branchname') ? ' is-invalid' : '' }}" value="{{ old('branchname') }}" name="branchname"  placeholder="{{ __('Branch Name') }}" autofocus required> -->
                            <select id="branchname" name="branchname" class="form-control" autofocus required>
                                <option value="" >-- Select Branch --</option>
                                @foreach ($branch as $br)
                                <option value="{{ $br->branchid}}" >{{ $br->branch_name}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('branchname'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('branchname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('catagory') ? ' has-error' : '' }} row">
                        <label for="catagory" class="col-md-4 control-label"><b>{{__('Catagory')}}</b></label>

                        <div class="col-md-6">
                            <!-- <input id="catagory" type="text" class="form-control{{ $errors->has('catagory') ? ' is-invalid' : '' }}" name="catagory" 
                            value="{{ old('catagory') }}" placeholder="{{ __('Catagory') }}" autofocus required> -->

                            <select id="catagory" name="catagory" class="form-control" autofocus required onchange="getQuestionByCat()">
                                <option value="" >-- Select Catagory --</option>
                                @foreach ($cat as $pCat)
                                <option value="{{ $pCat->catid}}" >{{ $pCat->cat_name}}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('catagory'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('catagory') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }} row">
                        <label for="question" class="col-md-4 control-label"><b>{{__('Question')}}</b></label>

                        <div class="col-md-6">
                            <div class="list-group">
                                    <div id="question">Please Select a Catagory</div>
                            </div>
                            <!-- <input id="question" type="text" class="form-control{{ $errors->has('question') ? ' is-invalid' : '' }}" name="question" 
                            value="{{ old('question') }}" placeholder="{{ __('Question') }}" required> -->
                            
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('followup') ? ' has-error' : '' }} row">
                        <label for="followup" class="col-md-4 control-label"><b>{{__('Follow Up')}}</b></label>

                        <div class="col-md-6">
                            <!-- <input id="followup" type="text" class="form-control{{ $errors->has('followup') ? ' is-invalid' : '' }}" name="followup"
                            value="{{ old('followup') }}"  placeholder="{{ __('Follow Up') }}" required> -->
                            <select id="followup" name="followup" class="form-control"  required autofocus ">
                                <option value="" >-- Select one --</option>
                                <option value="1" >1st Followup</option>
                                <option value="2" >2nd Followup</option>
                                <option value="3" >3rd Followup</option>
                            </select>

                            @if ($errors->has('followup'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('followup') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('lapses') ? ' has-error' : '' }} row">
                        <label for="followup" class="col-md-4 control-label"><b>{{__('Lapses')}}</b></label>

                        <div class="col-md-6">
                            <input id="lapses" type="text" class="form-control{{ $errors->has('lapses') ? ' is-invalid' : '' }}" name="lapses" 
                            value="{{ old('lapses') }}" placeholder="{{ __('Lapses') }}" autofocus required>

                            @if ($errors->has('lapses'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('lapses') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} row">
                        <label for="description" class="col-md-4 control-label"><b>{{ __('Description') }}</b></label>

                        <div class="col-md-6">
                            <textarea id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" placeholder="{{ __('description') }}" autofocus required>{{ old('Description') }}</textarea>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                {{ __('Add Issue') }}
                            </button>
                        </div>
                    </div>
                </form>
            
            </div>

            
            <div class="service_col service_col_stmt col-md-12">
                <h3 class="page_title">Issue Table:</h3>
                <table id="branch_list" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                         <tr>
                            <th >#SL</th>
                            <th >Branch Name</th>
                            <th >Address</th>
                            <th >Contact</th>
                            <th >Email</th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                         <tr>
                            <th >#SL</th>
                            <th >Branch Name</th>
                            <th >Address</th>
                            <th >Contact</th>
                            <th >Email</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
        
        <!--</div>-->
    </div>
</div>

@endsection