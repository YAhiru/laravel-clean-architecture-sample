@extends('layouts.template')

@section('css')
<style>
.calendar-td a {
  color: #858796;
  text-decoration: none;
}
.calendar-td div {
  padding: 0.75rem;
}
.calendar-td div:hover {
  background-color: rgba(90, 93, 105, 0.3);
}
.calendar-td-inactive {
  opacity: 0.1;
}
.calendar-btn {
  font-size: 36px;
  text-decoration: none;
}

.calendar-btn:hover {
  opacity: 0.7;
}
</style>
@endsection

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <div class="row">
      <!-- Area Chart -->
      <div class="col-sm-12 offset-md-2 col-md-8">
        <h1>{{ $current_month }}</h1>
        <table class="table table-bordered">
          <thead>
          <tr class="bg-dark text-white">
            <th scope="col">Sun</th>
            <th scope="col">Mon</th>
            <th scope="col">Tue</th>
            <th scope="col">Wed</th>
            <th scope="col">Thu</th>
            <th scope="col">Fri</th>
            <th scope="col">Sat</th>
          </tr>
          </thead>
          <tbody class="bg-white">
            @foreach ($weeks as $week)
              <tr>
                @foreach ($week as $day)
                  @if ($day['current_month'])
                    <td class="calendar-td p-0">
                      <a href="#">
                        <div>{{ $day['date'] }}</div>
                      </a>
                    </td>
                  @else
                    <td class="bg-dark calendar-td-inactive"></td>
                  @endif
                @endforeach
              </tr>
            @endforeach
          </tbody>
        </table>

        <div class="d-flex justify-content-center mb-3">
          <a href="#" class="calendar-btn text-gray-800">
            <i class="fa fa-arrow-alt-circle-left"></i>
          </a>
          <a href="#" class="ml-4 calendar-btn text-gray-800">
            <i class="fa fa-arrow-alt-circle-right"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->
@endsection
