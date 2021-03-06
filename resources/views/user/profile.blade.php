@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Dashboard > Profil Pengguna</div>
                    <div class="panel-body">

                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="justify-content-center">
                                <div class="profile-header-container">
                                    <div class="profile-header-img">
                                        <img class="rounded-circle" src="../img/{{ Auth::user()->avatar }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                                <label for="nama" class="col-md-4 control-label">Nama Lengkap</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control" name="nama" value="{{ Auth::user()->nama }}" required autofocus>

                                    @if ($errors->has('nama'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('nama') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" value="{{ Auth::user()->password }}" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Ulangi Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ Auth::user()->password }}" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('telp') ? ' has-error' : '' }}">
                                <label for="telp" class="col-md-4 control-label">No. Telepon</label>

                                <div class="col-md-6">
                                    <input id="telp" type="text" class="form-control" name="telp" value="{{ Auth::user()->telp }}" required>

                                    @if ($errors->has('telp'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('telp') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Perbarui Profil
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>  

            </div>
        </div>
    </div>
</div>
@endsection
