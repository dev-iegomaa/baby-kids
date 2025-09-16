<?php

namespace App\Http\Requests;

use App\Enums\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
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
            'image' => [
                $this->route('slider') ? 'nullable' : 'required',
                'image',
                'mimes:gif,jpg,jpeg,png,webp',
                'max:2048'
            ],
            'status' => ['required', 'integer', Rule::in([Status::ENABLE, Status::DISABLE])],
        ];
    }
}
