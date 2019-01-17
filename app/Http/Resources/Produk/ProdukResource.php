<?php

namespace App\Http\Resources\Produk;

use Illuminate\Http\Resources\Json\JsonResource;

class ProdukResource extends JsonResource
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
            'nama' => $this->nama,
            'deskripsi' => $this->detail,
            'harga' => $this->harga,
            'stok' => $this->stok,
            'diskon' => $this->diskon
        ];
    }
}
