### What's this?
This repository contains a sample setup of some of our applications.
Via SOAP we connect to different interfaces, here in the example I chose DHL.
Recently we have been using `divineomega/password_exposed`, whose dependency on `nyholm/psr7` in connection with `Psr7RequestBuilder` and `StreamFactory` now leads to an error.

More details in the next step


### The happy path
- checkout this reporsitory
- run `composer install`
- execute `php example.php` in command line
- you will see `works like expected!` in console

### To produce the error
- execute `composer require divineomega/password_exposed`
- `nyholm/psr7` will be installed
- execute `php example.php` in command line
- you will receive following error
```
PHP Fatal error:  Uncaught ValueError: DOMDocument::loadXML(): Argument #1 ($source) must not be empty in C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\phpro\soap-clie
nt\src\Phpro\SoapClient\Xml\Xml.php:93
Stack trace:
#0 C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\phpro\soap-client\src\Phpro\SoapClient\Xml\Xml.php(93): DOMDocument->loadXML()
#1 C:\dvl\DefaultWorkspace\soap-error-streamfactory\soap\DemoMiddleware.php(27): Phpro\SoapClient\Xml\Xml::fromStream()
#2 C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\phpro\soap-client\src\Phpro\SoapClient\Middleware\Middleware.php(25): dhl\DemoMiddleware->beforeRequest()
#3 C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\php-http\client-common\src\PluginChain.php(48): Phpro\SoapClient\Middleware\Middleware->handleRequest()
#4 C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\php-http\client-common\src\PluginChain.php(63): Http\Client\Common\PluginChain->Http\Client\Common\{closure}()#5 C:\dv
l\DefaultWorkspace\soap-error-streamfactory\vendor\php-http\client-common\src\PluginClient.php(90): Http\Client\Common\PluginChain->__invoke()
#6 C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\phpro\soap-client\src\Phpro\SoapClient\Soap\Handler\HttPlugHandle.php(85): Http\Client\Common\PluginClient->sendReques
t()
#7 C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\phpro\soap-client\src\Phpro\SoapClient\Soap\Engine\Engine.php(39): Phpro\SoapClient\Soap\Handler\HttPlugHandle->reques
t()
#8 C:\dvl\DefaultWorkspace\soap-error-streamfactory\vendor\phpro\soap-client\src\Phpro\SoapClient\Client.php(107): Phpro\SoapClient\Soap\Engine\Engine->request()
#9 C:\dvl\DefaultWorkspace\soap-error-streamfactory\soap\exampleClient.php(20): Phpro\SoapClient\Client->call()
#10 C:\dvl\DefaultWorkspace\soap-error-streamfactory\example.php(90): dhl\exampleClient->createShipmentOrder()
#11 {main}
```

#### More details
Like a wild boar in the forest, we tried various debug outputs in the working setup and in the faulty setup and came to the following result:

Once `nyholm/psr7` was installed, `Phpro\SoapClient\Soap\HttpBinding\Builder\Psr7RequestBuilder` is used with `Nyholm\Psr7\Factory\HttplugFactory` as `streamFactory`.
Without `nyholm/psr7`, `Http\Message\StreamFactory\GuzzleStreamFactory is used.

And that's the point where we don't know what to do.
The question is: why does `$stream->getContents()` no longer return a result?

### Infos for example.php
`works like expected!` in case of exception message `'looks like we got no XML document'` is correct - that's because I provide no DHL API account credentials. This is the result of the `401 Forbidden`.

### Expected behavior
Also with `nyholm/psr7` we would like to see `works like expected!`.