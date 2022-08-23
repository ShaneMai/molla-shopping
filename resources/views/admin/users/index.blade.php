@extends('admin.templates.master')
@include('sweetalert::alert')
@section('content')
    <div class="page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DANH SÁCH NGƯỜI DÙNG</h5>
                        <button type="button" class="btn btn-info" style="background: #3A688C">
                            <a href="/admin/users/create" style="color: white" >THÊM MỚI</a>
                        </button>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($user as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td>{{$row->password}}</td>
                                        <td>{{$row->created_at}}</td>
                                        <td>@if($row->status === 1) {{'Mở'}}
                                            @else {{'Khóa'}}
                                            @endif
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-info " style="background: #3A688C"><a
                                                    href="/admin/users/edit/{{$row->id}}" style="color: white">Edit</a>
                                            </button>
                                            <form method="POST" action="/admin/users/delete/{{$row->id}}">
                                                @method('PATCH')
                                                @csrf
                                                <button type="submit"  class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Created_At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            {{$user->links()}}

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
