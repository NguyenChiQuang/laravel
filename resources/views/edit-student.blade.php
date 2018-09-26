@extends('layout')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-info">
            {{Session::get('success')}}
        </div>
    @endif
    <form method="POST" action="{{ route('student.update',  $video->id ) }}"  role="form" >
        {{ csrf_field() }}
        <div class="form-group">
        <label for="formGroupExampleInput">Name Student</label>
        <input name="name" value="{{$student->name}}" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
        </div>
        <div class="form-group">
        <label for="formGroupExampleInput2">Email Student</label>
        <input name="email" value="{{$student->email}}" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Address Student</label>
            <input name="address" value="{{$student->address}}" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
        </div>
        <button type="submit">Save</button>
    </form>
@endsection