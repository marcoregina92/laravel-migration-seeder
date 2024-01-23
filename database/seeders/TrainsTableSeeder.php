<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trains = [
            [
                "azienda" => "Trenitalia",
                "stazione_di_partenza" => "Palermo",
                "stazione_di_arrivo" => "Roma",
                "orario_di_arrivo" => "08:00:00",
                "orario_di_partenza" => "06:00:00",
            ],
            [
                "azienda" => "Italo",
                "stazione_di_partenza" => "Trento",
                "stazione_di_arrivo" => "Livorno",
                "orario_di_arrivo" => "02:00:00",
                "orario_di_partenza" => "11:00:00",
            ]
        ];

        foreach ($trains as $train) {
            $nuovoTreno = new Train();
            $nuovoTreno->azienda = $train["azienda"];
            $nuovoTreno->stazione_di_partenza = $train["stazione_di_partenza"];
            $nuovoTreno->stazione_di_arrivo = $train["stazione_di_arrivo"];
            $nuovoTreno->orario_di_arrivo = $train["orario_di_arrivo"];
            $nuovoTreno->orario_di_partenza = $train["orario_di_partenza"];
            $nuovoTreno->save();
        }
    }
}
