@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('pageTitle1', 'Accueil')
@section('pageTitle2', 'Tableau de bord')

@section('main')

    <section class="section dashboard">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Note des étudiants en Programmation Web</h5>
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Note</th>
                        {{-- <th scope="col">Communauté</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Soro Brahima</td>
                        <td>kolotcholoman.soro@uvci.edu.ci</td>
                        <td>0707018421</td>
                        <td>08</td>
                        {{-- <td>Adjamé</td> --}}
                        <td><a href="#" class="btn btn-primary">Contacter</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Kafalo Alex</td>
                        <td>Kafalo.coulibaly@uvci.edu.ci</td>
                        <td>0707000000</td>
                        <td>10</td>
                        {{-- <td>Dabou</td> --}}
                        <td><a href="#" class="btn btn-primary">Contacter</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Aboya Benjamin</td>
                        <td>Aboya.achi@uvci.edu.ci</td>
                        <td>0707001111</td>
                        <td>13</td>
                        {{-- <td>Cocody</td> --}}
                        <td><a href="#" class="btn btn-primary">Contacter</a></td>
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Notes des étudiants par matière </h5>
              <canvas id="barChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#barChart'), {
                    type: 'bar',
                    data: {
                      labels: ['notes > 10', 'notes < 10'],
                      datasets: [{
                        barThickness: 50,
                        maxBarLength: 1,
                        label: 'Etudiants',
                        data: [86, 59],
                        backgroundColor: [
                          'blue',
                          'skyblue'
                        ],
                        borderColor: [
                          'blue',
                          'skyblue'
                        ],
                        borderWidth: 1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


 