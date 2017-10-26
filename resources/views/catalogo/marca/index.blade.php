@extends('app')
@section('title')
    Marcas
@endsection
@section('my_styles')
    <!-- Datatables -->
    {!! Html::style('assets/mine/css/datatable-bootstrap.css') !!}
    {!! Html::style('assets/mine/css/responsive.bootstrap.min.css') !!}
@endsection
@section('content') 
    @include('errors.msgAll')
    <div class="x_panel">
        <div class="x_title">
        <h2>Marcas  <i class="fa fa-angle-right text-danger"></i><small> Lista</small></h2>
        @role('root|red-frio')
            @permission('create.catalogos')
                <a class="btn btn-default pull-right" href="{{ route('catalogo.marca.create') }}" role="button">Nueva marca</a>
            @endpermission 
        @endrole
        <div class="clearfix"></div>
        </div>
        <div class="x_content">
             @include('catalogo.marca.list')
        </div>
    </div>
@endsection
@section('my_scripts')
    <!-- Datatables -->
    {!! Html::script('assets/vendors/datatables.net/js/jquery.dataTables.js') !!}
    {!! Html::script('assets/vendors/datatables.net/js/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}
    {!! Html::script('assets/mine/js/dataTables/dataTables.responsive.min.js') !!}
    {!! Html::script('assets/mine/js/dataTables/responsive.bootstrap.js') !!}

    <!-- Datatables -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable-responsive').DataTable({
                language: {
                    url: '/assets/mine/js/dataTables/es-MX.json'
                }
            });
        });
    </script>
    <!-- /Datatables -->
@endsection