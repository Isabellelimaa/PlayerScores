<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\PlayerScore;

class GraphQLTest extends TestCase
{
    /** @test */
    public function can_get_name_from_playerScores()
    {
        PlayerScore::factory()->create(['name' => 'Oliver', 'score' => 120]);
        PlayerScore::factory()->create(['name' => 'Chris', 'score' => 366]);
        PlayerScore::factory()->create(['name' => 'Benedikt', 'score' => 278]);

        $response = $this->graphql("{playerScores{ id name score } }");

        $playerNames = $response->json("data.playerScores.*.name");
        $this->assertCount(3, $playerNames);
        $this->assertSame(
            [
                'Oliver',
                'Chris',
                'Benedikt',
            ],
            $playerNames
        );
    }

    /** @test */
    public function can_get_name_from_playerScoreOrderBy()
    {       
        $response = $this->graphql("{playerScores(orderBy: [{ column: SCORE, order: DESC }]) { id name score } }");

        $playerScores = $response->json("data.playerScores.*.score");
        $this->assertCount(3, $playerScores);
        $this->assertSame(
            [
                366,
                278,
                120,
            ],
            $playerScores
        );
    }

    /** @test */
    public function can_get_playerScores_byId()
    {
        $player = PlayerScore::factory()->create(['name' => 'Sara', 'score' => 420]);

        $response = $this->graphql("{playerScore (id: {$player->id}){ id name score }}");

        $playerName = $response->json("data.playerScore.name");
        $this->assertSame(
            $player->name,
            $playerName
        );
    }

    /** @test */
    public function can_create_playerScore()
    {
        $player = PlayerScore::factory()->create(['name' => 'Hillary', 'score' => 470]);

        $mutation = "
            mutation {
            createPlayerScore(name: \"{$player->name}\", score: {$player->score}) {
                id
                name
                score
            }
        }";
        $response = $this->graphql($mutation);
  
        $playerName = $response->json("data.createPlayerScore.name");
        $this->assertSame($player->name,$playerName);
    }

    /** @test */
    public function can_delete_playerScore()
    {
        $player = PlayerScore::factory()->create(['id' => '7', 'name' => 'Petter', 'score' => 378]);

        $mutation = "
            mutation {
                deletePlayerScore(id: {$player->id}) {
                id
                name
                score
            }
        }";
        $response = $this->graphql($mutation);
  
        $playerName = $response->json("data.deletePlayerScore.name");
        $this->assertSame($player->name,$playerName);
    }
}
