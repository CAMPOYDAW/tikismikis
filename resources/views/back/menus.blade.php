
<script>
    var imgs=<?php echo  json_encode($imgs) ?>;

</script>
@extends('layouts.backend')
@section('content')
    @include('partials.admin.navbar_admin')
    @include('partials.admin.navbar_lateral_admin')
    @include('partials.admin.main_admin')

@endsection
@section('popup')
    @include('partials.pop_up_menu')
@endsection