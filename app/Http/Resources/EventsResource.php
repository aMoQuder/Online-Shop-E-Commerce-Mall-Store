<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventsResource extends JsonResource {

    public function toArray( $request ) {
        return ( [
            'id' => $this->id,
            'title' => $this->title,
            'event_img' => $this->event_img,
            'description' => $this->description,
        ] );
    }
}
