@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Yangilik qo'shish</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{route('admin.posts.store')}}">
                            @csrf
                            @include('admin.alerts.main')
                            <div class="form-group">
                                <label for="successInput">Sarlavha</label>
                                <input type="text" id="title" name="title" class="form-control">
                                <small class="form-text text-muted">Sarlavha yozing.</small>
                            </div>
                            <div class="form-group has-feedback">
                                <label for="errorInput">Qisqacha</label>
                                <input type="text" id="short" name="short" class="form-control">
                                <small class="form-text text-muted">Qisqacha matn yozing.</small>
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="comment">Maqola</label>
                                    <textarea class="form-control" id="content" name="content" rows="5"></textarea>
                                    <small class="form-text text-muted">To'liq maqola yozing.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Faylni tanlang</label>
                                <input type="file" class="form-control-file" name="image" id="image">
                                <small class="">Rasm tanlang.</small>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success">Submit</button>
                                <a href="{{route('admin.posts.index')}}">
                                    <button class="btn btn-danger">Cancel</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection