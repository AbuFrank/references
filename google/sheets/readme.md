## Array formula

The following formula takes every cell between A1 and A332 and wraps each in quotes:

```
=ArrayFormula(""""&Sheet1!A1:A332&"""")
```