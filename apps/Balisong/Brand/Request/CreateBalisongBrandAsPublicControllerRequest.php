<?php

declare (strict_types=1);

namespace Apps\Balisong\Brand\Request;

use Illuminate\Foundation\Http\FormRequest;

class CreateBalisongBrandAsPublicControllerRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'string',
                'required'
            ],
            'yearCreation' => [
                'string',
            ],
            'logo' => [
                'string',
            ],
            'countryCreation' => [
                'string',
                'required'
            ],
            'isCloneMaker' => [
                'bool',
                'required'
            ],
        ];
    }
}
