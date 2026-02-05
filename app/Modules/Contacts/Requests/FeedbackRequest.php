<?php

namespace App\Modules\Contacts\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Modules\Contacts\Models\Feedback;

class FeedbackRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return string[]
     */
    public function getRules(): array
    {
        return [
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|max:255'
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 2 characters',
            'name.max' => 'Name cannot be longer than 255 characters',
            'email.required' => 'Email is required',
            'email.max' => 'Email cannot be longer than 255 characters',
            'email.email' => 'Email must be a valid email address',
        ];
    }

    /**
     * @return Feedback
     */
    public function toModel(): Feedback
    {
        $this->validate($this->getRules());
        return new Feedback(
            name: $this->post('name'),
            email: $this->post('email'),
            message: $this->post('message') ?? '',
        );
    }
}
