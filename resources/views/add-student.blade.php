@extends('layout')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-info">
            {{Session::get('success')}}
        </div>
    @endif
    <form method="POST" action="{{ route('student.store') }}"  role="form" >
        {{ csrf_field() }}
        <div class="form-group">
        <label for="formGroupExampleInput">Name Student</label>
        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput2">Email Student</label>
        <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Address Student</label>
            <input name="address" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection