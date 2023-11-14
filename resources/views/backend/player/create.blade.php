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
                            <div class="card-title">Form Player</div>
                            <a href="{{ route('players.index') }}" class="btn btn-warning btn-sm ml-auto">Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('players.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Player</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Masukkan nama player">
                            </div>

                            <div class="form-group">
                                <label for="ign">IGN</label>
                                <input type="text" name="ign" class="form-control" id="ign"
                                    placeholder="Masukkan IGN">
                            </div>

                            <div class="form-group">
                                <label for="photo">Foto Player</label>
                                <input type="file" name="photo" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input type="text" name="instagram" class="form-control" id="instagram"
                                    placeholder="Masukkan Instagram">
                            </div>

                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" name="facebook" class="form-control" id="facebook"
                                    placeholder="Masukkan Facebook">
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
