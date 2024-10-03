@extends('layouts.root')

@section('content')
    <div class="table-responsive">
        <table class="table table-sm table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <!-- <th scope="col">Email</th> -->
                    <th scope="col">Phone</th>
                    <th scope="col">State</th>
                    <!-- <th scope="col">Message</th> -->
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $client->name }}</td>
                        <!-- <td>{{ $client->email }}</td> -->
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->state }}</td>
                        <!-- <td>{{ $client->message }}</td> -->
                        <td>
                            <form action="{{ route('client.destroy.id', $client->client_id) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                            </form>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
