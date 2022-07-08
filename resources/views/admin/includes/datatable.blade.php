<div class="col-lg-8">
  <div class="card">
    <div class="card-body pt-3">
      <h5 class="card-title">Liste des ECUE</h5>
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
                <th scope="col">Credit</th>
                <th scope="col">Semestre</th>
              </tr>
            </thead> 
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><a href="{{ route('etudiant.progression') }}">Programmation web</a></td>
                <td>3</td>
                <td>S1</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><a href="">Php-MySQL</a></td>
                <td>6</td>
                <td>S1</td>
              </tr>
              <tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
          <table class="table datatable border">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Credit</th>
                <th scope="col">Semestre</th>
              </tr>
            </thead> 
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><a href="#">Programmation web</a></td>
                <td>3</td>
                <td>S1</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><a href="">Php-MySQL</a></td>
                <td>6</td>
                <td>S1</td>
              </tr>
              <tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade pt-3" id="profile-settings">
          <table class="table datatable border">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Credit</th>
                <th scope="col">Semestre</th>
              </tr>
            </thead> 
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><a href="">Programmation web</a></td>
                <td>3</td>
                <td>S1</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><a href="">Php-MySQL</a></td>
                <td>6</td>
                <td>S1</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div><!-- End Bordered Tabs -->
    </div>
  </div>
</div>