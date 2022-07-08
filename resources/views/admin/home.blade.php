@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('pageTitle1', 'Accueil')
@section('pageTitle2', 'Tableau de bord')

@section('main')

    <section class="section dashboard">
      <div class="row">

        <!-- Data-table -->

            @include('admin.includes.datatable')

        <!-- End Data-table -->

        <!-- Left side columns -->

          <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Website Traffic -->
          <div class="card">
            <div class="card-body pb-0">
              <h5 class="card-title">Etudiants par niveau d'étude </h5>
              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Licence 1',
                        'Licence 2',
                        'Licence 3'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [40, 10, 69],
                        backgroundColor: [
                          'blue',
                          'skyblue',
                          'rgb(217, 35, 174)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
            </div>
          </div><!-- End Website Traffic -->
        </div><!-- End Right side columns -->
      </div>
    </section>
@endsection


