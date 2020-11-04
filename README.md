# Payments
Payments is an application that provides communications and exchanges information with gateway payment providers on behalf of Distribution Plus.

## Which Payment Gateways do we support?
Gateway can be selected in PaymentsConfig
* Authorize.Net
* Paytrace
* Stripe

| Gateway  | Allows Track Data  |
|---|---|
| Authorize.Net  | Yes  |
| Paytrace       | Yes  |
| Stripe         | No   |

### Which Transaction Types do we support?
* Charge
* Authorize Card
* Capture Prior Authorized Card
* Refund


### Gateway Credentials
Credentials are stored in site/modules/Payments/credentials.json <br>
Example:
```
{
	"0": {
		"type": "paytrace",
		"login": "xxxx",
		"key":   "xxxx",
		"sandbox": true,
		"saltcolumn": "date",
		"integratorid": "xxx"
	},
	"1": {
		"type": "authorizenet",
		"login": "xxxx",
		"key":   "xxxx",
		"sandbox": true,
		"saltcolumn": "time"
		"integratorid": ''
	}
}
```
Copyright 2020 by CPTech Inc.
