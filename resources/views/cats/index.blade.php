
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.column {
  float: left;
  width: 25%;
  padding: 15px 15px;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
strong{
color: blue;
}
.card {
  padding: 16px;
  background-color: #f1f1f2;
}
   
    </style>
</head>
<body>
     <div class="container">
       <h1 class="jumbotron-heading" style="text-align: center; color:blue; ">Cat Breeds</h1>
     </div>

    <div class="container">
    @foreach ($catBreeds as $cat)
<div class="row">
  <div class="column">
    <div class="card grid">
         <p><strong>Breed:</strong> {{ $cat['name']}} </p>
         <p><strong> Temperament: </strong>{{$cat['temperament']}} </p>
         <p><strong> Origin: </strong> {{ $cat['origin']}} </p>
         <p><strong> Description: </strong>{{ $cat['description']}}  </p>

    </div>
  </div>
  @endforeach
    </div>
     
  
      </body>
</html>
 


  