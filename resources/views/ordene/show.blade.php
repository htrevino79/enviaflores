@extends('layouts.app')

@section('template_title')
    {{ $ordene->name ?? 'Show Ordene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ordene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto:</strong>
                            {{ $ordene->producto }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $ordene->proveedor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
