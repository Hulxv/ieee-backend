SELECT
    city,
    LENGTH(city)
from
    station
ORDER BY
    LENGTH(city),
    city
LIMIT
    1;

SELECT
    city,
    LENGTH(city)
from
    station
ORDER BY
    LENGTH(city) DESC,
    city
LIMIT
    1;