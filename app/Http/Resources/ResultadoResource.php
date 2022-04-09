<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultadoResource extends JsonResource
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
            'id_resultado'=> $this->id_resultado,
            'fecha'=> $this->fecha,
            'transporte'=> $this->transporte,
            'vivienda'=> $this->vivienda,
            'alimentacion'=> $this->alimentacion,
            'total' => $this->total
        ];
    }
}
