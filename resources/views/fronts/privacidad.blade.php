<?php
foreach ($sets as $s){

    define($s->key,$s->value);
}

?>
@extends('layouts.frontend')
@section('content')
    @include('partials.main-privacidad')

@endsection