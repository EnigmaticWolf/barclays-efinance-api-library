Barclays eFinance API Library
=============================

A PHP library for interacting with the Barclays Bank eFinance API, for submitting new finance proposals to their online system (and receiving updates to proposals). The eFinance system is part of the Barclays Partner Finance package, and you can get more information from their website: http://www.barclayspartnerfinance.com/business/retail/service.html

The package is written in PHP and uses SOAP to send data to the API. All you need to do is construct simple arrays which are passed to the library and you're done.

```php
<?
$bef = new bef_proposalEnquiry();

$bef->add_data('ClientReference', 'A4');
$bef->add_data('ProposalID', 8323);

$bef->call();
?>
```

## License

Copyright (c) 2012 Ben Griffiths (http://www.appliedorder.com)

Licensed under the MIT License (http://www.opensource.org/licenses/mit-license.php)
