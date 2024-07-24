<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;

class Brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brand')->insert([
            [
                'b_name' => 'Audi',
                'b_location' => 'Europe',
                'founded_year' => '1909-07-15'
            ],
            [
                'b_name' => 'BMW',
                'b_location' => 'Europe',
                'founded_year' => '1916-03-07'
            ],
            [
                'b_name' => 'Mercedes-Benz',
                'b_location' => 'Europe',
                'founded_year' => '1926-06-28'
            ],
            [
                'b_name' => 'Prosche',
                'b_location' => 'Europe',
                'founded_year' => '1951-01-30'
            ],
            [
                'b_name' => 'Volkswagen',
                'b_location' => 'Europe',
                'founded_year' => '1937-05-28'
            ],
            [
                'b_name' => 'Alfa Romeo',
                'b_location' => 'Europe',
                'founded_year' => '1910-06-24'
            ],
            [
                'b_name' => 'Ferrari',
                'b_location' => 'Europe',
                'founded_year' => '1898-02-18'
            ],
            [
                'b_name' => 'Fiat',
                'b_location' => 'Europe',
                'founded_year' => '1899-07-11'
            ],
            [
                'b_name' => 'Lamborghini',
                'b_location' => 'Europe',
                'founded_year' => '1916-04-28'
            ],
            [
                'b_name' => 'Maserati',
                'b_location' => 'Europe',
                'founded_year' => '1914-12-1'
            ],
            [
                'b_name' => 'Aston Martin',
                'b_location' => 'Europe',
                'founded_year' => '1913-01-15'
            ],
            [
                'b_name' => 'Bentley',
                'b_location' => 'Europe',
                'founded_year' => '1919-01-18'
            ],
            [
                'b_name' => 'Jaguar',
                'b_location' => 'Europe',
                'founded_year' => '2008-01-18'
            ],
            [
                'b_name' => 'Lotus',
                'b_location' => 'Europe',
                'founded_year' => '1948-01-01'
            ],
            [
                'b_name' => 'Mclaren',
                'b_location' => 'Europe',
                'founded_year' => '1985-12-02'
            ],
            [
                'b_name' => 'Chevrolet',
                'b_location' => 'USA',
                'founded_year' => '1911-11-03'
            ],
            [
                'b_name' => 'Ford',
                'b_location' => 'USA',
                'founded_year' => '1903-06-16'
            ],
            [
                'b_name' => 'Jeep',
                'b_location' => 'USA',
                'founded_year' => '1987-01-01'
            ],
            [
                'b_name' => 'Tesla',
                'b_location' => 'USA',
                'founded_year' => '2003-07-01'
            ],
            [
                'b_name' => 'Cadillac',
                'b_location' => 'USA',
                'founded_year' => '1902-08-22'
            ],
            [
                'b_name' => 'Dodge',
                'b_location' => 'USA',
                'founded_year' => '1900-12-14'
            ],
            [
                'b_name' => 'Toyota',
                'b_location' => 'Japan',
                'founded_year' => '1937-08-28'
            ],
            [
                'b_name' => 'Honda',
                'b_location' => 'Japan',
                'founded_year' => '1959-01-01'
            ],
            [
                'b_name' => 'Nissan',
                'b_location' => 'Japan',
                'founded_year' => '1933-12-26'
            ],
            [
                'b_name' => 'Mazda',
                'b_location' => 'Japan',
                'founded_year' => '1920-01-30'
            ],
            [
                'b_name' => 'Suzuki',
                'b_location' => 'Japan',
                'founded_year' => '1909-10-01'
            ],
            [
                'b_name' => 'Isuzu',
                'b_location' => 'Japan',
                'founded_year' => '1934-03-30'
            ],
            [
                'b_name' => 'Mitsubishi',
                'b_location' => 'Japan',
                'founded_year' => '1870-01-01'
            ],
            [
                'b_name' => 'Subaru',
                'b_location' => 'Japan',
                'founded_year' => '1953-07-15'
            ],
        ]);

    }
}
