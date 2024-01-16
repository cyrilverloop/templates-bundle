# Layout

This template extends [`@CVTemplatesBundle/base.html.twig`](./base.md).


## How to extend ?

```twig
{% extends "@CVTemplatesBundle/layout.html.twig" %}

{# Your code here #}
```

See also [Usage](../README.md#Usage) for the Symfony configuration.


## Blocks

- **favicon** : ` <link rel="icon" type="image/png" href="{{ asset(faviconHref) }}" sizes="{{ faviconSizes }}" />`;
- **body** : has a `<header>`, `<main>` and `<footer>`.
Inside each tag, there is a corresponding `{% block %}` with the same name;
- **header** : includes the `header.html.twig` template of your project if it exists;
- **main** : is inside a `<main>` and is empty;
- **footer** : includes the `footer.html.twig` template of your project if it exists.


## Variables

- **translationContext** : the translation context used on `pageHeadTitle` and `metaDescription` variables.

Those variables set some default values for the parent template (see [base template](./base.md)) :
- **charset** : the value of the `charset` attribute for the parent `<meta />`,
defaults to `UTF-8`;
- **viewport** : the value of the `content` attribute for the parent `<meta />`,
defaults to `width=device-width, initial-scale=1, shrink-to-fit=no`;
- **baseUrl** : the value of the `href` attribute for the parent `<base />`,
defaults to `app.request.schemeAndHttpHost ~ app.request.baseUrl ~ '/'`;
- **faviconHref** : the value of the `href` attribute for the favicon, defaults to `app/images/favicon.png`;
- **faviconSizes** : the value of the `sizes` attribute for the favicon, defaults to `32x32`;
- **metaDescription** : the value of the `content` attribute for the parent `<meta />`.
If you want a meta description, define this or it will default to `metaDescription`.
Then, it will be translated with the defined `translationContext`.
If you do not want to render a meta description, set this either to `false`, `null` or an empty string (`''` or `""`);
- **canonical** : adds `app.request.schemeAndHttpHost` before a previously defined `canonical`.
If you do not define a `canonical` variable, no `<link />` will be rendered.

### `<title>`

The following variables are used to construct the `<title>` of your page.
You can either have `Page name - Website name` using the three variables
`pageHeadTitle ~ headTitleSeparationChars ~ headTitleSiteName`
or just have `Page name` using only `pageHeadTitle`.

- **pageHeadTitle** : the title of the page,
defaults to the translation of `pageHeadTitle` of the defined `translationContext`;
- **headTitleSeparationChars** : a string used to separate the title of your page from the name of your website,
defaults to ` - `;
- **headTitleSiteName** : the name of your website;
- **htmlHeadTitle** : the content of the `<title>` in the `<head>`.
