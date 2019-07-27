@extends('layouts.after_login_user.master')
@section('content')
    <div class="col-md-12">
        @include('errors.error')
        <div class="col-md-6">
            <form class="form-horizontal" action="{{ route('user.editData',[$user->id]) }}" method="post">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group">
                        <label for="UserName" class="col-lg-2 control-label">User Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="UserName" class="form-control" value="{{$user->username}}" id="UserName" placeholder="User Name" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="FirstName" class="col-lg-2 control-label">First Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="FirstName" class="form-control" value="{{$user->firstname}}" id="FirstName" placeholder="First Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="LastName" class="col-lg-2 control-label">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="LastName" class="form-control" value="{{$user->lastname}}" id="LastName" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Email" class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" name="Email" class="form-control" value="{{$user->email}}" id="Email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Password" class="col-lg-2 control-label">Password</label>
                        <div class="col-lg-10">
                            <input type="text" name="Password" class="form-control" value="{{$user->password}}" id="Password" placeholder="Password">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Phone" class="col-lg-2 control-label">Phone</label>
                        <div class="col-lg-10">
                            <input type="number" name="Phone" class="form-control" value="{{$user->phone}}" id="Phone" placeholder="Phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Location" class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" name="Address" rows="3"  id="Location">{{$user->address}}</textarea>
                        </div>
                    </div>

                    @if($user->gender=='Male')
                        <div class="form-group">
                            <label class="col-lg-2 control-label">Gender</label>
                            <div class="col-lg-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Gender" id="optionsRadios1" value="Male" checked="">
                                        Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="Gender" id="optionsRadios2" value="Female">
                                        Female
                                    </label>
                                </div>
                            </div>
                        </div>



                    @else
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Gender</label>
                        <div class="col-lg-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Gender" id="optionsRadios1" value="Male" >
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="Gender" id="optionsRadios2" checked="" value="Female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" name="Cancel" class="btn btn-default">Cancel</button>
                            <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

    </div>

@endsection
