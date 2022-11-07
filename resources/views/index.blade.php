@extends('layouts.template')
@include('layouts.nav')
@section('title','Homepage')
@section('content')
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            @foreach($datas as $key => $clothing)
                @if($clothing['type']==="Casual Wear")
                    <tr class="table-success">
                        <th scope="row">{{$key}}</th>
                        <td>{{$clothing['name']}}</td>
                        <td>{{$clothing['type']}}</td>
                        <td>{{$clothing['price']}}</td>
                    </tr>
                @elseif($clothing['type']==="Formal Wear")
                    <tr class="table-primary">
                        <th scope="row">{{$key}}</th>
                        <td>{{$clothing['name']}}</td>
                        <td>{{$clothing['type']}}</td>
                        <td>{{$clothing['price']}}</td>
                    </tr>
                @elseif($clothing['type']==="Sports Wear")
                    <tr class="table-warning">
                        <th scope="row">{{$key}}</th>
                        <td>{{$clothing['name']}}</td>
                        <td>{{$clothing['type']}}</td>
                        <td>{{$clothing['price']}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
