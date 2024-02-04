@extends('layouts.app')
@section('content')
@if ($message = Session::get('success'))
    <div id="success-message" class="alert alert-success text-center">
        <p>{{ $message }}</p>
    </div>

@endif
@if ($message = Session::get('error'))
    <div id="success-message" class="alert alert-danger text-center">
        <p>{{ $message }}</p>
    </div>

@endif



@if ($userDetails->count() > 0)
<h1 class="text-center mt-5">Total unapproved user List</h1>
<div class="table-responsive">
        <table class="table m-3">
            <thead>
                <tr>
                    <th scope="col">User ID</th>
                    <th scope="col">User Name</th>
                    <th scope="col">User Email</th>
                    <th scope="col">Accept</th>
                    <th scope="col">Reject</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userDetails as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a type="button" href="{{ route('acceptUser', $user->id) }}"
                            onClick="return confirm('Are you sure')" class="btn btn-primary btn-sm btn-success">Accept</a></td>
                        <td><a type="button" href="{{ route('rejecttUser', $user->id) }}"
                            onClick="return confirm('Are you sure')" class="btn btn-primary btn-sm btn-danger">Reject</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <h1 class="text-center mt-5 mt-4">No more pending registration requests</h1>
@endif
<script>

    document.addEventListener('DOMContentLoaded', function () {

        var successMessage = document.getElementById('success-message');
        setTimeout(function () {
            successMessage.style.display = 'none';
        }, 5000);
    });
</script>
@endsection
