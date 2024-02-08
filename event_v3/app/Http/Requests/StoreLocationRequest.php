<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Psy\Util\Str;

class StoreLocationRequest extends FormRequest
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
        return [
            'name' => ['required', 'unique:locations,name',
                Rule::unique('locations', 'name')
            ],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'name' => Ucfirst($this->name),
        ]);
    }

    public function messages() {
        return [
            'name.unique' => 'This name for locations is already in use!'
        ];
    }
}


