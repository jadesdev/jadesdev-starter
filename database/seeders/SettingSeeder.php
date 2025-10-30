<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shortcodes = [
            'date' => 'Current date',
            'time' => 'Current time',
            'currency' => 'Currency symbol',
            'datetime' => 'Current date time',
            'site_name' => 'Site name',
            'site_email' => 'Site email address',
            'site_phone' => 'Site phone number',
            'site_address' => 'Site address',
            'support_email' => 'Support email',
        ];

        Setting::create([
            'title' => 'Jadesdev Product',
            'name' => 'Jadesdev',
            'description' => 'Default settings for Jadesdev Product.',
            'phone' => '+1234567890',
            'address' => '123 Main Street, City, Country',
            'admin_email' => 'admin@jadesdev.com',
            'support_email' => 'support@jadesdev.com',
            'email' => 'info@jadesdev.com',
            'favicon' => 'favicon.png',
            'logo' => 'logo.png',
            'currency' => '₦',
            'currency_code' => 'NGN',
            'currency_rate' => '1700',
            'primary' => '#3490dc',
            'secondary' => '#ffed4a',
            'custom_css' => null,
            'custom_js' => null,
            'rejected_usernames' => json_encode(['admin', 'support', 'root']),
            'shortcodes' => json_encode($shortcodes),
            'last_cron' => now(),
        ]);
    }
}
