[![Latest Stable Version](https://poser.okvpn.org/julio101290/boilerplatecfdidescargamasiva/v/stable)](https://packagist.org/packages/julio101290/boilerplatecfdidescargamasiva) [![Total Downloads](https://poser.okvpn.org/julio101290/boilerplatecfdidescargamasiva/downloads)](https://packagist.org/packages/julio101290/boilerplatecfdidescargamasiva) [![Latest Unstable Version](https://poser.okvpn.org/julio101290/boilerplatecfdidescargamasiva/v/unstable)](https://packagist.org/packages/julio101290/boilerplatecfdidescargamasiva) [![License](https://poser.okvpn.org/julio101290/boilerplatecfdidescargamasiva/license)](https://packagist.org/packages/julio101290/boilerplatecfdidescargamasiva)

## CodeIgniter 4 Boilerplate CFDI Bulk download
library for the Bulk download CFDI electronic invoices from SAT, alone require Cert Fiel, Key and Password .

## Requirements
* PhpCfdi\SatCatalogos
* julio101290/boilerplatelog
* hermawan/codeigniter4-datatables
* phpcfdi/cfditopdf
* phpcfdi/cfdi-to-json"
* phpcfdi/xml-cancelacion

## Installation

### Run commands
	
 	composer require phpcfdi/sat-catalogos

   	composer require hermawan/codeigniter4-datatables

    composer require julio101290/boilerplatelog

	composer require julio101290/boilerplatecompanies

  	composer require julio101290/boilerplatestorages

	composer require julio101290/boilerplatetypesmovement

	composer require julio101290/boilerplatequotes

 	composer require julio101290/boilerplatecfdidescargamasiva


### Run command for migration and seeder

	php spark boilerplatecompanies:installcompaniescrud

 	php spark boilerplatelog:installlog

  	php spark boilerplatestorages:installstorages

	php spark boilerplatetypesmovement:installtypesmovement

	php spark boilerplatequotes:installquotes

 	php spark boilerplatecfdidescargamasiva:installcfdidescargamasiva
	

# Make the Menu, Example

![image](https://github.com/user-attachments/assets/106f7134-3b94-4d2d-a8b3-065340666b19)


# Ready

![image](https://github.com/user-attachments/assets/cc2a3cf8-3b38-4ae5-86ea-06f4956a0113)



Usage
-----
You can find how it works with the read code routes, controller and views etc. Finnally... Happy Coding!

Changelog
--------
Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

Contributing
------------
Contributions are very welcome.

License
-------

This package is free software distributed under the terms of the [MIT license](LICENSE.md).
