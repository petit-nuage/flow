#!/usr/bin/env python
# -*- coding: utf-8 -*-


import json
import re


def slugify(word):
    """
    Slugify string
    """

    return word.replace("/", "_")


def load_configuration(file_resource):
    # Regular expression for comments
    comment_re = re.compile('(^)?[^\S\n]*/(?:\*(.*?)\*/[^\S\n]*|/[^\n]*)($)?', re.DOTALL | re.MULTILINE)

    content = ''.join(file_resource.readlines())

    ## Looking for comments
    match = comment_re.search(content)

    while match:
        # single line comment
        content = content[:match.start()] + content[match.end():]
        match = comment_re.search(content)

        # Return json file
    return json.loads(content)
