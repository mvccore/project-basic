# MvcCore - Project - Basic

[![Latest Stable Version](https://img.shields.io/badge/Stable-v3.1.6-brightgreen.svg?style=plastic)](https://github.com/mvccore/project-basic/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://github.com/mvccore/project-basic/blob/master/LICENCE.md)
![PHP Version](https://img.shields.io/badge/PHP->=5.3-brightgreen.svg?style=plastic)

- [**MvcCore**](https://github.com/mvccore/mvccore) basic website project, recomanded to pack with [**Packager**](https://github.com/mvccore/packager) only to some mixed mode with hard drive, because all assets are not linked with [**MvcCore Extension - View Helper Assets**](https://github.com/mvccore/ext-viewhelp-assets).
- Project lists only homepage template content and **it tries to list tables** from MySQL `cdcol` database, with root/1234 credentials by config.ini if possible.

## Instalation
```shell
# load project into 'development' directory, if directory doesn't exists, create it
composer create-project mvccore/project-basic development
```
