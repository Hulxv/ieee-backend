SELECT
    x,
    y
FROM
    FUNCTIONS f1
WHERE
    EXISTS(
        SELECT
            *
        FROM
            FUNCTIONS f2
        WHERE
            f2.Y = f1.x
            AND f2.x = f1.y
            AND f2.x > f1.x
    )
    AND (X != Y)
UNION
SELECT
    x,
    y
FROM
    FUNCTIONS f1
WHERE
    x = y
    AND (
        (
            SELECT
                COUNT(*)
            FROM
                FUNCTIONS
            WHERE
                X = f1.x
                AND Y = f1.x
        ) > 1
    )
ORDER BY
    x;