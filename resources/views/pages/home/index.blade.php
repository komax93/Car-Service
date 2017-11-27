@extends('app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Car Service</h1>
            <p class="lead">This is a simple car service with a summary table.</p>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Year</th>
                    <th>Brand</th>
                    <th>Model</th>
                    <th>Summary</th>
                </tr>
            </thead>

            <tbody data-url="/api/v1/sales/summary"></tbody>
        </table>

        <hr>

        <div class="form-container">
            <form class="form-horizontal" method="POST" action="/api/v1/sales">
                <div class="form-group">
                    <label for="brand" class="col-sm-2 control-label">Brand</label>
                    <div class="col-sm-10">
                        <select class="selectpicker" name="brand" id="brand" title="Choose car brand..." data-url="/api/v1/brands"></select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="model" class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-10">
                        <select class="selectpicker" name="model" id="model" title="Choose car model..." data-url="/api/v1/models" disabled></select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="count" class="col-sm-2 control-label">Count</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="count" id="count" placeholder="Cars count">
                    </div>
                </div>

                <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                        <input name="date" type='text' class="form-control" id="date" placeholder="YYYY/MM/DD"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-block">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection