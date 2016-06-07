@extends('layouts.app')

@section('content')

    @if (!empty($success))

        <div class="alert alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <div class="alert alert-info">

        {{ $success }}

                </div>
            </div>


    @endif



    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><h1>Donate Medicines</h1></center></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/donate') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Phone</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone" value="{{ Auth::user()->phone }}" maxlength="10">

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('medicine') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Medicines</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="medicine" value="{{ old('mediicine') }}" ></textarea>

                                    @if ($errors->has('medicine'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('medicine') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('cause') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Specific Usage(any)</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="usage" value="{{ old('usage') }}" >

                                    @if ($errors->has('usage'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('usage') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quanity') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Quantity</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="quantity" value="1" min="1">

                                    @if ($errors->has('quantity'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>





                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Pickup Address</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="address" value="{{ Auth::user()->address }}, {{ Auth::user()->city }}, {{ Auth::user()->state }}, {{ Auth::user()->pincode }}">

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('ngo') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Near-by NGO</label>

                                <div class="col-md-6">
                                    <select name=ngo class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>

                                    </select>
                                    @if ($errors->has('ngo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('ngo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
















                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Donate
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection