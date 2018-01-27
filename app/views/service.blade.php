@extends('layouts.public')
@section('css') <link rel="stylesheet" type="text/css" href="/css/jiameng.css" />@stop
@section('wapper')
<div class="ydh-wapper wapper-bg">
	<div class="ydh-main clearfix">
		<div class="ydh-crumbs ">
			{!! pc_bread() !!}
		</div>

		<div class="ydh-about-wapper pd30">
			<p class="service-title"><img src="/images/ser.jpg"></p>
			{!! htmlspecialchars_decode($data['content']) !!}
		</div>

	</div>

</div>
@stop
