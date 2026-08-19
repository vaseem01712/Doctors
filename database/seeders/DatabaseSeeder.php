<?php
namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Doctor;
use App\Models\DoctorAvailability;
use App\Models\Faq;
use App\Models\PricingPlan;
use App\Models\Service;
use App\Models\Specialty;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(['email' => 'admin@medicare.test'], [
            'name' => 'Admin',
            'email' => 'admin@medicare.test',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        User::firstOrCreate(['email' => 'patient@medicare.test'], [
            'name' => 'Test Patient',
            'email' => 'patient@medicare.test',
            'password' => bcrypt('password'),
            'role' => 'patient',
        ]);

        $specialties = Specialty::count() ? Specialty::all() : Specialty::factory(8)->create();
        $doctors = Doctor::count() ? Doctor::all() : Doctor::factory(12)->create();

        foreach ($doctors as $doctor) {
            if ($doctor->availabilities()->exists()) {
                continue;
            }

            for ($weekday = 1; $weekday <= 5; $weekday++) {
                DoctorAvailability::create([
                    'doctor_id' => $doctor->id,
                    'weekday' => $weekday,
                    'start_time' => '09:00',
                    'end_time' => '17:00',
                    'break_start' => '13:00',
                    'break_end' => '14:00',
                    'slot_duration_minutes' => 30,
                ]);
            }
        }

        if (! Service::exists()) Service::factory(8)->create();
        if (! Testimonial::exists()) Testimonial::factory(10)->create();
        if (! Faq::exists()) Faq::factory(6)->create();

        collect(['Health Tips','Nutrition','Wellness','Medical News'])->each(
            fn ($name) => BlogCategory::firstOrCreate(['slug' => \Illuminate\Support\Str::slug($name)], ['name' => $name])
        );
        if (! BlogPost::exists()) BlogPost::factory(6)->create();

        if (! PricingPlan::exists()) PricingPlan::insert([
            ['name' => 'Basic', 'price' => 499, 'billing_period' => 'month', 'features' => json_encode(['1 Consultation','Email Support','Basic Health Records']), 'is_recommended' => false, 'sort_order' => 1],
            ['name' => 'Standard', 'price' => 999, 'billing_period' => 'month', 'features' => json_encode(['5 Consultations','Priority Support','Full Health Records','Lab Discounts']), 'is_recommended' => true, 'sort_order' => 2],
            ['name' => 'Premium', 'price' => 1999, 'billing_period' => 'month', 'features' => json_encode(['Unlimited Consultations','24/7 Support','Full Health Records','Home Visits','Annual Checkup']), 'is_recommended' => false, 'sort_order' => 3],
        ]);
    }
}
