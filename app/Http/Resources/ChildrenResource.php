<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ChildrenResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->full_name,
            "gender" => $this->gender == "M" ? 'Male' : 'Female',
            "birth_date" => $this->birth_date,
            "father_name" => $this->father->full_name,
            "mother_name" => $this->mother->full_name,
        ];
    }
}
