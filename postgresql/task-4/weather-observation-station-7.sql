SELECT
    DISTINCT city
FROM
    station
where
    RIGHT(LOWER(city), 1) in ('a', 'e', 'i', 'o', 'u');