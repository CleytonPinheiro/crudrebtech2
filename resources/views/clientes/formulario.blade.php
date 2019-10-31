@extends('layouts.php')

@section('content')
    <div clas="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Informe abaixo as Ingormações do cliente
                    <a clas="pull-right" href="{{url('clientes')}}">Listagem clientes</a>
                </div>
                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}@endif
                    @endif
                            @if(Request::is('*/editar')) //** Vinculando modelo com o form, usando mesmo form, ao atualizar ou salvar executa funções especificas.
                            {!! Form::model($cliente,['method'=>'PATCH' ,'url'=>'clientes/atualizar'. $cliente->id]) !!}
                            @else
                                {!! Form::open(['url'=>'clientes/salvar']) !!}
                            @endif

                        {!! Form::open(['url'=>'clientes/salvar']) !!}

                        {!! Form::label('nome','Nome') !!}
                        {!! Form::input('text','nome',null,['class'=>'form-control','autofocus','placeholder'=>'Nome']) !!}

                        {!! Form::label('endereco','Endereço') !!}
                        {!! Form::input('text','endereco',null,['class'=>'form-control','','placeholder'=>'Endereço']) !!}

                        {!! Form::label('numero','Número') !!}
                        {!! Form::input('text','numero',null,['class'=>'form-control','','placeholder'=>'Número']) !!}

                        {!! Form::submit('Salvar',['class'=>'btn btn-primary']) !!}

                        {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

