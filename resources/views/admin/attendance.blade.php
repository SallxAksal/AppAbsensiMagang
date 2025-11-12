@extends('layouts.admin')

@section('title', 'Attendance')

@section('content')
    <div class="page-header">
        <div class="flex justify-between items-start">
            <div>
                <h1>Attendance</h1>
                <p>Monitor attendance records and check-in/check-out history.</p>
            </div>
            <button class="btn-primary">📥 Download Report</button>
        </div>
    </div>

    <div class="content-placeholder">
        <div class="placeholder-icon">📅</div>
        <h2>Attendance Records</h2>
        <p>Attendance data table will appear here.</p>
    </div>
@endsection
