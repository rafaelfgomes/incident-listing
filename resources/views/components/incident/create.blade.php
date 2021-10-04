@extends('layouts.master')
@section('title', 'Incident List')
@section('content')
    <form action="{{route('incident.store')}}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" placeholder="Escreva seu titulo aqui..," required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
                <textarea type="description" class="form-control" id="description" placeholder="Escreva uma descrição..." required>
                </textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
                <select class="form-control" required>
                    <option>Default select</option>
                    @foreach($types as $type)
                        <option value="{{$type->type_id}}">{{$type->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Criticidade</label>
            <div class="col-sm-10">
                <select class="form-control" required>
                    <option>Default select</option>
                    @foreach($criticalities as $criticalitie)
                        <option value="{{$criticalitie->criticality_id}}">{{$criticalitie->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <input class='btn btn-light float-right' type="submit" value="Enviar">
    </form>
@endsection
