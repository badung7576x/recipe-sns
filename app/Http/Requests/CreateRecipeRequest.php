<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class CreateRecipeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cooking_time' => 'required|numeric',
            'material_name.*' => 'required|max:255',
            'material_quantity.*' => 'required|numeric',
            'material_unit.*' => 'required|max:10',
            'step_description.*' => 'required|max:255',
            'note' => 'nullable|max:255',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '料理の名前',
            'image' => '料理のイメージ',
            'cooking_time' => '予定時間',
            'material_name.*' => '材料名',
            'material_quantity.*' => '量',
            'material_unit.*' => '単位',
            'step_description.*' => '説明',
            'note' => 'レシピのメモ'
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'name' => trim($this->name),
            'step_description' => $this->__removeEmpty($this->step_description),
        ]);
        $this->merge($this->__removeMaterialNull());
    }

    private function __removeEmpty($array)
    {
        return array_filter($array, 'strlen');
    }

    private function __removeMaterialNull() {
        $materailNames = $this->material_name;
        $materailQuantities = $this->material_quantity;
        $materailUnits = $this->material_unit;

        $max = 0;
        for ($i = 0; $i < 10; $i++) {
            if (isset($materailNames[$i]) || isset($materailQuantities[$i]) || isset($materailUnits[$i])) {
                $max = $i;
            }
        }

        for ($i = $max + 1; $i < 10; $i++) {
            unset($materailNames[$i]);
            unset($materailQuantities[$i]);
            unset($materailUnits[$i]);
        }

        return [
            'material_name' => $materailNames,
            'material_quantity' => $materailQuantities,
            'material_unit' => $materailUnits,
        ];
    } 
    
}
