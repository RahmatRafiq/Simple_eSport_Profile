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
                            <div closs="card-title"> Data Artikel</div>
                            <a href="{{ route('players.create') }}" class="btn btn-primary btn-sm ml-auto">
                                <i class="fa fa-plus"></i> Add Players
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-primary">
                                {{ Session('success') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>IGN</th>
                                        <th>Photo</th>
                                        <th>Instagram</th>
                                        <th>Facebook</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($players as $row)
                                        <tr>
                                            {{ $row->name }}
                                            <td>{{ $row->name }}</td>
                                            <td>{{ $row->ign }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $row->photo) }}" width="100px"
                                                    height="100px" alt="">
                                            </td>
                                            <td>{{ $row->instagram }}</td>
                                            <td>{{ $row->facebook }}</td>
                                            <td>
                                                <a href="{{ route('players.edit', $row->id) }}"
                                                    class=" btn btn-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>

                                                <form action="{{ route('players.destroy', $row->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method ('delete')
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">Data Masih Kosong</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
