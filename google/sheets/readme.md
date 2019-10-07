## Array formula

The following formula takes every cell between A1 and A332 and wraps each in quotes:

```
=ArrayFormula(""""&Sheet1!A1:A332&"""")
```

## Conditional Formatting

Change color of a row if a cell matches a certain value:
 - Highlight a row and click conditional formatting
 - Select custom formula is and enter
    ```
    =RegExMatch($B2,"(?i)Missing")
    ```
The $ keeps the reference value (B2) locked, rather than looking to E2 for the next cell, for example.
The (?i) is a regex shorthand for case insensitive
