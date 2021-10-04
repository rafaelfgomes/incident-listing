@extends('layouts.master')
@section('title', 'Type List')
@section('content')
    <form action="{{route('type.store')}}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="Escreva nome aqui..," required>
            </div>
        </div>
        <input class='btn btn-light float-right' type="submit" value="Enviar">
    </form>
@endsection
