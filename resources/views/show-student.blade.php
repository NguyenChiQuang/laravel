@extends('layout')
@section('content')
<div class="row">
    <section class="content">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> Info Student </h3>
                </div>
                <div class="panel-body">
                    <div>name: {{ $tudent->name}}</div>
                    <div>email: {{ $tudent->email}}</div>
                    <div>address: {{ $tudent->address}}</div>
                </div>
            </div>
        </div>
    </section>
@endsection