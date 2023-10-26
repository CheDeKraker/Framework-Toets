<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit a person</h1>
    <div>
        @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
    
    
        @endif
    </div>
    <form method="post" action="{{route('person.update', ['person' => $person])}}">
    @csrf
    @method('put')
    <div>
      <label>Name:</label>
      <input type="text" name="name" placeholder="Name" value="{{$person->name}}">
    </div>
    <div>
      <label>Street:</label>
      <input type="text" name="street" placeholder="Street" value="{{$person->street}}">
    </div>
    <div>
      <label>Home Number:</label>
      <input type="text" name="home_nr" placeholder="Home Number" value="{{$person->home_nr}}">
    </div>
    <div>
      <label>Zipcode:</label>
      <input type="text" name="zipcode" placeholder="Zipcode" value="{{$person->zipcode}}">
    </div>
    <div>
      <label>City:</label>
      <input type="text" name="city" placeholder="City" value="{{$person->city}}">
    </div>
    <div>
      <label>Phone Number:</label>
      <input type="text" name="phone_nr" placeholder="Phone Number" value="{{$person->phone_nr}}">
    </div>
    <div>
      <input type="submit" value="Update">
    </div>
  </form>
</body>
</html>