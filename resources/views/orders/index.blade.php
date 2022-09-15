@extends('layouts.admin')
@section('title', 'Orders')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            {{-- <h1 class="h3 mb-3">Orders</h1> --}}
            <div class="row">
                <div class="col-12">
                    <livewire:order />
                </div>
            </div>
        </div>
    </main>
@endsection
