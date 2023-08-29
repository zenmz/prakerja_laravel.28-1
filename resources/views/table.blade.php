@extends('template')
@section('main')
    <h1>Table</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Barang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($array as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('js')
    <script>
        alert('Ini halaman Table')
    </script>
@endsection
