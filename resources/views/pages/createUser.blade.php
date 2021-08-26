@extends("layouts.index")

@section("content")
<h1>Add a User</h1>
<form action="/users" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input type="text" name="name" class="form-control w-25">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control w-25">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Nickname</label>
        <input type="text" name="nickname" class="form-control w-25">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Age</label>
        <input type="number" name="age" class="form-control w-25">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Phone</label>
        <input type="text" name="phone" class="form-control w-25">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
