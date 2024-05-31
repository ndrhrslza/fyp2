@extends('navbar.leftbar')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Quiz</h1>
                <div class="card">
                    <div class="card-header">
                        <h5>Question</h5>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            @csrf
                            <div class="form-group
@endsection
