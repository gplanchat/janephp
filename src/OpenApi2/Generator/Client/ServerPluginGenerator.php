<?php

namespace Jane\OpenApi2\Generator\Client;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Jane\OpenApi2\JsonSchema\Model\OpenApi;
use Jane\OpenApiCommon\Generator\Client\ServerPluginGenerator as BaseServerPluginGenerator;

trait ServerPluginGenerator
{
    use BaseServerPluginGenerator;

    /**
     * @param OpenApi $openApi
     */
    private function discoverServer($openApi): array
    {
        if (null !== ($host = $openApi->getHost())) {
            $scheme = 'https';
            $schemes = $openApi->getSchemes() ?? [];

            if (1 === \count($schemes)) {
                $scheme = reset($schemes);
            }

            $baseUri = $scheme . '://' . trim($host, '/');
            $plugins[] = AddHostPlugin::class;

            if (null !== ($basePath = $openApi->getBasePath())) {
                $baseUri .= '/' . trim($basePath, '/');
                $plugins[] = AddPathPlugin::class;
            }

            return [$baseUri, $plugins];
        }

        return [null, []];
    }
}