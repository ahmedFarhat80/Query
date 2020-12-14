<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Howm page in -> Ahmed Farhat</title>
</head>

<body>

  @foreach ($tasks as $task)
   <li>  <a href="task/Show/{{$task ->id}}"> {{$task ->title}} </a>   </li>
  @endforeach
  </ul>
  </body>
  </html>

