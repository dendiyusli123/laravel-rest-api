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
            'stok' => $this->stok == 0 ? 'Stok habis' : $this->stok,
            'diskon' => $this->diskon,
            'total_harga' => round((1- ($this->diskon/100)) * $this->harga, 2),
            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('bintang')/$this->reviews->count(), 2) : 'Belum ada rating',
            'href' => [
                'reviews' => route('reviews.index', $this->id)
            ]
        ];
    }
}
