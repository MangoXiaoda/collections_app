<?php

namespace App\Http\Controllers\Api;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Requests\Api\CardRequest;

class CardController extends Controller
{


    public function store(CardRequest $request, Card $card)
    {
        $card_style = $request->card_style ?? '';
        $tag_id = $request->tag_id ?? '';
//        dd(213213);
        $card->card_name = $request->card_name;
//        $card->card_style = $card_style;
//        $card->tag_id = $tag_id;
//        $card->save();

        return $this->response->array(['test_message' => 'ok']);
    }
}
