<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "title" => $this->title,
            "short_content" => $this->short_content,
            "content" => $this->content,
            "created_at" => $this->created_at,
            "usuario" => $this->user->name,
            "updated_at" => $this->updated_at,
        ];
    }
}
