@extends('layouts.admin')

@section('title', 'Activity Reports')

@section('content')
    <div class="page-header">
        <div class="flex justify-between items-start">
            <div>
                <h1>Activity Reports</h1>
                <p>View and download daily or weekly activity reports.</p>
            </div>
            <button class="btn-primary">🔍 Filter & Search</button>
        </div>
    </div>

    <div class="content-placeholder">
        <div class="placeholder-icon">📊</div>
        <h2>Activity Reports</h2>
        <p>Reports table will appear here.</p>
    </div>
@endsection
