<?php declare(strict_types=1);

namespace Tune\Tests;

use Tune\Networks;
use Tune\NetworkApi;
use Tune\AffiliateApi;
use Tune\AdvertiserApi;
use Tune\Utils\Operator;
use ReflectionException;
use Tune\Utils\Network;
use Tune\Utils\HttpQueryBuilder;

class TuneApiTest extends TestCase
{

    /**
     * @test
     * @throws ReflectionException
     */
    public function testNetworkApi(): void
    {
        $this->callClassesMethods(NetworkApi::class, 'Network');
    }

    /**
     * @test
     * @throws ReflectionException
     */
    public function testAffiliateApi(): void
    {
        $this->callClassesMethods(AffiliateApi::class, 'Affiliate');
    }

    /**
     * @test
     * @throws ReflectionException
     */
    public function testAdvertiserApi(): void
    {
        $this->callClassesMethods(AdvertiserApi::class, 'Advertiser');
    }

    /**
     * @test
     */
    public function testTuneNetworks(): void
    {
        $networks = new Networks([
            new Network('api_key', 'network_1'),
            new Network('api_key', 'network_2')
        ]);
        $affiliate = new AffiliateApi($networks);

        $this->assertSame(2, count($networks->getNetworks()));
        $this->assertNotNull($networks->getCurrentNetwork());
        $this->assertSame('network_1', $networks->getCurrentNetwork()->name());
        $this->assertSame('api_key', $networks->getCurrentNetwork()->apiKey());

        $this->assertSame(2, count($affiliate->networks->getNetworks()));
        $this->assertNotNull($affiliate->networks->getCurrentNetwork());
        $this->assertSame('network_1', $affiliate->networks->getCurrentNetwork()->name());
        $this->assertSame('api_key', $affiliate->networks->getCurrentNetwork()->apiKey());
    }

    /**
     * @test
     */
    public function testHttpQueryBuilder(): void
    {
        $builder = HttpQueryBuilder::make();

        $builder->setPage(1);
        $builder->setLimit();

        $this->assertArrayHasKey('page', $builder->toArray());
        $this->assertArrayHasKey('limit', $builder->toArray());

        $builder->addFilter('test', 1);

        $this->assertArrayHasKey('test', $builder->toArray()['filters']);

        $builder->addFilter('filter', 1, Operator::AND);

        $this->assertArrayHasKey('filter', $builder->toArray()['filters'][Operator::AND]);

        $this->assertSame($builder->toArray()['filters'][Operator::AND]['filter'], 1);

        $builder->addData('key', 'value');

        $this->assertArrayHasKey('key', $builder->toArray()['data']);

        $builder->addSort('sort', Operator::DESC);

        $this->assertArrayHasKey('sort', $builder->toArray()['sort']);

        $builder->addField('field');

        $this->assertTrue(in_array('field', $builder->toArray()['fields']));

        $this->assertSame(http_build_query($builder->toArray()), $builder->toString());
    }

}