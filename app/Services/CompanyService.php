<?php

namespace App\Services;

use App\Models\Company;

class CompanyService
{
    public function create(string $name): Company
    {
        $company = new Company();
        $company->name = $name;
        $company->save();

        return $company;
    }

}
