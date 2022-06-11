@extends('layouts.admin')
@section('title', 'Create Commodity')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Create Commodity</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.commodities.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Name</label>
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputPrice">Current Price</label>
                                        <input type="number" name="current_price" class="form-control" min="0" step="any" id="inputPrice" placeholder="Current Price">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="daily_change">Daily Change</label>
                                        <input type="number" name="daily_change" class="form-control" step=".01" id="daily_change"
                                            placeholder="Daily Change">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="std_change">S.T.D Change</label>
                                        <input type="number" name="std_change" class="form-control" step=".01" id="std_change"
                                            placeholder="S.T.D Change">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
