<?php
/**
 * Generates the easter egg comment in the HTML
 * This view should be added in every page of the website
 *
 * @author Antoine du HAMEL
 */

namespace aduh95\Resume;

use DOMComment;

const MESSAGE = <<<'TXT'

You're looking under the hood?

I hope what you are looking pleases you; it has been generated by the
PHP library I've made `aduh95/HTMLGenerator` and written by me. If you are
interested in how I achieve this, you can find a more human readable version
on the [git repository](https://github.com/aduh95/aduh95.github.io).

TXT;

const MESSAGE_ONE_FILE = <<<'TXT'

N.B.: You are currently looking at the standalone version.

TXT;
// '



return function ($doc, $outputOneFile) {
    $doc->getHead()->append(
        new DOMComment(MESSAGE.($outputOneFile ? MESSAGE_ONE_FILE : null)
    ));
};
