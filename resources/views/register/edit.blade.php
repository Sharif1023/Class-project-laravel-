@extends('layouts.master')

@section('title', 'Edit User')

@section('content')
<div class="container mt-4">
    <div class="card mx-auto" style="max-width: 500px;">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit User</h4>
        </div>
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}" required minlength="5">
                </div>

                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Update User</button>
            </form>
        </div>
    </div>
</div>
@endsection
