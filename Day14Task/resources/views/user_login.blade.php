@extends('layouts.before_login.master')
@section('content')
    <div class="col-md-12">
        <div class="col-md-6">
            <form class="form-horizontal" action="{{ route('user.loginData') }}" method="post">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group">
                        <label for="Email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="text" name="Email" class="form-control" id="Email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="password" name="Password" class="form-control" id="Password" placeholder="Password">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">LogIn</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

@endsection
