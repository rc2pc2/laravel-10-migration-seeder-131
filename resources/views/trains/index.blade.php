@extends("layouts.app")

@section("page-title", "Trains index")


@section("main-content")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="py-3 fw-bold text-center">
                    Trains:
                </h1>
            </div>
            <div class="col-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Company</th>
                            <th scope="col">Image</th>
                            <th scope="col">Departure Station</th>
                            <th scope="col">Arrival Station</th>
                            <th scope="col">Departure Date</th>
                            <th scope="col">Departure Time</th>
                            <th scope="col">Arrival Date</th>
                            <th scope="col">Arrival Time</th>
                            <th scope="col">Train Code</th>
                            <th scope="col">Wagons</th>
                            <th scope="col">On Time</th>
                            <th scope="col">Suspended</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ( $trains as $train )
                        <tr>
                            <td>{{ $train->id }}</td>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->image_url }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_date }}</td>
                            <td>{{ $train->departure_time }}</td>
                            <td>{{ $train->arrival_date }}</td>
                            <td>{{ $train->arrival_time }}</td>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->wagons_no }}</td>
                            <td>{{ $train->on_time }}</td>
                            <td>{{ $train->suspended }}</td>
                            <td></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">No trains are available at the moment...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
