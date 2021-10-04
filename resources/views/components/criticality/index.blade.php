@extends('layouts.master')
@section('title', 'Criticality List')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nome</th>
        </tr>
        </thead>
        <tbody>
        @foreach($criticalities as $criticality)
            <tr>
                <td>{{$criticality->id}}</td>
                <td>{{$criticality->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
