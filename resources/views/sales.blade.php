@extends('layouts.app')
@section('content')

<div class="container my-5 py-3">
  <div class="row">
    <div class="col-12">
      <h3 class="text-third font-weight-bold text-center text-uppercase">Insertar aquí tu anuncio</h3>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-12 col-md-6">
        <form>
          <div class="form-row">
            <div class="form-group col-12">
              <label class="text-secondary font-weight-bold" for="inputEmail4">Nombre Coche</label>
              <input type="text" class="form-control rounded-0">
            </div>
          </div>
          <div class="form-row mt-2">
            <div class="form-group col-12">
              <label class="text-secondary font-weight-bold" for="inputCoche">Precio de Venta</label>
              <input type="text" class="form-control rounded-0">
            </div>
          </div>
          <div class="form-group mt-2 ">
            <label class="text-secondary font-weight-bold" for="exampleFormControlFile1">Insertar una imagen</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <div class="form-row mt-5">
            <div class="form-group col-12">
              <textarea name="description" id="" class="rounded-0" cols="58" rows="10" placeholder="Deja una description..."></textarea>
            </div>
          </div>
          <button type="submit" class="btnvisita"><span class="small">Envia</span></button>
        </form>
      
    </div>
    <div class="col-12 col-md-6 text-center">
          <img src="/img/announcement.svg" width="450" alt="">
    </div>
  </div>
</div>


 


@endsection