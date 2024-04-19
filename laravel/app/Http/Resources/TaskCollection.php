<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

// use Illuminate\Http\Resources\Json\JsonResource;
// class UserResource extends JsonResource

class TaskCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        
        // We can customize or logical respose

        // return [
        //     'id' => $this->id,
        //     'title' => $this->title,
        //     'status' => $this->status
        // ];
    }
}
