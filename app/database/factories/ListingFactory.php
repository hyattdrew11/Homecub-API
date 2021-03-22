<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $agentArr = array(
            array(
                "name"  => $this->faker->name(),
                "phone" => $this->faker->phoneNumber(),
                "email" => $this->faker->unique()->safeEmail,
            )
        );
        return [
            'title'         => $this->faker->streetAddress(),
            'address'       => $this->faker->streetAddress(),
            'city'          => $this->faker->city(),
            'state'         => $this->faker->state(),
            'zip'           => intval($this->faker->postcode()),
            'price'         => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 100000),
            'bed'           => $this->faker->randomDigit(),
            'bath'          => $this->faker->randomDigit(),
            'pool'          => False,
            'active'        => True,
            'squarefeet'    => $this->faker->randomNumber(),
            'date_listed'   => $this->faker->date(),
            'agents'        => json_encode($agentArr),
            'latitude'      => $this->faker->latitude(),
            'longitude'     => $this->faker->longitude(),
            'views'         => $this->faker->randomDigit(),
            'saves'         => $this->faker->randomDigit(),
            'yearbuilt'     => intval($this->faker->year($max = 'now')),
            'heating'       => "Central",
            'cooling'       => "Central" ,
            'parking'       => "Garage",
            'applicances'   => "Included" ,
            'hoa'           => $this->faker->numberBetween($min = 100, $max = 1000),
            'lot'           => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 100000),
        ];
    }
}
