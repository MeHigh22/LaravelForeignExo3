@extends('layouts.index')
@section('content')
    <section class="container">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">NickName</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->profiles->name}}</td>
                  <td>{{$user->nickname}}</td>
                  <td>{{$user->profiles->age}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->profiles->phone}}</td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </section>
@endsection
