@extends('layouts.master')
@section('title', 'Incident Edit')
@section('content')
    <form action="{{route('incident.put', $incidentValues->id)}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{$incidentValues->id}}" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Titulo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="{{$incidentValues->title}}" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3" cols="30" name="description" id="description">{{$incidentValues->description}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tipo</label>
            <div class="col-sm-10">
                <select class="form-control" disabled>
                    <option value="{{$type->id}}">{{$type->name}}</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Criticidade</label>
            <div class="col-sm-10">
                <select class="form-control" disabled>
                    <option value="{{$criticalitie->id}}">{{$criticalitie->name}}</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success float-right">Salvar</button>
    </form>
@endsection
