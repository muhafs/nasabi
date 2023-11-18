<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            'name' => $this->full_name,
            'gender' => $this->gender == 'M' ? 'Male' : 'Female',
            'birth_date' => $this->birth_date,
            'father' => new ParentResource($this->whenLoaded('father')),
            'mother' => new ParentResource($this->whenLoaded('mother')),
            'children' => ChildrenResource::collection($this->gender == 'M' ? $this->whenLoaded('childrenAsDad') : $this->whenLoaded('childrenAsMom')),
        ];
    }
}
