<?php

namespace App\Application\Transformers;

use Illuminate\Database\Eloquent\Model;

class SliderTransformers extends AbstractTransformer
{

    public function transformModel(Model $modelOrCollection)
    {
        return [
            "id" => $modelOrCollection->id,
			"title" => getLangValue($modelOrCollection->title , "en")
			"body" => getLangValue($modelOrCollection->body , "en"),
			"image" => $modelOrCollection->image

        ];
    }

    public function transformModelAr(Model $modelOrCollection)
    {
        return [
           "id" => $modelOrCollection->id,
			"title" => getLangValue($modelOrCollection->title , "ar")
			"body" => getLangValue($modelOrCollection->body , "ar"),
			"image" => $modelOrCollection->image

        ];
    }

}