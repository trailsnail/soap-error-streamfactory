<?php
namespace dhl;

use Http\Promise\Promise;
use Phpro\SoapClient\Middleware\Middleware;
use Phpro\SoapClient\Xml\SoapXml;
use Psr\Http\Message\RequestInterface;

/**
 * Middleware which adjusts the host soap request for the specific needs of the DHL soap service.
 */
final class DemoMiddleware extends Middleware
{
    public function getName(): string
    {
        return 'dhl_middleware';
    }

    public function beforeRequest(callable $handler, RequestInterface $request): Promise
    {
        // override the soap-endpoint defined within the wsdl with the one we actually want to connect
        $uri = $request->getUri()->withHost('cig.dhl.de')->withPath('/services/sandbox/soap');
        $request = $request->withUri($uri);

        // Ugly hack for adding SOAP Header "Authentification" required by DHL
        $xml = SoapXml::fromStream($request->getBody());
        $xmlString = str_replace('<SOAP-ENV:Body>', '<SOAP-ENV:Header><ns1:Authentification><ns1:user>2222222222_01</ns1:user><ns1:signature>pass</ns1:signature></ns1:Authentification></SOAP-ENV:Header><SOAP-ENV:Body>', $xml->toString());
        $xml = SoapXml::fromString($xmlString);

        $request = $request->withBody($xml->toStream());

        return $handler($request);
    }

}
