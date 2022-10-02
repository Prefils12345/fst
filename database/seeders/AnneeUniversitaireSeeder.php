<?php

namespace Database\Seeders;

use App\Models\AnneeUniversitaire;
use Illuminate\Database\Seeder;

class AnneeUniversitaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["libelle_anneeuniv"=>"2010"],
            ["libelle_anneeuniv"=>"2011"],
            ["libelle_anneeuniv"=>"2012"],
            ["libelle_anneeuniv"=>"2013"],
            ["libelle_anneeuniv"=>"2014"],
            ["libelle_anneeuniv"=>"2015"],
            ["libelle_anneeuniv"=>"2016"],
            ["libelle_anneeuniv"=>"2017"],
            ["libelle_anneeuniv"=>"2018"],
            ["libelle_anneeuniv"=>"2019"],
            ["libelle_anneeuniv"=>"2020"]
        ];

        foreach($data as $d){
            AnneeUniversitaire::create($d);
        }
    }
}
