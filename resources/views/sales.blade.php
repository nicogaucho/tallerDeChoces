@extends('layouts.app')
@section('content')

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Añade tu coche</h5>
              <form class="form-signin" action="{{route('sales.submit')}}" method="GET">
                @csrf
                <div class="form-label-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    <label for="inputEmail">Correo</label>
                  </div>
                <div class="form-label-group">
                  <input type="text" name="marca" class="form-control" placeholder="Nombre de tu coche" required>
                  <label for="inputText">Marca</label>
                </div>
  
                <div class="form-label-group">
                  <textarea name="descripcion" cols="30" rows="10" required></textarea>
                 
                </div>
               
            
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sube tu coche</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection