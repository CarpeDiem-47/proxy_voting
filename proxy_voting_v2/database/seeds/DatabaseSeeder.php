<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // populate the teachers section
        $teachernames = array(
            "Avetyan, Rafayel R.",
            "Boots, Peter P.J.H.M.",
            "Croon-van der Wal, Ellen E.B. de",
            "Eekhout, Michel M.M.I.M. van",
            "Fransen, MariГ«lle M.H.T.",
            "Gestel, Bert L.F.M. van",
            "Geurts, Joris J.H.J.",
            "Hartingsveldt, Stan S. van",
            "Henning, Frank F.L.",
            "Huang, Estella C.H.",
            "Kabzar, Vladimir U.Y.",
            "Koehorst, Michiel M.W.",
            "Kuah, Chung W.C.",
            "Kuprys, Andrius A.",
            "Lara Rojas, John J.G.",
            "Li, Li L.",
            "Linnartz, Paul P.L.L.J.",
            "Littel, Antoinette A.C.J.M.",
            "Mukala, Patrick M.P.",
            "Paval, Roxana R.",
            "Pesic, Maja M.",
            "Postma, AndrГ© A.",
            "Ravelo SГЎnchez, JesГєs J.N.",
            "Sanden, Ella P.M. van der",
            "Scheepers, Patricia P.L.M.",
            "Schriek, Erik H.J.D. van der",
            "Tegenbosch-Jansen, Hetty H.M.B.",
            "Thaqi, Emin E.",
            "Verri, Lorenzo L.",
            "Veugen-van Vroonhoven, Agnes A.L.B. van",
            "Wolf-Guis, Corrie C.P.",
            "Zijlmans, Jack J.H.A.",
        );
        $teacherlinks = array(
            "https://apps.fhict.nl/hellotalent/profile/I874073",
            "https://apps.fhict.nl/hellotalent/profile/I871412",
            "https://apps.fhict.nl/hellotalent/profile/I878127",
            "https://apps.fhict.nl/hellotalent/profile/I884665",
            "https://apps.fhict.nl/hellotalent/profile/I872270",
            "https://apps.fhict.nl/hellotalent/profile/I871186",
            "https://apps.fhict.nl/hellotalent/profile/I878848",
            "https://apps.fhict.nl/hellotalent/profile/I888602",
            "https://apps.fhict.nl/hellotalent/profile/I872921",
            "https://apps.fhict.nl/hellotalent/profile/I879226",
            "https://apps.fhict.nl/hellotalent/profile/I874898",
            "https://apps.fhict.nl/hellotalent/profile/I872578",
            "https://apps.fhict.nl/hellotalent/profile/I874156",
            "https://apps.fhict.nl/hellotalent/profile/I876989",
            "https://apps.fhict.nl/hellotalent/profile/I887095",
            "https://apps.fhict.nl/hellotalent/profile/I879556",
            "https://apps.fhict.nl/hellotalent/profile/I874049",
            "https://apps.fhict.nl/hellotalent/profile/I881637",
            "https://apps.fhict.nl/hellotalent/profile/I879635",
            "https://apps.fhict.nl/hellotalent/profile/I888077",
            "https://apps.fhict.nl/hellotalent/profile/I884294",
            "https://apps.fhict.nl/hellotalent/profile/I885233",
            "https://apps.fhict.nl/hellotalent/profile/I875196",
            "https://apps.fhict.nl/hellotalent/profile/I875235",
            "https://apps.fhict.nl/hellotalent/profile/I878347",
            "https://apps.fhict.nl/hellotalent/profile/I876608",
            "https://apps.fhict.nl/hellotalent/profile/I870971",
            "https://apps.fhict.nl/hellotalent/profile/I887002",
            "https://apps.fhict.nl/hellotalent/profile/I879713",
            "https://apps.fhict.nl/hellotalent/profile/I871294",
            "https://apps.fhict.nl/hellotalent/profile/I870882",
            "https://apps.fhict.nl/hellotalent/profile/I871207",
        );



        for($i=0; $i<count($teachernames); $i++)
        {
            DB::table('teachers')->insert([
                'name' => $teachernames[$i],
                'link' => $teacherlinks[$i],
                'picture'=> 'nil'
            ]);
        }
        
        // to be updates
        DB::table('qualifications')->insert([
                'title' => 'FHICTster 2017',
                'description' => 'Choose the coolest teacher of the year!',
            ]);
    }
}
