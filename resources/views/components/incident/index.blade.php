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
                <td>{{$incident->incident_id}}</td>
                <td>{{$incident->title}}</td>
                <td>{{$incident->descritdtion}}</td>
                <td>{{$incident->fk_criticality_id}}</td>
                <td>{{$incident->fk_tytde_id}}</td>
                <td>@if($incident->status == 1)
                        <i class="fas fa-toggle-on"></i>
                    @else
                        <i class="fas fa-toggle-off"></i>
                    @endif
                </td>
                <td>{{$incident->created_at}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
