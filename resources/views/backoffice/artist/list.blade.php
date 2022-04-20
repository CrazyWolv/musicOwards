@extends('backoffice/layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Artistes</h1>


            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th class="text-end"><a href="{{ route('boArtistAdd') }}" class="btn btn-sm btn-success"><i class="bi-person-plus-fill"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)

                        <tr>
                            <td>{{ $artist->name }}</td>
                            <td class="text-end">
                                <a href="{{ route('boArtistEdit', ['id' => $artist->id]) }}" class="btn btn-sm btn-primary"><i class="bi-pen"></i></a>
                                <form action="{{ route('boArtistDelete', ['id' => $artist->id]) }}" method="POST" style="display: inline-block">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection