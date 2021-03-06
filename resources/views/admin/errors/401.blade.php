@extends('admin.layouts.master')
@section('title', trans('errors.401.title_page'))
@section('content')
<div class="error-page">
    <h2 class="headline text-yellow">{{trans('errors.401.content.headline')}}</h2>
    <div class="error-content">
        <h3><i class="fa fa-warning text-yellow"></i> {{trans('errors.401.content.title')}}</h3>
        <p>
        	{!!
            	trans(
            		'errors.401.content.subtitle',
            		['url'=>link_to('admin', $title = trans('errors.401.content.return_link'))]
        		)
            !!}
        </p>
    </div>
</div>
@endsection