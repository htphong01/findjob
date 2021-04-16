<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Job extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->job_id,
            'name' => $this->job_name,
            'slug' => $this->job_slug,
            'category' => $this->category_id,
            'address' => $this->job_address,
            'employer' => $this->employer_id,
            'total_candidate' => $this->job_total_candidate,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
