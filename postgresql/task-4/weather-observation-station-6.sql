SELECT
    DISTINCT city
FROM
    station
where
    LEFT(LOWER(city), 1) in ('a', 'e', 'i', 'o', 'u');