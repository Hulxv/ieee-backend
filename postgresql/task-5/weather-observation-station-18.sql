SELECT
  ROUND(
    SQRT(
      POWER(MAX(LAT_N) - MIN(LAT_N), 2) + POWER(MAX(long_w) - MIN(long_w), 2)
    ),
    4
  )
FROM
  station;