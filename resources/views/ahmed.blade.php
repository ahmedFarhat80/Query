<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmed Farhat</title>
</head>

<body>

<h1> my name is : {{$name}}  </h1>

<form method="post" action="send">
    @csrf
    Specialization
    <input type="text" name="name" id="name">
    <input type="submit" value="send">
</form>
<div dir="rtl">
       <h1> حل واجب قواعد بينات الويب  </h1>
<br>
<hr>
<h2 style="color: brown;"> حل الطالب احمد فرحات  </h2>
</div> 
</body>
</html>
