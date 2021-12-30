<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArtCard extends Component
{
    public $art;
    public $lastBid;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($art)
    {
        $this->art = $art;
        if($art->bids()->count() > 0){
            $this->lastBid = $art->bids()->orderBy('amount', 'desc')->first();
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.art-card');
    }
}
