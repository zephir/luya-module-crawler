<?php

namespace luya\crawler\tests;

use luya\testsuite\cases\WebApplicationTestCase;

/**
 * Crawler TestCase
 * @author Basil Suter <basil@nadar.io>
 */
class CrawlerTestCase extends WebApplicationTestCase
{
    use TableSetupTrait;

    public function getConfigArray()
    {
        return [
           'id' => 'mytestapp',
           'basePath' => dirname(__DIR__),
            'components' => [
                'db' => [
                    'class' => 'yii\db\Connection',
                    'dsn' => 'sqlite::memory:',
                    'charset' => 'utf8',
                ],
                'request' => [
                    'forceWebRequest' => true,
                ],
            ],
            'modules' => [
                'crawleradmin' => 'luya\crawler\admin\Module',
            ]
        ];
    }
}
