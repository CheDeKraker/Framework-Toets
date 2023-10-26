<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create a person</h1>
    <div>
        @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
    
    
        @endif
    </div>
    <form method="post" action="{{route('person.store')}}">
    @csrf
    @method('post')
    <div>
      <label>Name:</label>
      <input type="text" name="name" placeholder="Name">
    </div>
    <div>
      <label>Street:</label>
      <input type="text" name="street" placeholder="Street">
    </div>
    <div>
      <label>Home Number:</label>
      <input type="text" name="home_nr" placeholder="Home Number">
    </div>
    <div>
      <label>Zipcode:</label>
      <input type="text" name="zipcode" placeholder="Zipcode">
    </div>
    <div>
      <label>City:</label>
      <input type="text" name="city" placeholder="City">
    </div>
    <div>
      <label>Phone Number:</label>
      <input type="text" name="phone_nr" placeholder="Phone Number">
    </div>
    <div>
      <input type="submit" value="Save a New person">
    </div>
  </form>
</body>
</html>