<?php

namespace App\Http\Requests;

use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class BlogRequest extends FormRequest
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
            'title'=>['required','string'],
            'author'=>['required','string'],
            'body'=>['nullable','string'],
            'tag'=>['required'],
            'image'=>['image','nullable', 'max:300', 'mimes:jpeg,png,jpg,gif,svg']
        ];
        
        
    }

    public function createNewBlog(){
        try{
            // $slug  = ;
            Blog::create([
                'title'=>$this->title,
                'author'=>$this->author,
                'body'=>$this->body,
                'slug'=>Str::slug($this->title),
                'image'=>upload_single_image('blogger', 'image')
            ])->tag()->attach($this->tag);
            return true;
        } catch(\Exception $exception){
           Log::error($exception->getMessage());
           return false;
        }
    }
}
