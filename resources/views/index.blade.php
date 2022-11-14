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
    <footer class="footer text-center fixed-bottom" style="background-color: rgb(221,221,221);">

        <div class="container p-3">
            <h5 >Our Social Media</h5>

            <div class="row">

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <img src="https://cdn.exclaimer.com/Handbook%20Images/facebook-icon_32x32.png" alt="footer logo" style="width:32px;height:32px;">

                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <img src="https://cdn.exclaimer.com/Handbook%20Images/instagram-icon_32x32.png" alt="footer logo" style="width:32px;height:32px;">
                </div>
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <img src="https://cdn.exclaimer.com/Handbook%20Images/TikTok_logo_32.png" alt="footer logo" style="width:32px;height:32px;">

                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <img src="https://cdn.exclaimer.com/Handbook%20Images/whatsapp_32.png" alt="footer logo" style="width:32px;height:32px;">

                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgb(151,151,151);">
            Your Wardrobe
        </div>
        <!-- Copyright -->
    </footer>
@endsection
