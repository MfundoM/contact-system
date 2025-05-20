@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">Admin Dashboard</h1>
    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Contact Submissions</h4>
        </div>
        <div class="card-body p-0">
            @if($submissions->isEmpty())
                <p class="mb-0 text-muted alert alert-info"><b>No submissions yet.</b></p>
            @else
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date Submitted</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($submissions as $submission)
                            <tr>
                                <td>{{ $submission->name }}</td>
                                <td>{{ $submission->masked_email }}</td>
                                <td>{{ Str::limit($submission->message, 50) }}</td>
                                <td>{{ $submission->created_at->format('M d, Y H:i') }}</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-{{ $submission->id }}">
                                        View
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="modal-{{ $submission->id }}" tabindex="-1" aria-labelledby="modalLabel-{{ $submission->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel-{{ $submission->id }}">Message from {{ $submission->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Email:</strong> {{ $submission->email }}</p>
                                            <p><strong>Date Submitted:</strong> {{ $submission->created_at->format('M d, Y H:i') }}</p>
                                            <hr>
                                            <p>{{ $submission->message }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-2 p-2 flex items-center justify-between flex-wrap gap-10 wgp-pagination">
                    {{ $submissions->links('pagination::bootstrap-5') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
