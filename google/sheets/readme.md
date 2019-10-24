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
The $ keeps the reference value (B2) locked, rather than looking to C2 for the next cell, for example.
The (?i) is a regex shorthand for case insensitive

## sort IPs by adding zeros

The following formula adds zeros so that every decimal separates three values, (e.g. 25.25.16.1 becomes 025.025.016.001)
```
=TEXT(LEFT(A1,FIND(".",A1,1)-1),"000") & "." & TEXT(MID(A1,FIND( ".",A1,1)+1,FIND(".",A1,FIND(".",A1,1)+1)-FIND(".",A1,1)-1),"000") & "." & TEXT(MID(A1,FIND(".",A1,FIND(".",A1,1)+1)+1,FIND(".",A1, FIND(".",A1,FIND(".",A1,1)+1)+1)-FIND(".",A1,FIND(".",A1,1)+1)-1), "000") & "." & TEXT(RIGHT(A1,LEN(A1)-FIND(".",A1,FIND(".",A1,FIND( ".",A1,1)+1)+1)),"000")
```
Then you are free to sort alphabetically, which sorts the IPs numerically
