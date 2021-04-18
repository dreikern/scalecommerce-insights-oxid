# dreikern/scalecommerce-insights

This module provides:
- request meta data collected by ScaleCommerce

## Usage

This assumes you have an officially supported OXID eShop compilation 

### Install

```bash
$ composer require dreikern/scalecommerce-insights
```

After requiring the module, you need to activate it, either via OXID eShop admin or CLI.

```bash
$ ./bin/oe-console oe:module:activate dreikern_scalecommerce_insights
```

### How to use

After enabling the module, every request served by OXID eShop is enhanced with the following headers:
```
x-sc-app-product: OXID eShop
x-sc-app-edition: CE
x-sc-app-version: 6.2.3
x-sc-controller: alist
x-sc-memory-peak-usage: 2097152
```

Make sure to remove these headers in your loadbalancer solution, so you don't expose them to the public.

## License

GPLv3, see [LICENSE file](LICENSE).
