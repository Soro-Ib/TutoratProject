@extends('layouts.app')

@section('title', 'home')
    
@section('main')

<div class="col-12">
    <div class="card">
    <div class="card-body">
        <h5 class="card-title">Liste des étudiants</h5>
        <!-- Table with stripped rows -->
        <table class="table datatable border">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Communauté</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Soro Brahima</td>
                    <td>kolotcholoman.soro@uvci.edu.ci</td>
                    <td>0707018421</td>
                    <td>Adjamé</td>
                    <td>Contacter</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Kafalo Alex</td>
                    <td>Kafalo.coulibaly@uvci.edu.ci</td>
                    <td>0707000000</td>
                    <td>Dabou</td>
                    <td>Contacter</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Aboya Benjamin</td>
                    <td>Aboya.achi@uvci.edu.ci</td>
                    <td>0707001111</td>
                    <td>Cocody</td>
                    <td>Contacter</td>
                </tr>
            </tbody>
        </table>
        <!-- End Table with stripped rows -->
    </div>
    </div>
</div>
    
@endsection