<?php

/**

Write an SQL query to report the customer_id and customer_name of customers who bought products "A", "B" but did not buy the product "C" since we want to recommend them buy this product.

Only the customer_id with id 3 bought the product A and B but not the product C.


Result table:
+-------------+---------------+
| customer_id | customer_name |
+-------------+---------------+
| 3           | Elizabeth     |
+-------------+---------------+
Only the customer_id with id 3 bought the product A and B but not the product C.

*/


$sql = "SELECT 
    Customers.*
FROM
    Customers
WHERE
    Customers.customer_id IN (SELECT 
            Orders.customer_id
        FROM
            Orders
        WHERE
            Orders.product_name = 'A'
        GROUP BY Orders.customer_id)
        AND Customers.customer_id IN (SELECT 
            Orders.customer_id
        FROM
            Orders
        WHERE
            Orders.product_name = 'B'
        GROUP BY Orders.customer_id)
        AND Customers.customer_id NOT IN (SELECT 
            Orders.customer_id
        FROM
            Orders
        WHERE
            Orders.product_name = 'C'
        GROUP BY Orders.customer_id)
ORDER BY Customers.customer_id";

echo $sql;
