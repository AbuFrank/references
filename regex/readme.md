## Helpful Links 

Online Interactive Tutorial: [regexr.com](https://regexr.com/)  
[Adam's Markdown Cheatsheet](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)  
Writing on Github: [github reference](https://help.github.com/en/categories/writing-on-github)

## Cheatsheet

Character classes

code | description
--- | ---
`.` | any character except newline
`\w\d\s` | word, digit, whitespace
`\W\D\S` | not word, digit, whitespace
`[abc]` | any of a, b, or c
`[^abc]` | not a, b, or c
`[a-g]` | character between a & g
**Anchors**
`^abc$` | start / end of the string
`\b\B` | word, not-word boundary
**Escaped characters**
`\.\*\\` | escaped special characters
`\t\n\r` | tab, linefeed, carriage return
**Groups & Lookaround**
`(abc)` | capture group
`\1` | backreference to group #1
`(?:abc)` | non-capturing group
`(?=abc)` | positive lookahead
`(?!abc)` | negative lookahead
**Quantifiers & Alternation**
`a*a+a?` | 0 or more, 1 or more, 0 or 1
`a{5}a{2,}` | exactly five, two or more
`a{1,3}` | between one & three
`a+?a{2,}?` | match as few as possible
`ab|cd` | match ab or cd


## Replace with found

First of string `^` find any number of not space characters `\S*` followed by a single space character `\s`. The parentheses are there for grouping and can be called using `\1`, or whichever group number you wish to use. In this example we are replacing the space character with a tilda.

Find What: `^(\S*)(\s)`

Replace With: `\1~`

