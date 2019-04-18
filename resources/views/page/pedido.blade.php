@extends('page.layouts.app')
@section('style')
    <style>

    </style>
@endsection
@section('content')

<div class="container">
    <div class="row  ">
        <div class="col-md-12">
             <h4>PEDIDO DE RETIRO</h4>
            <p>Complete el siguiente formulario para solicitar un retiro. Nuestro equipo se contactará a la brevedad con más información.</p>
        </div>
    </div>
</div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: #F9F9F9; border-left: 3px solid #04599B;">
                    <div class="card-body">
                        Cliente
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Nombre"  required>
                        <label for="Nombre" class="required">Nombre <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Apellido"  required>
                        <label for="Apellido" class="required">Apellido <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Empresa"  required>
                        <label for="Empresa" class="required">Empresa <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Telefono"  required>
                        <label for="Telefono" class="required">Telefono <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="email" class="form-control" id="Email"  required>
                        <label for="Email" class="required">Email <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Localidad"  required>
                        <label for="Localidad" class="required">Localidad <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Dirección"  required>
                        <label for="Dirección" class="required">Dirección <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Postal"  required>
                        <label for="Postal" class="required">Código Postal <span style="color: red">*</span></label>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: #F9F9F9; border-left: 3px solid #04599B;">
                    <div class="card-body">
                        Remitente
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Empresa"  required>
                        <label for="Empresa" class="required">Empresa <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Dirección"  required>
                        <label for="Dirección" class="required">Dirección <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Localidad"  required>
                        <label for="Localidad" class="required">Localidad <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Postal"  required>
                        <label for="Postal" class="required">Código Postal <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Ciudad"  required>
                        <label for="Ciudad" class="required">Ciudad <span style="color: red">*</span></label>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: #F9F9F9; border-left: 3px solid #04599B;">
                    <div class="card-body">
                        Detalle
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="form-row">
                <!-- Grid column -->
                <div class="col-md-6">
                    <select class="custom-select md-form">
                        <option selected>Solicita</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="custom-select md-form">
                        <option selected>Tipo de Servicio</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="destino"  required>
                        <label for="destino" class="required">Con destino a <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="detalleTelefono"  required>
                        <label for="detalleTelefono" class="required">Teléfono <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="entrega"  required>
                        <label for="entrega" class="required">Horario de entrega <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="detalleLocalidad"  required>
                        <label for="detalleLocalidad" class="required">Localidad <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Bultos"  required>
                        <label for="Bultos" class="required">Cantidad de Bultos <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="custom-select md-form">
                        <option selected>Tipo de Carga</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Peso"  required>
                        <label for="Peso" class="required">Peso en kilos <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Embalaje"  required>
                        <label for="Embalaje" class="required">Embalaje <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Medidas"  required>
                        <label for="Medidas" class="required">Medidas <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Mercadería"  required>
                        <label for="Mercadería" class="required">Valor declarado de Mercadería en pesos ($) <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="custom-select md-form">
                        <option selected>¿Posee seguro para la carga?</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="input-group md-form">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Adjuntar archivo</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea id="observaciones" class="md-textarea form-control" rows="3"></textarea>
                        <label for="observaciones">Otras observaciones</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Material unchecked -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialUnchecked">
                        <label class="form-check-label" for="materialUnchecked">Material unchecked</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Acepto los términos y condiciones de privacidad</label>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="" class="btn btn-danger">ENVIAR</a>
            </div>
        </div>
    </div>
@endsection
