# VyaPay SDK / Library v2.0.1


This is an SDK / Library to access and use the [VyaPay](https://www.vyapay.com) Financial Switch.

See LICENSE file for details on using this software.

## Installation

##### Manual

```php
require_once('VyaPay/vyaPayments');
```

#### API Payments Reference

[VyaPay API Payments Reference](https://www.vyapay.com/docs/Vyapay Gateway API v1.0.31.pdf)

#### Example
The example requires editing to support PHP 5.3.

#### Configuration

You have to add a require for each class (module - see below) that's going to be used.

1) Configure the Library
> cd into VyaPay/utils

2) Edit the config file:
> sudo vi config.php

3) Edit the following lines in the config file:

```php
	define("GW_API_KEY", '<Assigned GWTOKEN>');
	define("GW_MID_KEY", '<Assigned MID>');
	define("GW_APP_ID", '<Assigned APP ID>');
```

You will receive your GWToken and MID from VyaPay.

#### Usage

In order to instantiate a new instance of the library, use the factory:
 
```php
 use vyaPayments;
 
 $vyaP = new vyaPayments();

 $vyaP->setAmount('1.00');
 $vyaP->setFirstName('John');
 $vyaP->setLastName('Smith');
 $vyaP->setEmail('john@yahoo.com');
 $vyaP->setCardFullName('John Smith');
 $vyaP->setCreditCard('5544044490909090');
 $vyaP->setCVV('123');
 $vyaP->setMonth('11');
 $vyaP->setYear('18');
 $vyaP->setOrderID("282480");
 ...

 $response = $vyaP->processSale();
```

You can find all of the sets, gets and functions for the Library inside the SDK/Library by using the following:

```php
	print_r(get_class_methods('vyaPayments'));
```

The Library supports multiple class/modules that will expose alternate functionality (additional functionality will be released in subsequent versions):

vyaCustomerVault

vyaUtilties

```php
require_once('VyaPay/vyaCustomerVault');

use vyaCustomerVault;

$vyaCV = new vyaCustomerVault();

//set parameters
$vyaCV->setCID('2'); //set customer ID
...
$response = $vyaCV->customerGet();
```

Alternatively, if you want to use the Utilities class/module:

```php
require_once('VyaPay/vyaUtilities');

use vyaUtilities;

$vyaU = new vyaUtilities();

//set parameters
$vyaU->setAcctNumber('5544044490909090');
...
$response = $vyaU->validateCC();
```

You can parse the response JSON or get the response values utilizing the following:

```php
...
$response = $vyaP->processSale();
if(getStatus($response) == 'approved')
	// process approved trxn
	$authCode = getAuthCode($response);
else
	// process decline or handle error
	...
```

### Requirements

PHP 5.3+