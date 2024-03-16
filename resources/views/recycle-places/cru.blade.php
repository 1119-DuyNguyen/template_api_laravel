@extends('layouts.master')

@section('content')
    <x-cru-resource
        title="Nơi tái chế"
        :route="$routeCRU"
        :method="$method"
        :formElements="$formElements"
    ></x-cru-resource>

@endsection
