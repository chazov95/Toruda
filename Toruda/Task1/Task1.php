SELECT
        table1.id,
        table2.name,
        table2.val
FROM table1
         JOIN table2
              on table1.val = table2.val
WHERE table1.val between 200 and 500