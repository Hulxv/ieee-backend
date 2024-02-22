SELECT
    A.contest_id,
    A.hacker_id,
    A.name,
    SUM(total_submissions) AS total_submissions,
    SUM(total_accepted_submissions) AS total_accepted_submissions,
    SUM(total_views) AS total_views,
    SUM(total_unique_views) AS total_unique_views
FROM
    CONTESTS AS A
    LEFT JOIN colleges AS B ON A.contest_id = B.contest_id
    LEFT JOIN challenges AS C ON B.college_id = C.college_id
    LEFT JOIN (
        SELECT
            challenge_id,
            SUM(total_views) AS total_views,
            SUM(total_unique_views) AS total_unique_views
        FROM
            VIEW_STATS
        GROUP BY
            challenge_id
    ) AS D ON C.challenge_id = D.challenge_id
    LEFT JOIN (
        SELECT
            challenge_id,
            SUM(total_submissions) AS total_submissions,
            SUM(total_accepted_submissions) AS total_accepted_submissions
        FROM
            submission_stats
        GROUP BY
            challenge_id
    ) AS E ON C.challenge_id = E.challenge_id
GROUP BY
    A.contest_id,
    A.hacker_id,
    A.name
HAVING
    (
        total_submissions + total_accepted_submissions + total_views + total_unique_views
    ) > 0
ORDER BY
    A.CONTEST_ID;