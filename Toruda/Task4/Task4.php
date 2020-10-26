SELECT
    table_name.name,
    Price.Price2
FROM table_name
        JOIN Price
            on table_name.id = Price.id
WHERE Price.Price2 >= 2000
