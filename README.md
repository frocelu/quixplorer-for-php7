# QuiXplorer for php7
This fork is just because I use quixplorer for my work.

For secure reason, I must update quixplorer from php 5 to 7.

This fork will **not** get any functional update. Just fix bugs all I can.

Thanks to original author and all contributors!

## News

### Version 2.5.8 for php 7 released

1. fix php 7 support(test on nginx php7.3-fpm).
2. fix IE 10+ user agent string detecting.
3. fix OWASP [HttpOnly](https://owasp.org/index.php/HttpOnly) secure problem.
4. set download filename encoding to UTF-8.
5. add zh-Hant translation.


-----


## Web based file management

quixplorer is a simple web based file management software. It allows you to:

- upload and download files to your web server using a web interface
- define multible users with different acces permissions (read,write,...)

## News

### Version 2.5.8 released

This version fixes some encoding issues with different language files and the
mim-type bug. Thanks to all contributors!

### Version 2.5.7 released

This version fixes a bug that disabled the "password change" function and a bug
which evaluated the wrong directory variable when checking wether a download
is allowed.

Furthermore, all language files have been converted to utf-8.

### Version 2.5.6 released

After releasing version 2.5.5 fixing a vulnerability issue (thanks to
trustwave.com for finding it), i still found to bugs regarding the
logon procedure and listing symbilic links which have been fixed in this 2.5.6
version.

As long as you don't complain, i would consider this version as
quite "stable".

Thanks again to all contributors.

### Testing extended

Because of testing makes that much fun, we finally improved our tests,
found and fixed some minor bugs and added some tests for the
[login procedure](test/features/system/004-login2.feature) and the
[list procedure](test/features/system/005-list.feature).

### About radish BDD testing

With version 2.5.5 we included some automated testing
using the BDD test tool [radish](https://github.com/timofurrer/radish/).

Currently we only have some automated tests for the 'download multiple files' feature.

For more detailed information, see [doc/testing.md](doc/testing.md).

### Version 2.5.5 released

A vulnerability issue with quixplorer motivated my to make
another official release of 'quixplorer' with a bugfix.

This release contains some other improvements and bugfixes found
by some people out there. Thanks for that.

Checkout the version from: https://github.com/realtimeprojects/quixplorer/tree/v2.5.5

### Version 2.5.4 released

This version contains several bugfixes introduced by previous versions,
thanks to all the people assisted in debugging.

Checkout the version from: https://github.com/realtimeprojects/quixplorer/tree/v2.5.4

## Older news :-)

Take a look at the project's wiki for the [older news](https://github.com/realtimeprojects/quixplorer/wiki/News "quixplorer news").
