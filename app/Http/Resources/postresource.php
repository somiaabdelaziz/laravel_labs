<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Userresource;

class postresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "post_id"=>$this->id,
            "post_title"=>$this->title,
            "post_desc"=>$this->description,
            "user"=>new Userresource($this->user)
        ];
    }
}
