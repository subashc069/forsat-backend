<?php

use App\Models\Opportunity;
use App\Models\OpportunityDetail;
use Illuminate\Database\Seeder;

class OpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opportunities')->delete();

        factory(Opportunity::class, 300)->create()->each(function ($opportunity){
            $opportunity->details()->save(factory(OpportunityDetail::class)->make());
        });
    }
}
