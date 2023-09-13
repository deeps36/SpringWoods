@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Complaint View</div><br>
                <div class="col-sm-2">
                    <a class="btn btn-sm btn-success" href="{{route('create.create')}}">Create Complaint</a>
                </div>
                <!-- <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                            <div class="row">
                                <tr align="center">
                                    <div class="text-center col-md-6">
                                        <th> ID </th>
                                        <th> Description </th>
                                        <th> Actions </th>
                                        <th> Complaint By </th>
                                    </div>
                                </tr>
                            </div>
                        </thead>
                        <tbody>
                            <div class="row">
                                @foreach($complaint as $user)
                                <tr align="center">
                                    <div class="text-center col-md-6 col-md-offset-2">
                                        <td><b> {{++$i}} </b></td>
                                        <td> {{$user->Description}} </td>
                                        <td> {{$user->Actions}} </td>
                                        <td> {{$user->complaintby}} </td>
                                        <td></td>
                                    </div>
                                </tr>
                                @endforeach
                            </div>
                        </tbody>
                    </table>
                </div>
            </div> -->
            </div>
        </div>
    </div>
    @endsection