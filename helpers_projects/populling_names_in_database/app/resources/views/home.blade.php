@extends('base') @section('content')
<h1>Populing people in database</h1>
<p class="fs-5 col-md-8">This is a <em>helper project</em> which intent is to fill a database with entities, them make performance testes.</p>

<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
    <div class="feature col">
        <p>There are {{ $personCount}} persons in the database.</p>
    </div>
</div>

@endsection('content')