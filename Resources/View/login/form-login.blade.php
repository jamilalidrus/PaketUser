@extends('JamilTemplate::TemplateKelolahData.login')
@section("content")

@if(Session::has('pesan'))
<div class="alert alert-danger alert-dismissable">
    
    <dt style="font-family:verdana;"><i class="fa fa-check"></i>    {{Session::get('pesan')}}</dt>
    
</div>  
@endif
@if(Session::has('message'))
<div class="alert alert-danger alert-dismissable">

    <dt style="font-family:verdana;"><i class="fa fa-check"></i>    {{Session::get('message')}}</dt>

</div>  
@endif
</div>
<form class="m-t" role="form" method="post" action="{{url('/proses-login')}}">
    <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Username" required="">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Password" required="">
    </div>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

    <a href="#"><small>Forgot password?</small></a>
    <p class="text-muted text-center"><small>Belum Memiliki Akun</small></p>
    <a class="btn btn-sm btn-white btn-block" href="{{url('/index/registrasi')}}">Registrasi</a>
</form>
@stop()