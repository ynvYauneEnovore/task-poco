@extends('layouts.app.master')
@section('title', 'Forgot Password')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid">
  <div class="authentication-main">
    <div class="row">
      <div class="col-md-12 p-0">
        <div class="auth-innerright auth-minibox">
          <div class="reset-password-box">
            <div class="text-center"><a href="{{ route('/') }}"><img src="{{ asset('assets/images/logo/logo.png') }}" alt=""></a></div>
            <div class="card mt-4 mb-0">
              <div class="card-body p-0">
                <h4>Reset Your Password</h4>
                <form class="theme-form">
                  <div class="form-group">
                    <label class="col-form-label">Enter Your Mobile Number</label>
                    <div class="form-row">
                      <div class="col-md-2">
                        <input class="form-control digits mb-1" type="text" value="+ 91">
                      </div>
                      <div class="col-md-7 col-xl-8">
                        <input class="form-control digits mb-1" type="tel" value="000-000-0000">
                      </div>
                      <div class="col-md-2">
                        <button class="btn btn-primary m-0" type="submit">Send</button>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mt-4 mb-4"><span class="reset-password-link">If don't receive OTP?  <a class="btn-link text-danger" href="#">Resend</a></span></div>
                  <div class="form-group rounded p-4 opt-box">
                    <label class="col-form-label pt-0">Enter OTP</label>
                    <div class="form-row">
                      <div class="col">
                        <input class="form-control digits text-center opt-text" type="text" value="00" maxlength="2">
                      </div>
                      <div class="col">
                        <input class="form-control digits text-center opt-text" type="text" value="00" maxlength="2">
                      </div>
                      <div class="col">
                        <input class="form-control digits text-center opt-text" type="text" value="00" maxlength="2">
                      </div>
                    </div>
                  </div>
                  <h6 class="f-14 mt-4 mb-3">CREATE YOUR PASSWORD</h6>
                  <div class="form-group">
                    <label class="col-form-label">New Password</label>
                    <input class="form-control" type="password">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label">Retype Password</label>
                    <input class="form-control" type="password">
                  </div>
                  <div class="form-group form-row mb-2">
                    <div class="col-md-2">
                      <button class="btn btn-primary" type="submit">Done</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
@endsection