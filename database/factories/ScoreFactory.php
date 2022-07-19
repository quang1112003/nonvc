<?php

namespace Database\Factories;

use App\Models\Student;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $subject = Subject::all()->pluck("sbid")->toArray();
        $student = Student::all()->pluck("sid")->toArray();
        return [
            'scid' =>$this->faker->randomNumber(),
            'mark'=>$this->faker->randomDigit,
            'result'=>$this->faker->state,
            'sid'=>$this->faker->randomElement($student),
            'sbid'=>$this->faker->randomElement($subject),
        ];
    }
}
