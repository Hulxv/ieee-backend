SELECT
    DISTINCT city
FROM
    station
WHERE
    LEFT(LOWER(city), 1) NOT IN ('a', 'e', 'i', 'o', 'u')
    OR RIGHT(LOWER(city), 1) NOT IN ('a', 'e', 'i', 'o', 'u')
ORDER BY
    city;