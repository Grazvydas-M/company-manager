@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Company Edit</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('company.update', [$company]) }}">

                            <div class="form-group">
                                <label>Company name:</label>
                                <input type="text" class="form-control" name="company_name" value="{{ $company->name }}">
                            </div>
                            <div class="form-group">
                                <label>Specialization:</label>
                                <input type="text" class="form-control" name="company_specialization" value="{{ $company->specialization }}">
                            </div>
                            <div class="form-group">
                                <label>Company code:</label>
                                <input type="text" class="form-control" name="company_code" value="{{ $company->company_code }}">
                            </div>
                            <div class="form-group">
                                <label>Country:</label>
                                <input type="text" class="form-control" name="company_country" value="{{ $company->country }}">
                            </div>
                            <div class="form-group">
                                <label>City:</label>
                                <input type="text" class="form-control" name="company_city" value="{{ $company->city }}">
                            </div>
                            <div class="form-group">
                                <label>Post Code:</label>
                                <input type="text" class="form-control" name="company_post_code" value="{{ $company->post_code }}">
                            </div>

                            @csrf
                            <button class="btn btn-primary" type="submit">EDIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
