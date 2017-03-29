@extends('app')
@section('title')
   Usuarios
@endsection
@section('my_styles')
    <!-- Select2 -->
    {!! Html::style('assets/vendors/select2-4.0.3/dist/css/select2.css') !!}
    <!-- Switchery -->
    {!! Html::style('assets/vendors/switchery/dist/switchery.min.css') !!}
    <!-- Form Mine -->
    {!! Html::style('assets/mine/css/uikit.almost-flat.min.css') !!}
    {!! Html::style('assets/mine/css/form.css') !!}
@endsection
@section('content')
    <div class="x_panel">
        <div class="x_title">
        <h2><i class="fa fa-user"></i> Usuario <i class="fa fa-angle-right text-danger"></i><small> Crear</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li>
                    <a class="" href="{{ route('usuario.index') }}">
                        <i class="fa fa-long-arrow-left"></i>
                    </a>
                </li>
                <li>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            {!! Form::open([ 'route' => 'usuario.store', 'method' => 'POST', 'files' => 'true', 'class' => 'uk-form bt-flabels js-flabels', 'data-parsley-validate' => 'on', 'data-parsley-errors-messages-disabled' => 'on']) !!}
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab_content1" id="general-tab" role="tab" data-toggle="tab" aria-expanded="true">Datos Generales</a>
                        </li>
                        <li role="presentation" class="">
                            <a href="#tab_content3" role="tab" id="foto-tab" data-toggle="tab" aria-expanded="false">Fotografía</a>
                        </li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="general-tab">
                            <div class="bt-form__wrapper">
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper">
                                            {!! Form::label('nombre', 'Nombre(s)', ['for' => 'nombre'] ) !!}
                                            {!! Form::text('nombre', null , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-length' => '[3, 30]', 'id' => 'nombre', 'autocomplete' => 'off', 'placeholder' => 'Nombre(s)' ]  ) !!}
                                            <span class="bt-flabels__error-desc">Requerido / Mín: 3 - Máx: 30 caracteres</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper bt-flabels--right">
                                            {!! Form::label('paterno', 'Apellido Paterno', ['for' => 'paterno'] ) !!}
                                            {!! Form::text('paterno', null , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-length' => '[3, 20]', 'id' => 'paterno', 'autocomplete' => 'off', 'placeholder' => 'Apellido Paterno' ]  ) !!}
                                            <span class="bt-flabels__error-desc">Requerido / Mín: 3 - Máx: 20 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper">
                                            {!! Form::label('materno', 'Apellido Materno', ['for' => 'materno'] ) !!}
                                            {!! Form::text('materno', null , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-length' => '[3, 20]', 'id' => 'materno', 'autocomplete' => 'off', 'placeholder' => 'Apellido Paterno' ]  ) !!}
                                            <span class="bt-flabels__error-desc">Requerido / Mín: 3 - Máx: 20 caracteres</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper bt-flabels--right">
                                            {!! Form::label('direccion', 'Dirección', ['for' => 'direccion'] ) !!}
                                            {!! Form::text('direccion', null , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-length' => '[10, 80]', 'id' => 'direccion', 'autocomplete' => 'off', 'placeholder' => 'Dirección' ]  ) !!}
                                            <span class="bt-flabels__error-desc">Requerido / Mín: 10 - Máx: 80 Caracteres</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper">
                                            {!! Form::label('idJurisdiccion', 'Jurisdicción', ['for' => 'idJurisdiccion'] ) !!}
                                            {!! Form::select('idJurisdiccion', $jurisdicciones, 1, ['class' => 'form-control js-data-jurisdiccion select2', 'data-parsley-required' => 'true', 'data-parsley-type' => 'number', 'data-parsley-min' => '1', 'id' => 'idJurisdiccion', 'style' => 'width:100%'] ) !!}
                                            <span class="bt-flabels__error-desc">Requerido</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper bt-flabels--right">
                                            {!! Form::label('email', 'Correo electrónico', ['for' => 'email'] ) !!}
                                            {!! Form::text('email', null , ['class' => 'form-control', 'data-parsley-type' => 'email', 'data-parsley-required' => 'true', 'id' => 'email', 'autocomplete' => 'off', 'placeholder' => 'micorreo@correo.com' ]  ) !!}
                                            <span class="bt-flabels__error-desc">Correo electrónico requerido</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper">
                                            {!! Form::label('password', 'Password', ['for' => 'password'] ) !!}
                                            {!! Form::password('password', null , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-length' => '[6, 20]', 'id' => 'password', 'autocomplete' => 'off', 'placeholder' => 'Password' ]  ) !!}
                                            <span class="bt-flabels__error-desc">Requerido / Mín: 6 - Máx: 20 caracteres</span>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2">
                                        <div class="bt-flabels__wrapper bt-flabels--right">
                                            {!! Form::label('password_confirmation', 'Repetir Password', ['for' => 'password_confirmation'] ) !!}
                                            {!! Form::password('password_confirmation', null , ['class' => 'form-control', 'data-parsley-required' => 'true', 'data-parsley-length' => '[6, 20]', 'id' => 'password_confirmation', 'autocomplete' => 'off', 'placeholder' => 'Repetir Password' ]  ) !!}
                                            <span class="bt-flabels__error-desc">Requerido / Mín: 6 - Máx: 20 caracteres</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            <div class="row">
                                <div class="col-md-1 text-right">
                                    {!! Form::checkbox('activo', '1', true, ['class' => 'js-switch', 'id' => 'activo'] ) !!}
                                </div>
                                <div class="col-md-3">
                                    <span class="active-ratio switch-mine switch-yes show " ><i class="fa fa-heart span-active"></i> En actividad! </span> <span class="text-default switch-mine switch-not hidden " ><i class="fa fa-heartbeat text-default"></i> Inactivo </span> 
                                </div>
                                <div class="col-md-1 text-right">
                                    
                                </div>
                                <div class="col-md-3">
                                   
                                </div>
                                <div class="col-md-1 text-right">
                                    
                                </div>
                                <div class="col-md-3">
                                   
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="foto-tab">
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    {!! Form::file('foto', null , ['class' => 'form-control img-load', 'id' => 'foto', 'accept' => 'image/jpeg,image/jpg'] ) !!}
                                    <br>
                                    <p class="text-info">La imagén seleccionada será redimensionada!</p>
                                    <h3>250 x 250 <small>Tamaño sugerido</small> </h3>
                                    <p>Sólo imágenes tipo: .jpeg y .jpg</p>
                                </div>
                                <div class="col-md-6">
                                    <div id="yes-image" class="show">
                                        <div style="display:inline-block; margin-right:50px;" class="text-center">
                                            <h3>Normal</h3>
                                            <img id="img_destino" src="{{ url('storage/propietario/profile/user-default.png') }}" class="img-rounded" border="0px" width="250px" height="250px" alt="">
                                        </div>
                                        <div style="display:inline-block;" class="text-center">
                                            <h3>Perfil</h3>
                                            <img id="img_destinop" src="{{ url('storage/propietario/profile/user-default.png') }}" class="img-circle" border="0px" width="80px" height="80px" alt="">
                                        </div>
                                    </div>
                                    <div id="no-image" class="text-center hidden">
                                        <h3 class="text-danger">Seleccione una imagen</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('errors.msgAll')
                <div class="ln_solid"></div>
                <div class="uk-text-center uk-margin-top">
                    <button type="reset" class="btn btn-primary"> <i class="fa fa-eraser"></i> Limpiar</button>
                    @role('admin|root')
                        @permission('create.usuarios')<button type="submit" class="btn btn-success btn-large js-submit"> <i class="fa fa-save"></i> Guardar</button>@endpermission
                    @endrole
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
@section('my_scripts')
    <!-- Select2 -->
    {!! Html::script('assets/vendors/select2-4.0.3/dist/js/select2.min.js') !!}
    {!! Html::script('assets/vendors/select2-4.0.3/dist/js/i18n/es.js') !!}
    <!-- jQuery Tags Input -->
    {!! Html::script('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') !!}
    <!-- Switchery -->
    {!! Html::script('assets/vendors/switchery/dist/switchery.min.js') !!}
    <!-- File Input -->
    {!! Html::script('assets/mine/js/bootstrap.file-input.js') !!}
    <!-- Form Mine -->
    {!! Html::script('assets/mine/js/parsleyjs/2.1.2/parsley.min.js') !!}
    {!! Html::script('assets/mine/js/floating-labels.js') !!}
    {!! Html::script('assets/mine/js/myCheckBox.js') !!}
    {!! Html::script('assets/mine/js/myMessage.js') !!}
    {!! Html::script('assets/mine/js/myfileImage.js') !!}
    {!! Html::script('assets/mine/js/myTags.js') !!}

    <script>
        $(document).ready(function(e){
            $("#password").prop('placeholder','Escribir un password');
            $("#password_confirmation").prop('placeholder','Repetir password');
        });
    </script>
    <!--<script>
        $(document).ready(function(e){
            $('.swRole').change(function(e){
                e.preventDefault();
                var row = $(this).parents('h4');
                var id = row.data('id');
                if($(this).is(':checked')) {
                    $("input[id*='role-"+id+"-permiso-']").prop('checked',true);
                    console.log(1);
                } else {
                    console.log(0);
                    $("input[id*='role-"+id+"-permiso-']").prop('checked',false);
                }
            });

            $("#password").prop('placeholder','Escribir un password');
            $("#password_confirmation").prop('placeholder','Repetir password');
        });
    </script>-->

    <!-- Select2 personalizado -->
    <script>
        //var localidad = { 'id':null, 'nombre':'Seleccionar una localidad', 'municipio':'','estado':'' };
        $(".js-data-jurisdiccion").select2();
        /*$(".js-data-localidad-ajax").select2({
            ajax: {
                url: "/catalogo/localidad/search",
                dataType: 'json',
                delay: 250,
                data: function (params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
                },
                processResults: function (data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;

                return {
                    results: $.map(data, function (item) {  // hace un  mapeo de la respuesta JSON para presentarlo en el select
                        return {
                            id:        item.id,
                            nombre: item.nombre,
                            municipio: item.municipio.nombre,
                            estado: item.municipio.estado.abreviatura
                        }
                    }),
                    pagination: {
                    more: (params.page * 30) < data.total_count
                    }
                };
                },
                cache: true
            },
            escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
            minimumInputLength: 5,
            language: "es",
            placeholder: {
                id: localidad.id, 
                nombre: localidad.nombre,
                municipio: localidad.municipio,
                estado: localidad.estado
            },
            cache: true,
            templateResult: formatRepo, // omitted for brevity, see the source of this page
            templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
        });

        function formatRepo (localidad) {
            if (!localidad.id) { return localidad.nombre; }
            var $localidad = $(
                '<span class=""><strong><i class="fa fa-globe"></i> ' + localidad.nombre + '</strong>, '+ localidad.municipio +', '+ localidad.estado +'</span>'
            );
            return $localidad;
        };
        function formatRepoSelection (localidad) {
            if (!localidad.id) { return localidad.nombre; }
            var $localidad = $(
                '<span class="results-select2"><strong><i class="fa fa-globe"></i> ' + localidad.nombre + '</strong>, '+ localidad.municipio +', '+ localidad.estado +'</span>'
            );
            return $localidad;
        };*/
    </script>
@endsection