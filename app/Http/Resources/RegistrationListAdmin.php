<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegistrationListAdmin extends JsonResource
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
            'uuid' => $this->uuid,
            'no_registration' => $this->no_registration,
            'admin_name' => $this->admin_name,
            'fullname' => $this->user->fullname,
            'status' => $this->status,
        ];
    }
}
