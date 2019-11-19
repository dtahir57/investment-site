<?php

use App\Models\Package;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package = new Package;
        $package->package_name = 'WEEKLY PACKAGE';
        $package->net_profit = '15% after 10 days';
        $package->package_type = 1;
        $package->min_investment = 50;
        $package->max_investment = 30000;
        $package->wait_time = '10 days';
        $package->referral_bonus = 'Referral bonus 3%';
        $package->save();

        $package = new Package;
        $package->package_name = 'Monthly PACKAGE';
        $package->net_profit = '40% after 30 days';
        $package->package_type = 2;
        $package->min_investment = 100;
        $package->max_investment = 50000;
        $package->wait_time = '30 days';
        $package->referral_bonus = 'Referral bonus 3%';
        $package->save();

        $package = new Package;
        $package->package_name = 'FOREX ACCOUNT MANAGEMENT';
        $package->price = 500;
        $package->renewal_time = 'per six months';
        $package->package_type = 3;
        $package->min_investment = 1000;
        $package->max_investment = 10000;
        $package->net_profit = '10-15% Monthly';
        $package->has_support = 1;
        $package->trading_material = 1;
        $package->save();

        $package = new Package;
        $package->package_name = 'VIP TRADING SIGNALS';
        $package->price = 100;
        $package->renewal_time = 'monthly';
        $package->package_type = 4;
        $package->min_investment = 0;
        $package->max_investment = 'unlimited';
        $package->signals = '3(Daily)';
        $package->has_support = 1;
        $package->training_sesssions = 'Every Sunday';
        $package->save();

        $package = new Package;
        $package->package_name = 'PERSONAL TRAINING';
        $package->package_type = 5;
        $package->price = 200;
        $package->has_support = 1;
        $package->trading_material = 1;
        $package->save();
    }
}
