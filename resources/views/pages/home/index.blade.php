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

            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>2017</td>
                    <td>Mercedes</td>
                    <td>C63</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>

        <hr>

        <div class="form-container">
            <form class="form-horizontal" method="POST" action="/">
                <div class="form-group">
                    <label for="brand" class="col-sm-2 control-label">Brand</label>
                    <div class="col-sm-10">
                        <select class="selectpicker" name="brand" id="brand">
                            <option value="1">Mercedes</option>
                            <option value="2">BMW</option>
                            <option value="3">Audi</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="model" class="col-sm-2 control-label">Model</label>
                    <div class="col-sm-10">
                        <select class="selectpicker" name="model" id="model">
                            <option value="1">C63</option>
                            <option value="2">747</option>
                            <option value="3">A8</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="cars_count" class="col-sm-2 control-label">Count</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="cars_count" placeholder="Cars count">
                    </div>
                </div>

                <div class="form-group">
                    <label for="date" class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                        <input name="date" type='text' class="form-control" id="date" placeholder="MM/DD/YYY"/>
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