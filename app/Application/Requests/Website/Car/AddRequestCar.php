<?php
 namespace App\Application\Requests\Website\Car;
 use Illuminate\Foundation\Http\FormRequest;
 class AddRequestCar extends FormRequest
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
        	"region_id" => "required|integer",
         "country_id" => "required|integer",
         "maincat_id" => "required|integer",
         "brand_id" => "required|integer",
            "title" => "min:10|max:191|required",
   "body" => "required",
   "image" => "required|image",
   "youtube" => "nullable|url",
            "price"=>"required"
            ];
    }
}
