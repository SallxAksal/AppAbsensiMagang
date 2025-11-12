@extends('layouts.admin')

@section('title', 'User Accounts')

@section('content')
    <div class="page-header">
        <div class="flex justify-between items-start">
            <div>
                <h1>User Accounts</h1>
                <p>Manage user accounts for interns and administrative staff.</p>
            </div>
            <button class="btn-primary">+ Add User</button>
        </div>
    </div>

    <div class="content-placeholder">
        <div class="placeholder-icon">👤</div>
        <h2>User List</h2>
        <p>User account management table will appear here.</p>
    </div>
@endsection
