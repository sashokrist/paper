<?php namespace Sasho\Rps\Components;

use Cms\Classes\ComponentBase;
use Redirect;
use Flash;
use Auth;
use Sasho\Rps\Models\Game;
use Illuminate\Support\Facades\Session;

class Games extends ComponentBase{

    public function componentDetails()
    {
        return [
            'name' => 'RPS',
            'description' => 'rock paper scissors game'
        ];
    }

    function init()
    {
        $user = Auth::getUser();

        //dd($user);
        $newGame = new Game;
        $newGame->user_id = $user->id;
        $newGame->avatar = $user->avatart;
        $newGame->name = $user->username;
        $newGame->save();

        Session::put('newGame', $newGame->id);
    }

    public function onPlay()
    {
        $gameId = Session::get('newGame');
        $game = Game::find($gameId);
        //dd($game);

        $data = post('sel');

        $options = array("rock", "paper", "scissors");
        $computer = $options[rand(0, 2)];

        for ($i = 0; $i<=3; $i++){
            if ($data == 'scissors' && $computer == 'paper' ||
                $data == 'paper' && $computer == 'rock' ||
                $data == 'rock' && $computer == 'scissors') :
                $result = 'WIN';
                $game->result = 'WIN';
                $game->save();
            endif;

            if ($computer == 'scissors' && $data == 'paper' ||
                $computer == 'paper' && $data == 'rock' ||
                $computer == 'rock' && $data == 'scissors') :
                $result = 'LOST';
                $game->result = 'LOST';
                $game->save();
            endif;

            if ($data == $computer) :
                $result = 'TIE';
                $game->result = 'TIE';
                $game->save();
            endif;
            Flash::success($result);
        }

        Flash::success('Game over');



    }
}
