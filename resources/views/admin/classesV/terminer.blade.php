@extends('layouts.app')

@section('title', 'Classe Virtuelles')
    
@section('main')

<section class="section profile">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <h5 class="card-title">Classes Virtuelles terminées</h5>
                    <ul class="nav nav-tabs nav-tabs-bordered">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Licence 1</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Licence 2</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Licence 3</button>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <table class="table datatable border">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Heure de Début</th>
                                        <th scope="col">Heure de Fin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Classe Virtuelle 1</td>
                                        <td>30/06/2022</td>
                                        <td>10:00</td>
                                        <td>12:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Classe Virtuelle 2</td>
                                        <td>04/07/2022</td>
                                        <td>08:30</td>
                                        <td>11:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <table class="table datatable border">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Heure de Début</th>
                                        <th scope="col">Heure de Fin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Classe Virtuelle 1</td>
                                        <td>30/06/2022</td>
                                        <td>10:00</td>
                                        <td>12:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Classe Virtuelle 2</td>
                                        <td>04/07/2022</td>
                                        <td>08:30</td>
                                        <td>11:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade pt-3" id="profile-settings">
                            <table class="table datatable border">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Heure de Début</th>
                                        <th scope="col">Heure de Fin</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Classe Virtuelle 1</td>
                                        <td>30/06/2022</td>
                                        <td>10:00</td>
                                        <td>12:00</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Classe Virtuelle 2</td>
                                        <td>04/07/2022</td>
                                        <td>08:30</td>
                                        <td>11:00</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div><!-- End Bordered Tabs -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection