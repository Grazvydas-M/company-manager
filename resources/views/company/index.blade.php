@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Our Company</b></div>

                    <div class="card-body" style="display: flex">
                        <div style="width: 50%">
                            Foto
                        </div>
                        <div style="width: 50%">
                            <div class="form-group">
                                <span><b>Company name:</b> <i>{{ $company->name }}</i> </span>
                            </div>
                            <div class="form-group">
                                <span><b>Specialization:</b> <i>{{ $company->specialization }}</i> </span>
                            </div>
                            <div class="form-group">
                                <span><b>Company code:</b> <i>{{ $company->company_code }}</i> </span>
                            </div>
                            <div class="form-group">
                                <span><b>Country:</b> <i>{{ $company-> country }}</i> </span>
                            </div>
                            <div class="form-group">
                                <span><b>City:</b> <i>{{ $company->city }}</i> </span>
                            </div>
                            <div class="form-group">
                                <span><b>Post code:</b> <i>{{ $company->post_code }}</i> </span>
                            </div>
                        </div>
                    </div>
                    <form>
                        @if(Auth::user()->is_admin)
                        <a href="{{ route('company.edit', [$company]) }}" class="btn btn-primary mr-3" style="margin: 3px; float: right",  type="submit">Edit</a>
                            @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
