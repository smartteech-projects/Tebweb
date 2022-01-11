@extends('doctor.layout.app')

@section('section')
    <section class="is-title-bar">
        <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <ul>
                <li>Doctor</li>
                <li>Appointment</li>
                <li>Check</li>
            </ul>


        </div>
    </section>
    <section class="section main-section">
        <div class="card mb-6">
    <form action="{{ route('appointments.check') }}" method="post">
        @csrf

        <div class="field">
            <div class="card-header">
                Choose date
                <br>
                @if (isset($date))
                    Your timetable for:
                        {{ $date }}
                @endif

            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control icons-left">
                        <input class="input" type="date" id="name" name="date" placeholder="Name">
                        <span class="icon left"><i class="mdi mdi-account"></i></span>
                    </div>
                </div>

            </div>
        </div>
        <button type="submit" class="button blue">Check</button>

    </form>
    <br/>
    @if (Route::is('appointments.check'))
        <form action="{{ route('appointments.updateTime') }}" method="post">
            @csrf

            <div class="card">
                <div class="card-header">
                    Choose AM time
                    <span style="margin-left: 700px">Check/Uncheck
                                <input type="checkbox"
                                       onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked">
                            </span>
                </div>

                <div class="card-body">

                    <table class="table table-striped">
                        <tbody>
                        <input type="hidden" name="appointmentId" value="{{ $appointmentId }} ">
                        <tr>
                            <th scope="row">1</th>
                            <td><input type="checkbox" name="time[]" value="6am" @if (isset($times)){{ $times->contains('time', '6am') ? 'checked' : '' }}
                                    @endif> 6am</td>
                            <td><input type="checkbox" name="time[]" value="6.20am" @if (isset($times)){{ $times->contains('time', '6.20am') ? 'checked' : '' }}
                                    @endif
                                > 6.20am</td>
                            <td><input type="checkbox" name="time[]" value="6.40am" @if (isset($times)){{ $times->contains('time', '6.40am') ? 'checked' : '' }}
                                    @endif
                                > 6.40am</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><input type="checkbox" name="time[]" value="7am" @if (isset($times)){{ $times->contains('time', '7am') ? 'checked' : '' }}
                                    @endif
                                > 7am</td>
                            <td><input type="checkbox" name="time[]" value="7.20am" @if (isset($times)){{ $times->contains('time', '7.20am') ? 'checked' : '' }}
                                    @endif> 7.20am</td>
                            <td><input type="checkbox" name="time[]" value="7.40am" @if (isset($times)){{ $times->contains('time', '7.40am') ? 'checked' : '' }}
                                    @endif> 7.40am</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td><input type="checkbox" name="time[]" value="8am" @if (isset($times)){{ $times->contains('time', '8am') ? 'checked' : '' }}
                                    @endif
                                > 8am</td>
                            <td><input type="checkbox" name="time[]" value="8.20am" @if (isset($times)){{ $times->contains('time', '8.20am') ? 'checked' : '' }}
                                    @endif> 8.20am</td>
                            <td><input type="checkbox" name="time[]" value="8.40am" @if (isset($times)){{ $times->contains('time', '8.40am') ? 'checked' : '' }}
                                    @endif> 8.40am</td>
                        </tr>

                        <tr>
                            <th scope="row">4</th>
                            <td><input type="checkbox" name="time[]" value="9am" @if (isset($times)){{ $times->contains('time', '9am') ? 'checked' : '' }}
                                    @endif
                                > 9am</td>
                            <td><input type="checkbox" name="time[]" value="9.20am" @if (isset($times)){{ $times->contains('time', '9.20am') ? 'checked' : '' }}
                                    @endif> 9.20am</td>
                            <td><input type="checkbox" name="time[]" value="9.40am" @if (isset($times)){{ $times->contains('time', '9.40am') ? 'checked' : '' }}
                                    @endif> 9.40am</td>
                        </tr>

                        <tr>
                            <th scope="row">5</th>
                            <td><input type="checkbox" name="time[]" value="10am" @if (isset($times)){{ $times->contains('time', '10am') ? 'checked' : '' }}
                                    @endif> 10am</td>
                            <td><input type="checkbox" name="time[]" value="10.20am" @if (isset($times)){{ $times->contains('time', '10.20am') ? 'checked' : '' }}
                                    @endif> 10.20am</td>
                            <td><input type="checkbox" name="time[]" value="10.40am" @if (isset($times)){{ $times->contains('time', '10.40am') ? 'checked' : '' }}
                                    @endif> 10.40am</td>
                        </tr>

                        <tr>
                            <th scope="row">6</th>
                            <td><input type="checkbox" name="time[]" value="11am" @if (isset($times)){{ $times->contains('time', '11am') ? 'checked' : '' }}
                                    @endif> 11am</td>
                            <td><input type="checkbox" name="time[]" value="11.20am" @if (isset($times)){{ $times->contains('time', '11.20am') ? 'checked' : '' }}
                                    @endif> 11.20am</td>
                            <td><input type="checkbox" name="time[]" value="11.40am" @if (isset($times)){{ $times->contains('time', '11.40am') ? 'checked' : '' }}
                                    @endif> 11.40am</td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    Choose PM time
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th scope="row">7</th>
                            <td><input type="checkbox" name="time[]" value="12pm" @if (isset($times)){{ $times->contains('time', '12pm') ? 'checked' : '' }}
                                    @endif> 12pm</td>
                            <td><input type="checkbox" name="time[]" value="12.20pm" @if (isset($times)){{ $times->contains('time', '12.20pm') ? 'checked' : '' }}
                                    @endif> 12.20pm</td>
                            <td><input type="checkbox" name="time[]" value="12.40pm" @if (isset($times)){{ $times->contains('time', '12.40pm') ? 'checked' : '' }}
                                    @endif> 12.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td><input type="checkbox" name="time[]" value="1pm" @if (isset($times)){{ $times->contains('time', '1pm') ? 'checked' : '' }}
                                    @endif> 1pm</td>
                            <td><input type="checkbox" name="time[]" value="1.20pm" @if (isset($times)){{ $times->contains('time', '1.20pm') ? 'checked' : '' }}
                                    @endif> 1.20pm</td>
                            <td><input type="checkbox" name="time[]" value="1.40pm" @if (isset($times)){{ $times->contains('time', '1.40pm') ? 'checked' : '' }}
                                    @endif> 1.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td><input type="checkbox" name="time[]" value="2pm" @if (isset($times)){{ $times->contains('time', '2pm') ? 'checked' : '' }}
                                    @endif> 2pm</td>
                            <td><input type="checkbox" name="time[]" value="2.20pm" @if (isset($times)){{ $times->contains('time', '2.20pm') ? 'checked' : '' }}
                                    @endif> 2.20pm</td>
                            <td><input type="checkbox" name="time[]" value="2.40pm" @if (isset($times)){{ $times->contains('time', '2.40pm') ? 'checked' : '' }}
                                    @endif> 2.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td><input type="checkbox" name="time[]" value="3pm" @if (isset($times)){{ $times->contains('time', '3pm') ? 'checked' : '' }}
                                    @endif> 3pm</td>
                            <td><input type="checkbox" name="time[]" value="3.20pm" @if (isset($times)){{ $times->contains('time', '3.20pm') ? 'checked' : '' }}
                                    @endif> 3.20pm</td>
                            <td><input type="checkbox" name="time[]" value="3.40pm" @if (isset($times)){{ $times->contains('time', '3.40pm') ? 'checked' : '' }}
                                    @endif> 3.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td><input type="checkbox" name="time[]" value="4pm" @if (isset($times)){{ $times->contains('time', '4pm') ? 'checked' : '' }}
                                    @endif> 4pm</td>
                            <td><input type="checkbox" name="time[]" value="4.20pm" @if (isset($times)){{ $times->contains('time', '4.20pm') ? 'checked' : '' }}
                                    @endif> 4.20pm</td>
                            <td><input type="checkbox" name="time[]" value="4.40pm" @if (isset($times)){{ $times->contains('time', '4.40pm') ? 'checked' : '' }}
                                    @endif> 4.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td><input type="checkbox" name="time[]" value="5pm" @if (isset($times)){{ $times->contains('time', '5pm') ? 'checked' : '' }}
                                    @endif> 5pm</td>
                            <td><input type="checkbox" name="time[]" value="5.20pm" @if (isset($times)){{ $times->contains('time', '5.20pm') ? 'checked' : '' }}
                                    @endif> 5.20pm</td>
                            <td><input type="checkbox" name="time[]" value="5.40pm" @if (isset($times)){{ $times->contains('time', '5.40pm') ? 'checked' : '' }}
                                    @endif> 5.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">12</th>
                            <td><input type="checkbox" name="time[]" value="6pm" @if (isset($times)){{ $times->contains('time', '6pm') ? 'checked' : '' }}
                                    @endif> 6pm</td>
                            <td><input type="checkbox" name="time[]" value="6.20pm" @if (isset($times)){{ $times->contains('time', '6.20pm') ? 'checked' : '' }}
                                    @endif> 6.20pm</td>
                            <td><input type="checkbox" name="time[]" value="6.40pm" @if (isset($times)){{ $times->contains('time', '6.40pm') ? 'checked' : '' }}
                                    @endif> 6.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">13</th>
                            <td><input type="checkbox" name="time[]" value="7pm" @if (isset($times)){{ $times->contains('time', '7pm') ? 'checked' : '' }}
                                    @endif> 7pm</td>
                            <td><input type="checkbox" name="time[]" value="7.20pm" @if (isset($times)){{ $times->contains('time', '7.20pm') ? 'checked' : '' }}
                                    @endif> 7.20pm</td>
                            <td><input type="checkbox" name="time[]" value="7.40pm" @if (isset($times)){{ $times->contains('time', '7.40pm') ? 'checked' : '' }}
                                    @endif> 7.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">14</th>
                            <td><input type="checkbox" name="time[]" value="8pm" @if (isset($times)){{ $times->contains('time', '8pm') ? 'checked' : '' }}
                                    @endif> 8pm</td>
                            <td><input type="checkbox" name="time[]" value="8.20pm" @if (isset($times)){{ $times->contains('time', '8.20pm') ? 'checked' : '' }}
                                    @endif> 8.20pm</td>
                            <td><input type="checkbox" name="time[]" value="8.40pm" @if (isset($times)){{ $times->contains('time', '8.40pm') ? 'checked' : '' }}
                                    @endif> 8.40pm</td>
                        </tr>
                        <tr>
                            <th scope="row">15</th>
                            <td><input type="checkbox" name="time[]" value="9pm" @if (isset($times)){{ $times->contains('time', '9pm') ? 'checked' : '' }}
                                    @endif> 9pm</td>
                            <td><input type="checkbox" name="time[]" value="9.20pm" @if (isset($times)){{ $times->contains('time', '9.20pm') ? 'checked' : '' }}
                                    @endif> 9.20pm</td>
                            <td><input type="checkbox" name="time[]" value="9.40pm" @if (isset($times)){{ $times->contains('time', '9.40pm') ? 'checked' : '' }}
                                    @endif> 9.40pm</td>
                        </tr>



                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button type="submit" class="button blue">Submit</button>
                </div>
            </div>

        </form>
        {{-- Show app list --}}
    @else
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Creator</th>
                <th scope="col">Date</th>
                <th scope="col">View & Update</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($myAppointments as $appointment)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $appointment->doctor->first_name }}</td>
                    <td>{{ $appointment->date }}</td>
                    <td>
                        <form action="{{ route('appointments.check') }}" method="post">@csrf
                            <input type="hidden" name="date" value="{{ $appointment->date }}">
                            <button type="submit" class="button green">View & Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        @endif
        </div>

    </section>

@endsection
