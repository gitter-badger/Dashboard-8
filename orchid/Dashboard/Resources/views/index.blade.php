@extends('dashboard::layouts.dashboard')

@section('content')


    <div id="app">
        <h1>Hello App!</h1>
        <p>
            <!-- use v-link directive for navigation. -->
            <a v-link="{ path: '/foo' }">Go to Foo</a>
            <a v-link="{ path: '/bar' }">Go to Bar</a>
        </p>
        <!-- route outlet -->
        <router-view></router-view>
    </div>



@stop