<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nmae' => $this->name, 
            'email' => $this->email,
            // 'phone' => '('.$this->phone->prefix.')'. $this->phone->phone_number
            // en el caso de uno a muchos
            'phones' => $this->phones,
            // muchos a muchos
            'roles' => $this->roles
        ];
    }
}
