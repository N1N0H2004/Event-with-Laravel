<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'title' => ['required', 'unique:events,title',
                Rule::unique('events', 'title')->where('user_id', $this->input('user_id'))
            ],
            'description' => 'required',
            'event_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ];

        if ($this->isMethod('post')) {
            $rules['location_id'] = 'required';
        }

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            $rules['location'] = 'required';
        }

        return $rules;
    }

    public function messages() {
        return [
            'title.unique' => 'This title for events is already in use!'
        ];
    }

}
