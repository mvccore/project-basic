# MvcCore - Project - Basic

[![Latest Stable Version](https://img.shields.io/badge/Stable-v5.0.0-brightgreen.svg?style=plastic)](https://github.com/mvccore/project-basic/releases)
[![License](https://img.shields.io/badge/Licence-BSD-brightgreen.svg?style=plastic)](https://mvccore.github.io/docs/mvccore/4.0.0/LICENCE.md)
![PHP Version](https://img.shields.io/badge/PHP->=5.4-brightgreen.svg?style=plastic)

- [**MvcCore**](https://github.com/mvccore/mvccore) basic website project template, not designed for full portable build/pack. 
- Project is possible to pack/build with [**Packager**](https://github.com/mvccore/packager) only into mixed modes with PHP 
  package and hard drive, because all assets are not hardly linked for single file build.
- If you want new empty project template for single file pack/build, use [`mvccore/project-portable`](https://github.com/mvccore/project-portable)
- Project lists only homepage template content and **it tries to list tables** from MySQL `cdcol` database, with `root` login and empty password credentials by `/App/config.ini` if possible.

## Instalation
```shell
# load project into './my-project' (directory is created if doesn't exist)
composer create-project mvccore/project-basic my-project
```
