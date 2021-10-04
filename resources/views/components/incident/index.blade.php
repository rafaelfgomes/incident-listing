@extends('layouts.master')
@section('title', 'Incident List')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nº</th>
            <th scope="col">Titulo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Criticidade</th>
            <th scope="col">Tipo</th>
            <th scope="col">Status</th>
            <th scope="col">Data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($incidents as $incident)
            <tr>
                <td>{{$incident->id}}</td>
                <td>{{$incident->title}}</td>
                <td>{{$incident->description}}</td>
                <td>{{$incident->types_name}}</td>
                <td>{{$incident->criticalities_name}}</td>
                <td>@if($incident->status == 1)
                        <i class="fas fa-toggle-on"></i>
                    @else
                        <i class="fas fa-toggle-off"></i>
                    @endif
                </td>
                <td>{{date('d/m/Y - H:m:s', strtotime($incident->created_at))}}</td>
                <td>
                    <a href="{{route('incident.edit', $incident->id)}}" type="button" class="btn btn-light">Editar</a>
                </td>
                <td>
                    <form action="{{ route('incident.delete',$incident->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <input type="submit" class="btn btn-light" value="Deletar"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

