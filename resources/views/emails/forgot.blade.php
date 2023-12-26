<h1>Hello {{$data->name}}</h1>

<p>
    Plase click the password reset button to reset your password
    <a href="{{url(App::getLocale().'/forgot_password/'.$data->id)}}">Reset password</a>
</p>
