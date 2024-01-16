# templates-bundle

Templates for Symfony 7+.

[![License](https://img.shields.io/github/license/cyrilverloop/templates-bundle)](https://github.com/cyrilverloop/templates-bundle/blob/trunk/LICENSE)


## Installation

### As a Composer depedency

In your project directory run
```shellsession
user@host project$ composer require "cyril-verloop/templates-bundle"
```

### For development purposes

```shellsession
user@host ~$ cd [PATH_WHERE_TO_PUT_THE_PROJECT] # E.g. ~/projects/
user@host projects$ git clone https://github.com/cyrilverloop/templates-bundle.git
user@host projects$ cd templates-bundle
```


## Usage

With Symfony Flex, you do not need to add the configuration.
Without Symfony Flex, the templates needs to be referenced in the `config/packages/twig.yaml` file :

```yaml
twig:
    paths:
        '%kernel.project_dir%/vendor/cyril-verloop/templates-bundle/templates': CVTemplatesBundle
```
You can also look at the `config/packages/twig.yaml` file of this project.

Then, you can inherit the templates :

```twig
{% extends "@CVTemplatesBundle/base.html.twig" %}
{# or #}
{% extends "@CVTemplatesBundle/layout.html.twig" %}

{# Your code here #}
```


## Detailed documentation

You can find detailed informations in the [documentation](docs/index.md).
