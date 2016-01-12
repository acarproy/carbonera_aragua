@extends('emails.layouts.master')
@section('title', trans('register.email-registration-subject'))
@section('content')
    <p>Si usted a cambiado su correo electrónico,</p>
    <p>Por favor, haga clic en el siguiente enlace para continuar con la verificación de su correo.
    {{ URL::to('admin/profile/verify_email/' . $activation_code) }}</p>
@endsection