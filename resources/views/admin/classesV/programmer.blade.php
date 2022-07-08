@extends('layouts.app')

@section('title', 'Classe Vituelle')
    
@section('main')

<div class="container col-10">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Programmer une classe virtuelle</h5>
            <!-- No Labels Form -->
            <form action="#" method="POST" class="row g-3">
                <div class="mt-3 row">                   
                    <div class="col-md-6">
                        <label class="form-label">Niveau d'étude</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choix du niveau</option>
                            <option>Licence 1</option>
                            <option>Licence 2</option>
                            <option>Licence 2</option>
                        </select>
                    </div>   
                    <div class="col-md-6">
                        <label class="form-label">Date</label>
                        <input type="date" name="date" id="" class="form-control">
                    </div>  
                </div>
                <div class="mt-3 row">
                    <div class="col-md-6">
                        <label class="form-label">Heure de début</label>
                        <input type="time" name="heure_debut" id="" class="form-control">
                    </div> 
                    <div class="col-md-6">
                        <label class="form-label">Heure de fin</label>
                        <input type="time" name="heure_fin" id="" class="form-control">
                    </div>
                </div>
                <div class="mt-3 row">
                    <div class="col-md-12">
                        <label class="form-label">Lien de la rencontre</label>
                        <input type="url" name="lien" id="" class="form-control">
                    </div> 
                </div>        
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                    <button type="reset" class="btn btn-secondary">Effacer</button>
                </div>
            </form><!-- End No Labels Form -->
        </div>
    </div>
</div>

@endsection