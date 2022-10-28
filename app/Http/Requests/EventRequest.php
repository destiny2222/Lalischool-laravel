<?php

namespace App\Http\Requests;

use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
class EventRequest extends FormRequest
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
            'event_data'=>['required','date', 'string'],
            'body'=>['required', 'string'],
            'image'=>['image','nullable', 'max:300', 'mimes:jpeg,png,jpg,gif,svg']
        ];
    }

    public function  createNewEvent(){
        try{
            Event::create([
                'title'=>$this->title,
                'event_data'=>$this->event_data,
                'event_time'=>$this->event_time,
                'location'=>$this->location,
                'body'=>$this->body,
                'slug'=>Str::slug($this->title),
                'image'=>upload_single_image('event_image', 'image')
             ]);
             return true;
        }catch(\Exception $exception){
           Log::error($exception->getMessage());
           return false;
        }
        
    }
}
