## Installation

1. Install from Composer `composer require doublethreedigital/github-gists`
2. Start using tags in your views.

## Usage
You can embed a Gist by using the `{{ gist }}` tag in your templates.

### Displaying a single file
You can display a singe file from a Gist using the below tag.

```
{{ gist id="123456789" file="index.html" }}
```

### Displaying all files
You can display all files from a Gist using either of the below tags:

```
{{ gist:123456789 }}

{{ gist id="123456789" }}
```
