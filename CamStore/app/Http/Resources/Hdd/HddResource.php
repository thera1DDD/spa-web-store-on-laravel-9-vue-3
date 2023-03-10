<?php

namespace App\Http\Resources\Hdd;

use Illuminate\Http\Resources\Json\JsonResource;

class HddResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'size'=>$this->size,
            'description'=>$this->description,
            'price'=>$this->price,
            'count'=>$this->count,
            'image_url'=>$this->imageUrl,
        ];

    }
}
