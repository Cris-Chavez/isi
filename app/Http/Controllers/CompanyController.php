<?php

namespace App\Http\Controllers;

use App\Models\company;
use Illuminate\Http\Request;

use App\Http\Requests\CompanyRequest;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();

        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $aws = true;

        if(empty($request->file('logo')))
        {
            $imagen = 'assets/images/avatar/no-logo.png';
            $logo = $imagen;            
            $aws=false;

        }
        else
        {
            $imagen = $request->file('logo')->store('isi/logo', 's3');        
            $logo = $imagen;             
        }

        
        $user = new Company();

        $user->name     =   $request->name;
        $user->email    =   $request->email;
        $user->web      =   $request->web;
        if($aws ==true)
            $user->logo     =   Storage::disk('s3')->url($logo);
        else
            $user->logo     =   $logo;

        $user->save();

        return redirect()->route('company.index')->with('success', 'Empresa creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(company $company)
    {
        $company->first();

        $employees = Employee::where('company_id', $company->id)->count();

        return view('company.show', compact('company', 'employees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(company $company)
    {
        $company->first();

        return view('company.edit', compact('company'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, company $company)
    {
        $logo = $request->file('logo');   
        $aws = true;     
        
        if(empty($logo)){
            $logo = $company->logo;      
            $aws = false;
        }
        else{
            $logo = $request->file('logo')->store('isi/logo', 's3');           
        }

        $company->name      =   $request->name;
        $company->email     =   $request->email;
        $company->web       =   $request->web;

        if($aws == true)
            $company->logo  =   Storage::disk('s3')->url($logo);    
        else
            $company->logo      =   $logo;
            
        $company->update();

        return redirect()->route('company.index')->with('edit', 'Empresa editada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(company $company)
    {
        $company->delete();

        return redirect()->route('company.index')->with('delete', 'Empresa eliminada correctamente');
    }
}
