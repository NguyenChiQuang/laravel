@extends('layout')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Blog category 
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 1px">ID</th>
                        <th class="">Name Student</th>
                        <th class="">Email Student</th>
                        <th class="">Address Student</th>
                        <th class="text-right">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @isset( $students)
                        @foreach ( $students as  $student)
                            <tr>
                                <th scope="row">{{  $student->id }}</th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->address }}   </td>
                                <td class="text-right">
                                    <form id="delete-{{$student->id}}" action="{{ route('student.destroy', ['id'=>$student->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$student->id}}').submit() : false;">
                                            xoa
                                        </button>
                                    </form>
                                    <a style="margin-right: 5px" href="{{ route('student.edit', ['id'=>$student->id]) }}"
                                    class="btn btn-primary pull-right">
                                        sua
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endisset
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection