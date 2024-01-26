<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TravelDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $travels = DB::table('travels')->get();

        foreach ($travels as $travel) {
            $travel_id = $travel->id;
            DB::table('travel_days')->insert([
                [
                    "travel_id" => $travel_id,
                    "title_day" => "Jour 1 : Le Centre historique et ses alentours",
                    "description_day" => "La Fontaine de Trévi
                    Pour commencer votre séjour de 3 jours à Rome, quoi de mieux que d’aller voir la fameuse Fontaine de Trévi ? Bien évidemment, c’est un lieu emblématique de la ville qui attire nombreux touristes, à n’importe quel moment de la journée. Cependant, si vous le pouvez, nous vous conseillons d’y aller très tôt le matin (avant 10h), vous aurez un peu plus de chance de faire une belle photo sans trop de monde derrière vous !
                    Si votre premier jour est un lundi, ne commencez alors pas par cette journée. En effet, la fontaine est vidée le lundi pour récupérer toutes les pièces de la semaine passée. Cela serait vraiment dommage de ne pas la voir remplie !
                    Le Panthéon
                    Le Panthéon n’est qu’à 10 minutes à pied de la Fontaine de Trévi. Ce monument est un autre incontournable de la ville, que ce soit pour son architecture mais aussi pour son histoire. C’est l’un des édifices les plus conservés de Rome, ce qui est plutôt impressionnant à voir. La Piazza de la Rotonda, où se situe le monument est un square dynamique ornée d’une magnifique fontaine."
                ],
                [
                    "travel_id" => $travel_id,
                    "title_day" => "Jour 2 : La Rome Antique",
                    "description_day" => "Le Colisée
                    Pour cette deuxième journée, vous pourrez aller visiter le plus grand amphithéâtre du monde : le Colisée. C’est un emblème de la ville, et si vous êtes comme nous, ça sera l’une des visites qui vous marquera le plus ! Son histoire est si passionnante et surtout les vestiges qu’il reste en témoignent parfaitement. Ce n’est pas pour rien que c’est l’une des sept merveilles du monde.
                    Le Forum Romain
                    Pour rester dans la Rome Antique, continuez votre journée au Forum Romain. C’était le coeur de la Rome Antique et aujourd’hui, il reste encore bon nombre de basiliques, monuments et temples à voir. Une grande partie est aujourd’hui en ruine, mais cela n’empêchera pas votre imagination de vous faire voyager plus de 2000 ans en arrière. Vous pourrez y voir notamment le Mont Palatin qui vous offrira une vue splendide sur tout le Forum Romain."
                ],
                [
                    "travel_id" => $travel_id,
                    "title_day" => "Jour 3 : Le Vatican et Trastevere",
                    "description_day" => "Les musées du Vatican et la Chapelle Sixtine
                    Comment visiter Rome sans visiter les musées du Vatican ? Cette Cité État est un incontournable lors de votre séjour, et vous pouvez bien évidemment ne pas manquer la Chapelle Sixtine. Il y a au total 13 musées, mais pour vraiment appréciez votre séjour, nous vous conseillons d’en choisir 3 ou 4 que vous voulez vraiment voir car cela risque d’être très long et fatiguant de tout voir.
                    La Basilique Saint Pierre
                    Sur la place Saint Pierre, vous y verrez bien évidemment la fameuse Basilique Saint Pierre. Lors de votre visite au Vatican, c’est un incontournable. De toute façon, vous n’avez aucune excuse : la visite de la basilique est gratuite ! C’est vraiment une des églises les plus impressionnantes du monde.
                    Notez que si vous souhaitez visiter la coupole, et monter pour profiter de la vue, l’entrée sera payante. Personnellement, c’est l’une des meilleures visites qu’on a fait à Rome : le panorama est sublime !",
                ]
            ]);
        }
    }
}
