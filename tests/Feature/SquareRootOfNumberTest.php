<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SquareRootOfNumberTest extends TestCase
{
    use RefreshDatabase;
     /**
     * A basic test example.
     *
     * @return void
     */
    protected string $path = "/api/get-square-root/{squareNo}";

    protected array $payload = [];

    protected string $number = "22";

    protected float $numberSquareRoot = 0;

    public function test_when_api_returns_200_response()
    {
        $this->number = "22";
        $this->path = "/api/get-square-root/".$this->number;
        $response = $this->get($this->path);
        $response->assertStatus(status:200);
        $this->numberSquareRoot = sqrt($this->number);
        $response->assertStatus(200)
        ->assertJson(function (AssertableJson $assertableJson) {
            $assertableJson
                ->where("result.squareRoot", $this->numberSquareRoot )
                ->etc();
        });
    }

    public function test_when_api_returns_422_response()
    {
        $this->number = "abcde";
        $this->path = "/api/get-square-root/".$this->number;

        $response = $this->get($this->path);
        $response->assertStatus(status:302);
    }
   
}
