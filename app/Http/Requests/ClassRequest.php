<?php

namespace App\Http\Requests;

use App\Models\ClassRoom;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ClassRequest extends FormRequest
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
            'age'=>['required', 'string'],
            'body'=>['required', 'string'],
            'image'=>['image','nullable', 'max:300', 'mimes:jpeg,png,jpg,gif,svg']
        ];
    }
    public function createNewClass(){
        try{
           ClassRoom::create([
            'name'=>$this->name,
            'age'=>$this->age,
            'slug'=>Str::slug($this->name),
            'body'=>$this->body,
            'image'=>upload_single_image('class_image', 'image')
           ]);
           return true;
        }catch(\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
