@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{route('admin.posts.create')}}">
            <button class="btn btn-primary btn-border btn-round float-right">Yaratish</button>
        </a>
        <div class="card-title">Yangiliklar</div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Rasm</th>
                    <th scope="col">Sarlavha</th>
                    <th scope="col">Qisqacha</th>
                    <th scope="col">Maqola</th>
                    <th scope="col">Maqola</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td><img src="/storage/{{$post->image}}" width="100px" alt=""></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->short}}</td>
                            <td>{{$post->content}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                                    <a href="#" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-sm btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" href="#"><i class="fas fa-calendar-edit"></i></a>
                                            <button class="dropdown-item delete-btn" data-url="#"><i class="fa fa-trash"></i> Delete </button>
                                        </div>
                                    </div>
                                </div>        
                            </td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection