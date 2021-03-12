<?php
/**

Write a SQL query to find all duplicate emails in a table named `Person`.

```
+----+---------+
| Id | Email   |
+----+---------+
| 1  | a@b.com |
| 2  | c@d.com |
| 3  | a@b.com |
+----+---------+
```

For example, your query should return the following for the above table:
```
+---------+
| Email   |
+---------+
| a@b.com |
+---------+


**/

// answer
$sql = "SELECT 
    daily.Person.Email
FROM
    daily.Person
GROUP BY daily.Person.Email
HAVING COUNT(daily.Person.Email) > 1;";

echo $sql;