@extends('back-end.master')
@section('content')
    @include('includes.pre-loader')
    <div class="dc-appnt_intrv" id="appnt_intrv">
        @if (Session::has('message'))
            <div class="flash_msg">
                <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
            </div>
        @elseif (Session::has('error'))
            <div class="flash_msg">
                <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <section class="dc-haslayout">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="dc-haslayout dc-dbsectionspace">
                        <div class="dc-dashboardbox">
                            <div class="dc-dashboardboxtitle">
                                <h2>{{{ trans('lang.update_appointment_interval') }}}</h2>
                            </div>
                            <div class="dc-dashboardboxcontent dc-addservices">
                                {!! Form::open(['url' => url('admin/appointment-interval/update/'.$appnt_intrv->id), 'class' => 'dc-formtheme dc-formsearch', 'id' => 'speclity'])!!}
                                    <fieldset>
                                        <div class="form-group">
                                            {!! Form::number( 'interval', e($appnt_intrv->interval), ['class' =>'form-control'.($errors->has('interval') ? ' is-invalid' : ''), 'placeholder' => trans('lang.ph.interval')] ) !!}
                                            @if ($errors->has('interval'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('interval') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group dc-btnarea">
                                            {!! Form::submit(trans('lang.update_appnt_intrv'), ['class' => 'dc-btn']) !!}
                                        </div>
                                    </fieldset>
                                {!! Form::close(); !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
