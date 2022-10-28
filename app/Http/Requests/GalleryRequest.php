<?php

namespace App\Http\Requests;

use App\Models\Gallery;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class GalleryRequest extends FormRequest
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
            'name'=>['required','string'],
            'image'=>['image','nullable', 'max:300', 'mimes:jpeg,png,jpg,gif,svg']
        ];
    }

    public function createGallery(){
        try{
            Gallery::create([
                'name'=>$this->name,
                'image'=>upload_single_image('gallery_image', 'image')
             ]);
             return true;
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
