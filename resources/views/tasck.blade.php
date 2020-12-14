<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmed Farhat</title>
</head>

<body>

<ul>
{{-- 
    @if($user->status =='waiting')
         {
         }
         @else{
           <td>{{ $user->status }}</td>
         }
         @endif
 --}}
 <ul>
  @foreach ($tascks as $key => $tasck)
   <li> <h3> <a href="{{'tasck/show/' . $key}}"> {{$tasck}} </a> </h3>  </li>   
  @endforeach
  </ul>
  </body>
  </html>

