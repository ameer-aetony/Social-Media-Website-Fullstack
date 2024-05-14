<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class UserRecource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

              "id" => $this->id ,
             "name" =>$this->name,
             "email" =>$this-> email,
             "email_verified_at"=> $this->email_verified_at,
             "username" => $this->username,
             "cover_url" =>Storage::url($this->cover_path),
             "avatar_path" =>Storage::url($this->avatar_path),
        ];
    }
}
