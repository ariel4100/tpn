@extends('page.layouts.app')
@section('style')
    <style>

    </style>
@endsection
@section('content')

<div class="container my-5">
    <div class="row  ">
        <div class="col-md-12">
             <h4 class="tpn-blue font-weight-bold">PEDIDO DE RETIRO</h4>
            <p>Complete el siguiente formulario para solicitar un retiro. Nuestro equipo se contactará a la brevedad con más información.</p>
        </div>
    </div>
</div>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: #F9F9F9; border-left: 3px solid #04599B;">
                    <div class="card-body tpn-blue font-weight-bold">
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
                        <input type="text" class="form-control" id="Nombre" name="nombre"  required>
                        <label for="Nombre" class="required">Nombre <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Apellido" name="apellido"  required>
                        <label for="Apellido" class="required">Apellido <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Empresa" name="empresa" required>
                        <label for="Empresa" class="required">Empresa <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Telefono" name="telefono" required>
                        <label for="Telefono" class="required">Telefono <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="email" class="form-control" id="Email" name="email" required>
                        <label for="Email" class="required">Email <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Localidad" name="localidad" required>
                        <label for="Localidad" class="required">Localidad <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Dirección" name="direccion" required>
                        <label for="Dirección" class="required">Dirección <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Postal" name="postal" required>
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
                        <input type="text" class="form-control" id="empresa_remitente" name="empresa_remitente" required>
                        <label for="empresa_remitente" class="required">Empresa <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="direccion_remitente" name="direccion_remitente" required>
                        <label for="direccion_remitente" class="required">Dirección <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="localidad_remitente" name="localidad_remitente" required>
                        <label for="localidad_remitente" class="required">Localidad <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="postal_remitente" name="postal_remitente" required>
                        <label for="postal_remitente" class="required">Código Postal <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="ciudad_remitente" name="ciudad_remitente" required>
                        <label for="ciudad_remitente" class="required">Ciudad <span style="color: red">*</span></label>
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
                    <select class="custom-select md-form" name="solicita">
                        <option selected>Solicita</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="custom-select md-form" name="servicio">
                        <option selected>Tipo de Servicio</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="destino" name="destino" required>
                        <label for="destino" class="required">Con destino a <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="detalleTelefono" name="telefono_detalle" required>
                        <label for="detalleTelefono" class="required">Teléfono <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="entrega" name="entrega" required>
                        <label for="entrega" class="required">Horario de entrega <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="detalleLocalidad" name="localidad_detalle" required>
                        <label for="detalleLocalidad" class="required">Localidad <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Bultos" name="bultos" required>
                        <label for="Bultos" class="required">Cantidad de Bultos <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="custom-select md-form" name="carga">
                        <option selected>Tipo de Carga</option>
                        <option value="1">General</option>
                        <option value="2">Peligrosa</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Peso" name="peso" required>
                        <label for="Peso" class="required">Peso en kilos <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Embalaje" name="embalaje" required>
                        <label for="Embalaje" class="required">Embalaje <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Medidas" name="medidas" required>
                        <label for="Medidas" class="required">Medidas <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="md-form form-group">
                        <input type="text" class="form-control" id="Mercadería" name="mercaderia" required>
                        <label for="Mercadería" class="required">Valor declarado de Mercadería en pesos ($) <span style="color: red">*</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="custom-select md-form" name="seguro">
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
                            <input type="file" class="custom-file-input" id="inputGroupFile01" name="ficha" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Adjuntar archivo</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea id="observaciones" class="md-textarea form-control" name="observacion" rows="3"></textarea>
                        <label for="observaciones">Otras observaciones</label>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="g-recaptcha" data-sitekey="6LfxBKAUAAAAALkxGpbMmbopqVeVZYR3Q64Hg-ts"></div>
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
