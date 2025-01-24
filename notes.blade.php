<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <center>
    <form action="{{route('storenotes')}}" method="POST" >
        @csrf
<h1 class="text-center">Liste des notes</h1>
<div style="display: flex">
<input  class="form-control" name="name" style="width: 50%"/>
<button type="submit" class="btn btn-outline-success">Recherche</button>
</div>
<form/>

@if (isset($b))
<h1>Décoration des Notes</h1>
<table border="1" class="table table-striped">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Note</th>
    </tr>
    </thead>
    <tbody>
    @foreach($notes as $nom => $note)
        <tr >
            <td>{{ $nom }}</td>
            <td>{{ $note }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@else



<table class="table text-center w-50">
<tr><th>nom</th><th>note</th></tr>
        @foreach($notes as $nom=>$note)
        
        @if($note>10)
       <tr class="alert alert-secondary" ><td>{{$nom}}</td><td>{{$note}}</td></tr>
       @endif
       @if($note<=10 && $note>8 )
       <tr class="alert alert-primary" ><td>{{$nom}}</td><td>{{$note}}</td></tr>
       @endif
       @if($note<8)
       <tr class="alert alert-success" ><td>{{$nom}}</td><td>{{$note}}</td></tr>
       @endif
   
  @endforeach
  </table>
  @foreach($notes as $nom=>$note)
  <ul>
  @if(isset($name) && $name==$nom)
<table class="table text-center w-50">
<tr class="alert alert-danger"><td>{{$nom}}</td><td>{{$note}}</td></tr>
</table>

@endif
  @endforeach
</ul> 
@endif
</center> 
</body>
</html>