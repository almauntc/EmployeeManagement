@extends('system-mgmt.country.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update company</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('country.update', ['id' => $country->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $country->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('country_code') ? ' has-error' : '' }}">
                            <label for="country_code" class="col-md-4 control-label">Company Code</label>

                            <div class="col-md-6">
                                <input id="country_code" type="text" class="form-control" name="country_code" value="{{ $country->country_code }}" required>

                                @if ($errors->has('country_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="email" value="{{ $country->email }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="website" class="col-md-4 control-label">Website</label>

                            <div class="col-md-6">
                                <input id="website" type="text" class="form-control" name="website" value="{{ $country->website }}" required autofocus>

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
							<br><br>
							<div class="form-group">
                            <label for="avatar" class="col-md-4 control-label" >Logo</label>
                            <div class="col-md-6">
                                
                                <input type="file" id="logo" name="logo" />
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
