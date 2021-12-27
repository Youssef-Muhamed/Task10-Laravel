
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Register</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  <form action="{{url('/Users/create')}}" method="post" >
      @csrf
  <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" name='name' id="exampleInputName" value="{{old('name')}}"  placeholder="Enter Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail">Email</label>
    <input type="email" name='email'  class="form-control" id="exampleInputEmail1" value="{{old('email')}}"  placeholder="Enter Email">
  </div>
  <div class="form-group">
      <label for="exampleInputEmail">password</label>
      <input type="password" name='password'  class="form-control" id="exampleInputEmail1"   placeholder="Enter Password">
  </div>

  <div class="form-group">
      <label for="exampleInputEmail">Adress</label>
      <input type="text" name='adress'  class="form-control" id="exampleInputEmail1" value="{{old('adress')}}"  placeholder="Enter Adress">
  </div>

  <label for="flexRadioDefault1">Gender</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" >
          <label class="form-check-label" for="flexRadioDefault1">
              Male
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
          <label class="form-check-label" for="flexRadioDefault2">
              Female
          </label>
      </div>
  <div class="form-group">
      <label for="exampleInputEmail">Linkedin URL</label>
      <input type="text" name='url'  class="form-control" id="exampleInputEmail1" value="{{old('url')}}" >
  </div>


      <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>












