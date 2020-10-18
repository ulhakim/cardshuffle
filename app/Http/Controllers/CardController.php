<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
    	$cards = $this->shufflecard();
        return view('welcome', compact('cards'));
    }

	function shufflecard()
    {	
    	$cards = array();


    	$cardsym = 1; 
    	// 1 is spade
    	// 2 is heart
    	// 3 is club
    	// 4 is diamond
    	$cardnum = 1;
    	for ($x = 1; $x <= 52; $x++) {
    		if ($cardnum == 14) {
    			$cardnum = 1;
    			$cardsym++;
    		}

    		$cards[$x]['ind'] = $cardnum;
    		$cards[$x]['sym'] = $cardsym;
    		$cardnum++;
    	
    	// print_r($x."  ===".$cards[$x]['ind'] ."   ".$cards[$x]['sym']."<br>");
    	}

		shuffle($cards);

        return ($cards);
    }    
}
