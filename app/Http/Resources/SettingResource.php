<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SettingResource extends JsonResource
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
            // $this: Colellection of data model
            'about me' => $this->about_us,
            'why us' => $this->why_us,
            'goal' => $this->goal,
            'vision' => $this->vision,
        ];
    }
}
