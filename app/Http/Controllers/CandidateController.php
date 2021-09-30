<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bank;
use App\Candidate;
use App\CandidateOrganization;
use App\CandidateStatus;
use App\Education;
use App\Religion;
use App\SourceInformation;
use App\University;
use App\Http\Requests\CandidateRequest;
use File;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class CandidateController extends Controller
{
    public function index()
    {
        $bank = Bank::get();
        $education = Education::get();
        $religion = Religion::get();
        $source_information = SourceInformation::get();
        $university = University::get();

        return view('form_registrasi', [
            'banks' => $bank,
            'educations' => $education,
            'religions' => $religion,
            'source_informations' => $source_information,
            'universities' => $university
        ]);
    }

    public function store(CandidateRequest $request)
    {
        \DB::beginTransaction();
        try {

            // upload identity file
            if($request->hasFile('identity_file')){
                $image   = $request->file('identity_file');
                $identity_file_name = 'identity_file' . '_' . time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('documents/identity_file');
                    if(!File::isDirectory($path)){
                        File::makeDirectory($path, 0777, true, true);
                    }
                $filepath = 'documents/identity_file';
                $save = $image->move($path, $identity_file_name);
            }

            // upload file cv
            if($request->hasFile('file_cv')){
                $image   = $request->file('file_cv');
                $file_cv_name = 'file_cv' . '_' . time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('documents/file_cv');
                    if(!File::isDirectory($path)){
                        File::makeDirectory($path, 0777, true, true);
                    }
                $filepath = 'documents/file_cv';
                $save = $image->move($path, $file_cv_name);
            }

            // upload file photo
            if($request->hasFile('file_photo')){
                $image   = $request->file('file_photo');
                $file_photo_name = 'file_photo' . '_' . time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('documents/file_photo');
                    if(!File::isDirectory($path)){
                        File::makeDirectory($path, 0777, true, true);
                    }
                $filepath = 'documents/file_photo';
                $save = $image->move($path, $file_photo_name);
            }

            // create data candidate
            $result = Candidate::create($request->data_candidate($identity_file_name, null, null));

            \DB::commit();

            if($result){
                Alert::toast('Data berhasil disimpan', 'success')->padding('10px');
                return redirect()->back();
            }

        } catch (\Exception $e){
            \DB::rollback();
            Alert::toast($e->getMessage(), 'error')->padding('10px');
            return redirect()->back();
        }
    }
}
