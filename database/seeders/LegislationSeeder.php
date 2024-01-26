<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegislationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('legislations')->insert([
            [
                'country' => 'Italie',
                'rules' => 'Formalités d’entrée
                Pour un séjour de trois mois maximum, les ressortissants français doivent être en possession d’une pièce d’identité (carte nationale d’identité ou passeport, à l’exclusion de tout autre document) en cours de validité. Cela s’applique également aux mineurs, le livret de famille n’étant pas un document de voyage.
                
                Mesures liées au Covid
                Pour les voyageurs en provenance de France, l’entrée sur le territoire italien n’est pas soumise à la présentation d’une preuve de vaccination ou de guérison, ni d’un test.
                
                Pour les voyageurs en provenance d’un autre pays que la France, les conditions d’entrée en Italie sont consultables sur le site du ministère italien des Affaires étrangères.
                
                Extension de la validité des CNI
                Les cartes nationales d’identité françaises (CNI) délivrées à des personnes majeures entre le 1er janvier 2004 et le 31 décembre 2013 sont encore valables 5 ans après la date de fin de validité indiquée au verso, mais aucune modification matérielle de la carte plastifiée n’atteste de cette prorogation.
                Les autorités italiennes ont accepté officiellement cette prorogation. Toutefois, de façon à éviter tout désagrément pendant votre voyage, il est fortement recommandé de préférer l’utilisation d’un passeport valide à celle d’une CNI portant une date de fin de validité dépassée, même si elle est considérée par les autorités françaises comme étant toujours en cours de validité.
                Les voyageurs ne disposant que d’une CNI, peuvent télécharger et imprimer la notice multilingue (PDF - 81,2 Ko) expliquant ces règles.
                
                Sortie des mineurs
                Pour les mineurs résidant en France : les autorités françaises exigent qu’un enfant mineur qui vit en France et voyage à l’étranger sans être accompagné par l’un de ses parents soit muni d’une autorisation de sortie du territoire (AST). En revanche, les autorités italiennes n’exigent pas cette autorisation pour ressortir du territoire.
                Pour les mineurs résidant en Italie : un enfant français qui vit habituellement en Italie et qui séjourne en France n’a pas besoin de fournir une attestation de sortie du territoire lorsqu’il quitte l’Italie ou la France. En revanche, il doit présenter une carte d’identité ou un passeport valide, où figure son adresse à l’étranger. La seule présentation de son livret de famille ne suffit pas.
                
                Animaux de compagnie
                Tout chien ou chat voyageant dans l’Union européenne doit être identifié (puce et/ou tatouage), vacciné valablement contre la rage et être accompagné d’un passeport européen fourni et rempli par un vétérinaire avant d’être transporté depuis la France vers l’Italie ou depuis l’Italie vers la France.
                
                Pour plus d’informations, réglementation sur les animaux de compagnie.'
            ]
        ]);
    }
}
