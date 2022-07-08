@extends('layouts.app')

@section('title', 'Poster un document')
    
@section('main')

<div class="container col-10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Poster un document</h5>
            <!-- No Labels Form -->
            <form action="#" method="POST" class="row g-3">

                <div class="col-md-12">
                    <label class="form-label">Niveau d'étude</label>
                    <select id="inputState" class="form-select">
                        <option selected>Niveau d'étude</option>
                        <option>Licence 1</option>
                        <option>Licence 2</option>
                        <option>Licence 2</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="form-label">Document ( pdf, word, excel, ppt, video )</label>
                    <input type="file" class="form-control">
                </div>   
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                    <button type="reset" class="btn btn-secondary">Effacer</button>
                </div>
            </form><!-- End No Labels Form -->
        </div>
    </div>
</div>
    
@endsection