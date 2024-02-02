<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LocatieResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => $this->whenLoaded('user', fn () => UserResource::make($this->user)),
            'event' => $this->whenLoaded('event', fn () => EventResource::make($this->event)),
            'name' => $this->body,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,

        ];    }
}
