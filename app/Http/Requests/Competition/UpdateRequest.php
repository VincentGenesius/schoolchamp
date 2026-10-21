<?php

namespace App\Http\Requests\Competition;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'event' => ['required', 'string'],
            'field' => ['required', 'string'],
            'participant' => ['required', 'string'],
            'advisor' => ['required', 'string'],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:UPCOMING,ONGOING,FINISHED'],
            'location' => ['required', 'string', 'max:255'],
            'achievement' => ['required', 'string', 'max:255']
        ];
    }
}
