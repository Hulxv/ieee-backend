Select
    students.NAME
FROM
    students
    JOIN friends f ON students.id = F.ID
    JOIN packages p1 ON students.id = p1.id
    JOIN packages p2 ON f.friend_id = p2.id
WHERE
    p2.salary > p1.salary
ORDER BY
    p2.salary;