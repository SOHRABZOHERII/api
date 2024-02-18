<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>عضویت در خبرنامه</p>
     <form action="{{route('newsletters.store')}}" method="post">
        @csrf

        <input type="text" name="email" placeholder="ایمیل خود را وارد کنید">
        <button>ثبت</button>
     </form>
     <br>
     <hr>
     <hr>
     <br>

      <p>ارسال پیام</p>
     <form action="{{route('texts.store')}}" method="POST">
        @csrf
        <textarea name="text" id="" cols="30" rows="10">

        </textarea>
        <br>
        <button>ثبت</button>
     </form>


</body>
</html>
