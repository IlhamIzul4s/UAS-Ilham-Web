@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-10">
              <div class="card">
                  <div class="card-header">Edit Booking</div>
                  <div class="card-body">
  
                      <form action="{{ route('bookings.update' , $user->id) }}"  method="POST">
                        @csrf
                        @method('PUT')
                          <div class="form-group row mt-3">
                              <label for="name" class="col-md-4 col-form-label text-right">Name</label>
                              <div class="col-md-6">
                                    <input type="hidden" id="id" name="id" value="{{ $user->id }}">
                                    <input type="text" id="name" class="form-control" name="name" required autofocus value="{{ $user->name }}">
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row mt-3">
                              <label for="email_address" class="col-md-4 col-form-label text-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required value="{{ $user->email }}">
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row mt-3">
                              <label for="password" class="col-md-4 col-form-label text-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" >
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row mt-3">
                            <label for="role" class="col-md-4 col-form-label text-right">Role</label>
                            <div class="col-md-6">
                                <select class="form-select" id="role" name="role" aria-label="role">
                                    <option value="">Choose</option>
                                    @foreach($roles as $val)
                                        <option value="{{$val->guid}}" {{ ($val->guid == $user->role) ? 'selected' : '' }}>{{$val->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('role'))
                                    <span class="text-danger">{{ $errors->first('role') }}</span>
                                @endif
                            </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                              <button type="submit" class="btn btn-primary">
                                  Save
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection