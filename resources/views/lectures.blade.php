@extends('layouts.dashboard')

@section('title', 'Lectures')

@section('content')

<div class="d-flex justify-content-end mb-3">
    <a href="{{ route('lectures.create') }}" class="btn btn-sm btn-primary">
        + Add Lecturer
    </a>
</div>

<div class="table-responsive">
    <table class="table table-striped table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Office Room</th>
                <th scope="col" class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($lecturers as $lecturer)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($lecturer->photo)
                            <img src="{{ asset('storage/' . $lecturer->photo) }}"
                                 alt="{{ $lecturer->name }}"
                                 class="rounded-circle"
                                 style="width: 45px; height: 45px; object-fit: cover;">
                        @else
                            <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center text-white"
                                 style="width: 45px; height: 45px;">
                                {{ strtoupper(substr($lecturer->name, 0, 1)) }}
                            </div>
                        @endif
                    </td>
                    <td>{{ $lecturer->name }}</td>
                    <td>{{ $lecturer->email }}</td>
                    <td>{{ $lecturer->department }}</td>
                    <td>{{ $lecturer->office_room }}</td>
                    <td class="text-end">
                        <a href="{{ route('lectures.show', $lecturer->id) }}" class="btn btn-sm btn-outline-secondary">
                            View
                        </a>
                        <a href="{{ route('lectures.edit', $lecturer->id) }}" class="btn btn-sm btn-outline-primary">
                            Edit
                        </a>
                        <form action="{{ route('lectures.destroy', $lecturer->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Are you sure you want to delete this lecturer?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center text-muted">No lecturers found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection