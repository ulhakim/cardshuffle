<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {	

    	$playernum = 0;
		if (array_key_exists('playernumber', $_POST)) {

	        $validator = Validator::make(['playernumber' => $_POST['playernumber']],
	            ['playernumber' => 'required|numeric|min:0|not_in:0'],
	            ['playernumber.*' => 'Input value does not exist or value is invalid'] // all error end up same error message  
	        );

	        if ($validator->fails()) {
	        	return redirect()->back()->withErrors($validator->errors());
	        }

		}

    	$cards = $this->shufflecard();
    	$players = array();
    	$playercards = array();

    	if (!empty($_POST['playernumber'])) {
    		$playernum = $_POST['playernumber'];

	    	$n = 0;
	    	foreach ($cards as $key => $value) {
	    		if ($n == $playernum) {
	    			$n = 0;
	    		}

	    		$n++;
	    		$players[$n][] = $value;
	    	}
    	}


    	foreach ($players as $k => $playercard) {

    		$cardlistcode = array();
    		foreach ($playercard as $key => $value) {
    			$cardlistcode[] = $value['code'];
    		}
    		$playercards[$k]= implode(",", $cardlistcode);

    	}

        return view('welcome', compact('cards','players','playernum','playercards')); // combine players and playercards is the best practice. will do in future 
    }

	function shufflecard()
    {	
    	$cards = array();


    	$cardsym = 1; 
    	// 1 is spade
    	// 2 is heart
    	// 3 is club
    	// 4 is diamond

    	//Spade = S, Heart = H, Diamond = D, Club = C
    	$shape = array('1' => 'S', 
					   '2' => 'H',
					   '3' => 'C',
					   '4' => 'D'
					 );


    	// 1=A,10=X,11=J,12=Q,13=K
    	$alphabet = array('1' => 'A', 
    					  '10' => 'X',
    					  '11' => 'J',
    					  '12' => 'Q',
    					  '13' => 'K'
    					 );
    	$cardnum = 1;
    	for ($x = 1; $x <= 52; $x++) {
    		if ($cardnum == 14) {
    			$cardnum = 1;
    			$cardsym++;
    		}

    		$cards[$x]['ind'] = $cardnum;
    		$cards[$x]['sym'] = $shape[$cardsym];

    		if (array_key_exists($cards[$x]['ind'], $alphabet)) {
    			$cards[$x]['ind'] = $alphabet[$cards[$x]['ind']];
    		}

    		$cards[$x]['code'] = $cards[$x]['sym']."-".$cards[$x]['ind'];
    		$cardnum++;
    	
    	}

		shuffle($cards);

        return ($cards);
    }    
}
