@extends('layouts.app')
@section('content')
<div class="container my-5 py-5">
  <div class="row">
    <div class="col-12">
      <h2 class="text-third font-weight-bold text-center text-uppercase">inscribirse</h2>
      <p class="text-secondary text-center h4">para estar siempre actualizado con los últimos anuncios</p>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-12 col-md-6 text-center">
      <img src="/img/subscribe.svg" width="450" alt="">
</div>
    <div class="col-12 col-md-6">
    <form action="{{route('contact.submit')}}" method="POST">
        @csrf
          <div class="form-row">
            <div class="form-group col-12">
              <label class="text-secondary font-weight-bold" for="inputEmail4">Tu nombre</label>
              <input type="text" name="name" class="form-control rounded-0">
            </div>
          </div>
          <div class="form-row mt-2">
            <div class="form-group col-12">
              <label for="exampleInputEmail1" class="text-secondary">Correo Electronico</label>
              <input type="email" name="email" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">Protegerle sus datos lo mejor que podamos </small>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1" class="text-secondary">Contrasena</label>
            <input type="password" name="password" class="form-control rounded-0" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btnvisita mt-3"><span class="small">Envia</span></button>
        </form> 
    </div>
  </div>
</div>

@endsection