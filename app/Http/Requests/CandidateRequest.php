<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Candidate;
use App\CandidateOrganization;

class CandidateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'identity_number' => 'required',
            'identity_file' => 'required',
            'bank' => 'required',
            'bank_account' => 'required',
            'religion' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'education' => 'required',
            'university' => 'required',
            'major' => 'required',
            'semester' => 'required',
            'graduation_year' => 'required',
            'file_cv' => 'required',
            'file_photo' => 'required',
        ];

        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function data_candidate($identity_file_name = null, $file_cv_name = null, $file_photo_name = null, $file_portofolio_name = null)
    {
        $data_candidate =  [
            'name' => $this->name,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'identity_number' => $this->identity_number,
            'identity_file' => $identity_file_name,
            'bank_id' => $this->bank,
            'bank_account' => $this->bank_account,
            'religion_id' => $this->religion,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'education_id' => $this->education,
            'university_id' => $this->university,
            'major' => $this->major,
            'semester' => $this->semester,
            'graduation_year' => $this->graduation_year,
            'file_cv' => $file_cv_name,
            'file_photo' => $file_photo_name,
            'file_portofolio' => $file_portofolio_name,
            'skill' => $this->skill,
            'candidate_status_id' => 1
        ];     

        return $data_candidate;   
    }

    public function candidate_organization($candidate_id, $filename = null)
    {
        $data_candidate_organization =  [
            'candidate_id' => $candidate_id,
            'org_name' => $this->org_name,
            'year' => $this->year,
            'position' => $this->position,
            'description' => $this->description,
            'file' => $filename,
        ];     

        return $data_candidate_organization;   
    }
}
