@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Informe abaixo as informações do cliente
                        <a class="pull-right" href="{{url('cliente')}}">Listagem clientes</a>
                    </div>

                    <div class="card-body">
                        @if(Session::has('mensagem_sucesso'))
                            <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}

                        @endif

                         @if(Request::is('*/editar')) //** Vinculando modelo com o form, usando mesmo form, ao atualizar ou salvar executa funções especificas.
                             {!! Form::model($cliente,['method'=>'PATCH' ,'url'=>'clientes'. $cliente->id]) !!}
                         @else
                             {!! Form::open(['url'=>'clientes/salvar']) !!}
                         @endif

                        {!! Form::label('nome','Nome') !!}
                        {!! Form::input('text','nome',null,['class'=>'form-control','autofocus','placeholder'=>'Nome']) !!}

                        {!! Form::label('endereco','Endereço') !!}
                        {!! Form::input('text','endereco',null,['class'=>'form-control','','placeholder'=>'Endereço']) !!}

                        {!! Form::label('numero','Número') !!}
                        {!! Form::input('text','numero',null,['class'=>'form-control','','placeholder'=>'Número']) !!}

                        {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}

                        {!! Form::close() !!}

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
