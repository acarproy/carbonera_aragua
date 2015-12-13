<?php
  $htmlStatus = array(
    'status' => ($user->active == 1 ) ? 'active'      : 'inactive',
    'box'    => ($user->active == 1 ) ? 'box-primary' : 'box-default',
    'btn'    => ($user->active == 1 ) ? ''            : 'disabled',
  );
?>
@extends('admin.layouts.master')
@section('title', trans('admin/profile.title_page.index'))
@section('content')
<div class="row row-profile">
  <div class="col-md-3">
    <div class="box {{ $htmlStatus['box'] }}">
      <div class="box-body box-profile">
        <span>
          <a data-toggle="modal" href="{!! route('admin.profile.editAvatar') !!}" data-target="#avatarMdl">
            <img class="profile-user-img img-responsive img-circle" src="{{ $user->avatar ?: asset(config('assets.images.paths.input')."/noavatar.jpg") }}" alt="{{ $user->name ?: '-' }}" />
          </a>
        </span>
        <h3 class="profile-username text-center">{{ $user->username ?: '-' }}</h3>

        <ul class="list-group list-group-unbordered">
          <li class="list-group-item">
            <b>{{ trans('admin/users.form.name.title') }}</b> <a class="pull-right">{{ $user->name ?: '-' }}</a>
          </li>
          <li class="list-group-item">
            <b>{{ trans('admin/users.form.phone.title') }}</b> <a class="pull-right">{{ $user->phone ?: '-' }}</a>
          </li>
        </ul>

        <a class="btn btn-primary btn-block {{ $htmlStatus['btn'] }}" href="#"><b>{{ trans('admin/profile.index.status.'.$htmlStatus['status']) }}</b></a>
      </div>
    </div>
  </div>

  <?php /**/ ?>
  <div class="col-md-9">
    <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#tab1" aria-expanded="true">{{ trans('admin/profile.index.tab.userInfo') }}</a></li>
      </ul>
      <div class="tab-content">

        <div id="tab1" class="tab-pane active">
          <div class="row">
            <div class="col-md-12">
              <a class="link-black text-sm pull-right" href="{!! route('admin.profile.edit') !!}"><i class="fa fa-pencil margin-r-5"></i> {{ trans('admin/profile.index.edit') }}</a>
            </div>
            <div class="col-md-4" style="margin:10px auto;">
              <b>{{ trans('admin/users.form.username.title') }}</b><br><a class="pull">{{ ($user->username) ?: '-' }}</a>
            </div>
            <div class="col-md-4" style="margin:10px auto;">
              <b>{{ trans('admin/users.form.name.title') }}</b><br><a class="pull">{{ ($user->name) ?: '-' }}</a>
            </div>
            <div class="col-md-4" style="margin:10px auto;">
              <b>{{ trans('admin/users.form.email.title') }}</b><br>
              <a class="pull">{{ $user->email ?: '-' }}</a>
            </div>
            <div class="col-md-4" style="margin:10px auto;">
              <b>{{ trans('admin/users.form.phone.title') }}</b><br>
              <a class="pull">{{ $user->phone ?: '-' }}</a>
            </div>
          </div>
        </div><!-- /.tab-pane -->

      </div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
  </div>
  <?php /**/ ?>
</div>
@endsection
@section('javascript')
    <script src="{{ asset ("public/assets/admin/js/profile.js") }}"></script>
@endsection
