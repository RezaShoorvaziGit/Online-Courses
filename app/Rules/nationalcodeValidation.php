<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class nationalcodeValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $count = 10;
        $sum = 0;
        $countNationalcode = strlen($value);
        if ($countNationalcode < 8 or $countNationalcode > 10) {
            return false;
        }

        if ($countNationalcode == 8) {
            $value = "00" . $value;
        } elseif ($countNationalcode == 9) {
            $value = "0" . $value;
        }
        for ($i = 0; $i < 9; $i++) {
            $sum += $value[$i] * $count;
            $count--;
        }
        if ($sum % 11 > 2 and $sum % 11 - 11 == $value[9] or $sum % 11 < 2 and $sum % 11 == $value[9]) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ':attribute باید صحیح باشد ';
    }
}
