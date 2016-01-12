@extends('emails.layouts.master')
@section('title', trans('register.email-registration-subject'))
@section('content')
    <p>Usted ha creado una cuenta en nuestro sistema interno Carbonera Aragua.</p>
    <p>Muchas gracias por preferir nuestros servicios.</p>
    <p>Por favor, haga clic en el siguiente enlace para continuar con la verificación de su cuenta.
    {{ URL::to('register/verify/' . $activation_code) }}</p>
@endsection