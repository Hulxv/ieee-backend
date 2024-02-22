SELECT
	CAST(LAT_N AS DECIMAL (7, 4))
FROM
	(
		SELECT
			LAT_N,
			ROW_NUMBER() OVER (
				ORDER BY
					LAT_N
			) as row_n
		FROM
			station
	) AS X
WHERE
	row_n = (
		SELECT
			ROUND((COUNT(LAT_N) + 1) / 2, 0)
		FROM
			STATION
	);