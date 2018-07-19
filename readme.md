# GitHub Gist Embeds
This addon allows you to embed GitHub Gists into your Statamic site.

## Installing
1. Copy files to `addons` folder.
2. Installation Complete 👍

## Usage
You can embed a Gist into your content using the `gist` tag.
### Displaying all files
To embed all files from a Gist, use the following:
```
{{ gist:123456789 }}

{{# Or be explicit: #}}

{{ gist id="123456789" }}
```
## Display one file from Gist
To embed only one file from a Gist, use the following:
```
{{ gist id="123456789" file="index.html" }}
```
