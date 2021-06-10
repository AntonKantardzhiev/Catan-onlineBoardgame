<?php


namespace App\services;


use App\Models\Card;
use Exception;

class cardDeckGenerator
{
    /**
     * @var Card[] $card
     */
    private array $deck;

    private const AMOUNT_OF_KNIGHTS = 14;
    private const AMOUNT_OF_ROAD_BUILDING = 2;
    private const AMOUNT_OF_YEAR_OF_PLENTY = 2;
    private const AMOUNT_OF_MONOPOLY = 2;
    private const AMOUNT_OF_POINT_CARDS = 5;

    /**
     * @return Card[]
     */
    public function generateDeck(): array{


        for($i=0; $i<self::AMOUNT_OF_KNIGHTS; $i++){

            $this->deck[] = new Card('knight_card','Knight','Move the robber. Steal 1 resource from the owner of a settlement or city adjacent to the robber\'s new hex');

        }

        for($i=0; $i<self::AMOUNT_OF_POINT_CARDS; $i++)
        {

            $titles = ['Market','University','Great Hall','Chapel','Library'];

            $this->deck[] = new Card('victory_point_card',$titles[$i],'1 Victory point!, Reveal the card on your turn if, with it, you reach the number of points required for victory');

        }

        for($i=0; $i<self::AMOUNT_OF_YEAR_OF_PLENTY; $i++)
        {

           $this->deck[] = new Card('year_of_plenty','Year of plenty', 'Take any 2 resources from the bank. Add them to your hand');

        }
        for($i=0; $i<self::AMOUNT_OF_MONOPOLY; $i++)
        {

           $this->deck[] = new Card('year_of_plenty','Year of plenty', 'When you place this card, choose one type of resource. All other players must give you all of the resources of that type');

        }

        for($i=0; $i<self::AMOUNT_OF_ROAD_BUILDING; $i++)
        {

           $this->deck[] = new Card('road_building','Road Building', 'When you place this card, you may place 2 roads for free');

        }
        shuffle($this->deck);

        return $this->deck;


    }



    //@Todo depending on if we will use a database this function should change the heldBy of the card instead of popping the array;
    /**
     * @throws Exception
     * @return Card;
     */
    public function drawCard(): Card
    {

        if(empty($this->deck)){

            throw new Exception('The card deck is empty');
        }

        return array_pop($this->deck);
    }


}
