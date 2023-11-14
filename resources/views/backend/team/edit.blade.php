{{-- @extends('layouts.default')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="ml-md-auto py-2 py-md-0">
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Form Team</div>
                            <a href="{{ route('teams.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama Team</label>
                                <input type="text" name="name" class="form-control" value="{{ $team->name }}"
                                    placeholder="Masukkan nama team">
                            </div>

                            <div class="form-group">
                                <label for="logo">Logo Team</label>
                                <input type="file" name="logo" class="form-control">
                                <br>
                                <label for="logo">Logo Lama</label>
                                <br>
                                <img src="{{ asset('storage/' . $team->logo) }}" width="200px" alt="">
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Masukkan deskripsi team">{{ $team->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="achievement">Pencapaian</label>
                                <input type="text" name="achievement" class="form-control"
                                    value="{{ $team->achievement }}" placeholder="Masukkan pencapaian team">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
@extends('layouts.default')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div class="ml-md-auto py-2 py-md-0">
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row">
            <div class="col-md-12">
                <div class="card full-height">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Form Team</div>
                            <a href="{{ route('teams.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Nama Team</label>
                                <input type="text" name="name" class="form-control" value="{{ $team->name }}"
                                    placeholder="Masukkan nama team">
                            </div>

                            <div class="form-group">
                                <label for="logo">Logo Team</label>
                                <input type="file" name="logo" class="form-control">
                                <br>
                                <img src="{{ asset('storage/' . $team->logo) }}" width="200px" alt="">
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Masukkan deskripsi team">{{ $team->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="achievement">Pencapaian</label>
                                <input type="text" name="achievement" class="form-control"
                                    value="{{ $team->achievement }}" placeholder="Masukkan pencapaian team">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-sm" type="submit">Save</button>
                                <button class="btn btn-danger btn-sm" type="reset">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
