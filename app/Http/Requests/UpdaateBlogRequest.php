<?php

namespace App\Http\Requests;

use App\Models\Blog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class UpdaateBlogRequest extends FormRequest
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
            'image'=>['image','nullable', 'max:300', 'mimes:jpeg,png,jpg,gif,svg']
        ];
    }

    public function updateBlog(Blog $blog){
        try{
            $blog->update([
                'title'=>$this->title,
                'author'=>$this->author,
                'body'=>$this->body,
                'slug'=>$this->title,
                'image'=>update_image('blogger',$blog->image,'image')
            ]);
            return true;
        } catch(\Exception $exception){
           Log::error($exception->getMessage());
           return false;
        }
    }
}
