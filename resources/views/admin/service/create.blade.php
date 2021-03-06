@extends('admin.layout.app')
@section('title', 'Crear nuevo Servicio')
@section('seccion', 'Crear Servicio')
@section('content')
@include('common.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('service.store') }}" method="POST">
                    @csrf
                    <div class="form-body">
                        <h3 class="card-title">Datos del Servicio</h3>
                        <hr>
                        <div class="row p-t-10">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nombre" class="control-label">Nombre</label>
                                    <input required type="text" name="nombre" id="nombre" class="form-control">
                                    <small class="form-control-feedback"> Campo obligatorio </small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="detalle" class="control-label">Detalle del Servicio</label>
                                    <textarea name="detalle" id="detalle" cols="30" rows="5" class="form-control"
                                        required></textarea>
                                    <small class="form-control-feedback"> Campo obligatorio </small> </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn waves-effect waves-light btn-success"> <i
                                class="ti-save menu-icon"></i>
                            Guardar</button>
                        <button type="reset" class="btn waves-effect waves-light btn-secondary">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection