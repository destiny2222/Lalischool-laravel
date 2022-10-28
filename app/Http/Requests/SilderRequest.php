<?php

namespace App\Http\Requests;

use App\Models\Silder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class SilderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'title'=>['required', 'string'],
            'subtitle'=>['required', 'string'],
            'body'=>['required', 'string'],
            'links'=>['required', 'string'],
            'image'=>['image','nullable', 'mimes:jpeg,png,jpg,gif,svg']
        ];
    }

    public function createSilder(){
        try{
            Silder::create([
                'title'=>$this->title,
                'links'=>$this->links,
                'subtitle'=>$this->subtitle,
                'body'=>$this->body,
                'image'=>upload_single_image('silder_image', 'image')
             ]);
             return true;
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
