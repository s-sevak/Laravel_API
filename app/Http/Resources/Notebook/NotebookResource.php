<?php

namespace App\Http\Resources\Notebook;

use Illuminate\Http\Resources\Json\JsonResource;

class NotebookResource extends JsonResource
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
            'id' => $this->id,
            'Full_name' => $this->Full_name,
            'Company' => $this->Company,
            'Phone' => $this->Phone,
            'Email' => $this->Email,
            'BirthDate' => $this->BirthDate,
            'Photo' => $this->Photo,
        ];
    }
}
