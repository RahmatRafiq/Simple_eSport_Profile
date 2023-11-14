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
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-primary">
                                {{ Session('success') }}
                            </div>
                        @endif

                        <div class="mb-4">
                            <a href="{{ route('teams.create') }}" class="btn btn-success">
                                <i class="fas fa-plus"></i> Create Team
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Logo</th>
                                        <th>Description</th>
                                        <th>Achievement</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($teams as $team)
                                        <tr>
                                            <td>{{ $team->name }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $team->logo) }}" width="150px">
                                            </td>
                                            <td>{{ $team->description }}</td>
                                            <td>{{ $team->achievement }}</td>
                                            <td>
                                                <a href="{{ route('teams.edit', $team->id) }}"
                                                    class="btn btn-warning btn-sm"><i class="fas fa-pen"></i> Edit</a>
                                                <form action="{{ route('teams.destroy', $team->id) }}" method="post"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Are you sure you want to delete this team?')">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Data Masih Kosong</td>
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
