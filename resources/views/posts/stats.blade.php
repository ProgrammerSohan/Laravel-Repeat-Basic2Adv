@extends('layouts.master')

@section('content')
<div class="container mt-5">
    <h2>Post Aggregate Stats</h2>
    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>Statistic</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Total Posts</td>
                <td>{{ $stats['total_posts'] }}</td>
            </tr>
            <tr>
                <td>Maximum Post ID</td>
                <td>{{ $stats['max_id'] }}</td>
            </tr>
            <tr>
                <td>Minimum Post ID</td>
                <td>{{ $stats['min_id'] }}</td>
            </tr>
            <tr>
                <td>Sum of User IDs</td>
                <td>{{ $stats['sum_user_id'] }}</td>
            </tr>
            <tr>
                <td>Average of User IDs</td>
                <td>{{ number_format($stats['avg_user_id'], 2) }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
