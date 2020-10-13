<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Repositories\ItemRepository;


class ItemTest extends TestCase
{

    public function registerTest()
    {
        $testeRepository = new ItemRepository();
        $this->assertEquals('Item Registrado com Sucesso', $testeRepository->register('mussarela','queijo e tomate'));
        $this->assertNull($testeRepository->register('mussarela','queijo e tomate'));
    }
}
