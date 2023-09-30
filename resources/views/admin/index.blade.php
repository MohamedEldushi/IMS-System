<x-dashboard-admin>
 @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Application ID</th>
                <th>Submitted By</th>
                <th>Email</th>
                <th>Date Submitted</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->applicant->name }}</td>
                    <td>{{ $application->applicant->email }}</td>
                    <td>{{ $application->created_at }}</td>
                    @if ($application->status == 'pending')
                            <form action="{{ route('admin.approve', ['id' => $application->id]) }}" method="POST">
                                @csrf
                                <td><button class="btn btn-success" type="submit">Approve</button></td>
                            </form>

                            <form action="{{ route('admin.reject', ['id' => $application->id]) }}" method="POST">
                                @csrf
                                <td><button class="btn btn-danger" type="submit">Reject</button></td>
                            </form>
                    @else
                        @if ($application->status == 'accepted')
                            <td class="text-success">Accepted</td>
                        @else
                            <td class="text-danger">Rejected</td>
                        @endif
                        <td></td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>



</x-dashboard-admin>
