[csv parsing tutorial](https://www.baeldung.com/linux/csv-parsing)

### Loop through lines of a file

```bash
#!/bin/bash
while read line
do
   echo "Line is : $line"
done < data.csv
```

### Loop through lines of file starting from the 2nd row

```bash
#! /bin/bash
while IFS="," read -r col1 col2 col3 col4
do
  echo "Name: $col1"
  echo "Content: $col2"
  echo "Taxonomies: $col3"
  echo "Platform: $col4"
  echo ""

done < <(tail -n +2 data.csv)
```
