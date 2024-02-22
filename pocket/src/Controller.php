<?php

namespace Mj\PocketCore;

use Rakit\Validation\Validation;
use Rakit\Validation\Validator;

class Controller
{
    protected function validate(array $data, array $rules, array $message = []): Validation
    {
        $validator = new Validator($message);

        // make it
        $validation = $validator->make($data, $rules);

        // validate
        $validation->validate();

        return $validation;
    }
}