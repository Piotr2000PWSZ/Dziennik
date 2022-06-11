<?php

namespace App\Http\Requests;

use App\Ogloszenia;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreOgloszeniaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'temat' => [
                'required'],
            'wiadomosc' => [
                'required'],
        ];
    }
}
